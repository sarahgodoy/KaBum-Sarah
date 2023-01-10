<?php
    include("./code.php");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Listagem</title>
</head>

<body>


  <div class="content">

    <div class="container">
        <br>
      <h2 class="mb-5" style="color:white;">Listagem</h2>


      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>

              <th style="color:white;" scope="col">ID</th>
              <th style="color:white;" scope="col">Nome</th>
              <th style="color:white;" scope="col">Data de Nascimento</th>
              <th style="color:white;" scope="col">CPF</th>
              <th style="color:white;" scope="col">RG</th>
              <th style="color:white;" scope="col">Telefone</th>
              <th style="color:white;" scope="col">End ereço</th>

            </tr>
          </thead>
          <tbody>
            <?php
                $i = 1;
                $qry = "select * from cliente";
                $run = $db -> query($qry);
                if($run -> num_rows > 0){
                    while($row = $run -> fetch_assoc()){
            ?>
            <style>
                tr, td{
                    color: lightgray;
                }
            </style>
            <tr scope="row">
              <td>
                <?php echo $i++?>
              </td>
              <td>
                <?php echo $row['nome']?></a>
              </td>
              <td>
                <?php echo $row['dataNascimento']?>
              </td>
              <td>
                <?php echo $row['cpf']?>
              </td>
              <td>
                <?php echo $row['rg']?>
              </td>
              <td>
                <?php echo $row['telefone']?>
              </td>
              <td>
                <?php echo $row['endereco']?>
              </td>
            </tr>
            <?php
            }}
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
