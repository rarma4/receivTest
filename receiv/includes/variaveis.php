<?php
if (isset($_POST['acao'])){
	$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
	$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$acao = "";
}

if (isset($_POST['id'])){
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$id = 0;
}

if (isset($_POST['nome'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nome'])){
	$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$nome = "";
}

if (isset($_POST['cpf'])){
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cpf'])){
	$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$cpf = "";
}

if (isset($_POST['nascimento'])){
	$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nascimento'])){
	$nascimento = filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$nascimento = "";
}

if (isset($_POST['endereco'])){
	$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['endereco'])){
	$endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$endereco = "";
}

if (isset($_POST['titulo'])){
	$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['titulo'])){
	$titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$titulo = "";
}

if (isset($_POST['valor'])){
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['valor'])){
	$valor = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$endvalorereco = "";
}

if (isset($_POST['vencimento'])){
	$vencimento = filter_input(INPUT_POST, 'vencimento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['vencimento'])){
	$vencimento = filter_input(INPUT_GET, 'vencimento', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$vencimento = "";
}

if (isset($_POST['alteracao'])){
	$alteracao = filter_input(INPUT_POST, 'alteracao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['alteracao'])){
	$alteracao = filter_input(INPUT_GET, 'alteracao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$alteracao = "";
}
?>