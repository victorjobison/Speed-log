<?php
    class Model_parceiro extends CI_Model
    {
        public $nome_parceiro;
        public $usuario_parceiro;
        public $email_parceiro;
        public $senha_parceiro;
        public $cpf_parceiro;
        public $numero_telefone_parceiro;
        public $placa_veiculo;
        public $foto_parceiro;

        public function adicionar_parceiro($nome_parceiro, $usuario_parceiro, $email_parceiro,$senha_parceiro, $cpf_parceiro, $numero_telefone_parceiro, $placa_veiculo, $foto_parceiro){
                $this->nome_parceiro   = $nome_parceiro; // please read the below note
                $this->usuario_parceiro  = $usuario_parceiro;
                $this->email_parceiro  = $email_parceiro;
                $this->senha_parceiro     = $senha_parceiro;
                $this->cpf_parceiro    = $cpf_parceiro;
                $this->numero_telefone_parceiro     = $numero_telefone_parceiro;
                $this->placa_veiculo     = $placa_veiculo;
                $this->foto_parceiro    = $foto_parceiro;

                $this->db->insert('parceiros', $this);
            }
        
        public function logar_parceiro($usuario_parceiro,$senha_parceiro){

         $this->db->select('*');
         $this->db->from('parceiros');

         $array = array('usuario_parceiro' => $usuario_parceiro, 'senha_parceiro' => $senha_parceiro);

         $query = $this->db->where($array);

         return $query->get()->row_array();


        }

}

    
?>
