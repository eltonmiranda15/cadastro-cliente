<?php require_once("cabecalho.php"); ?>
<div class="container">
	<div class="a border">
		<form action="controle-cliente.php" method="post" accept-charset="utf-8">
			<p><strong>Dados do cliente</strong></p>
			<label>
				Nome:
				<br>
				<input type="text"  class="form-control" name="nome" value="">
			</label>
			<br>	
			<label>
				Valor do pagamento:
				<br>
				<input type="number"  class="form-control" name="valor_pagamento" value="">
			</label>
			<br>
			<label>
				Descrição do produto:
				<br>
				<input type="text"  class="form-control" name="descricao_produto" value="">
			</label>
			<br>
			<label>
				Horas trabalhadas: 
				<br>
				<input type="number"  class="form-control" name="horas_trabalho" value="">
			</label>
			<br>

			<button type="submit" class="btn btn-primary">Enviar</button>

		</form>

		<div>
			<?php require_once("tabela-cliente.php"); ?>
		</div>
	</div>
</div>
<?php require_once("rodape.php"); ?>