document.getElementsByName("NuevoJugador")[0].addEventListener("mouseover", function() {
    if (document.getElementsByName("Player_Name")[0].value.length == 0 ||
        document.getElementsByName("TShirt_Number")[0].value.length == 0) {
        document.getElementsByName("NuevoJugador")[0].disabled = true;

    }
});