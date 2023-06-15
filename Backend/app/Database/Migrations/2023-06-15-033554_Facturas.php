<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Facturas extends Migration
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
            'proveedor_id' => [ 
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'fecha_factura' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'tipo_pago' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'fecha_vencimiento' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'total' => [
                'type'       => 'NUMERIC',
                'constraint'  => '10,2',
                'null' => false,
                'default'    => 0,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('proveedor_id', 'Proveedores', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Facturas');
    }

    public function down()
    {
        $this->forge->dropTable('Facturas');
    }
}
