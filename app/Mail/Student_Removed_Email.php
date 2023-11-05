<?php

namespace App\Mail;

use App\Models\Students;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Student_Removed_Email extends Mailable
{
    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Students $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Student Removed')
                    ->view('emails.student_remove_email')
                    ->with([
                        'user' => $this->student,
                    ]);
    }
}
