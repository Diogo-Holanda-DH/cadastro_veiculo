<?php
// atualizar.php
include "verificar_logado.php";
include "conexao.php";
$modelo = $_POST['modelo'];
$placa= $_POST['placa'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];

// 1º Passo - Comando SQL
$sql = "UPDATE tb_veiculos SET 
        modelo='$modelo', placa='$placa',
        ano='$ano', preco='$preco'
        WHERE placa='$placa'";
// 2º Passo - Preparar a conexão
$atualizar = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "Atualizado com sucesso!";
    }else{
        echo "Falha ao atualizar!";
    }    
}catch(PDOException $erro){
    echo "Falha ao atualizar!";$erro->getMessage();
}

?>