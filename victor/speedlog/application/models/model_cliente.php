<?php
    class Model_cliente extends CI_Model
    {
        public $nome_cliente;
        public $usuario_cliente;
        public $email_cliente;
        public $senha_cliente;
        public $cep_cliente;
        public $cpf_cliente;
        public $numero_telefone_cliente;

        public function adicionar_cliente($nome_cliente,$usuario_cliente,$email_cliente, $senha_cliente, $cep_cliente, $cpf_cliente, $numero_telefone_cliente){
                $this->nome_cliente    = $nome_cliente; // please read the below note
                $this->usuario_cliente = $usuario_cliente;
                $this->email_cliente = $email_cliente;
                $this->senha_cliente    = $senha_cliente;
                $this->cep_cliente    = $cep_cliente;
                $this->cpf_cliente     = $cpf_cliente;
                $this->numero_telefone_cliente    = $numero_telefone_cliente;

                $this->db->insert('clientes', $this);
            }
        
        public function logar_cliente($usuario_cliente,$senha_cliente){

         $this->db->select('*');
         $this->db->from('clientes');

         $array = array('usuario_cliente' => $usuario_cliente, 'senha_cliente' => $senha_cliente);

         $query = $this->db->where($array);

         return $query->get()->row_array();


        }

}

    
?>