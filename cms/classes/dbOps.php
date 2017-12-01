<?php

require_once('Sql.php');

$data['response'] = true;

$db = new Sql();
if(!$db){
	$data['response'] = false;
	$data['message'] = 'Erro na conexão com o banco de dados';
}

call_user_func($_POST['method'],$db,$_POST['data']);

function Login($db,$param){

	$response = $db->select('users',['id','name','email'],['password' => hash('sha256', $param['password']), 'email' => $param['username']]);
	if(count($response) > 0){
		$data['message'] = $response;
		session_start();
		$_SESSION['userid'] = $response['id'];
		$_SESSION['name'] = $response['name'];
		$_SESSION['email'] = $response['email'];
	}
	else{
		$data['response'] = false;
		$data['message'] = 'Usuário ou senha inválidos';
	}

	echo json_encode($data);
}

function Save($db,$param){
	if($param['fields']['id'] == ''){
		unset($param['fields']['id']);
		$data['response'] = $db->insert($param['table'],$param['fields']);
		$data['message'] = 'Registro inserido com sucesso';
	}
	else{
		$id = $param['fields']['id'];
		unset($param['fields']['id']);
		$data['response'] = $db->update($param['table'],$param['fields'],$id);	
		$data['message'] = 'Registro atualizado com sucesso';
	}

	echo json_encode($data);
}


?>