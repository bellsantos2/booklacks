<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editora extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('editora_model');
    }
    /**
    * Function cadastrar_editora
    */
    public function cadastrar_editora()
    {
        // Definindo os critérios de validação
        $this->form_validation->set_rules('nome_editora','Nome da Editora','required|trim');
        $this->form_validation->set_rules('rua','Rua','required|trim');
        $this->form_validation->set_rules('numero','Número do Imóvel','required|trim');
        $this->form_validation->set_rules('bairro','Bairro','required|trim');
        // Realizando a validação de um nova editora
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'Cadastrar editora';
            $this->load->view('cadastrar-editora',$data);
        } else {
            // Inicio do processo de gravação no DB
            $this->editora_model->insert();
            // Retorno de aviso ao usuário
            $this->session->set_flashdata('success','A editora' .
				$this->input->post('nome_editora') .
                'foi inserida com sucesso');
            // http_redirect
            redirect();
        }
    }
    /**
     *
     */
    public function visualizar_editoras()
    {
        $data['title'] = 'Editoras';
        $data['editoras'] = $this->editora_model->get_all_editoras();
        $this->load->view('visualizar-editoras',$data);
    }
}
