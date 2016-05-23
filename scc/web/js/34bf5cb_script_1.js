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

    document.getElementById("inputFName").value = champ1;
    document.getElementById("inputLName").value = champ2;
    document.getElementById("inputAdress").value = champ3;
    document.getElementById("inputPhone").value = champ4;
    alert("Changements enregistrés !")

});