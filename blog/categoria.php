<?php include 'header.php'; ?>

<?php
include 'processa/consulta_artigo.php';

foreach ($artigos as $artigo) {
	if($_GET['nome'] == 1) {
		if($artigo['tipo'] == 'categoria1') { ?>

			<img src="https://source.unsplash.com/random/200x100">
			<h5> <?= $artigo['titulo'] ?> </h5>
			<p> <?= $artigo['par_1'] ?> </p>
			<a href="artigo.php?id=<?= $artigo['id_artigo'] ?>">Leia mais</a>
			<br><br><br>
			
		<?php
		}
	}
}
?>

<?php
include 'processa/consulta_artigo.php';

foreach ($artigos as $artigo) {
	if($_GET['nome'] == 2) {
		if($artigo['tipo'] == 'categoria2') { ?>

			<img src="https://source.unsplash.com/random/200x100">
			<h5> <?= $artigo['titulo'] ?> </h5>
			<p> <?= $artigo['par_1'] ?> </p>
			<a href="artigo.php?id=<?= $artigo['id_artigo'] ?>">Leia mais</a>
			<br><br><br>

		<?php	
		}
	}
}
?>

<?php
include 'processa/consulta_artigo.php';

foreach ($artigos as $artigo) {
	if($_GET['nome'] == 3) {
		if($artigo['tipo'] == 'categoria3') { ?>

			<img src="https://source.unsplash.com/random/200x100">
			<h5> <?= $artigo['titulo'] ?> </h5>
			<p> <?= $artigo['par_1'] ?> </p>
			<a href="artigo.php?id=<?= $artigo['id_artigo'] ?>">Leia mais</a>
			<br><br><br>

		<?php	
		}
	}
}
?>

<?php
include 'processa/consulta_artigo.php';

foreach ($artigos as $artigo) {
	if($_GET['nome'] == 4) {
		if($artigo['tipo'] == 'categoria4') { ?>

			<img src="https://source.unsplash.com/random/200x100">
			<h5> <?= $artigo['titulo'] ?> </h5>
			<p> <?= $artigo['par_1'] ?> </p>
			<a href="artigo.php?id=<?= $artigo['id_artigo'] ?>">Leia mais</a>
			<br><br><br>

		<?php	
		}
	}
}
?>

<?php include 'footer.php'; ?>