<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRestToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'token_password' => [
                'type'=> 'INT',
                'default' => true
            ], 
            'token_exp' => [
                'type'=> 'INT',
                'default' => true
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
