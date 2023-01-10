<?php
    include("./code.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    html,
    body {
        display: flex;
        justify-content: center;
        font-family: Roboto, Arial, sans-serif;
        font-size: 15px;
    }

    form {
        border: 5px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 16px 8px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #8ebf42;
        color: white;
        padding: 14px 0;
        margin: 10px 0;
        border: none;
        cursor: grabbing;
        width: 100%;
    }

    h1 {
        text-align: center;
        font-size: 18;
    }

    .formcontainer {
        text-align: left;
        margin: 24px 50px 12px;
    }

    .container {
        padding: 16px 0;
        text-align: left;
    }

    span.psw {
        float: right;
        padding-top: 0;
        padding-right: 15px;
    }

    button:hover {
        background-color: lavender;
        transition: 0.7s;
    }

    button {
        border:none; 
        border-radius:10px; 
        padding:15px;
        min-height:30px; 
        min-width: 120px;
        max-width: fit-content;
        align-self: auto;
    }


    /* Change styles for span on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
    </style>

<body>
    <div class="container">
        <form action="">
            <br>
            <h1>LOGIN</h1>
            <div class="formcontainer">
                <hr />
                <div class="container">
                    <label for="usuario"><strong>Usuário</strong></label>
                    <input type="text" name="usuario" required>

                    <label for="senha"><strong>Senha</strong></label>
                    <input type="text" name="senha" required>
                    <br>
                </div>
                <button onclick="<?php header("location:view.php");?>" type="submit">Entrar</button>
                <br>
                <div class="container">
                    <label style="padding-left: 15px">
                        <input type="checkbox" checked="checked" name="remember"> Manter Logado
                    </label>
                </div>
        </form>
    </div>
</body>

</html>
