var modal = document.getElementById('miModal');
var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var img3 = document.getElementById('img3');
var img4 = document.getElementById('img4');
var img5 = document.getElementById('img5');
var img6 = document.getElementById('img6');
var img7 = document.getElementById('img7');
var img8 = document.getElementById('img8');
var img9 = document.getElementById('img9');
var navbar = document.getElementById('navbar');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img1.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img3.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img4.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img5.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img6.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img7.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img8.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img9.onclick = function () {
    modal.style.display = "block";
    navbar.classList.toggle('visually-hidden');
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
    navbar.classList.toggle('visually-hidden');
}
