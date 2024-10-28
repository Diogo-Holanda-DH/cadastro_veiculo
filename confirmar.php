<?php
// confirmar.php
$placa= $_GET['cod'];
echo "
        <h1> Tem certeza que deseja
             excluir o item nº $placa?
        </h1>
        <br><br>
        <a href='deletar.php?cod=$placa'>
            Sim
        </a>
        <br><br>
        <a href='pagina_gerenciar.php'>
            Não
        </a>        

    ";

?>