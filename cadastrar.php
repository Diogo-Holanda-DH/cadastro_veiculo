<?php
// cadastrar.php
include "conexao.php";
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_veiculos
        (modelo, placa, ano, preco)
        VALUES
        ('$modelo', '$placa', '$ano', '$preco')";

// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $inserir->execute();
    echo "Cadastrado com sucesso";
}catch(PDOException $erro){
    echo "Falha ao inserir!". $erro->getMessage();
}
?>