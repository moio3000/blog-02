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
</head>

<body>
<br>
<main>
	<div class="container">
		<h1>Inserir</h1>
		<form action="envia.php" method="POST" enctype="multipart/form-data">
  			<div class="mb-3">
    			<label for="validationServer01" class="form-label" >Título</label>
    			<input type="text" class="form-control" name="title" id="exampleInputTitulo" placeholder="Digite o título" required>
  			</div>
  			<div class="mb-3">
    			<label class="form-label">Data</label>
    			<input type="date" class="form-control" name="data" id="exampleInputData" required>
  			</div>
  			<div class="mb-3">
    			<label class="form-label">Texto Descritivo</label>
    			<input type="text" class="form-control" name="description" id="exampleInputDescrição" placeholder="Descrição" required>
  			</div>
  			Envie a imagem
  			<input type="file" name="image" id="formGroupExampleInput3" placeholder="Insira uma imagem" required>

				<br>
				<br>

  			<button type="submit" class="btn btn-primary">Publicar</button>
		</form>
	</div>
	</main>

</body>
</html>