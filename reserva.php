<?php
include("conexao.php");

if(isset($_POST['salvar'])) {
    
    $nome = $_POST['nome'];
    $idTurma = $_POST['id_turma'];
    $professor = $_POST['id_professor'];

    $sql = "INSERT INTO turma (nm_turma, id_turma, id_professor) VALUES ('$nome', '$idTurma', '$professor')";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado) {
        echo "Turma cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar turma: " . mysqli_error($conexao);
    }
}
?>