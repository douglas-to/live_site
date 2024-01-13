<?php include("includes/header.php"); ?>

	<div class="container p-5 custom-width">
		<div class="row">
			<div class="col-md-12">
				<h1 class="fs-3 text-center text-uppercase mb-3">Faça a sua <span class="fw-bold">avaliação</span></h1>
				<form>

					<label class="fs-custom3 red mb-2 fw-semibold" for="1">Seu nome:</label>
					<div class="input-group mb-3">
					  	<span class="input-group-text bg-white gray-text" id="basic-addon1" style="width:45px !important;"><i class="fa-regular fa-user"></i></span>
						<input type="text" id="1" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>

					<label class="fs-custom3 red mb-2 fw-semibold" for="2">Seu e-mail:</label>
					<div class="input-group mb-3">
					  	<span class="input-group-text bg-white gray-text" id="basic-addon1" style="width:45px !important;"><i class="fa-regular fa-folder"></i></span>
						<input type="text" id="2" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>

					<label class="fs-custom3 red mb-2 fw-semibold" for="3">Telefone:</label>
					<div class="input-group mb-3">
					  	<span class="input-group-text bg-white gray-text" id="basic-addon1" style="width:45px !important;"><i class="fa-brands fa-whatsapp"></i></span>
						<input type="text" id="3" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>

					<label class="fs-custom3 red mb-2 fw-semibold" for="4">Algo sobre o seu imóvel:</label>
					<div class="input-group">
  						<span class="input-group-text bg-white gray-text" style="width:45px !important;"><i class="fa-solid fa-file-pen"></i></span>
  						<textarea class="form-control" id="4" aria-label=""></textarea>
					</div>

					<div class="btnForm mt-2">
						<a href="#" class="subFooterBtn fw-semibold p-2">
                        	Enviar
                        </a>    			
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include("includes/footer.php"); ?>