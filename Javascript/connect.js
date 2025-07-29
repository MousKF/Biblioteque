let navButtons = document.querySelectorAll(".nav-button");
let connectBox = document.querySelector("#connect-box");
let connectClose = document.querySelector("#connect-close");

function showConnectBox() {
    connectBox.style.display = "flex";
}

function hideConenctBox() {
    connectBox.style.display = "none";
}

navButtons.forEach((button) =>{
    if(button.innerHTML == "Connecter") {
        button.addEventListener("click", showConnectBox);
    }
});

connectClose.addEventListener("click", hideConenctBox);