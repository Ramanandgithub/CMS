<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubtopicsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch all topics
        $topics = DB::table('topics')->get();

        foreach ($topics as $topic) {
            $subtopics = [];

            // Define subtopics for programming language topics
            switch ($topic->title) {
                case 'Syntax':
                    $subtopics = ['Basic Syntax', 'Variables & Constants', 'Operators', 'Comments'];
                    break;

                case 'Data Types':
                    $subtopics = ['Primitive Types', 'Composite Types', 'Type Conversion', 'Type Checking'];
                    break;

                case 'Control Flow':
                    $subtopics = ['If-Else Statements', 'Switch Case', 'Loops', 'Break & Continue'];
                    break;

                case 'Functions':
                    $subtopics = ['Defining Functions', 'Function Arguments', 'Return Values', 'Recursion'];
                    break;

                case 'OOP':
                case 'OOP Concepts':
                case 'Classes & Objects':
                    $subtopics = ['Classes', 'Objects', 'Inheritance', 'Polymorphism', 'Encapsulation'];
                    break;

                case 'Modules':
                case 'Libraries':
                case 'Packages':
                    $subtopics = ['Importing Modules', 'Using Standard Libraries', 'Creating Packages', 'Third-party Libraries'];
                    break;

                case 'Arrays':
                case 'Linked Lists':
                case 'Stacks':
                case 'Queues':
                    $subtopics = ['Definition', 'Operations', 'Examples', 'Complexity Analysis'];
                    break;

                case 'Databases':
                case 'Database Interaction':
                    $subtopics = ['SQL Basics', 'CRUD Operations', 'Connections', 'ORM Basics'];
                    break;

                case 'iOS Basics':
                case 'Android Basics':
                case 'Laravel Basics':
                case 'Rails Basics':
                    $subtopics = ['Setup', 'Hello World', 'Running Apps', 'Basic Features'];
                    break;

                // Add more topics as needed
            }

            // Insert subtopics (top-level)
            foreach ($subtopics as $index => $title) {
                DB::table('subtopics')->insert([
                    'topic_id' => $topic->id,
                    'parent_id' => null,  // top-level
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'order_index' => $index + 1,
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Optional: Example of hierarchical subtopics
        // Example: "Loops" can have child subtopics like "For Loop", "While Loop"
        $parentLoop = DB::table('subtopics')->where('title', 'Loops')->first();
        if ($parentLoop) {
            $childSubtopics = ['For Loop', 'While Loop', 'Do-While Loop', 'Nested Loops'];
            foreach ($childSubtopics as $index => $title) {
                DB::table('subtopics')->insert([
                    'topic_id' => $parentLoop->topic_id,
                    'parent_id' => $parentLoop->id,
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
