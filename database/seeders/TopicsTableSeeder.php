<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TopicsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch all subjects
        $subjects = DB::table('subjects')->get();

        foreach ($subjects as $subject) {
            // Define topics for each programming language
            $topics = [];

            switch ($subject->title) {
                case 'Python':
                    $topics = ['Syntax', 'Data Types', 'Control Flow', 'Functions', 'Modules', 'OOP', 'Libraries'];
                    break;

                case 'Java':
                    $topics = ['Syntax', 'Classes & Objects', 'Inheritance', 'Interfaces', 'Collections', 'Exceptions'];
                    break;

                case 'C++':
                    $topics = ['Syntax', 'Pointers', 'OOP', 'STL', 'Memory Management'];
                    break;

                case 'JavaScript':
                    $topics = ['Variables', 'Functions', 'DOM Manipulation', 'ES6 Features', 'Events', 'AJAX'];
                    break;

                case 'PHP':
                    $topics = ['Syntax', 'Variables', 'Functions', 'OOP', 'Database Interaction', 'Laravel Basics'];
                    break;

                case 'C#':
                    $topics = ['Syntax', 'OOP', 'LINQ', '.NET Basics', 'Collections', 'Events & Delegates'];
                    break;

                case 'Go':
                    $topics = ['Syntax', 'Functions', 'Structs', 'Goroutines', 'Channels', 'Packages'];
                    break;

                case 'Ruby':
                    $topics = ['Syntax', 'OOP', 'Modules', 'Enumerable', 'Rails Basics'];
                    break;

                case 'Swift':
                    $topics = ['Syntax', 'Variables & Constants', 'Control Flow', 'Functions', 'OOP', 'iOS Basics'];
                    break;

                case 'Kotlin':
                    $topics = ['Syntax', 'OOP', 'Functions', 'Collections', 'Coroutines', 'Android Basics'];
                    break;
            }

            // Insert topics
            foreach ($topics as $index => $title) {
                DB::table('topics')->insert([
                    'subject_id' => $subject->id,
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'order_index' => $index + 1,
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
