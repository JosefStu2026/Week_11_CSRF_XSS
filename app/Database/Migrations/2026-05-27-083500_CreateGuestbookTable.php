<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuestbookTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'comment' => [
                'type'       => 'TEXT',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('guestbook');
    }

    public function down()
    {
        $this->forge->dropTable('guestbook');
    }
}