<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class CreateTaskTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "user_id" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "description" => [
                "type" => "TEXT"
            ],
            "status" => [
                "type" => "ENUM",
                "constraint" => ["PENDING", "COMPLETED", "IN PROGRESS"],
                "default" => "PENDING"
            ],
            "due_date" => [
                "type" => "DATE",
                "null" => true
            ],
            "created_at" => [
                "type" => "DATETIME",
                "default" => Time::now()->format('Y-m-d H:i:s')
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "default" => Time::now()->format('Y-m-d H:i:s')
            ]
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("tasks");
    }

    public function down()
    {
        $this->forge->dropTable("tasks");
    }
}
