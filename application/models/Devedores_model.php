<?php
class Devedores_model extends CI_Model
{

    /**
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idDevedores', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db->where('idDevedores', $id);
        $this->db->limit(1);
        return $this->db->get('devedores')->row();
    }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return $this->db->insert_id($table);
        }

        return false;
    }

    public function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }

        return false;
    }

    public function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function getOsByDevedor($id)
    {
        $this->db->where('devedores', $id);
        $this->db->order_by('idOs', 'desc');
        $this->db->limit(10);
        return $this->db->get('os')->result();
    }

    /**
     * Retorna todas as OS vinculados ao devedor
     * @param int $id
     * @return array
     */
    public function getAllOsByClient($id)
    {
        $this->db->where('devedores', $id);
        return $this->db->get('os')->result();
    }

    /**
     * Remover todas as OS por devedor
     * @param array $os
     * @return boolean
     */
    public function removeClientOs($os)
    {
        try {
            foreach ($os as $o) {
                $this->db->where('os_id', $o->idOs);
                $this->db->delete('servicos_os');

                $this->db->where('os_id', $o->idOs);
                $this->db->delete('produtos_os');

                $this->db->where('idOs', $o->idOs);
                $this->db->delete('os');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    /**
     * Retorna todas as Vendas vinculados ao devedor
     * @param int $id
     * @return array
     */
    public function getAllVendasByClient($id)
    {
        $this->db->where('devedores_id', $id);
        return $this->db->get('vendas')->result();
    }

    /**
     * Remover todas as Vendas por devedor
     * @param array $vendas
     * @return boolean
     */
    public function removeClientVendas($vendas)
    {
        try {
            foreach ($vendas as $v) {
                $this->db->where('vendas_id', $v->idVendas);
                $this->db->delete('itens_de_vendas');

                $this->db->where('idVendas', $v->idVendas);
                $this->db->delete('vendas');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}