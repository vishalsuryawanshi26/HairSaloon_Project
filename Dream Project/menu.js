function subform(){
    if(document.getElementById('male').checked == true) { 
        malefunc();
    }
    else if(document.getElementById('female').checked == true) {
        femfunc();
    }
}

function malefunc(){
        window.history.forward(window.open("Maler.html"));
    }
    function femfunc(){
        window.history.forward(window.open("Femaler.html"));
    }



