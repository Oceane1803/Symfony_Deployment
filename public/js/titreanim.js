// Fonction pour diviser le texte en array
function prepareText(text) {
    return [text]; // Met le texte dans un tableau avec un seul élément
}

// Configuration
var iSpeed = 100; // Délai entre chaque caractère
var iIndex = 0; // Position de départ dans le tableau
var iTextPos = 0; // Position du texte
var sContents = ''; // Contenu
var iRow; // Ligne actuelle

function typewriter(elementId, text) {
    // Initialisation du texte
    var aText = prepareText(text);
    var iArrLength = aText[0].length;
    var destination = document.getElementById(elementId);
    
    function updateText() {
        sContents = ' ';
        iRow = Math.max(0, iIndex);
        
        while (iRow < iIndex) {
            sContents += aText[iRow++] + '<br />';
        }
        
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
        
        if (iTextPos++ == iArrLength) {
            iTextPos = 0;
            iIndex++;
            if (iIndex != aText.length) {
                iArrLength = aText[iIndex].length;
                setTimeout(updateText, 500);
            }
        } else {
            setTimeout(updateText, iSpeed);
        }
    }
    
    // Démarrer l'animation
    updateText();
}

// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    var titleElement = document.getElementById('creation-title');
    if (!titleElement) return;

    var text = titleElement.textContent;
    var speed = 100; // vitesse de frappe
    var i = 0;
    
    // Vider le contenu initial
    titleElement.textContent = '';
    
    function typeWriter() {
        if (i < text.length) {
            titleElement.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    
    // Démarrer l'animation
    typeWriter();
});
// Fonction pour diviser le texte en array
function prepareText(text) {
    return [text]; // Met le texte dans un tableau avec un seul élément
}

// Configuration
var iSpeed = 100; // Délai entre chaque caractère
var iIndex = 0; // Position de départ dans le tableau
var iTextPos = 0; // Position du texte
var sContents = ''; // Contenu
var iRow; // Ligne actuelle

function typewriter(elementId, text) {
    // Initialisation du texte
    var aText = prepareText(text);
    var iArrLength = aText[0].length;
    var destination = document.getElementById(elementId);
    
    function updateText() {
        sContents = ' ';
        iRow = Math.max(0, iIndex);
        
        while (iRow < iIndex) {
            sContents += aText[iRow++] + '<br />';
        }
        
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
        
        if (iTextPos++ == iArrLength) {
            iTextPos = 0;
            iIndex++;
            if (iIndex != aText.length) {
                iArrLength = aText[iIndex].length;
                setTimeout(updateText, 500);
            }
        } else {
            setTimeout(updateText, iSpeed);
        }
    }
    
    // Démarrer l'animation
    updateText();
}

// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    var titleElement = document.getElementById('creation-title');
    if (!titleElement) return;

    var text = titleElement.textContent;
    var speed = 100; // vitesse de frappe
    var i = 0;
    
    // Vider le contenu initial
    titleElement.textContent = '';
    
    function typeWriter() {
        if (i < text.length) {
            titleElement.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    
    // Démarrer l'animation
    typeWriter();
});