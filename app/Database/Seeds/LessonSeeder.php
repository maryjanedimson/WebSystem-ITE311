<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_id' => 1,
                'title' => 'Variables & Data Types',
                'content' => 'Introduction to variables in programming.',
            ],
            [
                'course_id' => 1,
                'title' => 'Control Structures',
                'content' => 'If statements and loops explained.',
            ],
            [
                'course_id' => 2,
                'title' => 'HTML Basics',
                'content' => 'Learn the fundamentals of HTML.',
            ],
            [
                'course_id' => 2,
                'title' => 'CSS Fundamentals',
                'content' => 'Learn how to style websites with CSS.',
            ],
        ];

        $this->db->table('lessons')->insertBatch($data);
    }
}
