

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Informações do cliente 'nome do cliente'</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<label>
					Filtre:
					<input type="text" name="" value="" id="filtrar-tabela" placeholder="Digite o nome do paciente">
				</label>
				<table class="table table-hover"  id="tabela">

					<thead>
						<tr>
							<th>Nome do cliente</th>
							<th>Valor do pagamento</th>
							<th>Descrição do produto</th>
							<th>Horas trabalhadas</th>
						</tr>
					</thead>
				
					<tbody>
						
						<?php while($dado = $con1->fetch_array()){ ?>
						<tr>
							<td><?php echo $dado["nome"]; ?></td>
							<td><?php echo $dado["valor_pagamento"]; ?></td>
							<td><?php echo $dado["descricao_produto"]; ?></td>
							<td><?php echo $dado["horas_trabalho"]; ?></td>
						</tr>
						<?php } ?>
					
					</tbody>
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

