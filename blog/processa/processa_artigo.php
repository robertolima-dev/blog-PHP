<?php

$_POST['tipo'];
$_POST['titulo'];
$_POST['data'];
$_POST['autor'];
$_POST['referencia'];
$_POST['par_1'];
$_POST['par_2'];
$_POST['par_3'];
$_POST['par_4'];
$_POST['par_5'];
$_POST['par_6'];
$_POST['par_7'];
$_POST['par_8'];
$_POST['par_9'];
$_POST['par_10'];
$_POST['titulo_link_01'];
$_POST['link_01'];
$_POST['titulo_link_02'];
$_POST['link_02'];
$_POST['titulo_link_03'];
$_POST['link_03'];
$_POST['chave'];
$_POST['status'];

include 'conexao.php';

$query ="
INSERT INTO 
tb_artigo (tipo, titulo, data, autor, referencia, par_1, par_2, par_3, par_4, par_5, par_6, par_7, par_8, par_9, par_10, titulo_link_01, link_01, titulo_link_02, link_02, titulo_link_03, link_03, chave, status)
VALUES 
(:tipo, :titulo, :data, :autor, :referencia, :par_1, :par_2, :par_3, :par_4, :par_5, :par_6, :par_7, :par_8, :par_9, :par_10, :titulo_link_01, :link_01, :titulo_link_02, :link_02, :titulo_link_03, :link_03, :chave, :status)
";

$stmt = $conexao->prepare($query);

$stmt->bindValue(':tipo', $_POST['tipo'], PDO::PARAM_STR);
$stmt->bindValue(':titulo', $_POST['titulo'], PDO::PARAM_STR);
$stmt->bindValue(':data', $_POST['data'], PDO::PARAM_STR);
$stmt->bindValue(':autor', $_POST['autor'], PDO::PARAM_STR);
$stmt->bindValue(':referencia', $_POST['referencia'], PDO::PARAM_STR);
$stmt->bindValue(':par_1', $_POST['par_1'], PDO::PARAM_STR);
$stmt->bindValue(':par_2', $_POST['par_2'], PDO::PARAM_STR);
$stmt->bindValue(':par_3', $_POST['par_3'], PDO::PARAM_STR);
$stmt->bindValue(':par_4', $_POST['par_4'], PDO::PARAM_STR);
$stmt->bindValue(':par_5', $_POST['par_5'], PDO::PARAM_STR);
$stmt->bindValue(':par_6', $_POST['par_6'], PDO::PARAM_STR);
$stmt->bindValue(':par_7', $_POST['par_7'], PDO::PARAM_STR);
$stmt->bindValue(':par_8', $_POST['par_8'], PDO::PARAM_STR);
$stmt->bindValue(':par_9', $_POST['par_9'], PDO::PARAM_STR);
$stmt->bindValue(':par_10', $_POST['par_10'], PDO::PARAM_STR);
$stmt->bindValue(':titulo_link_01', $_POST['titulo_link_01'], PDO::PARAM_STR);
$stmt->bindValue(':link_01', $_POST['link_01'], PDO::PARAM_STR);
$stmt->bindValue(':titulo_link_02', $_POST['titulo_link_02'], PDO::PARAM_STR);
$stmt->bindValue(':link_02', $_POST['link_02'], PDO::PARAM_STR);
$stmt->bindValue(':titulo_link_03', $_POST['titulo_link_03'], PDO::PARAM_STR);
$stmt->bindValue(':link_03', $_POST['link_03'], PDO::PARAM_STR);
$stmt->bindValue(':chave', md5($_POST['chave']), PDO::PARAM_STR);
$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_INT);

$stmt->execute();


if ($stmt->rowCount() == 1) {

	$artigoValido = false;
	$titulo = $_POST['titulo'];
	$chave = md5($_POST['chave']);

	include 'consulta_artigo.php';

	foreach($artigos as $artigo) {
		$nome = $artigo['titulo'];
		

		if($titulo == $nome && $artigo['chave'] == $chave && $artigo['status'] == 1){
			$id = $artigo['id_artigo'];
			$artigoValido = true;



			if($artigoValido) {
				header("location: ../artigo.php?id=$id&artigo=sucesso");
			} else {
				header("location: ../index.php?artigo=erro");
			}
		}
	}
}
