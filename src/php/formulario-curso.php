<?php require_once("cabecalho.php"); ?>
​
<div class="container">
	<picture>
		<source srcset="../img/2.jpg" type="image/svg+xml">
			<img src="../img/2.jpg" class="img-fluid " alt="...">
		</picture>
		<div class="a ">

			<form action="controle-curso.php" method="post" accept-charset="utf-8">
				<p><strong>Dados do curso</strong></p>
				<label>
					Nome do curso:
					<br>
					<input type="text" class="form-control input" name="nome_curso" value="" placeholder="WordPress">

				</label>			

				<label>
					Dificuldade do curso:
					<br>
					<select class="form-control input" id="">
						<option>Aluno</option>
						<option>Genin</option>
						<option>Chunin</option>
						<option>Jounin</option>
						<option>Hogake</option>
					</select>

				</label>

				<br>
				<label>
					Descrição do curso:
					<br>
					<textarea class="form-control  textarea" name="descricao_curso" value=""  rows="3" cols="60" placeholder="Site dinamico"></textarea>

				</label>
				<br>
				<label>
					Projetos baseados no curso:
					<br>
					<input type="text" class="form-control input" name="projetos_curso" value="" placeholder="Site cabeleireiro">

				</label>

				<label>
					Projeto finalizado com o tema do curso:
					<br>
					<input type="text" class="form-control input" name="projeto_finalizado" value="" placeholder="Site cadastro">

				</label>
				<br>
				<label>
					Projeto em andamento com o tema do curso:
					<br>
					<input type="text"  class="form-control input" name="projeto_concluido" value="" placeholder="Loja online">

				</label>

				<label >
					Projeto concluido com o tema do curso:
					<br>
					<input type="text"  class="form-control input" name="projeto_andamento" value="" placeholder="Site de assinatura">

				</label>
				<br>
				<label class="">
					Data e hora de inicio:
					<br>
					<input type="datetime-local"  class="form-control input" name="data_hora_inicio" value="" placeholder="2011-08-19T13:45:00">

				</label>

				<label class="">
					Data e hora de finalização: 
					<br>
					<input type="datetime-local"  class="form-control input" name="data_hora_finalizacao" value="" placeholder="2011-08-19T13:45:00">

				</label>

				<br>
				<button type="submit" class="btn btn-primary botao-curso">Enviar</button>
				<a href="../php/index.php" class="btn btn-primary botao-curso" role="button">Voltar</a>
				<!-- Large modal -->
				<button type="button" class="btn btn-primary botao-curso" data-toggle="modal" data-target=".bd-example-modal-lg">Tabela de curso</button>
			</form>

			<!-- Assim que enviar os dados será necessario envia-los para uma tabelinha para o controle-curso-->

			<div class="b">
				<?php require_once("tabela-curso.php"); ?>
			</div>

		</div>
	</div>


	<?php require_once("rodape.php"); ?>