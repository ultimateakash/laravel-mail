<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    public function example1()
    {
        $email = 'akashmjp@gmail.com';
        $article = [
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];
        Mail::to($email)->send(new NewsletterEmail($article));
        die('Email Sent. - Example1');
    }

    public function example2()
    {
        $email = 'akashmjp@gmail.com';
        $article = [
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];
        Mail::send('emails.newsletter', ['article' => $article], function ($message) use ($email) {
            $message->to($email)->subject('Weekly Newsletter');
        });
        die('Email Sent. - Example2');
    }

    public function example3()
    {
        $email = 'akashmjp@gmail.com';
        $text = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        Mail::raw($text, function ($message) use ($email) {
            $message->to($email)->subject('Weekly Newsletter');
        });
        die('Email Sent. - Example3');
    }
}
