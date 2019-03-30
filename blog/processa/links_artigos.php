<style type="text/css">
	.link-artigos a {
		font-size: 0.8em;
	}
	h6 {
		padding: 30px 0 0 0;
	}
</style>

<?php
include 'consulta_artigo.php';
?>

<!-- *********************************** -->
<!-- ******* GERA LINKS ARTIGOS ******** -->
<h6>Categoria1</h6>
<?php
foreach($artigos as $artigo) {
	$id = $artigo['id_artigo'];
	$titulo = $artigo['titulo'];

	if($artigo['tipo'] == 'categoria1') {
		while($artigo) { ?>
			<a href="artigo.php?id=<?= $id ?>"> <?= $titulo ?> </a><span> | </span>
			<?php
			break;
		}
	}
}
?>

<!-- *********************************** -->
<!-- ******* GERA LINKS NOTICIAS ******* -->
<h6>Categoria 2</h6>
<?php
foreach($artigos as $artigo) {
	$id = $artigo['id_artigo'];
	$titulo = $artigo['titulo'];

	if($artigo['tipo'] == 'categoria2') {
		while($artigo) { ?>
			<a href="artigo.php?id=<?= $id ?>"> <?= $titulo ?> </a><span> | </span>
			<?php
			break;
		}
	}
}
?>

<!-- *********************************** -->
<!-- ******* GERA LINKS ciencias ******* -->
<h6>Categoria 3</h6>
<?php
foreach($artigos as $artigo) {
	$id = $artigo['id_artigo'];
	$titulo = $artigo['titulo'];

	if($artigo['tipo'] == 'categoria3') {
		while($artigo) { ?>
			<a href="artigo.php?id=<?= $id ?>"> <?= $titulo ?> </a><span> | </span>
			<?php
			break;
		}
	}

} 
?>

<!-- *********************************** -->
<!-- ******* GERA LINKS ciencias ******* -->
<h6>Categoria 4</h6>
<?php
foreach($artigos as $artigo) {
	$id = $artigo['id_artigo'];
	$titulo = $artigo['titulo'];

	if($artigo['tipo'] == 'categoria4') {
		while($artigo) { ?>
			<a href="artigo.php?id=<?= $id ?>"> <?= $titulo ?> </a><span> | </span>
			<?php
			break;
		}
	}

} 
?>
