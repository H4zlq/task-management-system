<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "title" => "Task 1",
                "description" => "Description 1",
                "due_date" => "2024-09-12",
                "status" => "PENDING"
            ],
            [
                "title" => "Task 2",
                "description" => "Description 2",
                "due_date" => "2024-09-13",
                "status" => "COMPLETED"
            ],
            [
                "title" => "Task 3",
                "description" => "Description 3",
                "due_date" => "2024-09-14",
                "status" => "IN PROGRESS"
            ]
        ];

        $this->db->table("tasks")->insertBatch($data);
    }
}
