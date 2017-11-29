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

?>