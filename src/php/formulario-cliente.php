<?php require_once("cabecalho.php"); ?>
<div class="container">
	<picture>
  <source srcset="../img/6.jpeg" type="image/svg+xml">
  <img src="../img/6.jpeg" class="img-fluid " alt="...">
</picture>
	<div class="a ">
		<form action="controle-cliente.php" method="post" accept-charset="utf-8">
			<p><strong>Dados do cliente</strong></p>
			<label>
				Nome do cliente:
				<br>
				<input type="text"  class="form-control  input" name="nome" value="">
			</label>
			<br>	
			<label>
				Valor cobrado do projeto(R$):
				<br>
				<input type="number"  class="form-control input" name="valor_pagamento" value="">
			</label>
			<br>
			<label>
				Descrição do produto:
				<br>
				<textarea class="form-control  input" name="descricao_curso" value=""  rows="3" cols="60" placeholder="Site dinamico"></textarea>
			</label>

			<br>
			<label>
				Horas trabalhadas no projeto: 
				<br>
				<input type="time"  class="form-control col-form-label input" name="horas_trabalho" value="">
			</label>
			<br>

			<button type="submit" class="btn btn-primary botao-cliente">Enviar</button>
			<a href="../php/index.php" class="btn btn-primary botao-cliente" role="button">Voltar</a>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary botao-cliente" data-toggle="modal" data-target="#exampleModal">
				Tabela cliente
			</button>

		</form>

		<div class="b">
			<?php require_once("tabela-cliente.php"); ?>
		</div>
	</div>
</div>
<?php require_once("rodape.php"); ?>