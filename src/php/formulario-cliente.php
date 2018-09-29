<?php require_once("cabecalho.php"); ?>
<div class="container-fluid ">
	<picture>
		<source srcset="../img/6.jpeg" type="image/svg+xml">
			<img src="../img/6.jpeg" class="img-fluid img-responsive" alt="...">
		</picture>
		<div class="a row ">
			<div class="col col-sm-12 col-md-12  col-lg-12  col-xl-12  col-xs-12">
				

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
					<button type="button" class="btn btn-outline-info botao-tabela" data-toggle="modal" data-target="#exampleModal">
						Tabela cliente
					</button>
					<button type="submit" class="btn btn-primary btn-lg botao-enviar">Enviar</button>
					<a href="../php/index.php" class="btn btn-danger btn-lg botao-voltar" role="button">Voltar</a>
					<div><?=$_SESSION['msg']?></div>
					<!-- Button trigger modal -->


				</form>


				<div class="b">
					<?php require_once("tabela-cliente.php"); ?>
				</div>
			</div>
		</div>
	</div>
	<?php require_once("rodape.php"); ?>