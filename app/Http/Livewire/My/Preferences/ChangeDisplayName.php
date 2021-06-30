<?php

namespace App\Http\Livewire\My\Preferences;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChangeDisplayName extends Component
{
    public $firstName;
    public $showLastName;
    public $onlyCid;

    public function mount()
    {
        $this->firstName = Auth::user()->fname;
        $this->showLastName = Auth::user()->display_last_name;
        $this->onlyCid = Auth::user()->display_cid_only;
    }

    protected $rules = [
        'firstName' => 'required|max:50'
    ];

    public function getPreviewProperty()
    {
        if ($this->onlyCid) {
            return Auth::user()->id;
        }
        elseif (! $this->showLastName) {
            return $this->firstName . ' ' . Auth::user()->id;
        }
        else {
            return $this->firstName . ' ' .  Auth::user()->lname . ' ' . Auth::user()->id;
        }
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.my.preferences.change-display-name');
    }

    public function save()
    {
        $this->validate();

        Auth::user()->display_cid_only = $this->onlyCid;
        Auth::user()->display_last_name = $this->showLastName;
        Auth::user()->display_fname = $this->firstName;
        Auth::user()->save();

        session()->flash('success', 'Display name updated');
        return redirect()->route('my.index');
    }
}
