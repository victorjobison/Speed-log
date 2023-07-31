<?php
class Model_dash extends CI_Model{
    public $id_adm;

    public function getlistarpedidosfi(){
        $this->db->select('*');
        $this->db->from('envios');
        $this->db->join('parceiros','ri_parceiro = ri_parc');
        $this->db->join('clientes','ri_cliente = ri_clien');
        $this->db->where('status="Finalizado"');

        
        $query=$this->db->get();
        return $query->result();

    }
    public function getlistarpedidosan(){
        $this->db->select('*');
        $this->db->from('envios');
        $this->db->join('parceiros','ri_parceiro = ri_parc');
        $this->db->join('clientes','ri_cliente = ri_clien');
        $this->db->where('status="Andamento"');

        
        $query=$this->db->get();
        return $query->result();

    }
    public function getlistarpedidosag(){
        $this->db->select('*');
        $this->db->from('envios');
        $this->db->where('status="Agendado"');

        
        $query=$this->db->get();
        return $query->result();

    }
    public function getlistarclientes(){
        $this->db->select('*');
        $this->db->from('clientes');
        
        $query=$this->db->get();
        return $query->result();
    }
    public function getlistarparceiros(){
        $this->db->select('*');
        $this->db->from('parceiros');
        
        $query=$this->db->get();
        return $query->result();
    }
    public function getadmin(){
        $this->db->select('*');
        $this->db->from('administrador');
        $this->db->where("id_adm=".$_SESSION['administrador'][0]['id_adm']);
        
        $query=$this->db->get();
        return $query->result();
    }

}

?>