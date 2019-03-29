<?php
	session_start();
	include_once("conexao.php");

	if((isset($_POST['txt_usuario'];)) && (isset($_POST['txt_senha'];))){

		$usuario_rc = mysqli_real_escape_string($conn, $_POST['txt_usuario']);

		$senha_rc = mysqli_real_escape_string($conn, $_POST['txt_senha']);

		$senha = sha1(md5($senha_rc));

		$result_sql = "SELECT * FROM funcionario WHERE usuario = '$usuario_rc' AND senha = '$senha'";

		$executa_sql = mysqli_query($conn, $result_sql);

		$verifica = mysqli_fetch_assoc($executa_sql);

		if(isset($verifica)){
			$_SESSION['usuario_id'] = $verifica['usuario_id'];
			$_SESSION['nome'] = $verifica['nome'];
			$_SESSION['usuario'] = $verifica['usuario'];
			$_SESSION['nivel_acesso_fk_id'] = $verifica['nivel_acesso_fk_id'];

			if($_SESSION['nivel_acesso_fk_id'] == "1"){
				header("Location: graduacao.php");
			}elseif($_SESSION['nivel_acesso_fk_id'] == "2"){
				header("Location: producao.php");
			}else{
				$_SESSION['msg'] = "ERRO - Entre em contado com um administrador";
				header("Location: index.php");
			}
		}else{
			$_SESSION['msg'] = "Usuario ou senha incorreto";
			header("Location: index.php");
		}

	}else{
		$_SESSION['msg'] = "Usuario ou senha incorreto";
		header("Location: index.php");
	}

?>