<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifMaintenanceForm extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @var \App\Models\Other
     */

    public function __construct()
    {
        // $this->data = ;
    }

    /**
     * Build the message.
     *
     * @return void
     */

    public function build()
    {
        return $this->from('testing.dc@balitower.co.id')->view('other.maintenance_form_notif');
    }
}
