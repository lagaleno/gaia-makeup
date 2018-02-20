<!DOCTYPE html>
  <html>
    <head lang="pt-br">
      <meta charset="utf-8">
      <!--Import Fontes-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Hairline|Meddon|Montserrat" rel="stylesheet">

      <link type="text/css" rel="stylesheet" href="style.css" media="screen, projection"/> <!-- Página CSS que eu altero-->
    </head>

    <body>

    	<div class="conteudo-email">
    		Olá, <br><br>

			Você recebeu uma mensagem de <h4> {{ $nome }} </h4> que possui o e-mail: {{ $email }}
			<br>
			<br>
			Segue a mensagem:
			<br>
			<br>
			{{ $contato }}
    	</div>

    </body>
   </html>