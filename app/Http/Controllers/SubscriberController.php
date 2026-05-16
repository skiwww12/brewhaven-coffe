<?php

namespace App\Http\Controllers;

use App\Mail\PromoMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:subscribers,email'],
        ]);

        $subscriber = Subscriber::create([
            'email' => $request->email,
        ]);

        Mail::to($subscriber->email)->send(new PromoMail());

        return back()->with('success', 'Email berhasil disimpan. Promo sudah dikirim ke email kamu.');
    }
}