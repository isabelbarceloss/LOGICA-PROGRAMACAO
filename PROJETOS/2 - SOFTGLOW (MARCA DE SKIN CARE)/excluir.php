<?php
    // Integrantes do Grupo:
    //  Isabel Barcelos Agualuza 11251101322
    //  Isabela Pereira de Brito 11251100580
    //  João de Lima Vernosi Diniz 11251102193
    //  Raquel Layane Silva 11251101679
    
    require_once('conexao.php');

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $bancoDados = new db();
        $link = $bancoDados->conecta_mysql();

        $sql = "DELETE FROM produtos WHERE  id = $id";
        mysqli_query($link, $sql);
    }

    header("Location: dados.php");
    exit;
?>

