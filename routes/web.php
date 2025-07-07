<?php

use App\Models\Jobs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
//    return 'About page';
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Jobs::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Jobs::find($id)]);
});
