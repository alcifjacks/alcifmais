<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Conecte_model extends CI_Model
{

    /**
     * 
     * 
     *
     */

    public function add($table, $data, $returnId = false)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db->insert_id($table);
            }
            return true;
        }

        return false;
    }

    public function getLastOs($devedor)
    {
        $this->db->from('os');
        $this->db->join('usuarios', 'os.usuarios_id = usuarios.idUsuarios', 'left');
        $this->db->where('devedores_id', $devedor);
        $this->db->limit(5);
        $this->db->order_by('idOs', 'desc');

        return $this->db->get()->result();
    }

    public function getLastCompras($devedor)
    {
        $this->db->select('vendas.*,usuarios.nome');
        $this->db->from('vendas');
        $this->db->join('usuarios', 'usuarios.idUsuarios = vendas.usuarios_id');
        $this->db->where('devedores_id', $devedor);
        $this->db->limit(5);

        return $this->db->get()->result();
    }


    public function getCompras($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $devedor)
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join('usuarios', 'vendas.usuarios_id = usuarios.idUsuarios', 'left');
        $this->db->where('devedores_id', $devedor);
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getCobrancas($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $devedor)
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join('devedores', 'cobrancas.devedores_id = devedores.idDevedores', 'left');
        $this->db->where('devedores_id', $devedor);
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    public function getOs($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $devedor)
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join('usuarios', 'os.usuarios_id = usuarios.idUsuarios', 'left');
        $this->db->where('devedores_id', $devedor);
        $this->db->limit($perpage, $start);
        $this->db->order_by('idOs', 'desc');
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    
    public function getById($id)
    {
        $this->db->select('os.*, devedores.*, devedores.celular as celular_devedor, garantias.refGarantia, usuarios.telefone as telefone_usuario, usuarios.email as email_usuario, usuarios.nome');
        $this->db->from('os');
        $this->db->join('devedores', 'devedores.idDevedores = os.devedores_id');
        $this->db->join('usuarios', 'usuarios.idUsuarios = os.usuarios_id');
        $this->db->join('garantias', 'garantias.idGarantias = os.garantias_id', 'left');
        $this->db->where('os.idOs', $id);
        $this->db->limit(1);

        return $this->db->get()->row();
    }

    public function count($table, $devedor)
    {
        $this->db->where('devedores_id', $devedor);
        return $this->db->count_all_results($table);
    }

    public function getDados()
    {
        $this->db->where('iddevedores', $this->session->userdata('devedor_id'));
        $this->db->limit(1);
        return $this->db->get('devedores')->row();
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
}

/* End of file conecte_model.php */
/* Location: ./application/models/conecte_model.php */
