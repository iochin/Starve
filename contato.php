<html>

  <head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="content-type" content="text/html">
	
    <title>Don't Starve wiki</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);
      body {
        padding-top: 54px;
		background: #ac7339;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
	  @media (min-width: 992px) {
		.col-md-center {
			float: none;
			margin-left: auto;
			margin-right: auto;
		}
	  }	
	}  
    </style>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="wiki.html">Don't Starve wiki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="wiki.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="personagem.html">Personagens
			  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="itens.html">Itens</a>

            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contato.html">Contato</a>
			  <span class="sr-only">(atual)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
		<div class="col-md-5 col-md-center">
			<div>
			<?php 
				$db = new PDO('mysql:host=localhost;dbname=id3903569_trabalhodb;charset=utf8', 'id3903569_root', '123456');
			?>
			<?php
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$assunto = $_POST['assunto'];
				$mensagem = $_POST['mensagem'];
				
				$sql = "INSERT INTO mensagens (nome, email, telefone, assunto, mensagem) VALUES(:nome, :email, :telefone, :assunto, :mensagem)";
				$stmt = $db->prepare($sql);
				$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
				$stmt->bindValue(':email', $email, PDO::PARAM_STR);
				$stmt->bindValue(':telefone', $telefone, PDO::PARAM_STR);
				$stmt->bindValue(':assunto', $assunto, PDO::PARAM_STR);
				$stmt->bindValue(':mensagem', $mensagem, PDO::PARAM_STR);
				$stmt->execute();
				$result = $stmt->rowCount();
				$_SESSION['mensagem'] = "Enviado com sucesso";
			?>
				<script>
				location.href="contato.html"
				</script>



		</div>
		</div>		
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
  </body>

</html>
