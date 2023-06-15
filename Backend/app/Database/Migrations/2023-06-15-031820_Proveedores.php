<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proveedores extends Migration
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
            'documento_identificacion' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'ciudad' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'tipo_proveedor' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'direccion' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'telefono' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Proveedores');
    }

    public function down()
    {
        $this->forge->dropTable('Proveedores');
    }
}
