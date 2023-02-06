let screen = document.querySelector('#screen-result')
let operacion
let resultado
var operacion_

function getData(ref) {
    let value = ref.value;
    screen.value += value;
}

function clean() {
    screen.value = '';
}

function enviarDatos() {

    const url = "calcu.php?operacion="
    let xhr = new XMLHttpRequest()

    xhr.open("GET", url+operacion_+"&resultado="+resultado, true);

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    
    xhr.send();
}

function calculate() {
    try {
        operacion = screen.value;
        operacion_ = operacion.toString()
        screen.value = eval(screen.value);
        //alert(operacion);
        resultado = screen.value
        //alert(resultado)
        enviarDatos();
    } catch (error) {
        screen.value = 'Error'
    }
}

alert("esta cambio es de la rama 4")
function rama5(){
    alert("rama 5")
}
