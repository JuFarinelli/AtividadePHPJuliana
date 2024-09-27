<?php

require_once 'Vinho.php';

$aviso = ""; // Inicializa a variável aqui

if (isset($_POST['cadastrar'])) {
    

    
    $vinho = new Vinho();

    $nome = $vinho->setNome($_POST['nome']);
    $tipo = $vinho->setTipo($_POST['tipo']);
    $preco = $vinho->setPreco($_POST['preco']);
    $safra = $vinho->setSafra($_POST['safra']);


    // MostrarVinho retorna os dados
    echo "<h2>Informações do Vinho</h2>";
    echo $vinho->mostrarVinho();
    echo "<br>";

    // VerificaPreco
    if ($vinho->verificaPreco($_POST['preco']) == true) {
        $aviso = "Produto em Oferta!";
    } else {
        $aviso = "Produto com o preço normal!";
    }
} else {
    echo "Método inválido.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
</head>
<body>
    <h1>Cadastro de Vinho</h1>
    <form action="" method="POST">
        <label for="nome">Nome do Vinho:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="tipo">Tipo do Vinho:</label><br>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <label for="preco">Preço do Vinho:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <label for="safra">Safra:</label><br>
        <input type="number" id="safra" name="safra" required><br><br>

        <input type="submit" name="cadastrar" value="Cadastrar Vinho">
        <p><?php echo $aviso; ?></p> 
    </form>
</body>
</html>