<?php 
include("conexao.php");

$sql = "SELECT * FROM professores";
$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    while($dados = mysqli_fetch_assoc($resultado)) {
        echo $dados['cd_professor'] . " - " . $dados['nm_professor'] . "<br>";
    }
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
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
    Nome do Professor:
    <input type="text" name="nome">
    
    <br><br>
    
    senha do professor:
    <input type="password" name="id_lab">
    
    <br><br>
    
    <button type="submit" name="salvar">Salvar Laboratorio</button>
</form>

</body>
</html>