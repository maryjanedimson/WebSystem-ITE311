<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'student_id' => 3,
                'quiz_id'    => 1,
                'answer'     => 'A variable stores values',
                'score'      => 1,
            ],
            [
                'student_id' => 4,
                'quiz_id'    => 3,
                'answer'     => 'HyperText Markup Language',
                'score'      => 1,
            ],
        ];

        $this->db->table('submissions')->insertBatch($data);
    }
}
