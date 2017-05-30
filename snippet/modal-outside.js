var terminos = document.getElementById('containesection');
modal.onclick = function(event){
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == terminos && event.target == terminos.childNodes) {
        modal.style.display = "flex";
    }       
}

// donde modal es el fondo y terminos es el modal con su contenido