/**
 * Created by Pierre on 19/05/2016.
 */
var main = function() {
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggle();

    })
};

$(document).ready(main);

$( "#savechange" ).click(function(event) {
    event.preventDefault();
    var champ1 = document.getElementsByName("champ1")[0].value;
    var champ2 = document.getElementsByName("champ2")[0].value;
    var champ3 = document.getElementsByName("champ3")[0].value;
    var champ4 = document.getElementsByName("champ4")[0].value;
    var champ5 = document.getElementsByName("champ5")[0].value;

    



    alert("Changements enregistrés !")

});