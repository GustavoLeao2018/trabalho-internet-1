<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/escript.js"></script>
    <title>Trabalho</title>
</head>

<body>
  <?php 

$nome =$_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$usuario = $_POST['usuario'];
$senha =  $_POST['senha'];

if(isset($nome) and isset($endereco) and isset($cidade) and isset($estado) and isset($senha)){
    echo '<p><b>Nome: </b>'.$nome.'</p>';
    echo '<p><b>Endereço: </b>'.$endereco.'</p>';
    echo '<p><b>Cidade: </b>'.$cidade.'</p>';
    echo '<p><b>Estado: </b>'.$estado.'</p>';
    echo '<p><b>Usuário: </b>'.$usuario.'</p>';
    echo '<p><b>Senha: </b>';
    for($i = 0; $i < strlen($senha); $i++){
        echo '*'; 
    }
    echo '</p>';
}

else {
    echo '<p>Erro ao receber os dados!</p>';
}
  ?>
</body>

</html>