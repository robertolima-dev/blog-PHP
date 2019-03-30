<?php

include 'conexao.php';

$query = '
SELECT
*
FROM 
tb_artigo
';

$stmt = $conexao->query($query);
$artigos = $stmt->fetchAll(PDO::FETCH_ASSOC);

