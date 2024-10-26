<?php
// confirmar.php
$modelo = $_GET['cod'];
echo "
        <h1> Tem certeza que deseja
             excluir o item nº $modelo?
        </h1>
        <br><br>
        <a href='deletar.php?cod=$modelo'>
            Sim
        </a>
        <br><br>
        <a href='pagina_gerenciar.php'>
            Não
        </a>        

    ";

?>