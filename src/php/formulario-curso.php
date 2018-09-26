<?php require_once("cabecalho.php"); ?>
<div class="container">
	<div class="a border">

		<form action="controle-curso.php" method="post" accept-charset="utf-8">
			<p><strong>Dados do curso</strong></p>
			<label>
				Nome do curso:
				<br>
				<input type="text" class="form-control" name="nome_curso" value="">

			</label>			
			
			<label>
				Nível de dificuldade:
				<br>
				<input type="text" class="form-control" name="dificuldade" value="">

			</label>
			
			<label>
				Descrição:
				<br>
				<input type="text" class="form-control" name="descricao_curso" value="">

			</label>
			<br>
			<label>
				Projetos baseados no curso:
				<br>
				<input type="text" class="form-control" name="projetos_curso" value="">

			</label>
			
			<label>
				Projeto finalizado:
				<br>
				<input type="text" class="form-control" name="projeto_finalizado" value="">

			</label>
			<br>
			<label>
				Projeto em andamento:
				<br>
				<input type="text"  class="form-control" name="projeto_concluido" value="">

			</label>
			
			<label>
				Projeto concluido:
				<br>
				<input type="text"  class="form-control" name="projeto_andamento" value="">

			</label>
			<br>
			<label>
				Data e hora de inicio:
				<br>
				<input type="datetime"  class="form-control" name="data_hora_inicio" value="">

			</label>
			
			<label>
				Data e hora de finalização: 
				<br>
				<input type="datetime"  class="form-control" name="data_hora_finalizacao" value="">

			</label>
			
			<br>
			<button type="submit" class="btn btn-primary">Enviar</button>

		</form>
		
		<!-- Assim que enviar os dados será necessario envia-los para uma tabelinha para o controle-curso-->

		<div>
			<?php require_once("tabela-curso.php"); ?>
		</div>
		
	</div>
</div>


<?php require_once("rodape.php"); ?>