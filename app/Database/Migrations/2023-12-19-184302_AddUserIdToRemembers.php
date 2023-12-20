<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToRemembers extends Migration
{
    public function up()
    {

        $this->forge->addColumn('remembers', [
            'created_at' => [
                'type'       => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type'       => 'TIMESTAMP',
            ],
        ]);

    }

    public function down()
    {
        //
    }
}
