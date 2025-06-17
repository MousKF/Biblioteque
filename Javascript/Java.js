let trigger = document.querySelector("#send-button");
let numberzone = document.querySelector('#user-number');
let displayzone = document.querySelector('#game-display');
let targetnumber = Math.floor(Math.random()*100)+1;

console.log(trigger, numberzone, displayzone, targetnumber);

function comparenumber() {
   // console.log('ca marche');

let userNumber = numberzone.value;
let result;
//console.log(usernumber)
    if(userNumber==targetnumber){
       result = 'Gg!';
      }  else if(userNumber > targetnumber)
        result = `c'est trop grand!`;
    else {
        result = `c'est trop petit!`;
    }

    let resultzone = document.createElement(`p`);
    resultzone.innerHTML = result;
    resultzone.style.padding = "5px"
    resultzone.classList.add(`result-line`)
    



    //console.log(resultzone);

    displayzone.appendChild(resultzone);
}
trigger.addEventListener(`click`, comparenumber);


















/*
let firstname = prompt('Quel est votre prénom?');
let lastname = prompt('Quel est votre nom?');

alert(`Bonjour ${firstname} ${lastname} !`);
*/


