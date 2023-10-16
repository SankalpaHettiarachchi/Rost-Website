<?php

namespace App\Listeners;

use App\Events\Admin_accept;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Accept_Admin_Email;

class SendAdminAcceptEmail
{
    
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
