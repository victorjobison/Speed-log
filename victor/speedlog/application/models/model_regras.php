<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
class model_regras extends CI_Model {

    public $id_parametro;
    public $descricao_parametro;
    public $valor_parametro;

    public function get_regras(){

        $this->db->select('*'); 
        $this->db->from('api');
        $query = $this->db->get();
        return $query->result();
    }
    public function update_regra($parametro1,$parametro2,$parametro3, $parametro4, $parametro5, $parametro6){

        $this->db->set('valor_parametro',$parametro1);
        $this->db->where('id_parametro ','1');
        $this->db->update('api'); 
        $this->db->set('valor_parametro',$parametro2);
        $this->db->where('id_parametro ','2');
        $this->db->update('api'); 
        $this->db->set('valor_parametro',$parametro3);
        $this->db->where('id_parametro ','3');
        $this->db->update('api'); 
        $this->db->set('valor_parametro',$parametro4);
        $this->db->where('id_parametro ','4');
        $this->db->update('api'); 
        $this->db->set('valor_parametro',$parametro5);
        $this->db->where('id_parametro ','5');
        $this->db->update('api'); 
        $this->db->set('valor_parametro',$parametro6);
        $this->db->where('id_parametro ','6');
        $this->db->update('api'); 

    }  
}