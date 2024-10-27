<?php
// confirmar.php
$id = $_GET['cod'];
echo "
        <h1> Tem certeza que deseja
             excluir o item nº $id?
        </h1>
        <br><br>
        <a href='deletar.php?cod=$id'>
            Sim
        </a>
        <br><br>
        <a href='pagina_gerenciar.php'>
            Não
        </a>        

    ";

?>