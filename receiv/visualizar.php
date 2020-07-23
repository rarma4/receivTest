<?php
	include "includes/header.php";
	include "class/ClassCrud.php";
	session_start();
?>
<div class="container">
	<div class="card mt-2">
		<div class="card-header text-center ">
		<h5>Visualizar Cliente</h5>
		</div>
		<div class="card-body">
			<h5 class="card-title text-center ">Dados do Cliente</h5>
			<?php 
				$crud = new ClassCrud();
				$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
				$bFetch = $crud->selectDB(
					"*",
					"devedores",
					"where id=?",
					array($idUser)
				);
				$fetch = $bFetch->fetch(PDO::FETCH_ASSOC);
			?>

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
				<div class="col p-2"><strong>ID: </strong><?php echo $fetch['id']; ?></div>
				<div class="col p-2"><strong>Nome: </strong><?php echo $fetch['nome']; ?></div>
				<div class="col p-2"><strong>CPF: </strong><?php echo $fetch['cpf']; ?></div>
				<div class="col p-2"><strong>Nascimento: </strong><?php echo implode("/",array_reverse(explode("-",$fetch['nascimento'])));?></div>
			</div>
			<div class="row row-co2s-1 row-cols-sm-1 row-cols-md-1">
				<div class="col p-2"><strong>Endereço: </strong><?php echo $fetch['endereco']; ?></div>
			</div>
			<div class="row row-co2s-1 row-cols-sm-2 row-cols-md-4">
				<div class="col p-2"><strong>Título: </strong><?php echo $fetch['titulo']; ?></div>
				<div class="col p-2"><strong>Valor: </strong><?php echo $fetch['valor']; ?></div>
				<div class="col p-2"><strong>Vencimento: </strong><?php echo implode("/",array_reverse(explode("-",$fetch['vencimento'])));?></div>
				<div class="col p-2"><strong>Alterado em: </strong><?php echo date('d/m/Y H:i:s', strtotime($fetch['alteracao'])); ?></div>
			</div>

		</div>
		<div class="card-footer text-muted text-center ">
			Copyright © 2020 
		</div>
	</div>
</div>
<?php include "includes/footer.php";?>
