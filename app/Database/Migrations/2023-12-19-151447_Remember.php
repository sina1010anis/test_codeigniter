<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Remember extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT'
            ],
            'rem_token'=> [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('remembers');
    }

    public function down()
    {
        //
    }
}
