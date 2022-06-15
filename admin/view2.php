<?php
include_once('../config/connection.php');

session_start();
    if($_SESSION['logado'] != true){
        header('Location: index.php');
        die();
    }

    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }

$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>

			<main>
				<hr size="10" noshade>
				<div class="container">
		<h1 id="main-title">Meus Posts</h1>
			<table class="table" id="contacts-table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Título</th>
						<th scope="col">Descrição</th>
						<th scope="col">Ações</th>
					</tr>
				<tbody>
					<?php foreach($results as $post): ?>
					<tr>
						<td scope="row"><?= $post["id"] ?></td>
						<td scope="row"><?= $post["title"] ?></td>
						<td scope="row"><?= $post["description"] ?></td>
						<td class="actions">
							<a href="viewBlog.php?id= <?= $post["id"] ?>">
								<i class="fas fa-eye check-icon"><abbr title="Ver"><img src="../images/olho.png"></i></abbr>
							</a>
							<br>
							<a href="editar.php?id=<?= $post["id"] ?>">
								<i class="fas fa-eye check-icon"><abbr title="Editar"><img src="../images/editar.png"></i></abbr>
							</a>
							<br>
							<a href="delete.php?id=<?= $post["id"] ?>"><abbr title="Deletar"><img src="../images/delete.png"></i></abbr>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
</div>
</main>
		</div>
		
	</div>
</body>
</html>
