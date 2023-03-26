<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include("autoload.class.php");

      $ConexaoPG = new Conexao("localhost","contatos","postgres","");

      $resultado = $ConexaoPG->query("SELECT * FROM pessoa");
        foreach ($resultado as $row) {
            echo $row['nome'] . "\n";
      }
    ?>
</body>
</html>
