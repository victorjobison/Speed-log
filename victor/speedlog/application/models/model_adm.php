<?php
    class Model_adm extends CI_Model
    {
        public $nome_adm;
        public $cpf_adm;
        public $email_adm;
        public $usuario_adm;
        public $senha_adm;
        

        public function adicionar_adm($nome_adm, $cpf_adm, $email_adm, $usuario_adm, $senha_adm){
                $this->nome_adm    = $nome_adm; // please read the below note
                $this->cpf_adm    = $cpf_adm; // please read the below note
                $this->email_adm  = $email_adm;
                $this->usuario_adm     = $usuario_adm;
                $this->senha_adm     = $senha_adm;
                

                $this->db->insert('administrador', $this);
            }
        
        public function logar_adm($usuario_adm,$senha_adm){

         $this->db->select('*');
         $this->db->from('administrador');


         $array = array('usuario_adm' => $usuario_adm, 'senha_adm' => $senha_adm);
         $aviso = "";
         $query = $this->db->where($array);

         return $query->get()->row_array();


        }
        

}

    
?>