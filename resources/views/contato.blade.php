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

      <section id="contato">
        <div class="row">
          <div class="container">

            <h3> Alguma dúvida? Curiosidade? Vontade de conversar? Nos mande uma mensagem :) </h3>
            <h4> Complete o formulário abaixo para nos enviar um e-mail:</h4>

            <div class="texto col m8 offset-m2 s12">

              <form id="formulario" action="{{ route('entrarContato') }}" enctype="multipart/form-data" method="POST">                
                {{ csrf_field() }}

                <div class="input">
                  <h5> Nome: </h5>
                  <input type="text" name="nome" placeholder="Por favor, digite seu nome e seu último nome">
                  <br>
                </div>
                <h5> E-mail: </h5> 
                <input type="email" name="email" placeholder="Insira seu E-mail de contato">
                <br>

                <h5> Sua Mensagem: </h5>
                <textarea  name="contato" placeholder="Digite aqui sua mensagem :)" class="materialize-textarea"></textarea>
                <br>
                
                <input type="submit" value="Enviar" id="estilo_botao">

              </form>
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

  </html>
