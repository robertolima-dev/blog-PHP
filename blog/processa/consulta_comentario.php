<?php

include 'conexao.php';

$query = '
SELECT
*
FROM 
tb_comentario
';

$stmt = $conexao->query($query);
$comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
