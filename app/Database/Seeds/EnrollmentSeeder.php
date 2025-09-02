<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'student_id' => 3, // Student One
                'course_id'  => 1, // Intro to Programming
            ],
            [
                'student_id' => 4, // Student Two
                'course_id'  => 2, // Web Development
            ],
        ];

        $this->db->table('enrollments')->insertBatch($data);
    }
}
