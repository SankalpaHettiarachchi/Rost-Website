<?php

namespace App\Listeners;

use App\Events\Student_Registerd;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Student_Registered_Email;


class Student_Registerd_Email
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\Student_Registerd  $event
     * @return void
     */
    public function handle(Student_Registerd $event)
    {
        // Access the user from the event
        $student = $event->student;
        
        // Send the email
        Mail::to($student->email)->send(new Student_Registered_Email($student));
    }
}
