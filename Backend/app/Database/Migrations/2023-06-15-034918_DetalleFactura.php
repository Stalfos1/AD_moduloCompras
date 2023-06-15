<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleFactura extends Migration
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
            'factura_id' => [ 
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'cantidad' => [
                'type'       => 'INT',
                'null' => false,
            ],
            'producto_id' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'subtotal' => [
                'type'       => 'NUMERIC',
                'constraint'  => '10,2',
                'null' => false,
                'default'    => 0,
            ],
            'total' => [
                'type'       => 'NUMERIC',
                'constraint'  => '10,2',
                'null' => false,
                'default'    => 0,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('factura_id', 'Facturas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('DetalleFactura');
    }

    public function down()
    {
        $this->forge->dropTable('DetalleFactura');
    }
}
