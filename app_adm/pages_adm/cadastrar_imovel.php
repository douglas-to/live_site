<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?>

<section class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-uppercase mn-blue fw-semibold mb-5 fs-custom5">
                <i class="fa-regular fa-folder-closed me-2"></i>Detalhe
            </h1>
            <form action="processa_cadastro.php" method="post">
                <div class="row">
                    <div class="col-lg-6 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Tipo de uso</h6>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="btn-group mb-1 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="tipo_uso_residencial">
                                <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-1-outlined">Residencial</label>
                            </div>
                            <div class="btn-group mb-1 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="tipo_uso_comercial">
                                <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-2-outlined">Comercial</label>
                            </div>
                            <div class="btn-group mb-1 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                <input type="checkbox" class="btn-check" id="btn-check-3-outlined" autocomplete="off" name="tipo_uso_misto">
                                <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-3-outlined">Uso misto</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2 mb-2 mb-md-0 mt-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Tipo de imóvel</h6>
                        <select class="form-select fs-custom3 rounded-0" id="tipo_imovel" name="tipo_imovel" required>
                            <option value="casa">Casa</option>
                            <option value="apartamento">Apartamento</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">categoria</h6>
                        <select class="form-select fs-custom3 rounded-0" id="categoria" name="categoria" required>
                            <option value="residencial">Residencial</option>
                            <option value="comercial">Comercial</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3 mt-md-5">
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Quarto</h6>
                        <select class="form-select fs-custom3 rounded-0" id="Quarto" name="quarto" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Súite</h6>
                        <select class="form-select fs-custom3 rounded-0" id="suite" name="suite" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Banheiro</h6>
                        <select class="form-select fs-custom3 rounded-0" id="banheiro" name="banheiro" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Vagas</h6>
                        <select class="form-select fs-custom3 rounded-0" id="vagas" name="vagas" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Tipo de vaga</h6>
                        <select class="form-select fs-custom3 rounded-0" id="tipo_vaga" name="tipo_vaga" required>
                            <option value="casa">Tipo 1</option>
                            <option value="apartamento">Tipo 2</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Área Útil</h6>
                        <select class="form-select fs-custom3 rounded-0" id="area_util" name="area_util" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Área Total</h6>
                        <select class="form-select fs-custom3 rounded-0" id="area_total" name="area_total" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Sacada</h6>
                        <select class="form-select fs-custom3 rounded-0" id="sacada" name="sacada" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Andar</h6>
                        <select class="form-select fs-custom3 rounded-0" id="andar" name="andar" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Vista</h6>
                        <select class="form-select fs-custom3 rounded-0" id="vista" name="vista" required>
                            <option value="casa">Tipo 1</option>
                            <option value="apartamento">Tipo 2</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Frente</h6>
                        <select class="form-select fs-custom3 rounded-0" id="frente" name="frente" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Fundos</h6>
                        <select class="form-select fs-custom3 rounded-0" id="fundos" name="fundos" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Esquerdo</h6>
                        <select class="form-select fs-custom3 rounded-0" id="esquerdo" name="esquerdo" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Direito</h6>
                        <select class="form-select fs-custom3 rounded-0" id="direito" name="direito" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Área desejada</h6>
                        <select class="form-select fs-custom3 rounded-0" id="area_desejada" name="area_desejada" required>
                            <option value="casa">Tipo 1</option>
                            <option value="apartamento">Tipo 2</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Zona</h6>
                        <select class="form-select fs-custom3 rounded-0" id="zona" name="zona" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Ano Cons</h6>
                        <select class="form-select fs-custom3 rounded-0" id="ano_cons" name="ano_cons" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Área Reforma</h6>
                        <select class="form-select fs-custom3 rounded-0" id="area_reforma" name="area_reforma" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Mobiliado</h6>
                        <select class="form-select fs-custom3 rounded-0" id="mobiliado" name="mobiliado" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-2 mb-md-0">
                        <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Face</h6>
                        <select class="form-select fs-custom3 rounded-0" id="face" name="face" required>
                            <option value="casa">Tipo 1</option>
                            <option value="apartamento">Tipo 2</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <h6 class="text-uppercase mn-blue fw-semibold mb-5 fs-custom5">
                            <i class="fa-solid fa-location-dot me-2"></i>Endereço
                        </h6>

                        <div class="mb-3">
                            <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">CEP</h6>
                            <div class="input-group">
                                <input type="text" class="form-control border rounded-0" aria-label="CEP" name="cep">
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row">
                            <div class="mb-3">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Cidade</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control border me-0 me-md-3 rounded-0" aria-label="Cidade" name="cidade">
                                </div>
                            </div>

                            <div class="mb-3">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">UF</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control border rounded-0" aria-label="UF" name="uf">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Bairro</h6>
                            <div class="input-group">
                                <input type="text" class="form-control border rounded-0" aria-label="Bairro" name="bairro">
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Endereço</h6>
                            <div class="input-group">
                                <input type="text" class="form-control border rounded-0" aria-label="Endereço" name="endereco">
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row">
                            <div class="mb-3">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Número</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control border me-0 me-md-3 rounded-0" aria-label="Número" name="numero">
                                </div>
                            </div>

                            <div class="mb-3">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Complemento</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control border rounded-0" aria-label="Complemento" name="complemento">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Mostrar endereço no mapa</h6>
                            <div class="col-lg-12 mt-4">
                                <div style="background-image: url('../imagens/map.jpg'); background-size: cover; width: 100%; height: 200px;" name="mostrar_mapa"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-9">
                        <h6 class="text-uppercase mn-blue fw-semibold mb-4 mb-md-5 fs-custom5">
                            <i class="fas fa-tag me-2"></i>Características do imóvel
                        </h6>
                        
                        <div class="row">
                            <div class="d-flex flex-column flex-md-row">
                                <div class="col">
                                    <h6 class="text-uppercase mn-blue fw-semibold mb-3 fs-custom8">
                                        <i class="fa-solid fa-person-swimming me-2"></i>Diferenciais
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="ar_condicionado">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Ar condicionado
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="lareira">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Lareira
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="mobilia_usada">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Mobilia usada
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="varanda_gourmet">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Varanda gourmet
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="academia">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Academia
                                        </label>
                                    </div>

                                    <div class="mt-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="churrasqueira">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Churrasqueira
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="elevador">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Elevador
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="espaco_verde">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Espaço verde
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="gerador_eletrico">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Gerador elétrico
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="jardim">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Jardim
                                        </label>
                                    </div>

                                    <div class="mb-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="piscina">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Piscina
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="piscina_criancas">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Piscina para crianças
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="playground">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Playground
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="recepcao">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Recepção
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="salao_festas">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Salão de festas
                                        </label>
                                    </div>

                                    <h6 class="text-uppercase mn-blue fw-semibold mt-3 fs-custom8">
                                        <i class="fa-solid fa-circle-plus me-2"></i>Serviços adicionais:
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cabine_primaria">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Cabine primária
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="docas">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Docas
                                        </label>
                                    </div>
                                </div>

                                <div class="col mt-md-0 mt-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold mb-3 fs-custom8">
                                        <i class="fas fa-chart-area me-2"></i>Acessos a área:
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_escolas">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de escolas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_hospitais">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de hospitais
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_shopping">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de shopping
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_transportes">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de transportes
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_vias_acesso">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de vias de acesso
                                        </label>
                                    </div>

                                    <div class="mt-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="circuito_seguranca">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Circuito de segurança 
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="condominio_fechado">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Condomínio fechado
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="interfone">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Interfone
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="perto_cinemas">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Perto de cinemas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="elevador_de_serviço">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Elevador de serviço
                                        </label>
                                    </div>

                                    <div class="mb-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="vigia">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Vigia
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="spa">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            SPA
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="salao_jogos">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Salão de jogos
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="patio">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Pátio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="trifasico">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Trifásico
                                        </label>
                                    </div>

                                    <h6 class="text-uppercase mn-blue fw-semibold mt-3 fs-custom8">
                                        <i class="fa-solid fa-shield me-2"></i>Segurança:
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="seguranca_24h">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Segurança 24 horas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="sistema_alarme">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Sistema de alarme
                                        </label>
                                    </div>
                                </div>

                                <div class="col mt-md-0 mt-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold mb-3 fs-custom8">
                                        <i class="fas fa-map-marker-alt me-2"></i>Tem no imóvel:
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="acesso_internet">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Acesso a internet
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="aquecimento">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Aquecimento
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="ventilacao">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Ventilação
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="area_de_servico">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Área de serviço
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cabeamento_completo">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Cabeamento completo
                                        </label>
                                    </div>

                                    <div class="mt-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cozinha">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Cozinha
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="deposito">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Depósito
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="garagem">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Garagem
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="moveis_de_madeira">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Móveis de madeira
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="lavanderia">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Lavanderia
                                        </label>
                                    </div>

                                    <div class="mb-3"></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="mobilia_nova">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Mobília nova
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="quintal">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Quintal
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="serviço_payPerUse">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Serviço pay per use
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="tv_cabo">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            TV a cabo
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="vista_exterior">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Vista exterior
                                        </label>
                                    </div>

                                    <h6 class="text-uppercase mn-blue fw-semibold mt-3 fs-custom8">
                                    <i class="fa-solid fa-ban me-2"></i>Restrições:
                                    </h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="aceita_animais">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Aceita animais
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="nao_aceita_animais">
                                        <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                            Não aceita animais
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-7 mb-3">
                            <h6 class="text-uppercase mn-blue fw-semibold mb-5 fs-custom5">
                                <i class="fa-solid fa-hotel me-2"></i>Sobre do Condomínio
                            </h6>
                            
                            <div class="mb-3">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Nome do condomínio</h6>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border rounded-0" aria-label="nome_condominio" aria-describedby="basic-addon1" name="nome_condominio">
                                </div>
                            </div>
                            
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="mb-3">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">N° de torres</h6>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border rounded-0" aria-label="numero_torres" aria-describedby="basic-addon1" name="numero_torres">
                                    </div>
                                </div>

                                <div class="mb-3 ms-0 ms-md-2">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">N° de andares</h6>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border rounded-0" aria-label="numero_andares" aria-describedby="basic-addon1" name="numero_andares">
                                    </div>
                                </div>

                                <div class="mb-3 ms-0 ms-md-2">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">N° de unidades(andar)</h6>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border rounded-0" aria-label="numero_unidades" aria-describedby="basic-addon1" name="numero_unidades">
                                    </div>
                                </div>

                                <div class="mb-3 ms-0 ms-md-2">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Ano de construção</h6>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border rounded-0" aria-label="ano_contrucao" aria-describedby="basic-addon1" name="ano_contrucao">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <h6 class="text-uppercase mn-blue fw-semibold mb-4 mb-md-5 fs-custom5">
                                <i class="fas fa-tag me-2"></i>Negociação e valores 
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-2 mb-md-0">
                                <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Tipo de negociação</h6>
                                <div>
                                    <div class="btn-group mt-2 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                        <input type="checkbox" class="btn-check" id="btn-check-4-outlined" autocomplete="off" name="tipo_venda">
                                        <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-4-outlined">Venda</label>
                                    </div>
                                    <div class="btn-group mt-2 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                        <input type="checkbox" class="btn-check" id="btn-check-5-outlined" autocomplete="off" name="tipo_aluguel">
                                        <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-5-outlined">Aluguel</label>
                                    </div>
                                    <div class="btn-group mt-2 me-md-2" role="group" aria-label="Basic radio toggle button group">
                                        <input type="checkbox" class="btn-check" id="btn-check-6-outlined" autocomplete="off" name="tipo_vendaAluguel">
                                        <label class="btn btn-outline-secondary text-uppercase fs-custom3 rounded-0" for="btn-check-6-outlined">Venda e aluguel</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 mt-4">
                            <div class="row">
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Valor de venda</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="valor_venda" aria-describedby="basic-addon1" name="valor_venda">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="usou_fgts">
                                        <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheckDefault">Usou FGTS nos últimos 3 anos?</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Pagamento</h6>
                                    <div class="h-50 mb-2">
                                        <select class="form-select fs-custom3 rounded-0 h-100" id="pagamento" name="pagamento" required>
                                            <option value="residencial">Mensal</option>
                                            <option value="comercial">Anual</option>
                                        </select>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1" name="aceita_financiamento">
                                        <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheckDefault1">Aceita financiamento</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Valor do aluguel</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="valor_aluguel" aria-describedby="basic-addon1" name="valor_aluguel">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Pagamento do aluguel</h6>
                                    <div class="h-50 mb-2">
                                        <select class="form-select fs-custom3 rounded-0 h-100" id="pagamento_aluguel" name="pagamento_aluguel" required>
                                            <option value="residencial">Mensal</option>
                                            <option value="comercial">Anual</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Condomínio / Mês</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="condominio" aria-describedby="basic-addon1" name="condominio">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">IPTU / Mês</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="iptu" aria-describedby="basic-addon1" name="iptu">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Seguro</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="seguro" aria-describedby="basic-addon1" name="seguro">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Taxa de serviço</h6>
                                    <div class="input-group h-50 mb-2">
                                        <span class="input-group-text rounded-0 fs-custom3" id="basic-addon1">R$</span>
                                        <input type="text" class="form-control border rounded-0 h-100" aria-label="taxa_servico" aria-describedby="basic-addon1" name="taxa_servico">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <h6 class="text-uppercase mn-blue fw-semibold mb-4 mb-md-4 mt-3 fs-custom8">
                                    <i class="fa-solid fa-hand-holding-dollar me-2"></i>Modalidade de aluguel
                                </h6>
                                
                                <div class="row">
                                    <div class="d-flex flex-column flex-md-row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="sem_garantia">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Sem garantia
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="seguro_fianca">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Seguro fiança
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="zapway">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    ZapWay
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="credpago">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    CredPago
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col mt-md-0 mt-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="deposito_caucao">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Depósito caução
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="carta_fianca">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Carta fiança
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="titulo_capitalizacao">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Título de capitalização
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="fiador">
                                                <label class="form-check-label fs-custom8 mn-blue" for="flexCheckDefault">
                                                    Fiador
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-5">
                            <h6 class="text-uppercase mn-blue fw-semibold mb-4 mb-md-5 fs-custom5">
                                <i class="fa-regular fa-file-lines me-2"></i>Título e descrição do anúncio 
                            </h6>
                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Título do imóvel</h6>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control border rounded-0" aria-label="titulo_imovel" aria-describedby="basic-addon1" name="titulo_imovel">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-uppercase mn-blue fw-semibold fs-custom8">Descrição do imóvel</h6>
                                    <div class="form-floating">
                                        <textarea class="form-control border rounded-0" name="descricao_imovel"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="mn-blue fw-semibold fs-custom5 mb-2">Vídeo de imóvel</h6>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text bg-transparent border rounded-0" id="basic-addon1"><i class="fa-brands fa-youtube red"></i></span>
                                        <input type="text" class="form-control border border-start-0 rounded-0" placeholder="Coloque aqui o link do vídeo" aria-label="video_imovel" aria-describedby="basic-addon1" name="video_imovel">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="mn-blue fw-semibold fs-custom5 mb-2">Link do tour virtual</h6>
                                    <div class="input-group">
                                        <input type="text" class="form-control border rounded-0" placeholder="Coloque aqui o link do tour virtual" aria-label="tour_virtual" aria-describedby="basic-addon1" name="tour_virtual">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="mn-blue fw-semibold fs-custom5">Sobre o bairro</h6>
                                    <div class="form-floating">
                                        <textarea class="form-control border rounded-0" name="sobre_bairro"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="mn-blue fw-semibold fs-custom5">Condições para alugar / venda</h6>
                                    <div class="form-floating">
                                        <textarea class="form-control border rounded-0" name="condicoes_alugar_vender"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-5">
                            <h6 class="mn-blue fw-semibold mb-4 mb-md-5 fs-custom5">
                                <i class="fa-solid fa-camera-retro me-2"></i><span>Fotos</span><span class="fs-custom8 ms-1">(Mínimo de 3 fotos)</span>
                            </h6>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mx-auto">
                                    <label class="myButton w-100" for="imagem1"><i class="fa-regular fa-image me-2"></i>1° foto<img class="img-fluid mt-3" id="preview1"></label>
                                    <input class="d-none" type="file" id="imagem1" accept="image/*" onchange="mostrarPreview(this, 'preview1')" name="imagem1">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem2"><i class="fa-regular fa-image me-2"></i>2° foto<img class="img-fluid mt-3" id="preview2"></label>
                                    <input class="d-none" type="file" id="imagem2" accept="image/*" onchange="mostrarPreview(this, 'preview2')" name="imagem2">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem3"><i class="fa-regular fa-image me-2"></i>3° foto<img class="img-fluid mt-3" id="preview3"></label>
                                    <input class="d-none" type="file" id="imagem3" accept="image/*" onchange="mostrarPreview(this, 'preview3')" name="imagem3">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem4"><i class="fa-regular fa-image me-2"></i>4° foto<img class="img-fluid mt-3" id="preview4"></label>
                                    <input class="d-none" type="file" id="imagem4" accept="image/*" onchange="mostrarPreview(this, 'preview4')" name="imagem4">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem5"><i class="fa-regular fa-image me-2"></i>5° foto<img class="img-fluid mt-3" id="preview5"></label>
                                    <input class="d-none" type="file" id="imagem5" accept="image/*" onchange="mostrarPreview(this, 'preview5')" name="imagem5">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem6"><i class="fa-regular fa-image me-2"></i>6° foto<img class="img-fluid mt-3" id="preview6"></label>
                                    <input class="d-none" type="file" id="imagem6" accept="image/*" onchange="mostrarPreview(this, 'preview6')" name="imagem6">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mx-auto">
                                    <label class="myButton h-100 w-100" for="imagem7"><i class="fa-regular fa-image me-2"></i>7° foto<img class="img-fluid mt-3" id="preview7"></label>
                                    <input class="d-none" type="file" id="imagem7" accept="image/*" onchange="mostrarPreview(this, 'preview7')" name="imagem7">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-5">
                            <h6 class="mn-blue fw-semibold mb-4 mb-md-3 fs-custom5">
                                <i class="fa-solid fa-file-shield me-2"></i>Informações restritas
                            </h6>
                        </div>

                        <div class="mt-1">
                            <div class="row">
                                <div class="col-lg-7 mb-3">      
                                    <div class="mb-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent rounded-0 mn-blue" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                                            <input type="text" class="form-control border border-start-0 rounded-0" placeholder="Nome do proprietário" aria-describedby="basic-addon1" name="nome_proprietario">
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex flex-column flex-lg-row">
                                        <div class="mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" placeholder="exemplo@gmail.com" aria-describedby="basic-addon1" name="email">
                                            </div>
                                        </div>

                                        <div class="mb-3 ms-0 ms-lg-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue" id="basic-addon1"><i class="fa-brands fa-whatsapp"></i></span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon1" name="whatsapp">
                                            </div>
                                        </div>

                                        <div class="mb-3 ms-0 ms-lg-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon1" name="telefone">
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon1">Nome</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon1" name="nome">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon2">CPF</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon2" name="cpf">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon1">Banco</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon1" name="banco">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon2">Agência</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon2" name="agencia">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon2">Conta</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon2" name="conta">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent rounded-0 mn-blue fw-semibold fs-custom8" id="basic-addon2">PIX</span>
                                                <input type="text" class="form-control border border-start-0 rounded-0" aria-describedby="basic-addon2" name="pix">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-lg-row justify-content-center">
                                        <div class="col-lg-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck1" name="relatorio_cliente">
                                                <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheck1">Relatório ao Cliente</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck2" name="placa_faixa">
                                                <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheck2">Placa/Faixa</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck3" name="autorizacao">
                                                <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheck3">Autorização</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck4" name="locacao">
                                                <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheck4">Locação</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck5" name="venda">
                                                <label class="form-check-label mn-blue fw-semibold fs-custom8" for="flexSwitchCheck5">Venda</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <h6 class="mn-blue fw-semibold fs-custom8">Avaliação live venda</h6>
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control border rounded-0" aria-label="avaliacao_live_venda" aria-describedby="basic-addon1" name="avaliacao_live_venda">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <h6 class="mn-blue fw-semibold fs-custom8">Avalição live locação</h6>
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control border rounded-0" aria-label="avaliacao_live_locacao" aria-describedby="basic-addon1" name="avaliacao_live_locacao">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <h6 class="mn-blue fw-semibold fs-custom8">Comissão venda</h6>
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control border rounded-0" aria-label="comissao_venda" aria-describedby="basic-addon1" name="comissao_venda">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <h6 class="mn-blue fw-semibold fs-custom8">Comissão locação</h6>
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control border rounded-0" aria-label="comissao_locacao" aria-describedby="basic-addon1" name="comissao_locacao">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border rounded-0" placeholder="" id="floatingTextarea" name="anotacoes_internas"></textarea>
                                                <label class="fs-custom8 fw-semibold mn-blue text-uppercase" for="floatingTextarea">Anotações internas da imobiliária</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column flex-lg-row justify-content-between mt-3">
                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="MATRICULA/RI" name="matricula_ri">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="IPTU IMÓVEL" name="iptu_imovel">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="LUZ" name="luz">
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="d-flex flex-column flex-lg-row justify-content-between mt-3">
                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="ÁGUA" name="agua">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="GÁS" name="gas">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border rounded-0" placeholder="CPF" name="cpf_conta_bancaria">
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="d-flex flex-column flex-lg-row justify-content-between mt-3">
                                            <div class="card border rounded-0 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fs-custom8 fw-semibold mn-blue text-uppercase">Projeto aprovado</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card-body">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="switch1" name="projeto_aprovado">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border rounded-0 mb-3 ms-0 ms-lg-2">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fs-custom8 fw-semibold mn-blue text-uppercase">Aprovação ambiental</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card-body">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="switch1" name="aprovacao_ambiental">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3 ms-0 ms-lg-2">
                                                <select style="height:9.6vh;" class="form-select border rounded-0 fs-custom8 fw-semibold mn-blue text-uppercase" name="titulo_direito">
                                                    <option selected>Titulo / Direito</option>
                                                    <option value="1">Valor1</option>
                                                    <option value="2">Valor2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-lg-8">
                            <div class="col-lg-6">
                                <h6 class="mn-blue fw-semibold mb-4 mb-md-3 fs-custom5">
                                    <i class="fa-solid fa-user-tie me-2"></i>Corretores responsaveis
                                </h6>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border rounded-0" id="floatingInput" placeholder="" name="corretores_responsaveis">
                                        <label class="mn-blue fw-semibold fs-custom8" for="floatingInput">Corretor responsável</label>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border rounded-0" id="floatingInput" placeholder="" name="corretor_captador">
                                        <label class="mn-blue fw-semibold fs-custom8" for="floatingInput">Corretor captador</label>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border rounded-0" id="floatingInput" placeholder="" name="corretor_cadastrou">
                                        <label class="mn-blue fw-semibold fs-custom8" for="floatingInput">Corretor que cadastrou</label>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mn-blue fw-bold mb-1 fs-custom8">
                                Permissões de alteração
                            </h6>

                            <div class="row mt-3">
                                <div class="col-lg-4 mb-2 mb-lg-0">
                                    <div class="d-flex justify-content-between align-items-center border p-2">
                                        <h6 class="mn-blue fw-semibold mb-1 fs-custom8">Todos os corretores</h6>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" name="todos_corretores">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 mb-2 mb-lg-0">
                                    <div class="d-flex justify-content-between align-items-center border p-2">
                                        <h6 class="mn-blue fw-semibold mb-1 fs-custom8">Corretores responsáveis</h6>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" name="corretores_responsaveis_perm">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-between align-items-center border p-2">
                                        <h6 class="mn-blue fw-semibold mb-1 fs-custom8">Corretor que cadastrou</h6>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" name="corretor_cadastrou_perm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-4 mb-2 mb-lg-0">
                                    <div class="d-flex justify-content-between align-items-center border p-2" style="height:60px">
                                        <h6 class="mn-blue fw-semibold mb-1 fs-custom8">Cmpartilhar comissão</h6>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" name="compartilhar_comissao">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-floating">
                                        <textarea class="form-control border rounded-0" placeholder="" id="floatingTextarea" style="height:60px" name="divisao_comissao"></textarea>
                                        <label class="mn-blue fw-semibold mb-1 fs-custom8" for="floatingTextarea">Divisão de comissão</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="myButton bg-red white mb-3" type="submit">Cadastrar Imóvel</button>
            </form>
        </div>
    </div>
</section>
<script>
    function mostrarPreview(input, idElemento) {
    const preview = document.getElementById(idElemento);

    if (input.files && input.files.length > 0) {
        const leitor = new FileReader();

        leitor.onload = function (e) {
            preview.src = e.target.result;
        };

        leitor.readAsDataURL(input.files[0]);
        preview.alt = "";
    } else {
        preview.src = "";
        preview.alt = " ";
    }
}
</script>
<?php include("../includes_adm/footer.php"); ?>