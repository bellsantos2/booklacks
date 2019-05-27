<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editora_model extends CI_Model{
    // Definindo tabela
    private $table = 'editoras';
    // Definindo colunas da tabela editoras
    private $id_editora;
    public $nome_editora;
    public $rua;
    public $numero;
    public $bairro;
    public $email;
    /**
     *
     */
    public function insert()
    {
        // Criando uma nova editora
        $editora = new Editora_model();
        // Receber os dados via POST
        $editora->nome_editora  = $this->input->post('nome_editora');
        $editora->rua           = $this->input->post('rua');
        $editora->numero        = $this->input->post('numero');
        $editora->bairro        = $this->input->post('bairro');
        $editora->email         = $this->input->post('email');
        // Criando query para inserção
        $this->db->set($editora)->insert($editora->table);
    }
    /**
     *
     */
    public function get_all_editoras()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    /**
     *
     */
    public function count_all_editoras()
    {
        // Total de Editoras
        return $this->db->count_all($this->table);
    }
	/**
     *
     */
	public function get_editoras_dropdown()
	{
		// Selecionando os campos da tabela
		$this->db->select('id_editora,nome_editora');
		// Realizado a consulta
		$query = $this->db->get($this->table);
		// Retornar as editoras para criação do dropdown
		return $query->result_array();
	}
}
