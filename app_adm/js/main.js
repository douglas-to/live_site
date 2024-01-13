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
    console.log('Código JS executado com sucesso!');
    
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

// Efeito click coração

function clickHeart() {
    $(document).ready(function() {
        $('#heartIcon').click(function() {
            $(this).toggleClass('clicked');
        })
    })
}

clickHeart();

// Fim efeito click coração


// Slick.js 
function slick() {
    $('.slide-adm').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3500,
        fade: true,
        cssEase: 'linear'
    });

    $('.center-mode').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
    });

    $('.data-mode').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
    });
}

slick();

// Fim slick.js



