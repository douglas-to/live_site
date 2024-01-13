        <?php include("../php_adm/protect.php");?>

        <!-- Conteúdo principal -->
        <div class="center mt-2 col-md-12">
        
                <!-- Lista de produtos em cards -->
            <?php
            // Substituir no futuro com a consulta ao banco de dados
            $imoveis = [
            [
                'id' => 1,
                'data' => '20/03/23 14:20',
                'imagem1' => '../imagens/15259789331.jpg',
                'imagem2' => '../imagens/15259789541.jpg',
                'preco' => 'R$ 490',
                'tipo' => 'Aluguel',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Oscar Freire, 1100 - Pinheros/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'views' => 10,
                'contatos' => 7
            ],

            [
                'id' => 2,
                'data' => '15/03/23 9:10',
                'imagem1' => '../imagens/15259789331.jpg',
                'imagem2' => '../imagens/15259789541.jpg',
                'preco' => 'R$ 300',
                'tipo' => 'Compra',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Fabía, 1100 - Lapa/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'views' => 15,
                'contatos' => 7
            ],

            [
                'id' => 3,
                'data' => '05/07/23 19:20',
                'imagem1' => '../imagens/15259789331.jpg',
                'imagem2' => '../imagens/15259789541.jpg',
                'preco' => 'R$ 390',
                'tipo' => 'Aluguel',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Fabía, 1100 - Lapa/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'views' => 2,
                'contatos' => 2
            ],

            [
                'id' => 4,
                'data' => '18/04/23 15:32',
                'imagem1' => '../imagens/15259789331.jpg',
                'imagem2' => '../imagens/15259789541.jpg',
                'preco' => 'R$ 390',
                'tipo' => 'Compra',
                'condominio_iptu' => 'Condominio R$300 / IPTU 1R$',
                'localizacao' => 'Rua Fabía, 1100 - Lapa/São-Paulo',
                'tamanho' => '72m²',
                'quartos' => '3',
                'garagens' => '2',
                'banheiros' => '2',
                'proprietario' => 'Guber Oliveira',
                'views' => 2,
                'contatos' => 2
            ],
           
        ];

            foreach ($imoveis as $index => $imovel) {
                $switchId = 'mySwitch_' . $index;
                $labelId = 'myLabel_' . $index;

                echo '
                <div class="mt-3 d-flex justify-content-center justify-content-md-start">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="slide-adm me-2">
                            <div>
                                <div class="bg-img" style="background-image: url(' . $imovel['imagem1'] . ');" alt="Slide 1">
                                    <div class="me-2 fs-custom3 d-flex">
                                        <div class="ps-1">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="ps-1 custom-ms-20">
                                            <a class="white" href="#"><i id="heartIcon" class="fa-solid fa-heart clickable-icon fs-custom3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-img" style="background-image: url(' . $imovel['imagem2'] . ');" alt="Slide 2">
                                    <div class="me-2 fs-custom3 d-flex">
                                        <div class="ps-1">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="ps-1 custom-ms-20">
                                            <a class="white" href="#"><i id="heartIcon" class="fa-solid fa-heart clickable-icon fs-custom3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-imoveis me-2">
                            <h3 class="gray2 fw-semibold fs-custom3 text-uppercase">Imóvel para '. $imovel['tipo'] .'</h3>
                            <h3 class="black fw-bold fs-custom5">
                                ' . $imovel['preco'] . ' /Mês                       
                            </h3>

                            <h2 class="gray fs-custom3 mt-2">' . $imovel['condominio_iptu'] . '</h2>

                            <h2 class="gray fs-custom3 mt-2">
                                <i class="black fa-solid fa-location-dot me-1 fs-custom3"></i>' . $imovel['localizacao'] . '
                            </h2>
                            <span class="black mt-2 me-2"><i class="fa-solid fa-kaaba fs-custom3 me-1"></i>' . $imovel['tamanho'] . '</span>
                            <span class="black mt-2 me-2"><i class="fa-solid fa-bed fs-custom3 me-1"></i>' . $imovel['quartos'] . '</span>
                            <span class="black mt-2 me-2"><i class="fa-solid fa-car fs-custom3 me-1"></i>' . $imovel['garagens'] . '</span>
                            <span class="black mt-2 me-2"><i class="fa-solid fa-shower fs-custom3 me-1"></i>' . $imovel['banheiros'] . '</span>
                            <br/>
                            <span class="gray mt-2 me-1 fw-bold">' . $imovel['views'] .'<span class="ms-1 fw-semibold">VISUALIZAÇÕES</span></span>
                            <span class="gray mt-2 me-1 fw-bold">' . $imovel['contatos'] . '<span class="ms-1 fw-semibold">CONTATOS</span></span>
                            <span class="gray mt-2 me-1 fw-bold"><i class="black fa-regular fa-circle-user me-1 fs-custom3"></i>' . $imovel['proprietario'] . '</span>
                            <span class="gray mt-2 me-1 fw-bold">ID ' . $imovel['id'] . '</span>
                            <div class="d-flex flex-row justify-content-start mt-2">
                                <div class="me-2 fs-custom3">
                                    <a class="gray" href="#"><i class="fa-regular fa-trash-can"></i></a>
                                </div>

                                <div class="me-2 fs-custom3">
                                    <a class="gray" href="#"><i class="fa-regular fa-eye"></i></a>
                                </div>

                                <div class="me-2 fs-custom3">
                                    <a class="gray" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                                </div>

                                <div class="me-2 fs-custom3">
                                    <a class="gray" href="#"><i class="fa-regular fa-share-from-square"></i></a>
                                </div>

                                <div class="me-2 fs-custom3">
                                    <a class="gray" href="#"><i class="fa-regular fa-copy"></i></a>
                                </div>

                                <div class="form-check form-switch d-flex">
                                    <input class="form-check-input fs-custom3" id="' . $switchId . '" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label fs-custom3 gray ms-1" id="' . $labelId . '" for="flexSwitchCheckDefault">Ativar</label>
                                </div>

                                <div class="ms-2 fs-custom3">
                                    <span class="gray" href="#"><i class="fa-regular fa-clock me-1"></i>' . $imovel['data'] . '</span>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>';
            }?>

            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    <?php
                        foreach ($imoveis as $index => $imovel) {
                            $switchId = 'mySwitch_' . $index;
                            $labelId = 'myLabel_' . $index;

                            echo '(function() {
                                        var meuSwitch = document.getElementById("' . $switchId . '");
                                        var labelSwitch = document.getElementById("' . $labelId . '");

                                        meuSwitch.addEventListener("change", function() {
                                            if (meuSwitch.checked) {
                                                labelSwitch.textContent = "Ativado";
                                            } else {
                                                labelSwitch.textContent = "Ativar";
                                            }
                                        });
                                    })();';
                        }
                    ?>
                });
            </script> 
        </div>
        
</body>
</html>
