<?php include("includes/header.php"); ?>
    <section class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="imoveis">
                    <h1 class="fs-custom5 mb-2 text-uppercase">42 Imóveis para <span class="fw-bold">alugar ou comprar</span> por todo o Brasil</h1>
                    <p class="fs-custom3 gray-text fw-light w-50 mb-3">O nosso Galpão é onde você encontrará uma seleção de galpões comerciais e industriais disponíveis para venda e aluguel. Explore diversas opções de tamanhos, preços e localizações para encontrar a propriedade ideal para suas necessidades de negócios. Encontre seu galpão perfeito aqui!</p>
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
                            // Adicione mais dados de imóveis aqui, se necessário.
                        ];

                        // Loop sobre os imóveis e gere o HTML dinamicamente.
                        foreach ($imoveis as $imovel) {
                            echo '<div class="col-md-8">
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
                </div>
            </div>
        </div>
    </section>
<?php include("includes/footer.php"); ?>