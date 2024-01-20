<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php");
   include("navbar.php");
?> 
<section class="container p-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 rounded-0 bg-card">
                <div class="card-body">
                    <h5 class="card-title mn-blue fs-custom-1 fw-semibold">Configurações do site</h5>
                    <p style="font-size:12px;" class="">Faça alterações nas tags SEO, Title e afins.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card border-0 rounded-0 bg-card">
                <div class="card-body">
                    <h5 class="card-title mn-blue fs-custom-1 fw-semibold">Sobre a Sessão</h5>
                    <p style="font-size:10px;" class="gray2">
                        <span class="fw-bold me-1">Título do Site:</span> Atualize o título do seu site para destacar as últimas novidades ou eventos importantes. Adapte a mensagem principal para garantir que seus visitantes recebam a informação mais relevante.
                    </p>
                    <p style="font-size:10px;" class="gray2">
                        <span class="fw-bold me-1">Palavras-chave (Keywords):</span> Otimize as palavras-chave para aprimorar a visibilidade do seu site nos motores de busca. Ajuste estrategicamente as palavras-chave para melhorar o posicionamento nos resultados de pesquisa.
                    </p>
                    <p style="font-size:10px;" class="gray2">
                        <span class="fw-bold me-1">Estilo Visual:</span> Escolha o background-color ideal para criar uma atmosfera visual única e atraente. Selecione a font-family que melhor representa a identidade da sua marca.
                    </p>
                    <p style="font-size:10px;" class="gray2">
                        <span class="fw-bold me-1">Botões e Elementos Interativos:</span> Personalize o estilo dos botões para uma navegação intuitiva e atraente. Faça ajustes nos elementos interativos para criar uma experiência de usuário única.
                    </p>
                </div>
            </div>
        </div>
        <div id="edit" class="col-lg-8">
            <div class="card border-0 rounded-0 bg-card">
                <div class="card-body">
                    <h5 class="card-title mn-blue fs-custom-1 fw-semibold">Configurações de SEO</h5>
                    <p style="font-size:10px;" class="gray2">Informações usadas nos mecanismos de busca do navegador</p>
                    <form method="post" action="
                  
						<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-custom3 fw-semibold mn-blue" id="basic-addon1">Título</span>
                            <input type="text" name="title" value="" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-custom3 fw-semibold mn-blue" id="basic-addon1">Descrição</span>
                            <input type="text" name="description" value="" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-custom3 fw-semibold mn-blue" id="basic-addon1">Palavras-chaves</span>
                            <input type="text" name="keywords" value="" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button class="myButton bg-red white text-uppercase" type="submit">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="card border-0 rounded-0 bg-card mt-3">
                <div class="card-body">
                    <h5 class="card-title mn-blue fs-custom-1 fw-semibold">Ajustar detalhes do site</h5>
                    <p style="font-size:10px;" class="gray2">Ajustes algumas coisas no site</p>
                    <div class="input-group mb-3">
                        <span for="colorBgInput" class="input-group-text fs-custom3 fw-semibold mn-blue me-2"> Escolha uma cor de fundo: <input class="ms-2 circle-color-input" type="color" id="colorBgInput" name="colorBgInput">
                        </span>
                        <button class="myButton bg-red white text-uppercase mt-3 mt-md-0" type="button" onclick="changeBgColor();">Mudar Cor</button>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text fs-custom3 fw-semibold mn-blue me-2 font-changeable"> Escolha o estilo de fonte: 
                           <select class="ms-2 border-0 radius-0 fw-semibold mn-blue" id="fontSelector">
                                <option class="fw-semibold mn-blue" value="Arial">Arial</option>
                                <option class="fw-semibold mn-blue" value="Times New Roman">Times New Roman</option>
                                <option class="fw-semibold mn-blue" value="Courier New">Courier New</option>
                                <option class="fw-semibold mn-blue" value="Verdana">Verdana</option>
                                <option class="fw-semibold mn-blue" value="Georgia">Georgia</option>
                                <option class="fw-semibold mn-blue" value="Palatino">Palatino</option>
                            </select>
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <span for="buttonFontSize" class="input-group-text fs-custom3 fw-semibold mn-blue me-2"> Largura de fonte: <input class="ms-2" type="range" id="buttonFontSize" min="10" max="30" step="1" value="12">
                            <span class="ms-1" id="buttonFontSizeValue">12</span>
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <span for="buttonSize" class="input-group-text fs-custom3 fw-semibold mn-blue me-2"> Tamanho do Botão: <input class="ms-2" type="range" id="buttonSize" min="10" max="200" value="90">
                            <span class="ms-1" id="buttonSizeValue">90</span>
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <span for="buttonColor" class="input-group-text fs-custom3 fw-semibold mn-blue me-2"> Cor do Botão: <input class="ms-2 circle-color-input" type="color" id="buttonColor" value="#3498db">
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <span for="buttonTextColor" class="input-group-text fs-custom3 fw-semibold mn-blue me-2"> Cor do Texto do Botão: <input class="ms-2 circle-color-input" type="color" id="buttonTextColor" value="#ffffff">
                        </span>
                    </div>
                    <button class="text-uppercase border-0 customButton">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

<script>
        // Alterar Cores
        function changeBgColor() {
        var selectedBgColor = document.getElementById('colorBgInput').value;
        document.body.style.backgroundColor = selectedBgColor;
        localStorage.setItem('saveBgColor', selectedBgColor);
    }

    function applySavedBgColor() {
        var saveBgColor = localStorage.getItem('saveBgColor');
        if (saveBgColor) {
            document.body.style.backgroundColor = saveBgColor;
            document.getElementById('colorBgInput').value = saveBgColor;
        };
    }
    window.onload = applySavedBgColor;
    // Fim Alterar Cores
    // Alterar estilo de fonte
    function styleFont() {
        document.addEventListener('DOMContentLoaded', function() {
            // Verifica se há uma escolha de fonte salva globalmente
            const savedFont = localStorage.getItem('selectedFont');
    
            if (savedFont) {
                updateFont(savedFont);
            }
    
            // Função para atualizar a fonte em qualquer elemento com a classe 'font-changeable'
            function updateFont(font) {
                const elementsToUpdate = document.querySelectorAll('.font-changeable');
    
                elementsToUpdate.forEach(function(element) {
                    element.style.fontFamily = font;
                });
            }
    
            // Função para adicionar um ouvinte de alteração de fonte a um elemento
            function addFontChangeListener(element) {
                element.addEventListener('change', function() {
                    const selectedFont = element.value;
                    localStorage.setItem('selectedFont', selectedFont);
                    updateFont(selectedFont);
                });
            }
    
            // Seletor de fonte na página de edição (ou qualquer página específica)
            const fontSelector = document.getElementById('fontSelector');
    
            // Verifica se o elemento fontSelector existe na página
            if (fontSelector) {
                // Inicia a fonte com a escolha salva, se houver
                if (savedFont) {
                    fontSelector.value = savedFont;
                }
    
                // Adiciona ouvinte de alteração de fonte ao seletor de fonte
                addFontChangeListener(fontSelector);
            }
        });
    }
    
    // Chama a função para iniciar o script
    styleFont();
    
    // Fim alterar estilo de fonte
    document.addEventListener('DOMContentLoaded', function() {
   
    // Função para aplicar as configurações a um botão
    function applySettingsToButton(button, size, fontSize, color, textColor) {
        button.style.width = size + 'px';
        button.style.fontSize = fontSize + 'px';
        button.style.backgroundColor = color;
        button.style.color = textColor;
    }

    const customButtons = document.querySelectorAll('.customButton');
    const buttonSize = document.getElementById('buttonSize');
    const buttonFontSize = document.getElementById('buttonFontSize');
    const buttonColor = document.getElementById('buttonColor');
    const buttonTextColor = document.getElementById('buttonTextColor');

    // Carrega as configurações salvas no localStorage, se existirem
    const savedButtonSize = localStorage.getItem('buttonSize') || 90;
    const savedButtonFontSize = localStorage.getItem('buttonFontSize') || 12;
    const savedButtonColor = localStorage.getItem('buttonColor') || '#3498db';
    const savedButtonTextColor = localStorage.getItem('buttonTextColor') || '#ffffff';

    // Aplica as configurações iniciais aos botões
    customButtons.forEach(function(button) {
        applySettingsToButton(button, savedButtonSize, savedButtonFontSize, savedButtonColor, savedButtonTextColor);
    });

    // Atualiza as configurações e aplica aos botões
    function updateAndApplySettings() {
        const newSize = buttonSize.value;
        const newFontSize = buttonFontSize.value;
        const newColor = buttonColor.value;
        const newTextColor = buttonTextColor.value;

        // Atualiza e salva as configurações no localStorage
        localStorage.setItem('buttonSize', newSize);
        localStorage.setItem('buttonFontSize', newFontSize);
        localStorage.setItem('buttonColor', newColor);
        localStorage.setItem('buttonTextColor', newTextColor);

        // Aplica as configurações aos botões
        customButtons.forEach(function(button) {
            applySettingsToButton(button, newSize, newFontSize, newColor, newTextColor);
        });
    }

    // Atualiza as configurações quando há mudanças
    buttonSize.addEventListener('input', updateAndApplySettings);
    buttonFontSize.addEventListener('input', updateAndApplySettings);
    buttonColor.addEventListener('input', updateAndApplySettings);
    buttonTextColor.addEventListener('input', updateAndApplySettings);
});
</script>

<?php include("../includes_adm/footer.php");?>