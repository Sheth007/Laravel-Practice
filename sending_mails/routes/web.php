<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail as Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function () {
    $toEmail = 'to_email';
    $subject = 'enter_subject';
    $message = 'enter_message';

    // Sending plain text email
    Mail::raw($message, function ($message) use ($toEmail, $subject) {
        $message->to($toEmail)
            ->subject($subject);
    });

    return 'Email sent!';
});