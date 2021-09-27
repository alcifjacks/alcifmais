<?php
class Gerentes_model extends CI_Model
{

    /*
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();
    }

    /*
    * Retorna todos os gerentes com função de filtro
    * @param int $fields
    * @return array
    */

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idGerente', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }
        
        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

   
    /*
    * Retorna todos os gerentes por id
    * @param int $id
    * @return array
    */

    public function getById($id)
    {
        $this->db->where('idGerente', $id);
        $this->db->limit(1);
        return $this->db->get('gerentes')->row();
    }

    /*
    * Adiciona gerentes a tabela gerentes
    * @return boolean
    */

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return $this->db->insert_id($table);
        }

        return false;
    }

    /*
    * Editar gerentes
    * @return boolean
    */

    public function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }

        return false;
    }

    /*
    * Exclui gerentes
    * @param int $id
    * @return boolean
    */

    public function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    /*
    * Retorna valor contado de todos os itens da tabela gerentes
    * @param int $id
    * @return array
    */

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    /*
    * Retorna todas vinculados ao devedor
    * @param int $id
    * @return array
    */
    
    public function getOsByGerente($id)
    {
        $this->db->where('gerentes', $id);
        $this->db->order_by('idOs', 'desc');
        $this->db->limit(10);
        return $this->db->get('os')->result();
    }

    /*
     * Retorna todas vinculados ao devedor
     * @param int $id
     * @return array
     */
    public function getAllOsByClient($id)
    {
        $this->db->where('gerentes', $id);
        return $this->db->get('os')->result();
    }

    /*
     * Remover todas  por devedor
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

    /*
     * Retorna todas vinculados ao devedor
     * @param int $id
     * @return array
     */
    public function getAllVendasByClient($id)
    {
        $this->db->where('gerentes', $id);
        return $this->db->get('vendas')->result();
    }

    /*
     * Remover todas  por devedor
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
