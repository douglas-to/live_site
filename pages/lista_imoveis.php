<div class="nav-imoveis d-flex flex-column flex-md-row mb-4">
    <div class="btn-group" role="group" aria-label="Botões de Verificação">
        <button type="button" class="btn btn-primary btn1"><i class="fa-regular fa-bookmark me-1"></i>Salvar busca</button>
        <a href="#" class="btn2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Criar alerta<i class="fa-regular fa-bell ms-1"></i>
        </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-head bg-gray-rgba p-2">
                            <div class="d-flex justify-content-between mt-1 mb-3">
                                <h1 class="modal-title fs-custom3" id="exampleModalLabel">
                                    <i class="fa-solid fa-message red me-1"></i>
                                    Olá, Guber Oliveira
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <h1 class="fs-6 gray-text mt-2" style="text-align:left;">Ainda não é o que procura?</h1>
                            <p class="fs-custom3 gray-text">Personalize a sua busca e descubra imóveis recomendados para você.</p>
                        </div>
                        <div class="modal-selects bg-gray-rgba mt-3 p-2">
                            <h1 class="fs-6 gray-text mt-1 mb-3" style="text-align:left;"><i class="fa-solid fa-location-arrow red me-1"></i>Preencha os campos para receber alertas</h1>
                            <div class="row">
                                <div class="col-md-12 d-flex flex-row">
                                    <select class="form-select form-select-sm me-1" aria-label="Small select example">
                                        <option selected>Tipo1</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <select class="form-select form-select-sm me-1" aria-label="Small select example">
                                        <option selected>Tipo2</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <select class="form-select form-select-sm ms-1" aria-label="Small select example">
                                        <option selected>Tipo3</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 d-flex flex-row mt-2">
                                    <select class="form-select form-select-sm me-1" aria-label="Small select example">
                                        <option selected>Tipo1</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <select class="form-select form-select-sm me-1" aria-label="Small select example">
                                        <option selected>Tipo2</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <select class="form-select form-select-sm me-1" aria-label="Small select example">
                                        <option selected>Tipo3</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <select class="form-select form-select-sm ms-1" aria-label="Small select example">
                                        <option selected>Tipo4</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 bg-gray-rgba p-2">
                            <h1 class="fs-custom3 gray-text mt-1 mb-3" style="text-align:left;"><i class="fa-solid fa-map-location red me-1"></i>Busque por cidades / bairros</h1>
                            <form class="inputs">
                                <div class="input-group">
                                    <textarea class="form-control custom-placeholder" placeholder="Escreva o nome uma cidade ou bairro" aria-label="With textarea"></textarea>
                                </div>

                                <div class="input-group mt-2 mb-2">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-2">
                                    <input type="text" class="form-control custom-placeholder" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-2">
                                    <input type="text" class="form-control custom-placeholder" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="d-flex flex-column flex-md-row mt-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        <label for="customCheckbox" class="form-check-label fs-custom8 gray-text ms-2">
                                            Ao enviar o formulário você concorda com os
                                            <a href="#" class="text-decoration-none red fs-custom8">termos de uso</a>
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
    <div class="dropdown">
        <button class="btn btn-primary btn-drop dropdown-toggle" type="button" id="ordenacaoDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ordenação Padrão
        </button>

        <div class="dropdown-menu border border-0" aria-labelledby="ordenacaoDropdown">
            <div class="dropdown-item d-flex flex-row" href="#" data-ordenacao="mais_novos">
                <a class="text-decoration-none red" href="#"><i class="fa-solid fa-arrow-rotate-right me-2"></i></a>
                <a class="text-decoration-none red" href="#"><i class="fa-solid fa-arrow-rotate-left ms-2"></i></a>
            </div>

            <div class="dropdown-item d-flex flex-row" href="#" data-ordenacao="mais_novos">
                <a class="text-decoration-none red fw-semibold me-2" href="#">R$+</a>
                <a class="text-decoration-none red fw-semibold ms-2" href="#">R$-</a>
            </div>

            <div class="dropdown-item d-flex flex-row" href="#" data-ordenacao="mais_novos">
                <a class="text-decoration-none red fw-semibold me-2" href="#">m²+</a>
                <a class="text-decoration-none red fw-semibold ms-2" href="#">m²-</a>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-md-row">
    <div class="details-imoveis row">
        <?php
        // Suponha que você tenha um array de dados com informações sobre imóveis.
        $imoveis = [
            [
                'imagem1' => 'imagens/15259789331.jpg',
                'imagem2' => 'imagens/15259789541.jpg',
                'preco' => 'R$ 490',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Fabía, 1100 - Lapa/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'dias' => '58 Dias'
            ],

            [
                'imagem1' => 'imagens/15259789331.jpg',
                'imagem2' => 'imagens/15259789541.jpg',
                'preco' => 'R$ 300',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Fabía, 1100 - Lapa/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'dias' => '58 Dias'
            ],
            // Adicione mais dados de imóveis aqui, se necessário.
        ];

        // Loop sobre os imóveis e gere o HTML dinamicamente.
        foreach ($imoveis as $imovel) {
            echo '<div class="col-md-12">
                <div class="mt-3">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="single-item me-2">
                            <div>
                                <img class="img-fluid" src="' . $imovel['imagem1'] . '" alt="Slide 1">
                            </div>
                            <div>
                                <img class="img-fluid" src="' . $imovel['imagem2'] . '" alt="Slide 1">
                            </div>
                        </div>

                        <div class="info-imoveis me-2">
                            <h3 class="black fw-bold fs-custom5 mt-2">
                                ' . $imovel['preco'] . '
                                <a href="#" class="text-decoration-none black icon-ms">
                                    <i class="fa-regular fa-heart fs-custom3"></i>
                                </a>                        
                            </h3>

                            <h2 class="gray-text fs-custom3 mt-2">' . $imovel['condominio_iptu'] . '</h2>

                            <h2 class="gray-text fs-custom3 mt-2">
                                <i class="fa-solid fa-location-dot me-1 fs-custom7"></i>' . $imovel['localizacao'] . '
                            </h2>
                            <span class="gray-text mt-2"><i class="fa-solid fa-kaaba"></i>' . $imovel['tamanho'] . '</span>
                            <span class="gray-text mt-2"><i class="fa-solid fa-bed"></i>' . $imovel['quartos'] . '</span>
                            <span class="gray-text mt-2"><i class="fa-solid fa-car"></i>' . $imovel['garagens'] . '</span>
                            <span class="gray-text mt-2"><i class="fa-solid fa-shower"></i>' . $imovel['banheiros'] . '</span>
                            <br/>
                            <span class="gray-text mt-2 fs-custom3"><i class="fa-regular fa-circle-user me-1"></i>' . $imovel['proprietario'] . '</span>
                            <span class="gray-text mt-2 fs-custom3"><i class="fa-regular fa-calendar me-1"></i>' . $imovel['dias'] . '</span>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row justify-content-end mt-2">
                                    <a href="imoveis_detalhes.php" class="btnDetails mt-2 fw-medium me-2">Detalhes</a>
                                    <a href="#" class="btnWhatsApp mt-2 fw-medium w-5">
                                        <i class="fa-brands fa-whatsapp me-1 ms-1"></i>WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }?>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
        <div class="map-imoveis">

        </div>
    </div>
</div>