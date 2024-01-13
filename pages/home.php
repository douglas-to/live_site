<?php include("includes/header.php"); ?> <section class="overflow-x-hidden">
    <!-- slider home -->
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> <?php
                            for ($i = 0; $i < 3; $i++) {
                                
                                echo '<div class="carousel-item';
                                
                                if ($i === 0) {
                                    echo ' active';
                                }

                            echo '">

                            <div class="slide-img-home">
                                <div class="container">
                                    <div class="d-flex flex-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
                                        <div class="info-left home-custom-mt">
                                            <h3 class="fw-bold fs-custom1 white me-2 ms-2">CONDOMINIO SKY NORTE</h3>
                                            <span class="white"><i class="fa-solid fa-kaaba me-2 ms-2"></i>450m</span>
                                            <span class="white"><i class="fa-solid fa-bed me-2 ms-2"></i>3</span>
                                            <span class="white"><i class="fa-solid fa-car me-2 ms-2"></i>2</span>
                                            <span class="white"><i class="fa-solid fa-shower me-2 ms-2"></i>2</span>
                                            <h2 class="fw-medium white mt-1">
                                                <i class="fa-solid fa-location-dot me-2 ms-2"></i>
                                                Rua Fabía, 1100 - Lapa/São-Paulo
                                            </h2>
                                            <span class="white"><i class="fa-regular fa-circle-user me-2 ms-2"></i>Guber Oliveira</span>
                                            <span class="white"><i class="fa-regular fa-calendar me-2 ms-2"></i>58 Dias</span>
                                        </div>

                                        <div class="info-right home-custom-mt">
                                            <h3 class="white fw-bold fs-custom2">R$ 490<span class="white">/ Mês</span></h3>
                                            <h2 class="white">Condominio R$300 / IPTU 1R$</h2>
                                            <a href="imoveis_detalhes.php" class="myButton">Detalhe</a>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                        </div>';
                    }?> </div>
            </div>
        </div>
    </div>
</section>
<!-- fim slider home -->
<section class="container p-5">
    <!-- slider recentes -->
    <div class="text-center">
        <h1 class="fs-custom5 text-uppercase">Imóveis <span class="fw-bold">recentes</span></h1>
    </div> <?php include("slide_tres.php"); ?>
    <!-- fim slide recentes -->
</section>
<section class="container p-5 custom-width-slide-oito">
    <!-- slider locação -->
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-custom5 text-uppercase text-align-center">Imóveis <span class="fw-bold">para locação</span></h1>
        <p class="gray-text fs-custom8 text-align-center fw-medium text-uppercase">Qual bairro de São paulo combina com voçê?</p>
    </div> <?php include("slide_oito.php"); ?>
    <!-- fim slide locação -->
</section>
<section class="container p-5 custom-width-slide-tres">
    <!-- slider oferta -->
    <div class="text-center">
        <h1 class="fs-custom5 text-uppercase">Imóveis em <span class="fw-bold">ofertas</span></h1>
    </div> <?php include("slide_tres.php"); ?>
    <!-- fim slide oferta -->
</section>
<section class="container p-5 custom-width-slide-oito">
    <!-- slider venda -->
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-custom5 text-uppercase text-align-center">Imóveis <span class="fw-bold">á venda</span></h1>
        <p class="gray-text fs-custom8 text-align-center fw-medium text-uppercase">Qual bairro de São paulo combina com voçê?</p>
    </div> <?php include("slide_oito.php"); ?>
    <!-- fim slide venda -->
</section>
<section class="container p-5">
    <!-- subFooter -->
    <div class="row">
        <div class="col-md-12 d-flex flex-column align-items-center align-items-md-center">
            <div class="sub-footer">
                <h1 class="text-uppercase fs-5 fw-bold">Aluguel sem fiador, <span>Rápido e garantido</span></h1>
                <div class="gray-text">
                    <h2 class="fs-custom2">Aluguel de forma hibrida ou digital.</h2>
                    <div class="d-flex flex-md-row flex-column mt-3 mb-3">
                        <h3 class="me-4 fs-custom3 fw-light"><i class="fa-solid fa-chevron-right"></i>Agende a visita</h3>
                        <h3 class="me-4 fs-custom3 fw-light"><i class="fa-solid fa-chevron-right"></i>Faça a proposta</h3>
                        <h3 class="me-4 fs-custom3 fw-light"><i class="fa-solid fa-chevron-right"></i>Análse de crédito</h3>
                        <h3 class="me-4 fs-custom3 fw-light"><i class="fa-solid fa-chevron-right"></i>Assine o contrato</h3>
                        <h3 class="me-4 fs-custom3 fw-light"><i class="fa-solid fa-chevron-right"></i>Pegue as chaves</h3>
                    </div>
                    <h3 class="me-4 fs-custom3 fw-light">
                        <a href="#" class="subFooterBtn fw-semibold p-2">
                            <i class="fa-regular fa-calendar-days me-2"></i>Agendar visita </a>
                    </h3>
                    <p class="fs-custom3 fw-semibold">Simples, rápido e sem burocracia</p>
                    <p class="fs-custom3 fw-semibold">Conte com o apoio e experiencia da LIVE durante todo o processo de locação.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim subFooter --> <?php include("includes/footer.php"); ?>