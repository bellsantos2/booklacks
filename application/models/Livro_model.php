<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class livro_model extends CI_Model{
    // Definindo tabela
    private $table = 'livros';
    // Definindo colunas da tabela editoras
    private $id_livro;
    public $titulo_livro;
    public $editora;
    public $ano_lancamento;
    public $paginas;
    public $sinopse;
    /**
     *
     */
    public function insert()
    {
        $livro = new livro_model();

        $livro->titulo_livro    = $this->input->post('titulo_livro');
        $livro->editora         = $this->input->post('editora');
        $livro->ano_lancamento  = $this->input->post('ano_lancamento');
        $livro->paginas         = $this->input->post('paginas');
        $livro->sinopse         = $this->input->post('sinopse');

        $this->db->set($livro)->insert($livro->table);
    }
    public function get_all_livros()
    {
        $this->db->select('titulo_livro,nome_editora,ano_lancamento,paginas,sinopse');
        $query = $this->db->get_where('livros, editoras','editora = id_editora');
        return $query->result_array();
    }
    /**
     *
     */
     public function count_all_livros()
     {
        return $this->db->count_all($this->table);
     }
}
