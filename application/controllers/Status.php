<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Status extends MY_Controller
{

    /**
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('status_model');
        $this->data['menuStatus'] = 'Status';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vStatus')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar status.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('status/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->status_model->count('status');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->status_model->get('status', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'status/status';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aStatus')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar status.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('status') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'descricao' => set_value('descricao'),
                'finalizar' => set_value('finalizar'),
                'ordem' => set_value('ordem'),
            ];

            if ($this->status_model->add('status', $data) == true) {
                $this->session->set_flashdata('success', 'Status adicionado com sucesso!');
                log_info('Adicionou um status');
                redirect(site_url('status/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['view'] = 'status/adicionarStatus';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eStatus')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar status.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('status') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'descricao' => $this->input->post('descricao'),
                'finalizar' => $this->input->post('finalizar'),
                'ordem' => $this->input->post('ordem'),
            ];

            if ($this->status_model->edit('status', $data, 'idStatus', $this->input->post('idStatus')) == true) {
                $this->session->set_flashdata('success', 'Serviço editado com sucesso!');
                log_info('Alterou um serviço. ID: ' . $this->input->post('idStatus'));
                redirect(site_url('status/editar/') . $this->input->post('idStatus'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->status_model->getById($this->uri->segment(3));

        $this->data['view'] = 'status/editarStatus';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dStatus')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir status.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir status.');
            redirect(site_url('status/gerenciar/'));
        }

        $this->status_model->delete('status_evento', 'status_id', $id);
        $this->status_model->delete('status', 'idStatus', $id);

        log_info('Removeu um status. ID: ' . $id);

        $this->session->set_flashdata('success', 'Status excluido com sucesso!');
        redirect(site_url('status/gerenciar/'));
    }
}
