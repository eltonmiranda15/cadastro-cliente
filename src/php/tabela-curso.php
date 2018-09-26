<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tabela de curso</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Informações do cliente 'nome do cliente'</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<label>
				Filtre:
				<input type="text" name="" value="" id="filtrar-tabela" placeholder="Digite o nome do paciente">
			</label>
			<table class="table table-hover" id="tabela">
				<thead>
					<tr>
						<th>Nome do curso</th>
						<th>Nivel de dificuldade</th>
						<th>Descrição</th>
						<th>Projetos baseados no curso</th>
						<th>Projeto finalizado</th>
						<th>Projeto em andamento</th>
						<th>Projeto concluido</th>
						<th>Data e hora de inicio</th>
						<th>Data e hora de finalização</th>
					</tr>
				</thead>
				<tbody>
					<?php while($dado = $con2->fetch_array()){ ?>
					<tr>
						<td><?php echo $dado["nome_curso"]; ?></td>
						<td><?php echo $dado["dificuldade"]; ?></td>
						<td><?php echo $dado["descricao_curso"]; ?></td>
						<td><?php echo $dado["projetos_curso"]; ?></td>
						<td><?php echo $dado["projeto_finalizado"]; ?></td>
						<td><?php echo $dado["projeto_concluido"]; ?></td>
						<td><?php echo $dado["projeto_andamento"]; ?></td>
						<td><?php echo $dado["data_hora_inicio"]; ?></td>
						<td><?php echo $dado["data_hora_finalizacao"]; ?></td>

					</tr>
					<?php 	} ?>
					</tbody>
				
				</table>
			</div>
		</div>
	</div>







