<?php

namespace App\Http\Livewire\My\Preferences;

use App\Enums\Preferences\ProfileImageTypeEnum;
use App\Models\Users\UserAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChangeProfileImage extends Component
{
    use WithFileUploads;

    public $mode = ProfileImageTypeEnum::Initials;
    public UserAccount $userAccount;
    public $customImage;

    public function mount()
    {
        $this->userAccount = Auth::user();
    }

    public function render()
    {
        return view('livewire.my.preferences.change-profile-image');
    }

    public function save()
    {
        if ($this->mode == ProfileImageTypeEnum::Discord || $this->mode == ProfileImageTypeEnum::Initials) {
            $this->userAccount->avatar_mode = $this->mode;
            $this->userAccount->save();
            session()->flash('success', 'Profile image updated');
            return redirect()->route('my.index');
        }

        throw new \Exception('Not implemented');

        $this->validate([
            'customImage' => 'image|max:2048'
        ]);

        $path = Storage::disk('digitalocean')->put('user_uploads/'.$this->userAccount->id.'/avatars', $this->customImage, 'public');
        $this->userAccount->avatar = Storage::url($path);
        $this->userAccount->avatar_mode = $this->mode;
        $this->userAccount->save();
        session()->flash('success', 'Profile image updated');
        return redirect()->route('my.index');
    }
}
