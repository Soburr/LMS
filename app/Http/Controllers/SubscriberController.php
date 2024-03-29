<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionConfirmation;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function showForm () {
        return view ('homepage.index');
    }

    public function subscribe (Request $request) {
        $request->validate([
            'email' => 'required|email|unique:subscribers'
        ]);

        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->save();

        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

        Return redirect('/')->with('message', 'Subscription Successful! Check your mail for confirmation');
    }
}
