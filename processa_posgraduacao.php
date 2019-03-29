<?php
	
	session_start();

	include_once("conexao.php");

	$nome = $_POST['nome'];

	$nomeM = $_POST['nomeM'];

	$nascimento = $_POST['nascimento'];

	$naturalidade = $_POST['naturalidade'];

	$filiacao = $_POST['filiacao'];

	$RG = $_POST['RG'];

	$orgao = $_POST['orgao'];

	$periodo = $_POST['periodo'];

	$graduacao = $_POST['graduacao'];

	$datahojeE = $_POST['datahojeE'];

	$dupicado_pos = "SELECT nome FROM alunos_pos_graduacao WHERE nome = '$nome'";

	$executar_duplicado = mysqli_query($conn, $dupicado_pos);

	if(mysqli_num_rows($executar_duplicado) > 0){

		$_SESSION['duplicado'] = "Esse aluno já está salvo";

	}else{

	$sql_include = "INSERT INTO dados_alunos_pos_graduacao (nome, nomeM, nascimento, cidade, filiacao, RG, 	orgao, periodo, graduacao, 	datahojeE) VALUES ('$nome', '$nomeM', '$nascimento', '$naturalidade', '$filiacao', '$RG', '$orgao', '$periodo', '$graduacao', '$datahojeE')";

	$sql_alunos = "INSERT INTO alunos_pos_graduacao (nome, criado) VALUES ('$nome', NOW())";

	$executar_query = mysqli_query($conn, $sql_include);

	$alunos_query = mysqli_query($conn, $sql_alunos);

	}

	header("Location: posgraduacao.php");

?>