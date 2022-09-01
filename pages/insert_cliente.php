<?php
    include('conexao.php');

    if (isset($_POST['salvar'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
 
        if(isset($_POST['salvar'])) {
        
            $insert = "INSERT INTO cliente (nome, cpf ,endereco, telefone, data_cadastro) VALUES ('$nome',  $cpf, '$endereco','$telefone', now())";

            mysqli_query($conn, $insert);

            header('Location: grid_cliente.php');

            mysqli_close($conn);
        }
    }
?>