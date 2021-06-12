<?php

namespace App\Mail;

use App\Models\Tickets\Ticket;
use App\Models\Tickets\TicketReply;
use App\Models\Users\UserAccount;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewTicketReplyMail extends Mailable
{
    use Queueable;
    use SerializesModels;
    public $ticketReply;
    public $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TicketReply $ticketReply, Ticket $ticket)
    {
        $this->ticketReply = $ticketReply;
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.ticketreply')
            ->subject('#'.$this->ticket->ticket_id.' | New Reply from '.UserAccount::find($this->ticketReply->user_id)->fname.' '.UserAccount::find($this->ticketReply->user_id)->lname);
    }
}
