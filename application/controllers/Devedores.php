<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Devedores extends MY_Controller
{

    /**
     * 
     * 
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('devedores_model');
        $this->data['menuDevedores'] = 'devedores';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vDevedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar devedores.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('devedores/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->devedores_model->count('devedores');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->devedores_model->get('devedores', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'devedores/devedores';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aDevedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar devedores.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('devedores') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeDevedor' => set_value('nomeDevedor'),
                'contato' => set_value('contato'),
                'documento' => set_value('documento'),
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

            if ($this->devedores_model->add('devedores', $data) == true) {
                $this->session->set_flashdata('success', 'Devedor adicionado com sucesso!');
                log_info('Adicionou um devedor.');
                redirect(site_url('devedores/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'devedores/adicionarDevedor';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eDevedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar devedores.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('devedores') == false) {
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

            if ($this->devedores_model->edit('devedores', $data, 'idDevedores', $this->input->post('idDevedores')) == true) {
                $this->session->set_flashdata('success', 'Devedor editado com sucesso!');
                log_info('Alterou um devedor. ID' . $this->input->post('idDevedores'));
                redirect(site_url('devedores/editar/') . $this->input->post('idDevedores'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->devedores_model->getById($this->uri->segment(3));
        $this->data['view'] = 'devedores/editarDevedor';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('samrd');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vDevedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar devedores.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->devedores_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->devedores_model->getOsByDevedor($this->uri->segment(3));
        $this->data['view'] = 'devedores/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dDevedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir devedores.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir devedor.');
            redirect(site_url('devedores/gerenciar/'));
        }

        $os = $this->devedores_model->getAllOsByClient($id);
        if ($os != null) {
            $this->devedores_model->removeClientOs($os);
        }

        // excluindo Vendas vinculadas ao devedor
        $vendas = $this->devedores_model->getAllVendasByClient($id);
        if ($vendas != null) {
            $this->devedores_model->removeClientVendas($vendas);
        }

        $this->devedores_model->delete('devedores', 'idDevedores', $id);
        log_info('Removeu um devedor. ID' . $id);

        $this->session->set_flashdata('success', 'Devedor excluido com sucesso!');
        redirect(site_url('devedores/gerenciar/'));
    }
}
