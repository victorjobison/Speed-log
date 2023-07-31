<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($_SESSION)){
	session_start();
}

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('view_topo');
		$this->load->view('view_inicio');
		$this->load->view('view_rodape');	
	}

	public function sobre()
	{
		$this->load->helper('url');
		if(isset($_SESSION['parceiro'])){

			$this->load->view('view_topo2');

		}else if(isset($_SESSION['cliente'])){

			$this->load->view('view_topo3');

		}else if(isset($_SESSION['administrador'])){

			$this->load->view('view_topo4');

		}else {$this->load->view('view_topo');}

		$this->load->view('view_sobre');
		$this->load->view('view_rodape');	
	}
	public function servicos()
	{
		$this->load->helper('url');
		if(isset($_SESSION['cliente'])){
			
			$this->load->view('view_topo3');

		}else 
		{$this->load->view('view_topo');}

		$this->load->view('view_servicos');
		$this->load->view('view_rodape');	
	}
	public function contato()
	{
		$this->load->helper('url');
		if(isset($_SESSION['parceiro'])){

			$this->load->view('view_topo2');

		}else if(isset($_SESSION['cliente'])){

			$this->load->view('view_topo3');

		}else if(isset($_SESSION['administrador'])){

			$this->load->view('view_topo4');

		}else {$this->load->view('view_topo');}
		$this->load->view('view_contato');
		$this->load->view('view_rodape');	
	}

	



/* PARTE DO USUÁRIO */////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function cadastro_cliente()
	{
		$this->load->helper('url');
		$this->load->view('view_cadastro_cliente');
	}

	public function add_cliente()
	{
		$nome_cliente = $_POST['nome'];
		$usuario_cliente = $_POST['usuario'];
		$email_cliente = $_POST['email'];
		$senha_cliente = $_POST['senha'];
		$cep_cliente = $_POST['cep'];
		$cpf_cliente = $_POST['cpf'];
		$numero_telefone_cliente = $_POST['telefone'];
		// Verificar se algum campo obrigatório está vazio
		if (empty($nome_cliente) || empty($usuario_cliente) || empty($email_cliente) || empty($cep_cliente) || empty($cpf_cliente) || empty($numero_telefone_cliente) || empty($senha_cliente)) {
			$_SESSION['logi'] = "<div class='alert alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";
			$this->load->view('view_cadastro_adm');
		}else{
			$this->load->model('model_cliente');
			$this->model_cliente->adicionar_cliente($nome_cliente, $usuario_cliente, $email_cliente, $senha_cliente, $cep_cliente, $cpf_cliente, $numero_telefone_cliente);

			$this->load->helper('url');
			$this->load->view('view_login_cliente');
		}
	}

	public function login_cliente()
	{
		$this->load->helper('url');
		$this->load->view('view_login_cliente');
	}

	public function autenticar_cliente(){
		$this->load->model('model_cliente');

		 $cliente=$this->model_cliente->logar_cliente($_POST['usuario'],$_POST['senha']);

		if ($cliente){
		session_start();
		$_SESSION['cliente'][0] = $cliente;
		$dados = "Dados Corretos";
		redirect(base_url('index.php/home/servicos_cliente'));

		echo json_encode($dados);

		}else{
			$dados = "Dados Incorretos";
			echo json_encode($dados);
			redirect(base_url('index.php/home/login_cliente'));
			}
	}
	public function servicos_cliente()
	{
		$this->load->helper('url');
		$this->load->view('view_topo3');
		$this->load->view('view_servicos_cliente');
		$this->load->view('view_rodape');
	}
	

	public function meuspedidos()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_pendente();
		$this->load->helper('url');
		if(isset($_SESSION['cliente'])){
			$this->load->view('view_topo3');
		}else 
		{$this->load->view('view_topo');}
		$this->load->view('view_pendente_cliente', $dados);
		$this->load->view('view_rodape');

		
	}
	public function andamento()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_andamento();
		$this->load->helper('url');
		$this->load->view('view_topo3');
		$this->load->view('view_andamento_cliente', $dados);
		$this->load->view('view_rodape');

		
	}


	public function finalizado()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_finalizada();
		$this->load->helper('url');
		$this->load->view('view_topo3');
		$this->load->view('view_finalizado_cliente', $dados);
		$this->load->view('view_rodape');	
	}


/* PARTE DO ENTREGADOR */////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function login_parceiro()
	{ 
		$this->load->helper('url');
		$this->load->view('view_login_parceiro');
	}

	public function cadastro_parceiro()
	{	$_SESSION['logi'] = "<div class='alert alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";
		$this->load->helper('url');
		$this->load->view('view_cadastro_parceiro');
	}
	public function servicos_parceiro()
	{	$this->load->model('model_entregas');
		$dadoss['soma_precos']=$this->model_entregas->getentregas_soma($_SESSION['parceiro'][0]['ri_parceiro']);
		$this->load->helper('url');
		$this->load->view('view_topo2', $dadoss);
		$this->load->view('view_servicos_parceiro');
		$this->load->view('view_rodape');
	}
	public function add_parceiro()
	{   
		$nome_parceiro = $_POST['nome'];
		$usuario_parceiro = $_POST['usuario'];
		$email_parceiro = $_POST['email'];
		$senha_parceiro = $_POST['senha'];
		$cpf_parceiro = $_POST['cpf'];
		$numero_telefone_parceiro = $_POST['telefone'];
		$placa_veiculo = $_POST['placa'];
		$curriculo = $_FILES['imagem'];
		// Verificar se algum campo obrigatório está vazio
		if (empty($nome_parceiro ) || empty($usuario_parceiro) || empty($email_parceiro)|| empty($senha_parceiro) || empty($cpf_parceiro) || empty($numero_telefone_parceiro) || empty($placa_veiculo)|| empty($curriculo)) {
			$_SESSION['logi'] = "<div class='alert alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";
			$this->load->view('view_cadastro_adm');
		}else{
			$configuracao = array(
				'upload_path' => 'assets/img',
				'allowed_types' => 'jpg|gif|png|jpeg|JPG|PNG',
				'file_name' => $usuario_parceiro.'.jpeg',
				'max_size' => '5000' 
			);
			
			$this -> load -> library('upload');
			$this -> upload -> initialize($configuracao);
			if ($this->upload->do_upload('imagem'))
			{echo "";}
			else
			echo $this-> upload -> display_errors();
			$foto_parceiro=$curriculo['name'];
	
			$this->load->model('model_parceiro');
			$this->model_parceiro->adicionar_parceiro($nome_parceiro, $usuario_parceiro, $email_parceiro, $senha_parceiro, $cpf_parceiro, $numero_telefone_parceiro, $placa_veiculo, $foto_parceiro);
			$_SESSION['logi'] = "<div class='logi alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";
			$this->load->helper('url');
			$this->load->view('view_login_parceiro');
		}
		



		
	}

	public function autenticar_parceiro(){
		$this->load->model('model_parceiro');

		// Validar campos
		if (empty($_POST['usuario']) || empty($_POST['senha'])) {
			$_SESSION['logi'] = "<div class='logi alert-primary d-flex align-items-center' role='alert'><i class='bi bi-exclamation-diamond'></i>Preencha todos os campos obrigatórios.</div>";
		}
		$usuario_parceiro = $_POST['usuario'];
		$senha_parceiro = $_POST['senha'];

		// Autenticar
		$parceiro =$this->model_parceiro->logar_parceiro($_POST['usuario'],$_POST['senha']);

		if ($parceiro) {
			// Proteger contra injeção de SQL
			$_SESSION['parceiro'][0] = $parceiro;
			$_SESSION['logi'] = "<div class='logi alert-primary d-flex align-items-center' role='alert'><i class='bi bi-exclamation-diamond'></i>Preencha todos os campos obrigatórios.</div>";

			// Usar HTTPS
			redirect('index.php/home/servicos_parceiro');
		} else {
			// Limitar tentativas de login
			if (!isset($_SESSION['login_attempts'])) {
				$_SESSION['login_attempts'] = 0;
			}
			$_SESSION['login_attempts']++;
			if ($_SESSION['login_attempts'] > 5) {
				sleep(2);
			}
			
			$_SESSION['logi'] = "<div class='logi'><i class='bi bi-exclamation-diamond'></i>
			Dados Incorretos!</div>";
			
			redirect('index.php/home/login_parceiro');
		}
	}
	public function andamento_entregador()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_andamento_entregador();
		$dadoss['soma_precos']=$this->model_entregas->getentregas_soma($_SESSION['parceiro'][0]['ri_parceiro']);
		$this->load->helper('url');
		$this->load->view('view_topo2', $dadoss);
		$this->load->view('view_andamento_parceiro', $dados);
		$this->load->view('view_rodape');	
	}

	public function solicitacoes()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_pendente_entregador();
		$dadoss['soma_precos']=$this->model_entregas->getentregas_soma($_SESSION['parceiro'][0]['ri_parceiro']);
		$this->load->helper('url');
		$this->load->view('view_topo2', $dadoss);
		$this->load->view('view_pendente_parceiro', $dados);
		$this->load->view('view_rodape');	
	}

	public function aceitar($ri_parc, $cdg_envio){
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_update_entregador($ri_parc, $cdg_envio);
		redirect(base_url('index.php/home/andamento_entregador/'.$ri_parc));
	}
	public function finalizar($ri_parc, $cdg_envio){
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_update_finalizar($ri_parc, $cdg_envio);
		redirect(base_url('index.php/home/concluido_parceiro/'.$ri_parc));
	}

	public function concluido_parceiro()
	{
		$this->load->model('model_entregas');
		$dados['dados']=$this->model_entregas->getentregas_concluido_entregador($_SESSION['parceiro'][0]['ri_parceiro']);
		$dadoss['soma_precos']=$this->model_entregas->getentregas_soma($_SESSION['parceiro'][0]['ri_parceiro']);
		$this->load->helper('url');
		$this->load->view('view_topo2', $dadoss);
		$this->load->view('view_concluido_parceiro', $dados);
		$this->load->view('view_rodape');	
	}

/* PARTE DO ADMINISTRADOR */////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function login_adm()
	{
		$this->load->helper('url');
		$this->load->view('view_login_adm');
	}

	public function cadastro_adm()
	{
		$this->load->helper('url');
		$this->load->view('view_cadastro_adm');
	}

	public function add_adm()

	{
		$nome_adm = $_POST['nome'];
		$cpf_adm = $_POST['cpf'];
		$email_adm = $_POST['email'];
		$usuario_adm = $_POST['usuario'];
		$senha_adm = $_POST['senha'];
		
		// Verificar se algum campo obrigatório está vazio
		if (empty($nome_adm) || empty($cpf_adm) || empty($email_adm) || empty($usuario_adm) || empty($senha_adm)) {
			$_SESSION['logi'] = "<div class='alert alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";
			$this->load->view('view_cadastro_adm');
		}else{
			$this->load->model('model_adm');
			$this->model_adm->adicionar_adm($nome_adm, $cpf_adm, $email_adm, $usuario_adm, $senha_adm );
			$_SESSION['logi'] = "<div class='logi alert-primary d-flex align-items-center' role='alert'>Preencha todos os campos obrigatórios.</div>";

			$this->load->helper('url');
			$this->load->view('view_login_adm');
		}
		
	}
	public function autenticar_adm() {
		$this->load->model('model_adm');

		// Validar campos
		if (empty($_POST['usuario']) || empty($_POST['senha'])) {
			echo "<script>alert('Preencha todos os campos obrigatórios');</script>";		
		}
		$usuario_parceiro = $_POST['usuario'];
		$senha_parceiro = $_POST['senha'];

		// Autenticar
		$adm =$this->model_adm->logar_adm($_POST['usuario'],$_POST['senha']);

		if ($adm) {
			// Proteger contra injeção de SQL
			$_SESSION['administrador'][0] = $adm;
			echo "<script>alert('Preencha todos os campos obrigatórios');</script>";		

			// Usar HTTPS
			redirect('index.php/home/administrador');
		} else {
			// Limitar tentativas de login
			if (!isset($_SESSION['login_attempts'])) {
				$_SESSION['login_attempts'] = 0;
			}
			$_SESSION['login_attempts']++;
			if ($_SESSION['login_attempts'] > 5) {
				sleep(2);
			}
			
			echo "<script>alert('Preencha todos os campos obrigatórios');</script>";		

			
			redirect('index.php/home/login_adm');		
		}
	}
	public function administrador()
	{	
		$this->load->model('model_dash');
		$this->load->model('model_regras');
		$dadossss['dados']=$this->model_dash->getadmin();
		$dados['dados']=$this->model_dash->getlistarpedidosfi();
		$dadosan['dados']=$this->model_dash->getlistarpedidosan();
		$dadosag['dados']=$this->model_dash->getlistarpedidosag();
		$dadosc['dados']=$this->model_dash->getlistarclientes();
		$dadosp['dados']=$this->model_dash->getlistarparceiros();
		$dadosss['parametros'] = $this->model_regras->get_regras();

		$this->load->helper('url');
		$this->load->view('view_topo4',$dadossss);
		$this->load->view('view_agendado_adm',$dadosag);
		$this->load->view('view_andamento_adm',$dadosan);
		$this->load->view('view_finalizado_adm',$dados);
		$this->load->view('view_clientes',$dadosc);
		$this->load->view('view_parceiros',$dadosp);
		$this->load->view('view_edicao_adm',$dadosss);


	}
	
	public function calculo()
	{
		$this->load->model('model_regras');
		$dados['parametros'] = $this->model_regras->get_regras();

		/* $this->load->model('model_regras');
		$dados['parametros'] = $this->model_regras->get_regras(); */

		$this->load->helper('url');
		if(isset($_SESSION['cliente'])){
			
			$this->load->view('view_topo3');

		}else 
		{$this->load->view('view_topo');}
		$this->load->view('view_calculo', $dados);
		$this->load->view('view_rodape');	
	}

	public function saircontas()
	{

		if(isset($_SESSION)){
			session_start();
			session_destroy();
			header('Location: '.base_url());
		}
		header('Location: '.base_url());

	}

	public function add_entregas()
	{
		$cep_partida = $_POST['cep_partida'];
		$cep_chegada = $_POST['cep_chegada'];
		$tempo = $_POST['tempo'];
		$distancia = $_POST['distancia'];
		$peso = $_POST['peso'];
		$altura = $_POST['altura_produto'];
		$largura = $_POST['largura_produto'];
		$descricao = $_POST['dec_produto'];
		$cidade_partida = $_POST['cidade_partida'];
		$estado_partida = $_POST['estado_partida'];
		$bairro_partida = $_POST['bairro_partida'];
		$complemento_partida = $_POST['complemento_partida'];
		$rua_partida = $_POST['rua_partida'];
		$cidade_chegada = $_POST['cidade_chegada'];
		$estado_chegada = $_POST['estado_chegada'];
		$bairro_chegada = $_POST['bairro_chegada'];
		$complemento_chegada = $_POST['complemento_chegada'];
		$rua_chegada = $_POST['rua_chegada'];
		$calculo_entrega = $_POST['calculo'];

		$this->load->model('model_entregas');
		$this->model_entregas->adicionar_entrega($cep_partida,$cep_chegada,$tempo, $distancia, $peso, $altura, $largura, $descricao, $cidade_partida, $estado_partida, $bairro_partida, $complemento_partida, $rua_partida, $cidade_chegada, $estado_chegada, $bairro_chegada, $complemento_chegada, $rua_chegada,$calculo_entrega);

		header('Location: '.base_url('index.php/home/meuspedidos'));

	}
	public function comando(){
		$parametro1 = $_POST['parametro1'];
		$parametro2 = $_POST['parametro2'];
		$parametro3 = $_POST['parametro3'];
		$parametro4 = $_POST['parametro4'];
		$parametro5 = $_POST['parametro5'];
		$parametro6 = $_POST['parametro6'];
		$this->load->model('model_regras');
		$this->model_regras->update_regra($parametro1,$parametro2,$parametro3, $parametro4, $parametro5, $parametro6);

		header('Location: '.base_url('index.php/home/administrador'));

		
	}
	


}

