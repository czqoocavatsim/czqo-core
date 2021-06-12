<?php

namespace App\Mail;

use App\Models\AtcTraining\RosterMember;
use App\Models\Users\UserAccount;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RosterStatusMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $controller;
    public $user;

    public function __construct(RosterMember $controller, UserAccount $user)
    {
        $this->controller = $controller;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.rosterstatus')
            ->subject('Your Roster Status Has Been Changed');
    }
}
