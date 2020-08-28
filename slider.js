var slide = ["landscape.jpg", "planet.jpg", "sun.png"];
var numimg = 0;
var speed = 3000;

function ChangeSlide(change) {
    numimg = numimg + change;
    if (numimg < 0) {
        numimg = slide.length - 1;
      }
    if (numimg > slide.length - 1){
        numimg = 0;
      }
    document.getElementById('slide').src = slide[numimg];
}

setInterval(ChangeSlide, speed, 1);
