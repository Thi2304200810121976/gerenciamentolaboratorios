<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM professores WHERE cd_professor = $id";
    
    $resultado = mysqli_query($conexao, $sql);
    
    if($resultado) {
        echo "Professor excluido com sucesso!";
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
    }
} else {
    echo "ID nao informado.";
}
?>
