<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dividas extends MY_Controller
{

    /**
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('dividas_model');
        $this->data['menuDividas'] = 'dividas';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vDividas')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar dividas.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('dividas/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->dividas_model->count('dividas');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->dividas_model->get('dividas', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'dividas/dividas';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aDividas')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar dividas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('dividas') == false) {
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

            if ($this->dividas_model->add('dividas', $data) == true) {
                $this->session->set_flashdata('success', 'Dívida adicionado com sucesso!');
                log_info('Adicionou uma dívida.');
                redirect(site_url('dividas/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'dividas/adicionarDivida';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eDividas')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar dividas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('dividas') == false) {
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

            if ($this->dividas_model->edit('dividas', $data, 'idDividas', $this->input->post('idDividas')) == true) {
                $this->session->set_flashdata('success', 'Devedor editado com sucesso!');
                log_info('Alterou um devedor. ID' . $this->input->post('idDividas'));
                redirect(site_url('dividas/editar/') . $this->input->post('idDividas'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->dividas_model->getById($this->uri->segment(3));
        $this->data['view'] = 'dividas/editarDivida';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vDividas')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar dívidas.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->dividas_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->dividas_model->getOsByDevedor($this->uri->segment(3));
        $this->data['view'] = 'devedores/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dDividas')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir devedores.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir dividas.');
            redirect(site_url('dividas/gerenciar/'));
        }

        $os = $this->dividas_model->getAllOsByClient($id);
        if ($os != null) {
            $this->dividas_model->removeClientOs($os);
        }

        // excluindo Vendas vinculadas ao devedor
        $vendas = $this->dividas_model->getAllVendasByClient($id);
        if ($vendas != null) {
            $this->dividas_model->removeClientVendas($vendas);
        }

        $this->dividas_model->delete('dividas', 'idDividas', $id);
        log_info('Removeu uma dívida. ID' . $id);

        $this->session->set_flashdata('success', 'Dívida excluida com sucesso!');
        redirect(site_url('dividas/gerenciar/'));
    }
}
