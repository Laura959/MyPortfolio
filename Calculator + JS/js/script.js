
var currentNumber = null;
var savedNumber;
var operator;


function onNumberClick(value) {
    if(value != "."){
        if(currentNumber != null){
            currentNumber = currentNumber + value;
        }
        else {currentNumber = value;}
    }    
    else {
        if(!currentNumber.includes(".")){
            currentNumber = currentNumber + value;
            }
        }
    document.getElementById('dis').innerHTML = currentNumber;
}

function onOperatorClick(value) {
    savedNumber = currentNumber;
    if(operator == null){
        operator = value;
    }
    else{
        calculate();
        operator = value;
    }
    currentNumber = null;
}

function calculate() {
    if (operator == '+'){
    currentNumber = +currentNumber + +savedNumber;
    document.getElementById('dis').innerHTML = currentNumber;
    } else if (operator == '-') {
        currentNumber = +savedNumber - +currentNumber;
        document.getElementById('dis').innerHTML = currentNumber;   
    } else if (operator == '*') {
        currentNumber = +savedNumber * +currentNumber;
        document.getElementById('dis').innerHTML = currentNumber; 
    } else if (operator == '/'){
        currentNumber = +savedNumber / +currentNumber;
        document.getElementById('dis').innerHTML = currentNumber;
    }
    savedNumber = null;
    operator = null;
}

function onAcClick() {
    currentNumber = null;
    document.getElementById('dis').innerHTML = 0;
}

function onDelClick() {
    currentNumber = currentNumber.slice(0, -1);
    document.getElementById('dis').innerHTML = currentNumber;
}



