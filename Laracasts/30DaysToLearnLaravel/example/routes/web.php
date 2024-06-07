<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
                'salary' => 50000
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
                'salary' => 60000
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
                'salary' => 70000
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'PHP Developer',
            'description' => 'We are looking for a PHP developer to join our team.',
            'salary' => 50000
        ],
        [
            'id' => 2,
            'title' => 'Frontend Developer',
            'description' => 'We are looking for a Frontend developer to join our team.',
            'salary' => 60000
        ],
        [
            'id' => 3,
            'title' => 'Backend Developer',
            'description' => 'We are looking for a Backend developer to join our team.',
            'salary' => 70000
        ]
    ];

    $job = Arr::first($jobs, function($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
