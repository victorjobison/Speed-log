<?php
    class Model_entregas extends CI_Model
    {
        
        public $cep_partida;
        public $cep_chegada;
        public $tempo;
        public $status;
        public $distancia;
        public $peso;
        public $altura;
        public $largura;
        public $descricao;
        public $cidade_partida;
        public $estado_partida;
        public $bairro_partida;
        public $complemento_partida;
        public $rua_partida;
        public $cidade_chegada;
        public $estado_chegada;
        public $bairro_chegada;
        public $complemento_chegada;
        public $rua_chegada;
        public $calculo_entrega ;
        public $valor_parceiro;
        public $ri_clien;
        public $ri_parc;
        


        public function adicionar_entrega($cep_partida,$cep_chegada,$tempo, $distancia, $peso, $altura, $largura, $descricao, $cidade_partida, $estado_partida, $bairro_partida, $complemento_partida, $rua_partida, $cidade_chegada, $estado_chegada, $bairro_chegada, $complemento_chegada, $rua_chegada,$calculo_entrega){
                $this->cep_partida= $cep_partida;
                $this->cep_chegada= $cep_chegada;
                $this->tempo= $tempo;
                $this -> status= "Agendado";
                $this->distancia= $distancia;
                $this->peso= $peso;
                $this->altura= $altura;
                $this->largura= $largura;
                $this->descricao= $descricao;
                $this->cidade_partida= $cidade_partida;
                $this->estado_partida= $estado_partida;
                $this->bairro_partida= $bairro_partida;
                $this->complemento_partida = $complemento_partida;
                $this->rua_partida = $rua_partida;
                $this->cidade_chegada = $cidade_chegada;
                $this->estado_chegada = $estado_chegada;
                $this->bairro_chegada = $bairro_chegada;
                $this->complemento_chegada = $complemento_chegada;
                $this->rua_chegada= $rua_chegada;
                $this->calculo_entrega = $calculo_entrega;
                $valor_parceiro = ((70/100)* $calculo_entrega);
                $this->valor_parceiro = number_format($valor_parceiro, 2);
                $this->ri_clien= $_SESSION['cliente'][0]['ri_cliente'];
                $this->db->insert('envios', $this);
            }

            public function getentregas_pendente(){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Agendado' and ri_clien=".$_SESSION['cliente'][0]['ri_cliente']);
                $this->db->join('clientes','ri_cliente = ri_clien');
                $query=$this->db->get();
                return $query->result();
            }

            public function getentregas_andamento(){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Andamento'and ri_clien=".$_SESSION['cliente'][0]['ri_cliente']);
                $this->db->join('clientes','ri_cliente = ri_clien');
                $this->db->join('parceiros','ri_parceiro= ri_parc','left');
                $query=$this->db->get();
                return $query->result();
            }

            public function getentregas_finalizada(){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Finalizado' and ri_clien=".$_SESSION['cliente'][0]['ri_cliente']);
                $this->db->join('clientes','ri_cliente=ri_clien');
                $this->db->join('parceiros','ri_parceiro=ri_parc','left');
                $query=$this->db->get();
                return $query->result();
            }

            public function getentregas_pendente_entregador(){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Agendado'");
                $this->db->join('clientes','ri_cliente=ri_clien');
                $query=$this->db->get();
                return $query->result();
            }
            public function getentregas_andamento_entregador(){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Andamento' and ri_parc=".$_SESSION['parceiro'][0]['ri_parceiro']);
                $this->db->join('clientes','ri_cliente=ri_clien');
                $query=$this->db->get();
                return $query->result();
            }
            public function getentregas_concluido_entregador($ri_parc){
                $this->db->select('*');
                $this->db->from('envios');
                $this->db->where("status='Finalizado' and ri_parc=".$ri_parc);
                $this->db->join('clientes','ri_cliente=ri_clien');
                $query=$this->db->get();
                return $query->result();
            }
            public function getentregas_soma($ri_parc){
                $query = $this->db->query('SELECT SUM(valor_parceiro) as soma FROM envios where status="Finalizado" and ri_parc='.$ri_parc);
                return $query->row()->soma;
            }
            public function getentregas_update_entregador($ri_parc, $cdg_envio){
                $sql = "UPDATE envios SET status = 'Andamento' , ri_parc = $ri_parc WHERE cdg_envio = $cdg_envio";
                $this -> db -> query ($sql);
            }
            public function getentregas_update_finalizar($ri_parc, $cdg_envio){
                $sql = "UPDATE envios SET status = 'Finalizado' , ri_parc = $ri_parc WHERE cdg_envio = $cdg_envio";
                $this -> db -> query ($sql);
            }

            public function getentregas_update_usuario($ri_parc, $cdg_envio){
                $sql = "UPDATE envios SET status = 'Andamento' , ri_parc = $ri_parc WHERE cdg_envio = $cdg_envio";
                $this -> db -> query ($sql);
            }

            public function getentregas_update_finalizar_user($ri_parc, $cdg_envio){
                $sql = "UPDATE envios SET status = 'Finalizado' , ri_parc = $ri_parc WHERE cdg_envio = $cdg_envio";
                $this -> db -> query ($sql);
            }
        }
