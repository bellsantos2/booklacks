<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller{
	/**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('livro_model');
        $this->load->model('editora_model');
    }
	/**
     *
     */
    public function cadastrar_livro()
    {
        // Definindo os critérios de validação
        $this->form_validation->set_rules('titulo_livro','Título do Livro','required|trim');
		$this->form_validation->set_rules('editora','Editora','required');
        $this->form_validation->set_rules('ano_lancamento','Ano de Lançamento','required|numeric|exact_length[4]|trim');
        $this->form_validation->set_rules('paginas','Páginas','required|numeric|trim');
        $this->form_validation->set_rules('sinopse','Sinopse do Livro','required|trim');
        // Realizado a validação de uma nova editora
        if ($this->form_validation->run() === FALSE) {
			$data['editoras_dropdown'] = $this->editora_model->get_editoras_dropdown();
            $data['title'] = 'Cadastrar Livro';
            $this->load->view('cadastrar-livro',$data);
        } else {
            $this->livro_model->insert();
            $this->session->set_flashdata('success','O livro '
                . $this->input->post('titulo_livro') . ' foi inserido com sucesso!');
            // http_redirect
            redirect();
        }
    }
    public function visualizar_livros()
    {
        $data['title'] = 'Livros';
        $data['livros'] = $this->livro_model->get_all_livros();
        $this->load->view('visualizar-livros',$data);
    }
	/**
     *
     */
	public function formulario_livro()
	{
		$data['editoras_dropdown'] = $this->editora_model->get_editoras_dropdown();
		$data['title'] = 'Cadastrar Livro';
		$this->load->view('cadastrar-livro',$data);
	}
}
