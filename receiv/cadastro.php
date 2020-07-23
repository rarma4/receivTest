<?php
	include "includes/header.php";
	session_start();
?>

<div class="container">
	<div class="card text-center mt-2">
		<div class="card-header">
			<h5>Cadastrar ou editar</h5>
		</div>
		<div class="card-body">
			<h5 class="card-title"></h5>
			<p class="card-text"></p>
				<?php
				if (isset($_SESSION['msg']) && $_SESSION['msg']!= null){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
				}
				?>
				<hr>
				<?php include "includes/formCadastro.php";?>
		</div>
		<div class="card-footer text-muted">
			Copyright © 2020 
		</div>
	</div>


	
</div>


<?php include "includes/footer.php";?>