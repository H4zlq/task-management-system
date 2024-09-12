<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class CreateUserTable extends Migration
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
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 255
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
        $this->forge->addUniqueKey("username");
        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
