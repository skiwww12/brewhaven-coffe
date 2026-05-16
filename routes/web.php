<?php

use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use App\Http\Controllers\TestimonialController;



Route::get('/', function () {

    $testimonials = Testimonial::where('status', 'approved')
        ->latest()
        ->get();

    return view('home', compact('testimonials'));
});



Route::get('/menu', function () {
    return view('menu');
});

Route::view('/contact', 'sections.contact');
Route::view('/aboutus', 'aboutus');
Route::view('/gallery', 'sections.gallery');
use App\Http\Controllers\SubscriberController;

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');





Route::post('/testimonial', [TestimonialController::class, 'store']);