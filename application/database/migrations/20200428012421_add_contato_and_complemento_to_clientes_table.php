<?php

class Migration_add_contato_and_complemento_to_devedores_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_column('devedores', [
            'contato' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
                'default' => null,
            ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
                'default' => null,
            ],
        ]);
    }

    public function down()
    {
        $this->dbforge->drop_column('devedores', 'contato');
        $this->dbforge->drop_column('devedores', 'complemento');
    }
}
