<?php
include("conexao.php");

if(isset($_POST['salvar'])) {
    
    $nome = $_POST['nome'];
    $idLab = $_POST['id_lab'];

    $sql = "INSERT INTO labs (nm_labs, id_labs) VALUES ('$nome', '$idLab')";

    $resultado = $conexao->query($sql);

    if($resultado) {
        echo "Laboratorio cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar laboratorio: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    Nome do Laboratrio:
    <input type="text" name="nome">
    
    <br><br>
    
    ID do Laboratorio:
    <input type="text" name="id_lab">
    
    <br><br>
    
    <button type="submit" name="salvar">Salvar Laboratorio</button>
</form>

</body>
</html>