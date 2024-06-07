<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
                'salary' => 50000
            ],
            [
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
                'salary' => 60000
            ],
            [
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
                'salary' => 70000
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
