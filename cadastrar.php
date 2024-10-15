<?php
    include "conexao.php";
    $veiculo = $_POST['veiculo'];
    $preco = $_POST['preco_digitado'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa_escolhida'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO tb_veiculos
            (nome, modelo, preco, placa, ano) VALUES
            ('$veiculo', '$modelo', '$preco', '$placa','$ano')";

    $inserir = $pdo->prepare($sql);

    try{
        $inserir->execute();
        header("Location:pg_gerenciar.php?inserir=OK");
    }catch(PDOException $erro){
        echo "Falha ao Cadastrar! ".$erro->getMessage();
    }
?>