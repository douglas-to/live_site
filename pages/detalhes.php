<?php include("includes/header.php"); ?> 
<section class="container p-5 mb-2">
    <!-- slide-detalhes -->
    <div class="row">
        <div class="col-md-12">
            <div class="info-imovel">
                <div class="title float-start">
                    <div class="d-flex flex-row">
                        <a href="imoveis_venda.php" class="chevron"><i class="fa-solid fa-chevron-left"></i></a>
                        <div class="d-flex flex-column text">
                            <h1 class="fs-custom2 ms-2">Apartamento - SP</h1>
                            <!-- Adicionar margin à esquerda -->
                            <h2 class="gray-text ms-2">
                                <!-- h2 abaixo de h1 -->
                                <i class="fa-solid fa-location-dot me-1 fs-custom7"></i>Rua Fabía, 1100 - Lapa/São-Paulo
                            </h2>
                        </div>
                        <span class="p-1 bg-primary white fs-custom4 ms-2">Á Venda</span>
                    </div>
                </div>
                <div class="value float-start float-md-end p-1 bg-gray-rgba">
                    <h3 class="black fw-bold fs-custom5 mt-2"> R$1000<span class="gray-text fs-custom7">/ Mês</span>
                    </h3>
                    <h2 class="gray-text">Condominio R$300 / IPTU 1R$</h2>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="details-slider">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner"> <?php for ($i = 1; $i <= 3; $i++): ?> <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                            <div class="row">
                                <div class="col-md-6 picture-imovel border border-2 border-white">
                                </div>
                                <div class="col-md-6 responsive-slide">
                                    <div class="row"> <?php for ($j = 1; $j <= 2; $j++): ?> <div class="col-md-6 picture-imovel-mini border border-2 border-white">
                                        </div> <?php endfor; ?> </div>
                                    <div class="row"> <?php for ($j = 1; $j <= 2; $j++): ?> <div class="col-md-6 picture-imovel-mini border border-2 border-white">
                                        </div> <?php endfor; ?> </div>
                                </div>
                            </div>
                        </div> <?php endfor; ?> </div>
                    <button class="carousel-control-prev marginBTN1" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next marginBTN2" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fim slide detalhes -->
<section class="container ps-5 pe-5 mb-2">
    <!-- sessão descrição -->
    <div class="row">
        <div class="col-md-8">
            <div class="description-section">
                <h1 class="fw-bold fs-custom2">Venda R$ 370.000 / Aluguel R$ 1400<span class="gray-text fs-custom7">/ Mês</span></h1>
                <span class="gray-text fs-custom3 fw-light">Condomínio R$ 600 / IPTU não informado / aluguel e condomínio R$2000</span>
                <div class="d-flex flex-row mt-2">
                    <div class="text-start gray-text">
                        <i class="fa-solid fa-kaaba"></i>
                        <h1 class="fs-custom3 fw-light">450m²</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-bed"></i>
                        <h1 class="fs-custom3 fw-light">3 Quartos</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-car"></i>
                        <h1 class="fs-custom3 fw-light">2 Vagas</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-shower"></i>
                        <h1 class="fs-custom3 fw-light">2 Banheiros</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-couch"></i>
                        <h1 class="fs-custom3 fw-light">Sem mobília</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-bus-simple"></i>
                        <h1 class="fs-custom3 fw-light">Metrô próx</h1>
                    </div>
                    <div class="text-start gray-text ps-custom">
                        <i class="fa-solid fa-paw"></i>
                        <h1 class="fs-custom3 fw-light">Aceita pets</h1>
                    </div>
                </div>
                <div class="description mt-5">
                    <div class="d-flex flex-row description-title">
                        <h1 class="fw-medium fs-5">Descrição</h1>
                        <p></p>
                    </div>
                    <p class="fs-custom3 gray-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. <span id="collapseText" class="collapse fs-custom3 gray-text"> Vivamus tristique lorem eget magna scelerisque, sit amet vehicula mi suscipit. Curabitur ac libero sit amet urna eleifend aliquet non ac justo. </span>
                    <div class="d-flex justify-content-center">
                        <a data-bs-toggle="collapse" href="#collapseText" aria-expanded="false" aria-controls="collapseText" class="text-center text-decoration-none red"> Mostrar mais <i class="fa-solid fa-chevron-down fs-custom4"></i>
                        </a>
                    </div>
                    </p>
                </div>
                <div class="details mt-5">
                    <div class="d-flex flex-row description-title">
                        <h1 class="fw-medium fs-5">Detalhes</h1>
                        <p></p>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="details-left">
                            <h1 class="fs-custom3 fw-bold">ID do Imóvel: <span class="gray-text">220</span></h1>
                            <h1 class="fs-custom3 fw-bold">Tipo: <span class="gray-text">Residencial</span></h1>
                            <h1 class="fs-custom3 fw-bold">Categoria: <span class="gray-text">Apartamento</span></h1>
                        </div>
                        <div class="details-right ms-5">
                            <h1 class="fs-custom3 fw-bold">Área Total: <span class="gray-text">54m²</span></h1>
                            <h1 class="fs-custom3 fw-bold">Ano de Construção: <span class="gray-text">1994</span></h1>
                            <h1 class="fs-custom3 fw-bold">Mobiliado: <span class="gray-text">Sim</span></h1>
                        </div>
                    </div>
                </div>
                <div class="characteristics mt-5 mb-5">
                    <div class="d-flex flex-row description-title">
                        <h1 class="fw-medium fs-5">Características</h1>
                        <p></p>
                    </div>
                    <div class="list-characteristics">
                        <div class="row gray-text fs-custom3">
                            <div class="col-4">Perto de Escolas</div>
                            <div class="col-4">Segurança</div>
                            <div class="col-4">Jardim</div>
                        </div>
                        <div class="row gray-text fs-custom3">
                            <div class="col-4">Perto de Hospitais</div>
                            <div class="col-4">Condomínio Fechado</div>
                            <div class="col-4">Playground</div>
                        </div>
                        <div class="row gray-text fs-custom3">
                            <div class="col-4">Perto de Shopping</div>
                            <div class="col-4">Interfone</div>
                            <div class="col-4">Recepção</div>
                        </div>
                        <div class="row gray-text fs-custom3">
                            <div class="col-4">Perto de Vias de Acesso</div>
                            <div class="col-4">Sistema de Alarme</div>
                            <div class="col-4">Salão de festas</div>
                        </div>
                        <div class="row gray-text fs-custom3">
                            <div class="col-4">Cabeamento Completo</div>
                            <div class="col-4">Acadêmia</div>
                            <div class="col-4">Garagem</div>
                        </div>
                    </div>
                </div>
                <div class="subFooterDetails">
                    <div class="title-conditions bg-gray-rgba p-2">
                        <h1 class="fs-5 fw-bold"><i class="fa-solid fa-wallet me-2"></i>Condições para Alugar</h1>
                    </div>
                    <div class="conditions pt-2 p-2">
                        <h1 class="fs-custom3 fw-bold">Ter uma avaliação de crédito aprovada</h1>
                        <p class="gray-text fs-custom3 pe-5"> Avaliamos o perfil de crédito de todos os envolvidos na proposta. Para este imóvel, até 4 pessoas podem compor uma renda bruta mensal a partir de R$13.420. </p>
                    </div>
                    <div class="rating bg-gray-rgba pt-2 pb-2 mt-2">
                        <div class="p-2">
                            <h1 class="fs-custom3 fw-bold">Faça a sua avaliação de crédito agora!</h1>
                            <p class="gray-text fs-custom3"> É rapido e facil. Não precisa enviar documentos e o resultado sai na hora. </p>
                            <a href="./imoveis_avaliaçao.php" class="subFooterBtn fw-semibold p-2 fs-custom3"> Fazer avaliação </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-section">
                <div class="share d-flex flex-row align-items-center justify-content-center mb-4 mt-4">
                    <a href="#" class="black fs-custom1 text-decoration-none me-3"><i class="fa-solid fa-share-nodes"></i> Compartilhar</a>
                    <a href="#" class="black fs-custom1 text-decoration-none"><i class="fa-regular fa-heart"></i> Favoritar</a>
                </div>
                <div class="form-price mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gray-text mb-1">
                                <div class="col-6">
                                    <h1 class="fs-custom1">Aluguel</h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-custom1">R$1.350</h1>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-6">
                                    <h1 class="fs-custom1 gray-text"> Condomínio
                                        <!-- Button trigger modal -->
                                        <button type="button" class="border border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-circle-info ms-1 fs-custom3 gray-text"></i>
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 black fw-semibold" id="exampleModalLabel">Condomínio</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="fs-custom3 gray-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Vivamus tristique lorem eget magna scelerisque, sit amet vehicula mi suscipit. Curabitur ac libero sit amet urna eleifend aliquet non ac justo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-custom1 gray-text">R$1.650</h1>
                                </div>
                            </div>
                            <div class="row gray-text mb-1">
                                <div class="col-6">
                                    <h1 class="fs-custom1"> IPTU
                                        <!-- Button trigger modal -->
                                        <button type="button" class="border border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fa-solid fa-circle-info ms-1 fs-custom3 gray-text"></i>
                                        </button>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 black fw-semibold" id="exampleModalLabel">IPTU</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="fs-custom3 gray-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Vivamus tristique lorem eget magna scelerisque, sit amet vehicula mi suscipit. Curabitur ac libero sit amet urna eleifend aliquet non ac justo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-custom1">R$292</h1>
                                </div>
                            </div>
                            <div class="row gray-text mb-1">
                                <div class="col-6">
                                    <h1 class="fs-custom1"> Seguro Incêndio
                                        <!-- Button trigger modal -->
                                        <button type="button" class="border border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            <i class="fa-solid fa-circle-info ms-1 fs-custom3 gray-text"></i>
                                        </button>
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 black fw-semibold" id="exampleModalLabel">Seguro Incêndio</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="fs-custom3 gray-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Vivamus tristique lorem eget magna scelerisque, sit amet vehicula mi suscipit. Curabitur ac libero sit amet urna eleifend aliquet non ac justo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-custom1">R$18</h1>
                                </div>
                            </div>
                            <div class="row gray-text mb-1">
                                <div class="col-6">
                                    <h1 class="fs-custom1"> Taxa Serviço
                                        <!-- Button trigger modal -->
                                        <button type="button" class="border border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                            <i class="fa-solid fa-circle-info ms-1 fs-custom3 gray-text"></i>
                                        </button>
                                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 black fw-semibold" id="exampleModalLabel">Taxa Serviço</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="fs-custom3 gray-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sapien scelerisque dictum. Vivamus tristique lorem eget magna scelerisque, sit amet vehicula mi suscipit. Curabitur ac libero sit amet urna eleifend aliquet non ac justo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-custom1">R$34</h1>
                                </div>
                            </div>
                            <p></p>
                            <div class="row black mb-1">
                                <div class="col-6">
                                    <h1 class="fs-5 fw-bold">Total</h1>
                                </div>
                                <div class="col-6 text-end">
                                    <h1 class="fs-5 fw-bold">R$3.344</h1>
                                </div>
                            </div>
                            <div class="btnForm">
                                <a href="#" class="subFooterBtn fw-semibold p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Fazer proposta </a>
                            </div>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="modal-head bg-gray-rgba p-2">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <h1 class="fs-6 gray-text mt-1 mb-3" id="staticBackdropLabel">
                                                        <i class="fa-solid fa-envelope-open-text red"></i> Enviar proposta
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <p class="fs-custom3 gray-text">Se você quer negociar, você pode propor um novo valor que ira depender da aprovação do proprietário.Caso contrário, se você concorda com as condições do anúncio, envie uma proposta sem compromisso</p>
                                            </div>
                                            <div class="content-form">
                                                <div class="bg-gray-rgba p-2 mt-3">
                                                    <h1 class="fs-6 gray-text mt-1 mb-3">
                                                        <i class="fa-solid fa-file-invoice-dollar red"></i> Valores da locação
                                                    </h1>
                                                    <p class="gray-text fs-custom3">Confira o valor de cada item</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h1 class="fs-custom3 gray-text">Aluguel</h1>
                                                        </div>
                                                        <div class="col-6">
                                                            <h1 class="fs-custom3 gray-text">R$ 2.000,00</h1>
                                                        </div>
                                                        <div class="col-6">
                                                            <h1 class="fs-custom3 gray-text">IPTU/Mês</h1>
                                                        </div>
                                                        <div class="col-6">
                                                            <h1 class="fs-custom3 gray-text">R$ 200</h1>
                                                        </div>
                                                        <div class="col-6 mt-1">
                                                            <h1 class="fs-custom3 fw-semibold">Total</h1>
                                                        </div>
                                                        <div class="col-6 mt-1">
                                                            <h1 class="fs-custom3 fw-semibold">R$ 2.200,00</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-rgba p-2 mt-3">
                                                    <h1 class="fs-6 gray-text bg-gray-rgba mt-1 mb-3">
                                                        <i class="fa-solid fa-pen-clip red"></i> Personalizar proposta
                                                    </h1>
                                                    <p class="fs-custom3 gray-text">Você pode propor um novo valor e nogociar mudanças no imóvel.</p>
                                                </div>
                                                <form class="p-2">
                                                    <h1 class="fs-6 mt-3 gray-text mt-1 mb-3">
                                                        <i class="fa-solid fa-circle-user red me-1"></i> Sobre você
                                                    </h1>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control custom-placeholder" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control me-2 custom-placeholder" placeholder="CPF" aria-label="CPF">
                                                        <input type="text" class="form-control custom-placeholder" placeholder="Telefone" aria-label="Telefone">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control custom-placeholder" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="d-flex flex-column bg-gray-rgba p-2 mt-1">
                                                        <p class="fs-custom3 gray-text mt-1">Com quem você vai morar?</p>
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div class="input-group-text border border-0 bg-red">
                                                                <input class="form-check-input mt-0 border border-0" type="checkbox" value="" aria-label="Radio button for following text input">
                                                                <label for="customCheckbox" class="form-check-label white fs-custom8 gray-text ms-2"> Sozinho </label>
                                                            </div>
                                                            <div class="input-group-text border border-0 bg-red">
                                                                <input class="form-check-input mt-0 border border-0" type="checkbox" value="" aria-label="Radio button for following text input">
                                                                <label for="customCheckbox" class="form-check-label white fs-custom8 gray-text ms-2"> Familia </label>
                                                            </div>
                                                            <div class="input-group-text border border-0 bg-red">
                                                                <input class="form-check-input mt-0 border border-0" type="checkbox" value="" aria-label="Radio button for following text input">
                                                                <label for="customCheckbox" class="form-check-label white fs-custom8 gray-text ms-2"> Amigos </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column bg-gray-rgba p-2 mt-3">
                                                        <h1 class="fs-custom3 gray-text mt-1">Possui animais de estimação?</h1>
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <div class="input-group-text border border-0 bg-red">
                                                                <input class="form-check-input mt-0 border border-0" type="checkbox" value="" aria-label="Radio button for following text input">
                                                                <label for="customCheckbox" class="form-check-label white fs-custom8 gray-text ms-2"> Sim </label>
                                                            </div>
                                                            <div class="input-group-text border border-0 bg-red ms-2">
                                                                <input class="form-check-input mt-0 border border-0" type="checkbox" value="" aria-label="Radio button for following text input">
                                                                <label for="customCheckbox" class="form-check-label white fs-custom8 gray-text ms-2"> Não </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="fs-custom3 gray-text mt-3">Conte mais ao proprietario sobre você</p>
                                                    <div class="input-group">
                                                        <textarea class="form-control custom-placeholder" placeholder="Outras informações" aria-label="With textarea"></textarea>
                                                    </div>
                                                    <div class="d-flex flex-column flex-md-row mt-3">
                                                        <div class="input-group-text">
                                                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                                            <label for="customCheckbox" class="form-check-label fs-custom8 gray-text ms-2"> Ao enviar o formulário você concorda com os <a href="#" class="text-decoration-none red fs-custom8">termos de uso</a>
                                                            </label>
                                                        </div>
                                                        <a href="./imoveis_avaliaçao.php" class="subFooterBtn3 fw-semibold p-2">Confirmar e enviar</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visit mt-2">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-decoration-none fw-bold black" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Agendar visita</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-decoration-none fw-bold black" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Mensagem</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabsContent">
                        <div class="tab-pane fade show active pst-relative data-form" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <h2 class="fs-custom3 gray-text mt-3">Escolha data e hora da sua visita</h2>
                            <div class="slide-data">
                                <div class="center-mode">
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <h1 class="gray-text fs-custom4 mb-2">Domingo</h1>
                                            <strong class="fs-custom3 black mb-2">01</strong>
                                            <h1 class="gray-text fs-custom4 mb-2">Maio</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-hour mt-2 p-4">
                                <h1 class="fs-custom3 gray-text">Hora</h1>
                                <div class="data-mode">
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">12:00</strong>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">13:00</strong>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">15:00</strong>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">11:30</strong>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">10:40</strong>
                                        </div>
                                    </div>
                                    <div class="ms-1 me-1">
                                        <div class="data-info text-center ms-1 me-1">
                                            <strong class="fs-custom3 black mb-2">9:00</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="login-form">
                                <h1 class="fs-custom3 gray-text">Tenho preferência em visitar esse imóvel</h1>
                                <div class="input-group mb-3 d-flex flex-row justify-content-center">
                                    <div class="input-group-text w-50 border border-2 border-white">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        <label for="customCheckbox" class="form-check-label fs-custom3 gray-text ms-2">Em pessoa</label>
                                    </div>
                                    <div class="input-group-text w-50 border border-2 border-white">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        <label for="customCheckbox" class="form-check-label fs-custom3 gray-text ms-2">Video chamada</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Nome" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Email" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Telefone" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder" placeholder="CPF" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Sua mensagem" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        <label for="customCheckbox" class="form-check-label fs-custom8 gray-text ms-2"> Ao enviar o formulário você concorda com os <a href="#" class="text-decoration-none red fs-custom8">termos de uso</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center btnForm mt-2">
                                    <a href="#" class="subFooterBtn fw-semibold p-2 me-2"> Agendar Visita </a>
                                    <a href="#" class="subFooterBtn2 fw-semibold p-2">
                                        <i class="fa-brands fa-whatsapp me-1 ms-1"></i>WhatsApp </a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <h2 class="fs-custom3 gray-text mt-3">Mande uma mensagem</h2>
                            <form id="register-form">
                                <div class="profile row">
                                    <div class="col-md-2">
                                        <div class="circle-img">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="fs-custom3 black"><i class="fa-regular fa-circle-user me-1"></i>Guber Oliveira</div>
                                        <a href="#" class="text-decoration-none fs-custom3 red">Ver perfil</a>
                                    </div>
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control custom-placeholder gray-text" placeholder="Nome" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder gray-text" placeholder="E-mail" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control custom-placeholder gray-text" placeholder="Telefone" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-xl gray-text" style="font-size:13px;" aria-label="Small select example">
                                        <option selected>Informação sobre</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group mt-1">
                                    <h1 class="fs-custom3 gray-text">Como você prefere conversar?</h1>
                                    <div class="input-group mb-3 d-flex flex-row justify-content-center">
                                        <div class="input-group-text w-50 border border-2 border-white">
                                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                            <label for="customCheckbox" class="form-check-label fs-custom3 gray-text ms-2">WhatsApp</label>
                                        </div>
                                        <div class="input-group-text w-50 border border-2 border-white">
                                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                            <label for="customCheckbox" class="form-check-label fs-custom3 gray-text ms-2">Telefone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        <label for="customCheckbox" class="form-check-label fs-custom8 gray-text ms-2"> Ao enviar o formulário você concorda com os <a href="#" class="text-decoration-none red fs-custom8">termos de uso</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center btnForm mt-2">
                                    <a href="#" class="subFooterBtn me-2 fw-semibold p-2"> Agendar Visita </a>
                                    <a href="#" class="subFooterBtn2 fw-semibold p-2">
                                        <i class="fa-brands fa-whatsapp me-1 ms-1"></i>WhatsApp </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fim sessão descriçao --> <?php include("includes/footer.php"); ?>