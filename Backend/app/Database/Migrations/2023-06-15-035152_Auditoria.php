<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Auditoria extends Migration
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
            'fecha_ingreso_sistema' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'proveedor_id' => [ 
                'type'       => 'INT',
                'unsigned'   => true,
            ],            
            'hora_evento' => [ 
                'type'       => 'TIME',
                'unsigned'   => true,
            ],                        
            'nombre_metodo' => [
                'type'       => 'VARCHAR',
                'null' => false,
            ],
            'direccion_ip' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'identificion_usuario' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            
        ]);
        $this->forge->addKey('id', true);        
        $this->forge->createTable('Auditoria');
    }

    public function down()
    {
        $this->forge->dropTable('Auditoria');
    }
}
