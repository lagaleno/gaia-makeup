<!DOCTYPE html>
  <html>
    <head lang="pt-br">

      <meta charset="utf-8">
      <title> Gaia Maquiagens </title>

      <!--Import Fontes-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Hairline|Meddon|Montserrat" rel="stylesheet">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ config('app.name', 'Gaia') }}</title>



      <link type="text/css" rel="stylesheet" href="style.css" media="screen, projection"/> <!-- Página CSS que eu altero-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav id="navegacao" class="navbar navbar-default navbar-static-top z-depth-0">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="color:black">{{ config('app.name', 'Gaia') }}</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <span style="color:black;">{{ Auth::user()->name }}</span> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li>
                        <a style="color:black" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
      </nav>

      <section id="dashboard"> <!-- Uma row da cor #DAA695 com o titulo "Sobre nós"-->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
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
      <script src="{{ asset('js/app.js') }}"></script>

    </body>
  </html>
