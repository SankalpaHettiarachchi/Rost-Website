<?php

namespace App\Listeners;

use App\Events\Album_Added;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Album_Added_listener
{
       /**
     * Handle the event.
     *
     * @param  \App\Events\Album_Added  $event
     * @return void
     */
    public function handle(Album_Added $event)
    {
        // Access the user from the event
        $album = $event->album;
        dd($album);
        
        // Send the email
        // Mail::to($newsItem->email)->send(new Student_Registered_Email($newsItem));
    }
}
