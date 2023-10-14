<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Mail;

use App\Events\Admin_accept;
use App\Mail\Accept_Admin_Email;


class SendAdminAcceptEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Admin_accept  $event
     * @return void
     */
    public function handle(Admin_accept $event)
    {
        // Access the user from the event
        $user = $event->user;

        // Send the email
        Mail::to($user->email)->send(new Accept_Admin_Email($user));
    }
}
