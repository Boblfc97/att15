<?php
include "conexao.php";
include "verificar_logado.php";

$id = $_GET['cod'];


$sql = "DELETE FROM tb_veiculos WHERE id_veiculo='$id'";


$deletar = $pdo->prepare($sql);


try{
    $deletar->execute();
    echo "
        <script>
            alert('Deletado com Sucesso!');
        </script>
    ";
    header("Location: pg_gerenciar.php");
}catch(PDOException $erro){
    echo "Falha ao deletar!".$erro->getMessage();
}

?>