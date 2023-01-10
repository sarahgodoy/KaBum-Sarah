<?php

    $db = mysqli_connect("localhost", "root", "", "kabumbd");
    if(!$db){
        die('Erro na base de dados' . mysqli_error($db));
    }

    $id = $_GET['id'];

    $qry = "DELETE FROM cliente WHERE id = $id";
    if(mysqli_query($db, $qry)){
        header('location: view.php');
    } else {
        echo mysqli_error($db);
    }

?>
