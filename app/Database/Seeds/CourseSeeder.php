<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Introduction to Programming',
                'description' => 'Learn the basics of coding.',
                'instructor_id' => 2, // Instructor One
            ],
            [
                'title' => 'Web Development',
                'description' => 'Build websites with PHP & MySQL.',
                'instructor_id' => 2,
            ],
        ];

        $this->db->table('courses')->insertBatch($data);
    }
}
