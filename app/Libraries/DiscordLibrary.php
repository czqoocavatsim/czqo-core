<?php

namespace App\Libraries;

use App\Models\Users\UserAccount;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class DiscordLibrary
{
    /** @var string */
    private $token;

    /** @var string */
    private $guild_id;

    /** @var string */
    private $base_url;

    /** @var array */
    private $headers;

    public function __construct()
    {
        $this->token = config('services.discord.token');
        $this->guild_id = config('services.discord.guild_id');
        $this->base_url = config('services.discord.base_uri');
        $this->headers = ['Authorization' => "Bot $this->token"];
    }

    public function grantRole(UserAccount $user, string $role): bool
    {
        $role_id = $this->findRole($role);

        return $this->grantRoleById($user, $role_id);
    }

    public function grantRoleById(UserAccount $user, int $role): bool
    {
        $response = Http::withHeaders($this->headers)
            ->put("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}/roles/{$role}");

        return $this->result($response);
    }

    public function removeRole(UserAccount $user, string $role): bool
    {
        $role_id = $this->findRole($role);

        return $this->removeRoleById($role_id);
    }

    public function removeRoleById(UserAccount $user, int $role): bool
    {
        $response = Http::withHeaders($this->headers)
            ->delete("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}/roles/{$role}");

        return $this->result($response);
    }

    public function setNickname(UserAccount $user, string $nickname): bool
    {
        $response = Http::withHeaders($this->headers)
            ->patch("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}",
                [
                    'nick' => $nickname,
                ]
            );

        return $this->result($response);
    }

    /**
     * @throws \Exception
     */
    public function kick(UserAccount $user): bool
    {
        $response = Http::withHeaders($this->headers)
            ->delete("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}");

        if ($response->status() == 404) {
            return true;
        }

        return $this->result($response);
    }

    public function invite(UserAccount $user): bool
    {
        $response = Http::withHeaders($this->headers)
            ->put("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}", [
                'access_token' => $user->discord_user_id,
            ]);
    }

    public function getUserRoles(UserAccount $user): \Illuminate\Support\Collection
    {
        $response = Http::withHeaders($this->headers)
            ->get("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_id}");

        if (! $response->successful()) {
            return collect([]);
        }

        return collect($response->json()['roles']);
    }

    private function findRole(string $roleName): int
    {
        $response = Http::withHeaders($this->headers)
            ->get("{$this->base_url}/guilds/{$this->guild_id}/roles")->json();

        $role_id = collect($response)
            ->where('name', $roleName)
            ->pluck('id')
            ->first();

        return (int) $role_id;
    }

    public function getUserInformation(UserAccount $user): ?object
    {
        if (! $user->discord_user_id) {
            return null;
        }

        return (object)Http::withHeaders($this->headers)
            ->get("{$this->base_url}/users/{$user->discord_user_id}")->json();
    }

    public function isMemberOfGuild(UserAccount $user): bool
    {
        if (! $user->discord_linked) {
            return false;
        }

        $response = Http::withHeaders($this->headers)
            ->get("{$this->base_url}/guilds/{$this->guild_id}/members/{$user->discord_user_id}");

        return $response->successful();
    }

    public function getUserProfileImage(UserAccount $user)
    {
        $data = $this->getUserInformation($user);
        return 'https://cdn.discordapp.com/avatars/' . $data->id . '/' . $data->avatar . '.png';
    }

    protected function result(Response $response)
    {
        if ($response->status() == 404 && $response->json()['message'] == 'Unknown Member') {
            throw new \Exception($response);
        }

        if ($response->status() > 300) {
            throw new \Exception($response);
        }

        return true;
    }
}

