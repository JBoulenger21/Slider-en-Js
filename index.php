<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mon super slider</title>
    <link rel="stylesheet" href="slider.css">
    <script src="slider.js"></script>
  </head>
  <body>
    <h1>Slider JS</h1>
    <div class="TailleSlider" id="slider">
        <img class="tailleimg" src="landscape.jpg" alt="Paysage SF" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>
  </body>
</html>
