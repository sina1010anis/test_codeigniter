<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToRemembers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('remembers', [
            'user_id' => [
                'type'=> 'INT',
            ], 
        ]);

        $this->forge->addForeignKey('user_id','users','id');
    }

    public function down()
    {
        //
    }
}
