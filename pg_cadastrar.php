<?php
    include "verificar_logado.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Novo Veiculo</h1>
    <form action="cadastrar.php" method="post">
        <label>Nome do Veiculo: </label> <br>
        <input type="text" name="veiculo"> <br><br>

        <label>Preço: </label> <br>
        <input type="number" step="0.01" min="0.00" name="preco_digitado"> <br><br>

        <label>Modelo: </label> <br>
        <select name="modelo">
            <option value="">Selecione</option>
            <option value="Sedan">Sedan</option>
            <option value="USV">USV</option>
            <option value="Esportivo">Esportivo</option>
            <option value="Picapes">Picapes</option>
            <option value="Minivan">Minivan</option>
        </select> <br> <br>

        <label>Placa: </label> <br>
        <input type="text" name="placa_escolhida"> <br><br>

        <label>Data de Fabricação: </label> <br>
        <input type="date" name="ano"> <br><br>

        <button type="submit">Cadastrar Veiculo</button>
    </form>
</body>
</html>