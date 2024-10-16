<?php
    include "verificar_logado.php";
    if(isset($_GET['inserir'])){
        echo "
            <script>
                alert('Cadastrado com Sucesso!');
            </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Gerenciar Veículos</h1>
    <form action="pg_gerenciar.php" method="get">
        <input type="text" name="veiculo_pesquisado"
                placeholder="Digite o Nome do Veículo">
        <button type="submit">Pesquisar</button>
    </form> <br><br>
    <div id="pagina">
        <?php
            include "conexao.php";
            $sql = "SELECT * FROM tb_veiculos";
            if(isset($_GET['veiculo_pesquisado'])){
                $pesquisa = $_GET['veiculo_pesquisado'];
                $sql = "SELECT * FROM tb_veiculos
                        WHERE veiculo LIKE '%$pesquisa%'";
            }
            $consultar = $pdo->prepare($sql);
            try{
                $consultar->execute();
                if($consultar->rowCount() == 0){
                    echo "Nenhum Veículo Encontrado! <br> <br>";
                }
                    echo "<div style='min-width:100%; margin-bottom:20px;'>
                        Qtd de Veículo(s) Encontrados: "
                        .$consultar->rowCount().
                        "</div>";

                $resultados = $consultar->fetchALL(PDO::FETCH_ASSOC);
                foreach($resultados as $item){
                    $id = $item['id_veiculo'];
                    $veiculo = $item['veiculo'];
                    $valor = $item['preco'];
                    $modelo = $item['modelo'];
                    $placa = $item['placa_escolhida'];
                    $ano = $item['ano'];
                    echo "
                        <div class='cartoes'>
                            <H1>$nome</H1> <br>
                            <span>R$ $valor</span> <br>
                            <span>Modelo: $modelo</span> <br>
                            <span>Placa: $placa</span> <br>
                            <span>Data de Fabricação: $ano</span> <br>
                            <span>Cód. nº: $id</span> <br>

                            <a href='editar.php?cod=$codigo'>
                                <button>✏️ Editar</button>
                            </a>

                            <a href='confirmar_deletar.php?cod=$codigo'>
                                <button>🗑️ Deletar</button>
                            </a>
                        </div>
                    ";
                }
            }catch(PDOException $erro){
                echo "Falha ao consultar produtos!".$erro->getMessage();
            }
        ?>
    </div>
</body>
</html>