<?php

$_POST['nome'];
$_POST['email'];
$_POST['comentario'];
$_POST['id_artigo'];
$_POST['status'];

include 'conexao.php';

$query ="
INSERT INTO 
tb_comentario (nome, email, comentario, id_artigo, status)
VALUES 
(:nome, :email, :comentario, :id_artigo, :status)
";

$stmt = $conexao->prepare($query);

$stmt->bindValue(':nome', $_POST['nome'], PDO::PARAM_STR);
$stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindValue(':comentario', $_POST['comentario'], PDO::PARAM_STR);
$stmt->bindValue(':id_artigo', $_POST['id_artigo'], PDO::PARAM_INT);
$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_INT);


$stmt->execute();


if ($stmt->rowCount() == 1) {

	$id = $_POST['id_artigo'];

	include 'consulta_artigo.php';

	foreach($artigos as $artigo) {
		if($id == $artigo['id_artigo']){
	
			header("location: ../artigo.php?id=$id&comentario=sucesso");
		} 
	}
} else {

	header("location: ../artigo.php?id=$id&comentario=erro");
}


