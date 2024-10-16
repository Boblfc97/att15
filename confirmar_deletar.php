<?php
$id = $_GET['id'];

echo "
    Tem certeza que deseja apagar item Nº $id? <br> <br>
    <a href='deletar.php?cod=$id'>Sim</a>
    <br><br>
    <a href='pg_gerenciar.php'>Não</a>
"
?>