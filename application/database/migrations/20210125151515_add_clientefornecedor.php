<?php

class Migration_add_devedorfornecedor extends CI_Migration
{
    public function up()
    {
        $sql = "ALTER TABLE `devedores` ADD `fornecedor` BOOLEAN NOT NULL DEFAULT FALSE";
        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("ALTER TABLE `devedores` DROP `fornecedor`;");
    }
}
