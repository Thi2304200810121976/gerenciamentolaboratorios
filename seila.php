<?php
include("conexao.php");

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO professores (nm_professor, id_professor, id_email, senha_professor) 
            VALUES ('$nome', '$id', '$email', '$senha')";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<p style='color: green;'>Professor cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color: red;'>Erro ao cadastrar: " . mysqli_error($conexao) . "</p>";
    }
}
?>

<form method="POST">
    Nome:
    <input type="text" name="nome">
    
    <br><br>
    
    ID:
    <input type="text" name="id">
    
    <br><br>
    
    Email:
    <input type="email" name="email">
    
    <br><br>
    
    Senha:
    <input type="password" name="senha">
    
    <br><br>
    
    <button type="submit" name="salvar">
    Salvar
    </button>
</form>
