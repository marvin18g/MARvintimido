<?php




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="http://localhost/marvintimido/MARvintimido/estilos/bootsrap.css" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  
  <style>

body{
  background-image:url("img/sav.jpg");
  font-family: 'Poppins', sans-serif;
}
</style>

  <body>
    <h1>NIKE!</h1>

    <?php


include ("menu.php");



?>
<div class="container">
            <div class="left"></div>
            <div class="right"></div>

            <div class="nav">
                  <div class="logo">@Marvintimido</div>

                  <div class="next"><i class="fa fa-angle-right"></i></div>

                  <div class="watch"><i class="fa fa-caret-right"></i>&nbsp;Univo</div>

                  <div class="cart"><i class="fa fa-shopping-cart"></i></div>
            </div>

            <div class="right-sidebar">

                  <ul>
                        <li class="title">Herramientas utilizadas</li>
                        <li>Figma</li>
                        <li>Bootstrap</li>
                        <li>Chatgpt.io</li>
                        <li>Mysql</li>
                        <li>PHP</li>
                        <li>AJAX</li>
                        <a href="cerrarsesion.php">Salir</a>
                       
                  </ul>

            </div>

            <div class="left-bottom">
                  <p>Welcome Marvin Nike force</p>
            </div>

            <div class="left-sidebar">


                  <h1 class="product-title">Welcome Marvin Nike</h1>

                  <p class="desc">Nuestra prioridad es el bienestar absoluto, de tu estilo de vida. Utilizamos todo lo que esta a nuestro alcance para que este lo mas suave, Gracias por preferirnos</p>

                  <p id="price">Nike Air Max  $239.99</p>

                  <button class="btn">Consultar</button>

            </div>

            <div class="product" id="product">
                  <img src="img/Green 1.svg" alt="drone" class="zapato">
            </div>

            

            <div class="media">
                  <ul>
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-twitter"></i></li>
                  </ul>
            </div>

      </div>

      <script type="text/javascript">

      TweenMax.from(".right", 1.6, {
           delay: 0.6,
           // opacity: 0,
           // x: -20,
           width: 0,
           ease: Expo.easeInOut
     });

      TweenMax.from(".logo", 1, {
            delay: 1,
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".next", 1, {
            delay: 1.2,
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".watch", 1, {
            delay: 1.4,
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".cart", 1, {
            delay: 1.6,
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".product-title", 2, {
            delay: 1.6,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".desc", 2, {
            delay: 1.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      });

      TweenMax.from("#price", 2, {
            delay: 2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      });

      TweenMax.from(".btn", 2, {
            delay: 2.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      });

      TweenMax.staggerFrom(".right-sidebar ul li", 1, {
            delay: 2.6,
            opacity: 0,
            y: 20,
            ease: Power3.easeInOut
      }, 0.08);

      TweenMax.from(".left-bottom", 2, {
            delay: 2.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      });

      TweenMax.staggerFrom(".media ul li", 1, {
            delay: 3.6,
            opacity: 0,
            y: 20,
            ease: Power3.easeInOut
      }, 0.08);

      TweenMax.from(".product img", 3, {
            delay: 2,
            // opacity: 0,
            // y: 20,
            scale: 0,
            ease: Expo.easeInOut
      });

      TweenMax.to(".product img", 3, {
            delay: 2,
            // opacity: 0,
            // y: 20,
            scale: 1,
            ease: Expo.easeInOut
      });



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</script>
  </body>
</html>

