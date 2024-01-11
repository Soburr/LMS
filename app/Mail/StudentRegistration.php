<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StudentRegistration extends Mailable
{

    use Queueable, SerializesModels;

    public $name;
    public $student_id;
    public $password;
    public function __construct($name, $student_id, $password)
    {
        $this->name = $name;
        $this->student_id= $student_id;
        $this->password = $password;
    }

    public function build () {
        $subject = 'Your Login Credentials';
        return $this->subject($subject)->view('emails.login-credentials');
    }

}
