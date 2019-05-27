<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('livro_model');
        $this->load->model('editora_model');

    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH . 'views/' . $page . '.php'))
        {
            show_404();
        }
        // str_replace()
        // Recebe 3 argumentos: 1º. Padrão para busca, 2º. Padrão de substituição
        // 3º. Texto base para busca.
        $data['total_livros'] = $this->livro_model->count_all_livros();
        $data['total_editoras'] = $this->editora_model->count_all_editoras();
        $data['title'] = str_replace('-',' ',ucfirst($page));
        $this->load->view($page,$data);
    }

}
