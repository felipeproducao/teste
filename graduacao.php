
<?php

session_start();

include_once("cabecalho.php");
include_once("conexao.php");

$resultado_alunos = "SELECT * FROM alunos";

$executar_alunos = mysqli_query($conn, $resultado_alunos);

$id = $_GET['id'];

$str_sql = "SELECT * FROM dadosalunos WHERE dados_alunos_id = '$id'";

$result_sql = mysqli_query($conn, $str_sql);

$row_dados_alunos = mysqli_fetch_assoc($result_sql);	


?>

<div class="corposite">
	<div class="formulario">
		<form id="myForm" name="form1" action="processardadosalunos.php" method="POST" accept-charset="utf-8">

			Nome Minuscula:<br>       	
			<input id="nome" name="nome" class="nome" value="<?php echo $row_dados_alunos['NomeMinuscula']; ?>" type="text" onClick="copiarTexto()" onclick="this.select()" autofocus><br>

			Nome Maiuscula:<br>
			<input id="nomeM" name="nomeM" class="nome" value="<?php echo $row_dados_alunos['NomeMaiuscula']; ?>" type="text" onClick="copiarTexto1()" style="text-transform:uppercase;" onclick="this.select()"><br>

			Nascimento (xx/xx/xxxx):<br> 	
			<input id="nascimento" name="nascimento" class="nome" value="<?php echo $row_dados_alunos['Nascimento']; ?>" type="text" onClick="copiarTexto2()" onclick="this.select()"><br>

			Nascimento (xx de xxxxxx de xxxx):<br> 	
			<input id="nascimentoE" name="nascimentoE" class="nome" value="<?php echo $row_dados_alunos['NascimentoE']; ?>" type="text" onClick="copiarTexto3()" onclick="this.select()"><br>

			Naturalidade cidade:<br> 	
			<input id="naturalidade" name="naturalidade" class="nome" value="<?php echo $row_dados_alunos['Naturalidadecidade']; ?>" type="text" onClick="copiarTexto4()" onclick="this.select()"><br>

			Filiação:<br> 		
			<input required id="filiacao" name="filiacao" class="nome" value="<?php echo $row_dados_alunos['Filiacao']; ?>" type="text" onClick="copiarTexto5()" onclick="this.select()"><br>

			RG:<br> 			
			<input required id="RG" name="RG" class="nome" value="<?php echo $row_dados_alunos['RG']; ?>" type="text" onClick="copiarTexto6()" onclick="this.select()"><br>

			Órgão Emissor:<br> 			
			<input required id="orgao" name="orgao" class="nome" value="<?php echo $row_dados_alunos['OrgaoEmissor']; ?>" type="text" onClick="copiarTexto7()" onclick="this.select()"><br>

			CPF:<br> 			
			<input required id="CPF" name="CPF" class="nome" value="<?php echo $row_dados_alunos['CPF']; ?>" type="text" onClick="copiarTexto8()" onclick="this.select()"><br>

			Conclusão (xx/xx/xxxx):<br> 		
			<input required id="conclusao" name="conclusao" class="nome" value="<?php echo $row_dados_alunos['Conclusao']; ?>" type="text" onClick="copiarTexto10()" onclick="this.select()"><br>

			Colação (xx/xx/xxxx):<br> 		
			<input required id="colacao" name="colacao" class="nome" value="<?php echo $row_dados_alunos['Colacao']; ?>" type="text" onClick="copiarTexto11()" onclick="this.select()"><br>

			Conclusão (xx de xxxxxx de xxxx):<br> 		
			<input required id="conclusaoE" name="conclusaoE" class="nome" value="<?php echo $row_dados_alunos['ConclusaoE']; ?>" type="text" onClick="copiarTexto12()" onclick="this.select()"><br>

			Colação (xx de xxxxxx de xxxx):<br> 		
			<input required id="colacaoE" name="colacaoE" class="nome" value="<?php echo $row_dados_alunos['ColacaoE']; ?>" type="text" onClick="copiarTexto13()" onclick="this.select()"><br>

			Data de Hoje (xx/xx/xxxx):<br>	
			<input id="datahoje" name="datahoje" class="nome" value="<?php echo $row_dados_alunos['DatadeHoje']; ?>" type="text" onClick="copiarTexto14()" onclick="this.select()"><br>

			Data de Hoje (xx de xxxxxx de xxxx):<br> 	
			<input id="datahojeE" name="datahojeE" class="nome" value="<?php echo $row_dados_alunos['DatadeHojeE']; ?>" type="text" onClick="copiarTexto15()" onclick="this.select()"><br>

			<div class="enviar">

				<button onclick="return validar()" class="btn btn-success">Salvar</button>

			</div>

		</form>
		<div class="limpar">

			<button onclick="limparGraduacao()" class="btn btn-info">Limpar</button>
			
		</div>

		
		
	</div>
	<div class="listamaster">
		<div class="lista">

			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Inscrição</th>
						<th class="text-center">Nome</th>
						<th class="text-center">Criado</th>


					</tr>
				</thead>
				<tbody>
					<?php 
					while($row_alunos = mysqli_fetch_assoc($executar_alunos)){
						?>
						<tr>

							<td class="text-center"><?php echo $row_alunos['alunos_id'];?></td>
							<td class="text-center"><a href="graduacao.php?id=<?php echo $row_alunos['alunos_id'] ?>"><?php echo $row_alunos['nome'];?></a></td>
							<td class="text-center"><?php echo date('d/m/Y H:i:s', strtotime($row_alunos['criado']));?></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- logo do sistema -->
<img src="#" alt="">
</div>

			<?php 
				if(isset($_SESSION['duplicado'])){ ?>
					<div id="divdesaparecer" class="alert alert-warning duplicado">
						<?php
						echo $_SESSION['duplicado'];
						unset($_SESSION['duplicado']);
						?>
					</div>
			<?php } ?>

<?php

include_once("rodape.php");

?>	