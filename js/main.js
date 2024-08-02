let url = "../index.html";

window.onscroll = function () { scrollFunction() };
function scrollFunction() {    
    var mybutton = document.getElementById("scrollUpBtn");

    if (document.body.scrollTop > 2500 || document.documentElement.scrollTop > 20) {
        mybutton.style.opacity = 1;
        mybutton.style.visibility = "visible";
    } else {
        mybutton.style.opacity = 0;
        mybutton.style.visibility = "hidden";
    }
}

function scrollUp(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function goToHomePage() {
    window.location.href = url;
}
