<!-- formulario_editar.php -->
 <?php
include "verificar_logado.php";
include "conexao.php";
$codigo = $_GET['cod'];

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_veiculos WHERE id='$codigo'";

// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $modelo = $resultado['modelo'];
    $placa = $resultado['placa'];
    $ano = $resultado['ano'];
    $preco = $resultado['preco'];

}catch(PDOException $erro){
    echo "Falha ao consultar!".$erro->getMessage();
}
?>

<h1>Atualizar inventário</h1> <br>
<form action="atualizar.php" method="post">
    <input type="text" name="codigo" 
    value='<?php echo $codigo;?>' hidden> 

    <label>Modelo:</label><br>
    <input type="text" name="modelo"
    value='<?php echo $modelo;?>'> <br><br>

    <label>placa:</label><br>
    <input type="text" step="0.01"
    name="placa" value='<?php echo $placa;?>'> <br><br>

    <label>Ano:</label><br>
    <input type="date"
    name="ano" value='<?php echo $ano;?>'> <br><br>

    <label>Preco:</label><br>
    <input type="number"
    name="preco" value='<?php echo $preco;?>'> <br><br>


    <button type="submit">Salvar alterações</button>
</form>