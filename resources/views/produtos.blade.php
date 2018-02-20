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


      <!-- site royaltyfree: https://www.pexels.com/search/make-up/-->
      <section id="imagens">
        <div class="row">
          <div class="container">
            <div class="image col m6">
              <img class="materialboxed responsive-img" data-caption="O kit de pinceis mais macio do oeste" width="615" height="510" src="img/img4.jpeg" alt="kit_pincel">
            </div>
          </div>
          <div class="container">
            <div class="image col m6">
              <img class="materialboxed responsive-img" data-caption="Uma paleta de sombras maravilhosa" width="615" height="510" src="img/img5.jpg" alt="sombras">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="image col m6">
              <img class="materialboxed responsive-img" data-caption="Para uma pele bem matte, aposte no nosso pó" width="615" height="510" src="img/img6.jpeg" alt="po_compacto">
            </div>
          </div>
          <div class="container">
            <div class="image col l6 s12"> <!-- Gambiarra:Rever--> 
              <h3> Gostou? </h3>
              <h4> Quer ver esses e outros produtos em nossas lojas? </h4>
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235198.68137778717!2d-43.4459821316893!3d-22.91413077799811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio+de+Janeiro%2C+RJ!5e0!3m2!1spt-BR!2sbr!4v1517181911707" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
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
      <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


    </body>
  </html>
