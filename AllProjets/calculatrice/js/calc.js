
const para = document.querySelector('p'); // balise <p>
const clear = document.querySelector('.clear') // boutton CLEAR (reset)

const btn1 = document.querySelector('.btn1')
const btn2 = document.querySelector('.btn2')
const btn3 = document.querySelector('.btn3')
const btn4 = document.querySelector('.btn4')
const btn5 = document.querySelector('.btn5')
const btn6 = document.querySelector('.btn6')
const btn7 = document.querySelector('.btn7')
const btn8 = document.querySelector('.btn8')
const btn9 = document.querySelector('.btn9')
const btn0 = document.querySelector('.btn0')
const btnpoi = document.querySelector('.btnpoi') // boutton point . (virgule)

const btnpl = document.querySelector('.btnpl') // boutton PLUS +
const btnpo = document.querySelector('.btnpo') // boutton POURCENTAGE /
const btndi = document.querySelector('.btndi') // boutton DIVISION /
const btnx = document.querySelector('.btnx')   // boutton MULTIPLICATION X
const btnmo = document.querySelector('.btnmo') // boutton MOINS -
 
const btneg = document.querySelector('.btneg') // boutton EGALITE =

var num1 = ""
var num2 = ""
var calc = ""
var result = ""





clear.addEventListener('click', () => {
    para.textContent = "";
    num1 = ""
    num2 = ""
    calc = ""
})



btn1.addEventListener('click', () => {
    para.textContent += "1";
})



btn2.addEventListener('click', () => {
    para.textContent += "2";
})



btn3.addEventListener('click', () => {
    para.textContent += "3";
})



btn4.addEventListener('click', () => {
    para.textContent += "4";
})



btn5.addEventListener('click', () => {
    para.textContent += "5";
})



btn6.addEventListener('click', () => {
    para.textContent += "6";
})



btn7.addEventListener('click', () => {
    para.textContent += "7";
})



btn8.addEventListener('click', () => {
    para.textContent += "8";
})



btn9.addEventListener('click', () => {
    para.textContent += "9";
})



btn0.addEventListener('click', () => {
    para.textContent += "0";
})


btnpoi.addEventListener('click', () => {
    para.textContent += ".";
})

// ----------------- FIN BTN DE 0 A 9-------------------------


btnpl.addEventListener('click', () => {
    num1 = parseFloat(para.textContent);
    para.textContent = "";
    calc = "plus"
})



btnpo.addEventListener('click', () => {
    num1 = para.textContent;
    para.textContent = "";
    calc = "pourcentage"
})



btndi.addEventListener('click', () => {
    num1 = para.textContent;
    para.textContent = "";
    calc = "division"
})



btnx.addEventListener('click', () => {
    num1 = para.textContent;
    para.textContent = "";
    calc = "multiplication"
})



btnmo.addEventListener('click', () => {
    num1 = para.textContent;
    para.textContent = "";
    calc = "moins"
})


// ----------------------- FIN BTN OPERATIONS -----------------------------


btneg.addEventListener('click', () => {
    num2 = parseFloat(para.textContent);
    calcule()
})


function calcule(){
    switch(calc){
        case 'plus':
            result = num1 + num2;
            para.textContent = (`${num1} + ${num2} = ${result}`);
            break;
        case 'division':
            result = num1 / num2;
            para.textContent = (`${num1} ÷ ${num2} = ${result}`);
            break;
        case 'multiplication':
            result = num1 * num2;
            para.textContent = (`${num1} x ${num2} = ${result}`);
            break;
        case 'moins':
            result = num1 - num2;
            para.textContent = (`${num1} - ${num2} = ${result}`);
            break;
    }
}




