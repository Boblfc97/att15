<?php
include "conexao.php";
include "verificar_logado.php";

$id = $_GET['id_veiculo'];
$veiculo = $_GET['nome'];
$preco = $_GET['preco'];
$modelo = $_GET['modelo'];
$placa = $_GET['placa'];
$ano = $_GET['ano'];

$sql = "UPDATE tb_veiculos SET
        nome='$veiculo', modelo='$modelo',
        preco='$preco', placa='$placa', ano='$ano' WHERE id_veiculo='$id'
        ";

$atualizar = $pdo->prepare($sql);

try{
    $atualizar->execute();
    echo "<script>alert('Atualizado!');</script>";
    header ("Location: pg_gerenciar.php");
}catch(PDOException $erro){
    echo "Falha ao Atualizar!".$erro->getMessage();
}

?>