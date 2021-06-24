<?php

namespace App\Models\Users;

use App\Enums\Preferences\ProfileImageTypeEnum;
use App\Libraries\DiscordLibrary;
use App\Models\News\News;
use App\Models\Roster\RosterMember;
use App\Models\Training\Application;
use App\Models\Training\Instructing\Instructors\Instructor;
use App\Models\Training\Instructing\Students\Student;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use RestCord\DiscordClient;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Throwable;

/**
 * App\Models\Users\User
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property int|null $rating_id
 * @property string|null $rating_short
 * @property string|null $rating_long
 * @property string|null $rating_GRP
 * @property string|null $reg_date
 * @property string|null $region_code
 * @property string|null $region_name
 * @property string|null $division_code
 * @property string|null $division_name
 * @property string|null $subdivision_code
 * @property string|null $subdivision_name
 * @property int $gdpr_subscribed_emails
 * @property int $deleted
 * @property int $init
 * @property string $avatar
 * @property string|null $bio
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $display_cid_only
 * @property string|null $display_fname
 * @property int $display_last_name
 * @property int|null $discord_user_id
 * @property int|null $discord_dm_channel_id
 * @property int $avatar_mode
 * @property int $used_connect
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Application[] $applications
 * @property-read int|null $applications_count
 * @property-read Instructor|null $instructorProfile
 * @property-read \Illuminate\Database\Eloquent\Collection|News[] $news
 * @property-read int|null $news_count
 * @property-read \App\Models\Users\UserNotificationPreferences|null $notificationPreferences
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Users\UserPreferences|null $preferences
 * @property-read \App\Models\Users\UserPrivacyPreferences|null $privacyPreferences
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read RosterMember|null $rosterProfile
 * @property-read \App\Models\Users\StaffMember|null $staffProfile
 * @property-read Student|null $studentProfile
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAvatarMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDiscordDmChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDiscordUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayCidOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDivisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDivisionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereGdprSubscribedEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereInit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingGRP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereSubdivisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereSubdivisionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUsedConnect($value)
 * @mixin \Eloquent
 * @property-read int $account_age
 * @property-read bool $bot
 * @property-read mixed $discord_profile_image
 * @property-read mixed $discord_user
 * @property-read string $f_name
 * @property-read string $full_name
 * @property-read string $full_name_cid
 * @property-read bool $member_of_discord_guild
 * @property-read Role $highest_role
 * @property-read object $vatsim_membership_data
 * @property-read bool $discord_linked
 * @property-read mixed $initials_profile_image
 * @property-read mixed $profile_image
 */
class UserAccount extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use LogsActivity;

    protected static $logName = 'confidential';
    protected static $logOnlyDirty = true;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'fname', 'lname', 'email', 'rating_id', 'rating_short', 'rating_long', 'rating_GRP',
        'reg_date', 'region_code', 'region_name', 'division_code', 'division_name',
        'subdivision_code', 'subdivision_name', 'permissions', 'init', 'gdpr_subscribed_emails', 'avatar', 'bio', 'display_cid_only', 'display_fname', 'display_last_name',
        'discord_user_id', 'discord_dm_channel_id', 'avatar_mode', 'used_connect',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];

    /**
     * The attributes that are casts.
     *
     * @var string[]
     */
    protected $casts = [
        'avatar_mode' => ProfileImageTypeEnum::class
    ];

    /**
     * Returns the VATSIM membership data for the user in an object form.
     *
     * @return object
     */
    public function getVatsimMembershipDataAttribute(): object
    {
        return (object) [
            'division' => (object) [
                'name' => $this->division_name,
                'code' => $this->division_code,
            ],
            'subdivision' => (object) [
                'name' => $this->subdivision_name,
                'code' => $this->subdivision_code,
            ],
            'region' => (object) [
                'name' => $this->region_name,
                'code' => $this->region_code
            ],
            'rating' => (object) [
                'short' => $this->rating_short,
                'long' => $this->rating_long,
                'id' => $this->rating_id,
                'grp' => $this->rating_GRP
            ]
        ];
    }

    /**
     * Is the user a bot?
     *
     * @return bool
     */
    public function getBotAttribute(): bool
    {
        return in_array($this->id, [1, 2]);
    }

    /**
     * Accessor to transform first name column if display one is set.
     *
     * @return string
     */
    public function getFnameAttribute(): string
    {
        return $this->display_fname ?? $this->fname;
    }

    /**
     * Days user has existed.
     *
     * @return int
     */
    public function getAccountAgeAttribute(): int
    {
        return $this->created_at->diff(now())->days;
    }

    /**
     * The user's highest assigned role.
     *
     * @return Role
     */
    public function getHighestRoleAttribute(): Role
    {
        //If the user doesnt have a role, then give them one temporarily.
        if (count($this->roles) == 0) {
            //Assign them guest
            $this->assignRole('Guest');

            //Should probably inform
            Log::alert('User '.$this->id.' did not have any role assigned. Guest role assigned.');
        }

        return $this->roles[0];
    }

    /**
     * Returns the user's name and CID depending on privacy settings.
     *
     * @return string
     */
    public function getFullNameCidAttribute(): string
    {
        if ($this->display_cid_only) {
            return (string) $this->id;
        }
        elseif (! $this->display_last_name) {
            return "$this->fname $this->id";
        }
        else {
            return "$this->fname $this->lname $this->id";
        }
    }

    /**
     * Returns the user's name and CID depending on privacy settings.
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        if ($this->display_cid_only) {
            return (string) $this->id;
        }
        elseif (! $this->display_last_name) {
            return "$this->fname";
        }
        else {
            return "$this->fname $this->lname";
        }
    }

    /**
     * Does the user have a linked Discord account?
     *
     * @return bool
     */
    public function getDiscordLinkedAttribute(): bool
    {
        return $this->discord_user_id != null;
    }

    /**
     * Returns the user's Discord account data.
     */
    public function getDiscordUserAttribute(): ?object
    {
        return (new DiscordLibrary)->getUserInformation($this);
    }

    /**
     * Returns a true/false of whether the user is a member of the Discord guild.
     *
     * @return bool
     */
    public function getMemberOfDiscordGuildAttribute(): bool
    {
        return (new DiscordLibrary)->isMemberOfGuild($this);
    }

    /**
     * Returns the URL of the user's Discord profile image.
     *
     * @return string|null
     */
    public function getDiscordProfileImageAttribute(): ?string
    {
        try {
            return (new DiscordLibrary)->getUserProfileImage($this);
        }
        catch (\ErrorException $ex) {
            return null;
        }
    }

    /**
     * Returns their Discord DM channel snowflake ID for notifications.
     *
     * @return int|null
     */
    public function routeNotificationForDiscord(): ?int
    {
        return $this->discord_dm_channel_id;
    }

    public function getInitialsProfileImageAttribute()
    {
        return Cache::remember('users.'.$this->id.'.initialsavatar', 172800, function () {
            $avatar = new InitialAvatar();
            $image = $avatar
                ->name($this->full_name)
                ->size(125)
                ->background('#cfeaff')
                ->color('#2196f3')
                ->generate();
            Storage::put('public/files/avatars/'.$this->id.'/initials.png', (string) $image->encode('png'));

            return Storage::url('public/files/avatars/'.$this->id.'/initials.png');
        });
    }

    /**
     * Returns the user's profile image.
     *
     * @return mixed|string
     */
    public function getProfileImageAttribute()
    {
        switch ($this->avatar_mode) {
            case ProfileImageTypeEnum::Initials():
                return $this->initials_profile_image;
                break;
            case ProfileImageTypeEnum::Custom():
                return $this->avatar;
                break;
            case ProfileImageTypeEnum::Discord():
                return $this->discord_profile_image;
                break;
            default:
                return $this->initials_profile_image;
        }
    }
}
