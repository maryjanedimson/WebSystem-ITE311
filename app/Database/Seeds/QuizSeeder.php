<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'lesson_id' => 1,
                'question'  => 'What is a variable?',
                'answer'    => 'A container for storing data.',
            ],
            [
                'lesson_id' => 2,
                'question'  => 'What does an IF statement do?',
                'answer'    => 'Executes code conditionally.',
            ],
            [
                'lesson_id' => 3,
                'question'  => 'What does HTML stand for?',
                'answer'    => 'HyperText Markup Language.',
            ],
        ];

        $this->db->table('quizzes')->insertBatch($data);
    }
}
