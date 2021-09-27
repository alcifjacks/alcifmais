<?php

class Migration_add_cobrancas_devedor extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_column('cobrancas', [
            'devedores_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
        $this->db->query('ALTER TABLE  `cobrancas` ADD INDEX `fk_cobrancas_devedores1` (`devedores_id` ASC)');
        $this->db->query('ALTER TABLE  `cobrancas` ADD CONSTRAINT `fk_cobrancas_devedores1`
			FOREIGN KEY (`devedores_id`)
			REFERENCES `devedores` (`idDevedores`)
			ON DELETE NO ACTION
			ON UPDATE NO ACTION
        ');
    }

    public function down()
    {
        $this->dbforge->drop_table('cobrancas');
    }
}
