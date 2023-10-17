<?php

namespace App\Listeners;

use App\Events\Admin_remove;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin_remove_Email;



class AdminRemoveEmail
{
        /**
     * Handle the event.
     *
     * @param  \App\Events\Admin_remove  $event
     * @return void
     */
    public function handle(Admin_remove $event)
    {
        // Access the user from the event
        $user = $event->user;
        
        // Send the email
        Mail::to($user->email)->send(new Admin_remove_Email($user));
    }
}
