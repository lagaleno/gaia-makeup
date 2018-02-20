<!DOCTYPE html>
  <html>
    <head lang="pt-br">

      <meta charset="utf-8">
      <title> Gaia Login </title>

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
          <a href="/" class="brand-logo center">Gaia - Login</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="register"><span class="black-text text-lighten-1">Registre-se</span></a></li>
          </ul>
          <ul class="side-nav black-t" id="mobile-demo">
            <li><a href="register">Registre-se</a></li>
          </ul>
        </div>
      </nav>

        <section id="login_adm"> <!-- Uma row da cor #DAA695 com o titulo "Sobre nós"-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">

                            <div class="panel-heading">Login</div>

                            <div class="panel-body">

                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label"><span style="color:black">E-Mail Address</span></label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label"><span style="color:black">Password</span></label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <p>
                                          <input name="remember" type="checkbox" class="filled-in" id="filled-in-box" {{ old('remember') ? 'checked' : '' }} />
                                          <label for="filled-in-box" class="black-text">Remember Me</label>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button id="botao_adm" type="submit" class="btn btn-primary">
                                                Login
                                            </button>

                                            <a id="botao_adm" class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
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
    </body>
  </html>

