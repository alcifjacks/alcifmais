<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Eventos extends MY_Controller
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
        $this->load->model('eventos_model');
        $this->data['menuEventos'] = 'Eventos';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vEventos')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar eventos.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('eventos/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->eventos_model->count('eventos');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->eventos_model->get('eventos', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));
        $this->data['view'] = 'eventos/eventos';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aEventos')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar eventos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('eventos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'descricao' => $this->input->post('descricao'),
                'acao' => $this->input->post('acao'),
                'mostrar_inicio' => $this->input->post('mostrar_inicio'),
                'agendamento' => $this->input->post('agendamento'),
                'atualiza_status' => $this->input->post('atualiza_status'),
                'muda_evento' => $this->input->post('muda_evento'),
                'excluir_parcelas' => $this->input->post('excluir_parcelas'),
                'hs_sla' => $this->input->post('hs_sla'),
                'status_id' => $this->input->post('status_id'),
            ];

            if ($this->eventos_model->add('eventos', $data) == true) {
                $this->session->set_flashdata('success', 'Eventos adicionado com sucesso!');
                log_info('Adicionou um eventos');
                redirect(site_url('eventos/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->load->model('status_model');
        $this->data['status'] = $this->status_model->getActive('status', 'status.idStatus,status.descricao');
        $this->data['view'] = 'eventos/adicionarEvento';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eEventos')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar eventos.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('eventos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'descricao' => $this->input->post('descricao'),
                'acao' => $this->input->post('acao'),
                'mostrar_inicio' => $this->input->post('mostrar_inicio'),
                'agendamento' => $this->input->post('agendamento'),
                'atualiza_status' => $this->input->post('atualiza_status'),
                'muda_evento' => $this->input->post('muda_evento'),
                'excluir_parcelas' => $this->input->post('excluir_parcelas'),
                'hs_sla' => $this->input->post('hs_sla'),
                'status_id' => $this->input->post('status_id'),
            ];

            if ($this->eventos_model->edit('eventos', $data, 'idEvento', $this->input->post('idEvento')) == true) {
                $this->session->set_flashdata('success', 'Eventos editado com sucesso!');
                log_info('Alterou um evento. ID: ' . $this->input->post('idEvento'));
                redirect(site_url('eventos/editar/') . $this->input->post('idEvento'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->load->model('status_model');
        $this->data['status'] = $this->status_model->getActive('status', 'status.idStatus,status.descricao');
        $this->data['result'] = $this->eventos_model->getById($this->uri->segment(3));
        $this->data['view'] = 'eventos/editarEvento';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dEventos')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir o evento.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir o evento.');
            redirect(site_url('eventos/gerenciar/'));
        }

        $this->eventos_model->delete('eventos_evento', 'eventos_id', $id);
        $this->eventos_model->delete('eventos', 'idEvento', $id);

        log_info('Removeu um eventos. ID: ' . $id);

        $this->session->set_flashdata('success', 'Evento excluido com sucesso!');
        redirect(site_url('eventos/gerenciar/'));
    }
}
