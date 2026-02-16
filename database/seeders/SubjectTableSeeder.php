<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;  

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            ['title' => 'Python', 'description' => 'High-level programming language used for web, data science, AI, and more.'],
            ['title' => 'Java', 'description' => 'Object-oriented programming language used for enterprise applications and Android development.'],
            ['title' => 'C++', 'description' => 'General-purpose programming language with high performance, used for system/software development.'],
            ['title' => 'JavaScript', 'description' => 'Scripting language for web development, both frontend and backend (Node.js).'],
            ['title' => 'PHP', 'description' => 'Server-side scripting language mainly used for web development.'],
            ['title' => 'C#', 'description' => 'Programming language developed by Microsoft for .NET framework applications.'],
            ['title' => 'Go', 'description' => 'Open-source programming language by Google, known for concurrency and simplicity.'],
            ['title' => 'Ruby', 'description' => 'Dynamic, object-oriented programming language, popular with web development (Ruby on Rails).'],
            ['title' => 'Swift', 'description' => 'Programming language for iOS/macOS app development by Apple.'],
            ['title' => 'Kotlin', 'description' => 'Modern programming language for Android development, interoperable with Java.'],
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'title' => $subject['title'],
                'slug' => Str::slug($subject['title']),
                'description' => $subject['description'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
