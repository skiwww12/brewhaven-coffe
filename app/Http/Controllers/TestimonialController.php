<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'message' => 'required'
    ]);

    Testimonial::create([
        'name' => $request->name,
        'message' => $request->message,
        'status' => 'approved'
    ]);

    return back()->with('success', 'Testimonial submitted!');
}
}
