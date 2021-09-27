<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Gerentes extends MY_Controller
{

    /**
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('gerentes_model');
        $this->data['menuGerentes'] = 'gerentes';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vGerenteEmail')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar gerentes.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('gerentes/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->gerentes_model->count('gerentes');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->gerentes_model->get('gerentes', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));
        $this->data['view'] = 'gerentes/gerentes';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aGerenteEmail')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar gerentes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('gerentes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeDevedor' => set_value('nomeDevedor'),
                'externo_id' => set_value('contato'),
                'nomeDevedor' => set_value('documento'),
                'telefone' => set_value('telefone'),
                'celular' => set_value('celular'),
                'email' => set_value('email'),
                'rua' => set_value('rua'),
                'numero' => set_value('numero'),
                'complemento' => set_value('complemento'),
                'bairro' => set_value('bairro'),
                'cidade' => set_value('cidade'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'dataCadastro' => date('Y-m-d'),
                'fornecedor' => (set_value('fornecedor') == true ? 1 : 0),
            ];

            if ($this->gerentes_model->add('gerentes', $data) == true) {
                $this->session->set_flashdata('success', 'Dívida adicionado com sucesso!');
                log_info('Adicionou uma dívida.');
                redirect(site_url('gerentes/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'gerentes/adicionarGerente';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eGerenteEmail')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar gerentes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('gerentes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeDevedor' => $this->input->post('nomeDevedor'),
                'contato' => $this->input->post('contato'),
                'documento' => $this->input->post('documento'),
                'telefone' => $this->input->post('telefone'),
                'celular' => $this->input->post('celular'),
                'email' => $this->input->post('email'),
                'rua' => $this->input->post('rua'),
                'numero' => $this->input->post('numero'),
                'complemento' => $this->input->post('complemento'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'estado' => $this->input->post('estado'),
                'cep' => $this->input->post('cep'),
                'fornecedor' => (set_value('fornecedor') == true ? 1 : 0),
            ];

            if ($this->gerentes_model->edit('gerentes', $data, 'idGerente', $this->input->post('idGerente')) == true) {
                $this->session->set_flashdata('success', 'Devedor editado com sucesso!');
                log_info('Alterou um devedor. ID' . $this->input->post('idGerente'));
                redirect(site_url('gerentes/editar/') . $this->input->post('idGerente'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->gerentes_model->getById($this->uri->segment(3));
        $this->data['view'] = 'gerentes/editarGerente';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vGerenteEmail')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar dívidas.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->gerentes_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->gerentes_model->getOsByDevedor($this->uri->segment(3));
        $this->data['view'] = 'devedores/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dGerenteEmail')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir devedores.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir gerentes.');
            redirect(site_url('gerentes/gerenciar/'));
        }

        $os = $this->gerentes_model->getAllOsByClient($id);
        if ($os != null) {
            $this->gerentes_model->removeClientOs($os);
        }

        // excluindo Gerentes vinculadas ao devedor
        $vendas = $this->gerentes_model->getAllVendasByClient($id);
        if ($vendas != null) {
            $this->gerentes_model->removeClientVendas($vendas);
        }

        $this->gerentes_model->delete('gerentes', 'idGerente', $id);
        log_info('Removeu uma dívida. ID' . $id);

        $this->session->set_flashdata('success', 'Dívida excluida com sucesso!');
        redirect(site_url('gerentes/gerenciar/'));
    }
}
