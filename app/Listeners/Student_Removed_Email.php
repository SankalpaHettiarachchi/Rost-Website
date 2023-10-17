<?php

namespace App\Listeners;

use App\Events\Student_Removed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Student_Removed_Email as StudentRemovedEmail;

class Student_Removed_Email
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\Student_Removed  $event
     * @return void
     */
    public function handle(Student_Removed $event)
    {
        $student = $event->student;
        
        // Send the email
        Mail::to($student->email)->send(new StudentRemovedEmail($student));
    }
}
