const th01 = document.getElementById("th1"); // constant th01-06 kriegen die ID th1-6 aus dem HTML code
const th02 = document.getElementById("th2");
const th03 = document.getElementById("th3");
const th04 = document.getElementById("th4");
const th05 = document.getElementById("th5");
const th06 = document.getElementById("th6");

const img1 = document.getElementById("img-orig1"); // constant img1-6 kriegen die ID img-orig1-6 aus dem HTML code
const img2 = document.getElementById("img-orig2");
const img3 = document.getElementById("img-orig3");
const img4 = document.getElementById("img-orig4");
const img5 = document.getElementById("img-orig5");
const img6 = document.getElementById("img-orig6");

var th01show = false; // var (bzw. bool) th01show-th06show werden auf false gesetzt (ob es das bild gross zeigt oder nicht bzw. ob der knopf bereits gedrück wurde --> am anfang false, also nein)
var th02show = false;
var th03show = false;
var th04show = false;
var th05show = false;
var th06show = false;

th01.addEventListener("click", () => { // falls th01-06 geklickt werden, wird das bild angezeigt bzw. mit display none durch display block ersetzt und mit margin 0 auto zentriert
    img1.style.display = "block";
    img1.style.margin = "0 auto";
    img2.style.display = "none";
    img3.style.display = "none";
    img4.style.display = "none";
    img5.style.display = "none";
    img6.style.display = "none";
    th01show = true;
});

th02.addEventListener("click", () => {
    img1.style.display = "none";
    img2.style.display = "block";
    img2.style.margin = "0 auto";
    img3.style.display = "none";
    img4.style.display = "none";
    img5.style.display = "none";
    img6.style.display = "none";
    th02show = true;
});

th03.addEventListener("click", () => {
    img1.style.display = "none";
    img2.style.display = "none";
    img3.style.display = "block";
    img3.style.margin = "0 auto";
    img4.style.display = "none";
    img5.style.display = "none";
    img6.style.display = "none";
    th03show = true;
});

th04.addEventListener("click", () => {
    img1.style.display = "none";
    img2.style.display = "none";
    img3.style.display = "none";
    img4.style.display = "block";
    img4.style.margin = "0 auto";
    img5.style.display = "none";
    img6.style.display = "none";
    th04show = true;
});

th05.addEventListener("click", () => {
    img1.style.display = "none";
    img2.style.display = "none";
    img3.style.display = "none";
    img4.style.display = "none";
    img5.style.display = "block";
    img5.style.margin = "0 auto";
    img6.style.display = "none";
    th05show = true;
});

th06.addEventListener("click", () => {
    img1.style.display = "none";
    img2.style.display = "none";
    img3.style.display = "none";
    img4.style.display = "none";
    img5.style.display = "none";
    img6.style.display = "block";
    img6.style.margin = "0 auto";
    th06show = true;
});

if(th01show === false) { // falls th01show-th06show nicht gedrückt wird, wird es nicht angezeigt
    img1.style.display = "none";
}

if(th02show === false) {
    img2.style.display = "none";
}

if(th03show === false) {
    img3.style.display = "none";
}

if(th04show === false) {
    img4.style.display = "none";
}

if(th05show === false) {
    img5.style.display = "none";
}

if(th06show === false) {
    img6.style.display = "none";
}