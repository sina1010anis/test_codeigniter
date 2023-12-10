<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDescToProduct extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products', [
            'desc' => [
                'type'=> 'TEXT',
            ]
        ]);
    }

    public function down()
    {
    }
}
