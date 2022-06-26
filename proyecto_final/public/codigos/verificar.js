function validar() {
    let a=document.getElementById("edad");
    let bot=document.getElementById("boton");
    if(parseInt(a.value) < 0 || a.value.length === 0) {
        a.style.borderColor="red";
        bot.disabled=true;
    }
    else {
        a.style.borderColor="";
        bot.disabled=false;
    }
}