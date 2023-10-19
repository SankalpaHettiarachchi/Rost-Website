<?php

namespace App\Listeners;

use App\Events\News_Added;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class News_Added_Listener
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\News_Added  $event
     * @return void
     */
    public function handle(News_Added $event)
    {
        // Access the user from the event
        $newsItem = $event->newsItem;
        dd($newsItem);
        
        // Send the email
        // Mail::to($newsItem->email)->send(new Student_Registered_Email($newsItem));
    }
}
