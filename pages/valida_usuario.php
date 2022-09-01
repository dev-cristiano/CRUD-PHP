<?php

    session_start();
    include('conexao.php');
    
    if (isset($_POST['login'])) {

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = md5($_POST['senha']);

    $query = "SELECT * FROM usuario WHERE nome = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    $row_cnt = mysqli_num_rows($result);

    if($row_cnt > 0) {

        while($dados = mysqli_fetch_array($result)) {
            $_SESSION['nome_usuario'] = $dados["nome"];
        }
        header('Location: dashboard.php');
        mysqli_close($conn);
    }else{
        
        header('Location: index.php');
    }
}
?>