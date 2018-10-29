// $( document ).ready(function() {
//     $(function(){
//         $('.btn_appear_list').mouseenter(function(){
//             $('.clic_instr').show();
//             });
//         $('.btn_appear_list').mouseleave(function(){
//             $('.clic_instr').hide();
//             });
//     });
    
//     $(function(){
//         $('.clic_instr').click(function(){
//             $('.history').show();
//             });
//     });
// });

/**
 * @function getTraduction()
 * on vérifie si une valeur est saisie dans l'input
 * on appelle la fonction selon la langue choisie 
*/

var languageTarget = document.getElementById('selectLangue');
var stringToTranslate = document.getElementById('initTrad');
var stringResult = document.getElementById('resultTrad');

    function getTraduction() {
        if (stringToTranslate.value !== '' || stringToTranslate.value !== undefined || stringToTranslate.value !== null) {
            if (languageTarget.value === 'Francais')
                stringResult.value = traducteur.francaisVersJavanais(stringToTranslate.value);
            else
                stringResult.value = traducteur.javanaisVersFrancais(stringToTranslate.value);
        }
    }
    console.log(stringResult.value);


var traducteur = (function () {

return {
    francaisVersJavanais: francaisVersJavanais,
    javanaisVersFrancais: javanaisVersFrancais
};

/**
 * @function francaisVersJavanais()
 * on utilise l'expression régulière replace() pour identifier les voyelles & les consonnes
 * @flag g : on fait une recherche globale sur toute la chaine
 * @flag i : on ne fait pas la distinction entre les minuscules et les majuscules
 * on appelle la fonction selon la langue choisie
 * match 
*/
    function francaisVersJavanais(string) {
        return string.replace(/^[aeiouy\u00C0-\u017F]|[bcdfghjklmnpqrstvwxz\u00C0-\u017F][aeiouy\u00C0-\u017F]/gi,
            function (match) {
                return match.length > 1 ? match.split('').join('av') : 'av' + match
            });

    }

    function javanaisVersFrancais(string) {
        return string.replace(/^av[aeiou\u00C0-\u017F]|[bcdfghjklmnpqrstvwxz\u00C0-\u017F]av[aeiouy\u00C0-\u017F]/gi,
            function (match) {
                return match.replace('av', '');
            });
    }
})();