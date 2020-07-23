<?php
//aponta o caminho da pasta onde se encontra o ClassConexao.php
include ("{$_SERVER['DOCUMENT_ROOT']}/php/receiv/class/ClassConexao.php");


class ClassCrud extends ClassConexao{
	private $crud;
	private $contador;

	private function preparedStatements($query, $parametros){
		$this->countParametros($parametros);
		$this->crud=$this->conectaDB()->prepare($query);

		if($this->contador > 0){
            for($i=1; $i <= $this->contador; $i++){
                $this->crud->bindValue($i,$parametros[$i-1]);
            }
        }

		$this->crud->execute();
	}
#Função do contador de parametros
	private function countParametros($parametros){
		$this->contador = count($parametros);
	}

#Função inserir no banco
	public function insertDB($tabela , $condicao , $parametros){
	    $this->preparedStatements("insert into {$tabela} values ({$condicao})" , $parametros);
	    return $this->crud;
	}

#Função seleção no banco
	public function selectDB($campo, $tabela , $condicao , $parametros){
	    $this->preparedStatements("select {$campo} from {$tabela} {$condicao}" , $parametros);
	    return $this->crud;
	}

#Função deletar do banco
	public function delDB($tabela, $condicao, $parametros){
		$this->preparedStatements("delete from {$tabela} where {$condicao}", $parametros);
		return $this->crud;
	}
#Função editar do banco
	public function editDB($tabela, $set, $condicao, $parametros){
		$this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $parametros);
		return $this->crud;
	}

}