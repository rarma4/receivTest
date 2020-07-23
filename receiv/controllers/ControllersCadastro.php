<?php
session_start();
include ("../includes/variaveis.php");
include ("../class/ClassCrud.php");

if($acao == "Cadastrar"){
	$crud = new ClassCrud();
	$crud->insertDB(
	        "devedores",
	        "?,?,?,?,?,?,?,?,?",
	        array($id, $nome, $cpf, $nascimento, $endereco, $titulo, $valor, $vencimento, $alteracao)
	);
	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Gravado com sucesso!</div>";
	header('location:../cadastro.php');
echo $acao;
}else{
	$crud = new ClassCrud();
	$crud->editDB(
		"devedores",
		"nome=?, cpf=?, nascimento=?, endereco=?, titulo=?, valor=?, vencimento=?, alteracao=?",
		"id=?",
		array($nome, $cpf, $nascimento, $endereco, $titulo, $valor, $vencimento, $alteracao, $id)
	);
	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Editado com sucesso!</div>";
	header('location:../selecao.php');
	echo $acao;
}
?>