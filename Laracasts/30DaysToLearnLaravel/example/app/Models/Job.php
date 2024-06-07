<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all() : array
    {
        return [
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
    }

    public static function find(int $id) : array
    {
        $job = Arr::first(static::all(), function ($job) use ($id) {
            return $job['id'] == $id;
        });

        if (! $job)
        {
            abort(404);
        }

        return $job;
    }
}
