<?php
	session_start();
	include "includes/header.php";
	include "class/ClassCrud.php";
?>
<div class="container ">
	<div class="card text-center mt-2" style="max-width: 100%;">
		<div class="card-header">
			<h5>Seleção de Cliente</h5>
		</div>
		<div class="card-body">
			<div class="col-sm">
					<form method="post" action="#">
						<div class="form-group">
							<label><input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar" class="form-control" autofocus></label>
							<button type="submit" class="btn btn-default" ><img src="images/search.png" title="Pesquisar" width="20" height="20"></button>
						</div>
					</form>
				</div>
					<?php
					if (isset($_SESSION['msg']) && $_SESSION['msg']!= null){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
					}
					?>
			<table class="table table-striped table-responsive-lg">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nome</th>
						<th scope="col">CPF</th>
						<th scope="col">Nascimento</th>
						<th scope="col">Endereço</th>
						<th scope="col">Titulo</th>
						<th scope="col">Valor do Título</th>
						<th scope="col">Vencimento</th>
						<th scope="col">Última alteração</th>
						<th scope="col">Ações</th>

					</tr>
				</thead>
				<tbody>
					<!-- Loop -->
					<?php
						if(isset($_POST['pesquisar'])){
							$pesquisar = "%".filter_input(INPUT_POST,'pesquisar',FILTER_SANITIZE_SPECIAL_CHARS)."%";
						}else{
							$pesquisar = "";
						}

						if(isset($pesquisar)&& $pesquisar != null){
							$crud = new ClassCrud();
										$bFetch=$crud->selectDB(
											"*",
											"devedores",
											"where nome like ?",
											array($pesquisar)
										);
										while ($fetch = $bFetch->fetch(PDO::FETCH_ASSOC)){
									?>

								<tr>
									<td><?php echo $fetch['id'];?></td>
									<td><?php echo $fetch['nome'];?></td>
									<td><?php echo $fetch['cpf'];?></td>
									<td><?php echo implode("/",array_reverse(explode("-",$fetch['nascimento'])));?></td>
									<td><?php echo $fetch['endereco'];?></td>
									<td><?php echo $fetch['titulo'];?></td>
									<td><?php echo $fetch['valor'];?></td>
									<td><?php echo implode("/",array_reverse(explode("-",$fetch['vencimento'])));?></td>
									<td><?php echo date('d/m/Y H:i:s', strtotime($fetch['alteracao']));?></td>
									<td>
										<a href="<?php echo"visualizar.php?id={$fetch['id']}"; ?>"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="Vizualizar"></i></a>
										<a href="<?php echo"cadastro.php?id={$fetch['id']}"; ?>"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
										<a  href="<?php echo"controllers/ControllersDel.php?id={$fetch['id']}" ?>" onclick="return confirm('Tem certeza que deseja excluir?');" ><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Deletar"></i></a>
									</td>
								</tr>
								
									<?php }}else{ 

							$crud = new ClassCrud();
										$bFetch=$crud->selectDB(
											"*",
											"devedores",
											"",
											array()
										);
										while ($fetch = $bFetch->fetch(PDO::FETCH_ASSOC)){
									?>

								<tr>
									<td><?php echo $fetch['id'];?></td>
									<td><?php echo $fetch['nome'];?></td>
									<td><?php echo $fetch['cpf'];?></td>
									<td><?php echo implode("/",array_reverse(explode("-",$fetch['nascimento'])));?></td>
									<td><?php echo $fetch['endereco'];?></td>
									<td><?php echo $fetch['titulo'];?></td>
									<td><?php echo $fetch['valor'];?></td>
									<td><?php echo implode("/",array_reverse(explode("-",$fetch['vencimento'])));?></td>
									<td><?php echo date('d/m/Y H:i:s', strtotime($fetch['alteracao']));?></td>
									
			</div>
									<td>
										<a href="<?php echo"visualizar.php?id={$fetch['id']}"; ?>"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="Vizualizar"></i></a>
										<a href="<?php echo"cadastro.php?id={$fetch['id']}"; ?>"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
										<a  href="<?php echo"controllers/ControllersDel.php?id={$fetch['id']}" ?>" onclick="return confirm('Tem certeza que deseja excluir?');" ><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Deletar"></i></a> 
									</td>
								</tr>
					<?php }} ?>
				</tbody>
			</table>
		</div>
		<div class="card-footer text-muted">
			Copyright © 2020 
		</div>
	</div>
</div>
<?php include "includes/footer.php";?>