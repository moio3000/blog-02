<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/style-index.css">
</head>
<body class="text-center">
    <main class="form-login">
        <form method="post" action="logar.php">
            <img class="mb-4" src="../images/logo.png" alt="" width="230" height="90">
				<h3 class="h3">Painel Administrativo</h3>
		<div class="mb-3">
  			<label for="formGroupExampleInput" class="form-label"><b>LOGIN</b></label>
  			<input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="Digite seu login" required>
		</div>
		<div class="mb-3">
  			<label for="formGroupExampleInput2" class="form-label"><b>SENHA</b></label>
  			<input type="password" class="form-control" name="senha" id="formGroupExampleInput2" placeholder="Digite sua senha" required>
  			<span class="lnr lnr-eye"></span>
		</div>
		<br>
		<button type="submit" class="btn btn-primary">ENTRAR</button>
		</form>
	</main>
</body>
</html>