var images1 = document.querySelectorAll(".slider1 img");
var currentImage1 = 0;
var slideInterval = setInterval(nextImage, 2000);

function nextImage() {
  images1[currentImage1].classList.remove("active");
  currentImage1 = (currentImage1 + 1) % images1.length;
  images1[currentImage1].classList.add("active");
}

var images2 = document.querySelectorAll(".slider2 img");
var currentImage2 = 0;
var slideInterval = setInterval(nextImage1, 2000);

function nextImage1() {
  images2[currentImage2].classList.remove("active");
  currentImage2 = (currentImage2 + 1) % images2.length;
  images2[currentImage2].classList.add("active");
}

var images3 = document.querySelectorAll(".slider3 img");
var currentImage3 = 0;
var slideInterval = setInterval(nextImage2, 2000);

function nextImage2() {
  images3[currentImage3].classList.remove("active");
  currentImage3 = (currentImage3 + 1) % images3.length;
  images3[currentImage3].classList.add("active");
}