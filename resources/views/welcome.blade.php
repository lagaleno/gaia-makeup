 <!DOCTYPE html>
  <html>
    <head lang="pt-br">

      <meta charset="utf-8">
      <title> Gaia Maquiagens </title>

      <!--Import Fontes-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Hairline|Meddon|Montserrat" rel="stylesheet">


      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="style.css" media="screen, projection"/> <!-- Página CSS que eu altero-->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav class="nav z-depth-0">
        <div class="nav-wrapper">
          <a href="/" class="brand-logo center">Gaia</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="produtos"><span class="black-text text-lighten-1">Produtos em destaque</span></a></li>
            <li><a href="contato"><span class="black-text text-lighten-1">Entre em contato</span></a></li>
          </ul>
          <ul class="side-nav black-t" id="mobile-demo">
            <li><a href="produtos">Produtos em destaque</a></li>
            <li><a href="contato">Entre em contato</a></li>
          </ul>
        </div>
      </nav>

      <!--Entre a navbar e o "sobre nós" deve vir um slide show/banner -->
      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Tamanho das imagens: 3000x2000-->
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/img1.jpg" style="width:100%" alt="">
          <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/img2.jpg" style="width:100%" alt="">
          <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/img3.jpg" style="width:100%" alt="">
          <!-- <div class="text">Caption Text</div> -->
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>

      <section id="sobre"> <!-- Uma row da cor #DAA695 com o titulo "Sobre nós"-->
        <div class="row">
          <div class="container">
            <!-- Título -->
            <h2 id="titulo_sobre">Sobre nós</h2>
              <div class="texto col m8 offset-m2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>  
         </div>       
        </div> 

      </section>

      <footer class="page-footer black-text">
          <div class="container">
            © 2018 Copyright Text
            <a class="black-text text-lighten-4 right" href="#!">More Links</a>
          </div>
      </footer>

  

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="style.js"></script>
    </body>
  </html>
