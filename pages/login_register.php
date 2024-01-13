<?php include("includes/header.php"); ?>

<section class="container p-5 custom-width">
	<div class="row">
		<div class="col-md-12">
			<div class="form-login-register">
			    <ul class="nav nav-tabs" id="myTabs" role="tablist">
			        <li class="nav-item" role="presentation">
			            <a class="nav-link text-decoration-none gray-text fs-6 active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
			        </li>
			        <li class="nav-item" role="presentation">
			            <a class="nav-link text-decoration-none gray-text fs-6" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Cadastra-se</a>
			        </li>
			    </ul>
			    
			    <div class="tab-content" id="myTabsContent">
			        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
			            <h1 class="fs-custom3 red fw-semibold mt-3">Entrar:</h1>
			            <form id="login-form" class="mt-3">
			            	<div class="input-group mb-3">
								<span class="input-group-text bg-white gray-text" id="basic-addon1"><i class="fa-regular fa-user gray-text"></i></span>
								<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<span class="input-group-text bg-white gray-text" id="basic-addon1"><i class="fa-solid fa-lock gray-text"></i></span>
								<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
							</div>

							<div class="btnForm">
								<a href="#" class="subFooterBtn fw-semibold p-2">
                            		Entrar
                            	</a>
							</div>
			            </form>
			            <h1 class="mt-1"><a href="#" class="text-decoration-none red fs-6">Esqueceu sua senha?</a></h1>
			        </div>
			        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
			            <h1 class="fs-custom3 red fw-semibold mt-3">Cadastrar-se:</h1>
			            <form id="login-form" class="mt-3">
			            	<div class="input-group mb-3">
								<span class="input-group-text bg-white gray-text" id="basic-addon1"><i class="fa-regular fa-user gray-text"></i></span>
								<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<span class="input-group-text bg-white gray-text" id="basic-addon1"><i class="fa-solid fa-lock gray-text"></i></span>
								<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
							</div>

							<div class="btnForm">
								<a href="#" class="subFooterBtn fw-semibold p-2">
                            		Cadastra-se
                            	</a>
							</div>
			            </form>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>




