
<?php
session_start();
include_once("cabecalho.php");
include_once("conexao.php");

$mostrar_sql = "SELECT * FROM alunos_pos_graduacao";

$executa_mostrar_sql = mysqli_query($conn, $mostrar_sql);

$id = $_GET['id'];

$url_sql = "SELECT * FROM dados_alunos_pos_graduacao WHERE id = '$id'";

$executa_query_url = mysqli_query($conn, $url_sql);

$row_dados_url = mysqli_fetch_assoc($executa_query_url);
?>

<div class="corposite">
	<div class="formulario">
		<form action="processa_posgraduacao.php" method="POST" accept-charset="utf-8">
			
			Nome Minuscula:<br>       	
			<input id="nome" name="nome" class="nome" value="<?php echo $row_dados_url['nome']; ?>" type="text" onClick="copiarTexto()" onclick="this.select()" autofocus><br>

			Nome Maiuscula:<br>
			<input id="nomeM" name="nomeM" class="nome" value="<?php echo $row_dados_url['nomeM']; ?>" type="text" onClick="copiarTexto1()" style="text-transform:uppercase;" onclick="this.select()"><br>

			Nascimento (xx/xx/xxxx):<br> 	
			<input id="nascimento" name="nascimento" class="nome" value="<?php echo $row_dados_url['nascimento']; ?>" type="text" onClick="copiarTexto2()" onclick="this.select()"><br>

			Naturalidade cidade:<br> 	
			<input id="naturalidade" name="naturalidade" class="nome" value="<?php echo $row_dados_url['cidade']; ?>" type="text" onClick="copiarTexto4()" onclick="this.select()"><br>

			Filiação:<br> 		
			<input required id="filiacao" name="filiacao" class="nome" value="<?php echo $row_dados_url['filiacao']; ?>" type="text" onClick="copiarTexto5()" onclick="this.select()"><br>

			RG:<br> 			
			<input required id="RG" name="RG" class="nome" value="<?php echo $row_dados_url['RG']; ?>" type="text" onClick="copiarTexto6()" onclick="this.select()"><br>
			Órgão Emissor:<br> 			
			<input required id="orgao" name="orgao" class="nome" value="<?php echo $row_dados_url['orgao']; ?>" type="text" onClick="copiarTexto7()" onclick="this.select()"><br>

			Período de Realização:<br> 		
			<input id="periodo" name="periodo" class="nome" value="<?php echo $row_dados_url['periodo']; ?>" type="text" onClick="copiarTexto16()" onclick="this.select()"><br>

			Graduação:<br> 		
			<input id="graduacao" name="graduacao" class="nome" value="<?php echo $row_dados_url['graduacao']; ?>" type="text" onClick="copiarTexto17()" onclick="this.select()"><br>

			Data de Hoje (xx de xxxxxx de xxxx):<br> 	
			<input id="datahojeE" name="datahojeE" class="nome" value="<?php echo $row_dados_url['datahojeE']; ?>" type="text" onClick="copiarTexto15()" onclick="this.select()"><br>

			<div class="enviar">

				<button class="btn btn-success">Salvar</button>

			</div>

		</form>
		<div class="limpar">

			<button onclick="limparPos()" class="btn btn-info">Limpar</button>
			
		</div>
	</div>
	<div class="listamaster">
		<div class="lista">

			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Inscrição</th>
						<th class="text-center">Nome</th>
						<th class="text-center">Data</th>
					</tr>
				</thead>
				<tbody>
					<?php 

					while($row_alunos_pos = mysqli_fetch_assoc($executa_mostrar_sql)){

						?>
						<tr>
							<td class="text-center"><?php echo $row_alunos_pos['id_pos']; ?></td>
							<td class="text-center"><a href="posgraduacao.php?id=<?php echo $row_alunos_pos['id_pos']; ?>"><?php echo $row_alunos_pos['nome']; ?></a></td>
							<td class="text-center"><?php echo date('d/m/Y H:i:s', strtotime($row_alunos_pos['criado'])); ?></td>
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

include_once("rodape.php");

?>	