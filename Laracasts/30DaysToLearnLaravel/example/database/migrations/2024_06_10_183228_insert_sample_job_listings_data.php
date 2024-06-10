<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('job_listings')->insert([
            [
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
                'salary' => '£50,000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
                'salary' => '£60,000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
                'salary' => '£70,000',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('job_listings')->truncate();
    }
};
