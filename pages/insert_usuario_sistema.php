<?php
    include('conexao.php');

    if (isset($_POST['salvar'])) {

        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $senha = md5($_POST['senha']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);

        echo "Nome: $nome Senha: $senha Status: $status";
 
        if(isset($_POST['salvar'])) {
        
            $insert = "INSERT INTO usuario (nome, senha, status) VALUES ('$nome',  '$senha', '$status')";

            mysqli_query($conn, $insert);

            header('Location: grid_usuario_sistema.php');

            mysqli_close($conn);
        }
    }
?>