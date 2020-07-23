<?php
include "class/ClassCrud.php";


#edicao de dados
	if(isset($_GET['id'])){
		$acao = "Editar";
			$crud = new ClassCrud();
			$bFetch = $crud->selectDB(
				"*",
				"devedores",
				"where id=?",
				array($_GET['id'])
			);
			$fetch = $bFetch->fetch(PDO::FETCH_ASSOC);
			$id = $fetch['id'];
			$nome = $fetch['nome'];
			$cpf = $fetch['cpf'];
			$nascimento = $fetch['nascimento'];
			$endereco = $fetch['endereco'];
			$titulo = $fetch['titulo'];
			$valor = $fetch['valor'];
			$vencimento = $fetch['vencimento'];
			$alteracao = $fetch['alteracao'];

#cadastro novo
	}else{
		$acao = "Cadastrar";
		$id = "";
		$nome = "";
		$cpf = "";
		$nascimento = "";
		$endereco = "";
		$titulo = "";
		$valor = "";
		$vencimento = "";
		$alteracao = "";

	}
		date_default_timezone_set('America/Sao_Paulo');
		$dataLocal = date('d/m/Y H:i:s', time());
?>
<div>
	<form method="post" action="controllers/ControllersCadastro.php" id="meu_form">
		<input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
		<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
		<input type="hidden" id="alteracao" name="alteracao" value="<?php echo date('Y-m-d H:i:s'); ?>">

		<div class="form-group">
			<small class="form-text text-muted text-left">Nome:</small>
			<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="Digite o Nome" class="form-control" autofocus required>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<small class="form-text text-muted text-left">CPF:</small>
				<input type="number" name="cpf" id="cpf" value="<?php echo $cpf; ?>" placeholder="Digite o CPF" class="form-control"required>
			</div>
	
			<div class="form-group col-md-6">
				<small class="form-text text-muted text-left">Nascimento:</small>
				<input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento; ?>" placeholder="Digite a data de nascimento" class="form-control"required>
			</div>
		</div>

		<div class="form-group">
			<small class="form-text text-muted text-left">Endereço:</small>
			<input type="text" name="endereco" id="endereco" value="<?php echo $endereco; ?>" placeholder="Digite o endereço" class="form-control"required>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
			<small class="form-text text-muted text-left">Título:</small>
			<input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" placeholder="Digite o título" class="form-control"required>
			</div>

			<div class="form-group col-md-4">
			<small class="form-text text-muted text-left">Valor:</small>
			<input type="number" name="valor" id="valor" value="<?php echo $valor; ?>" placeholder="Digite o Valor" class="form-control"required>
			</div>

			<div class="form-group col-md-4">
			<small class="form-text text-muted text-left">Vencimento:</small>
			<input type="date" name="vencimento" id="vencimento" value="<?php echo $vencimento; ?>" placeholder="Digite o Vencimento" class="form-control"required>
			</div>
		</div>
		<button type="submit" class="btn btn-success" onclick="return valida_campus();"><?php echo $acao; ?></button>
		<input type="button" class="btn btn-primary" value="Cancelar" onclick="javascript: location.href='index.php';" />
	</form>
</div>
