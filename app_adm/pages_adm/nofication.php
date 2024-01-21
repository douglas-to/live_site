<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?> 

<section class="container mt-5 bg-card">
    <div class="row p-3">
        <div class="col-lg-5">
            <h1 class="mn-blue fs-custom6 fw-semibold">Histórico</h1>
            <p class="fs-custom8 gray2">Visualize e pesquise as atividades de suas organizações</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="mb-3">
                            <div class="input-group mb-2">
                                <span class="input-group-text bg-transparent border rounded-0" id="basic-addon1">
                                    <i class="fa-solid fa-magnifying-glass gray2"></i>
                                </span>
                                <input type="text" class="form-control border border-start-0 rounded-0" placeholder="Pesquisar no registro de atividades" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mt-2 mb-2 mb-md-0 mt-md-0">
                        <select class="form-select fs-custom8 rounded-0 mn-blue" id="tipo1_historico" name="historico1" required>
                            <option value="Histórico Completo">Histórico Completo</option>
                            <option value="Valor2">Valor2</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mt-2 mb-2 mb-md-0 mt-md-0">
                        <select class="form-select fs-custom8 rounded-0 mn-blue" id="tipo2_historico" name="historico2" required>
                            <option value="Todas as Categorias">Todas as Categorias</option>
                            <option value="Valor2">Valor2</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between mt-4">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="profile-circle"></div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fs-custom3 mn-blue fw-semibold">Guber <span class="fw-normal">escreveu uma nota</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fs-custom4 mn-blue fw-light">Re: <span class="fw-normal border-bottom">Juliana Simões</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="fs-custom3 gray2 fw-semibold">Sáb, 18 Nov</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-10">
                            <div class="container">
                                <h5 class="fs-custom3 mn-blue">Teste de anotação</h5>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <div style="background-image: url('../imagens/15259789541.jpg'); background-size: cover; width: 100%; height: 140px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4">
                                            <h5 class="text-primary fw-semibold fs-custom3">Apartamento 2 Quartos, 1 banheiro e 1 vaga</h5>
                                            <h1 class="fs-custom2 fw-bold text-uppercase">R$250.000 <span class="fw-normal fs-custom3 gray2">Á venda</span>
                                            </h1>
                                            <h1 class="fs-custom2 fw-bold text-uppercase">R$1.200 <span class="fw-normal fs-custom3 gray2">Para alugar</span>
                                            </h1>
                                            <p class="fs-custom3 gray2">Apartamento em Água Branca, São Paulo</p>
                                            <span class="gray2 me-1 fs-custom3">
                                                <i class="fa-solid fa-kaaba fs-custom4 me-1"></i>72m² </span>
                                            <span class="gray2 me-1 fs-custom3">
                                                <i class="fa-solid fa-bed fs-custom4 me-1"></i>2 </span>
                                            <span class="gray2 me-1 fs-custom3">
                                                <i class="fa-solid fa-car fs-custom4 me-1"></i>1 </span>
                                            <span class="gray2 me-1 fs-custom3">
                                                <i class="fa-solid fa-shower fs-custom4 me-1"></i>1 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> <?php include("../includes_adm/footer.php"); ?>