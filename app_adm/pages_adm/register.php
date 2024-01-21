<?php 
	
	include("../includes_adm/header.php");
?>
<style>
	.mt-20{
		margin-top:20rem;
	}

	@media screen and (max-width: 1300px){
		.mt-20{
			margin-top:5rem;
		}
	}
</style>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="mt-20">
				<form action="../php_adm/signup.php" method="post">	
					<div class="row">
						<div class="col-lg-4 mx-auto mb-2">
							<a class="navbar-brand" href="#">
								<img src="../imagens/15202776221.png" alt="Brand">
							</a>
						</div>
					</div>

					<div class="row">
						<div class="form-group mb-4 col-lg-12">
							<input name="userName" type="text" placeholder="Seu nome" class="form-control bg-gray"/>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group mb-4 col-lg-12">
							<input name="userEmail" type="email" placeholder="email@exemplo.com" class="form-control bg-gray"/>
						</div>
					</div>

					<div class="row">
						<div class="form-group mb-4 col-lg-12">
							<input name="userPassword" type="password" placeholder="Senha" class="form-control bg-gray"/>
						</div>
					</div>

					<?php 

						if(isset($_GET['error']) && $_GET['error'] === 'email_err'){
							echo '
								<div class="alert alert-danger text-center bg-red white" role="alert">
	  								Email invalido, tente novamente.
								</div>
							';
						}

						if(isset($_GET['error']) && $_GET['error'] === 'name_err'){
							echo '
								<div class="alert alert-danger text-center bg-red white" role="alert">
	  								Nome invalido, tente novamente.
								</div>
							';
						}

						if(isset($_GET['error']) && $_GET['error'] === 'password_err'){
							echo '
								<div class="alert alert-danger text-center bg-red white" role="alert">
	  								Senha deve ter ao menos 8 caracteres, tente novamente.
								</div>
							';
						}

						if(isset($_GET['error']) && $_GET['error'] === 'dupeemail_err'){
							echo '
								<div class="alert alert-danger text-center bg-red white" role="alert">
	  								Email já cadastrado, tente novamente.
								</div>
							';
						}

					?>

					<div class="row">
						<div class="col-lg-12 mt-2">
							<button type="submit" class="myButton2 fw-semibold w-100 text-center">Cadastrar</button> 
						</div> 
					</div>     
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("../includes_adm/footer.php"); ?>