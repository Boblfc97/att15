<?php
include "conexao.php";
include "verificar_logado.php";
$id = $_GET['cod'];

$sql = "SELECT * FROM tb_veiculos
        WHERE id_veiculo='$id'";

$consultar = $pdo->prepare($sql);

try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $id = $resultado['id_veiculo'];
    $veiculo = $resultado['nome'];
    $preco = $resultado['preco'];
    $modelo = $resultado['modelo'];
    $placa = $resultado['placa'];
    $ano = $resultado['ano'];
}catch(PDOException $erro){
    echo "Falha ao consultar!".$erro->getMessage();
}
?>

<h1>
    Editar item
</h1>

<form action="atualizar.php" method="get">

    <input type="number" name="id_veiculo" value='<?php echo $id;?>' hidden>
    <br> <br>

    <label>Veículo: </label> <br>
    <input type="text" name="nome"value='<?php echo $veiculo;?>'>
    </text>
    <br> <br>

    <label>Preço: </label> <br>
        <input type="number" step="0.01" min="0.00" name="preco" value='<?php echo $preco;?>'> <br><br>

    <label>Modelo: </label> <br>

    <select name="modelo">
        <option value="">Selecione</option>
        <option value="Sedan"
                    <?php echo $modelo=="Sedan"? "selected":"";?>
                    >Sedan</option>
        <option value="USV"
                    <?php echo $modelo=="USV"? "selected":"";?>
                    >USV</option>
        <option value="Esportivo"
                    <?php echo $modelo=="Esportivo"? "selected":"";?>
                    >Esportivo</option>
        <option value="Picapes"
                    <?php echo $modelo=="Picapes"? "selected":"";?>
                    >Picapes</option>
        <option value="Minivan"
                    <?php echo $modelo=="Minivan"? "selected":"";?>
                    >Minivan</option>

    </select> <br><br>

    <label>Placa: </label> <br>
    <input type=text name="placa" value='<?php echo $placa;?>'> <br><br>
    
    <label>Ano: </label> <br>
    <input type=date name="ano" value='<?php echo $ano;?>'> <br><br>
    
    
    <button type="submit">Salvar</button>



</form>