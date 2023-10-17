<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class Student_Registered_Email extends Mailable
{
    use Queueable, SerializesModels;
    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Admin Accepted')
                    ->view('emails.admin_remove')
                    ->with([
                        'user' => $this->student,
                    ]);
    }
}
