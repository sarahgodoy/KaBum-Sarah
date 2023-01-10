<?php

    $db = mysqli_connect("localhost", "root", "", "kabumdb");

    if(isset($_POST['submit'])){
        
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        
        $query = "INSERT INTO cliente(nome, dataNascimento, cpf, rg, telefone, endereco) VALUES('$nome', '$dataNascimento', '$cpf', '$rg', '$telefone', '$endereco')";
        
        if(mysqli_query($db, $query)){
            echo '<script>alert("Sucesso.");</script>';
            header("location:view.php");
        } else {
            echo mysqli_error($db);
        }
    }
    
?>
