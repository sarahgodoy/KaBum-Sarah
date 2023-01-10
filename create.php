<?php
    include("./code.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Cadastro de Clientes</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="contact-wrap">
                                    <h5 style="color:white" class="mb-4 text-left">Preencha os campos abaixo</h5>
                                    <!--------------------->
                                    <form method="POST" id="form_clientes" name="form_clientes" action="code.php">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nome" id="nome"
                                                        placeholder="Nome Completo">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="dataNascimento"
                                                        id="dataNascimento" placeholder="Data de Nascimento">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="cpf" id="cpf"
                                                        placeholder="Cadastro de Pessoa Física (CPF)">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="rg" class="form-control" id="rg"
                                                        placeholder="Carteira de Identidade (RG)"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="telefone" class="form-control"
                                                        id="telefone" placeholder="Telefone"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="endereco" class="form-control" id="endereco"
                                                        cols="30" rows="8" placeholder="Endereço"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Enviar" name="submit" class="btn btn-primary">
													<div class="submit"></div>
												</div>
											</div>
                                        </div>
                                    </form>
                                    <!--------------------->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>