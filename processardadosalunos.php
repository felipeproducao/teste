<?php
	
	session_start();	

	include_once("conexao.php");


	$nome = $_POST['nome'];

	$nomeM = $_POST['nomeM'];

	$nascimento = $_POST['nascimento'];

	$nascimentoE = $_POST['nascimentoE'];

	$naturalidade = $_POST['naturalidade'];

	$filiacao = $_POST['filiacao'];

	$RG = $_POST['RG'];

	$orgao = $_POST['orgao'];

	$CPF = $_POST['CPF'];

	$conclusao = $_POST['conclusao'];

	$colacao = $_POST['colacao'];

	$conclusaoE = $_POST['conclusaoE'];

	$colacaoE = $_POST['colacaoE'];

	$datahoje = $_POST['datahoje'];

	$datahojeE = $_POST['datahojeE'];



	$dupli_sql = "SELECT nome FROM alunos WHERE nome='$nome'";

	$dupli_query = mysqli_query($conn, $dupli_sql);

	if(mysqli_num_rows($dupli_query) > 0){

		$_SESSION['duplicado'] = "Esse aluno já está salvo";

	}else{

	$sql_dados = "INSERT INTO dadosalunos (NomeMinuscula, NomeMaiuscula, Nascimento, NascimentoE, Naturalidadecidade, Filiacao, RG, OrgaoEmissor, CPF, Conclusao, Colacao, ConclusaoE, 	ColacaoE, DatadeHoje, DatadeHojeE, criacao) VALUES ('$nome', '$nomeM', '$nascimento', '$nascimentoE', '$naturalidade', '$filiacao', '$RG', '$orgao', '$CPF', '$conclusao', '$colacao', '$conclusaoE', '$colacaoE', '$datahoje', '$datahojeE', NOW())";

	$sql_alunos = "INSERT INTO alunos (nome, criado) VALUES ('$nome', NOW())";

	$ex_query = mysqli_query($conn, $sql_dados);

	$alunos_query = mysqli_query($conn, $sql_alunos);
}
	header("Location: graduacao.php");

?>