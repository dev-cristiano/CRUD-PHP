<?php
    include 'conexao.php';


    if(isset($_GET['salvar'])){

        $nomePrato = $_GET['nomePrato'];
        $valorPrato = $_GET['valorPrato'];

        echo "$nomePrato <br> $valorPrato";

        if(isset($_GET['salvar'])){
            $insert = "INSERT INTO prato (nomePrato, valorPrato, data_includao) VALUES ('$nomePrato', '$valorPrato', NOW())";
            
            mysqli_query($conn, $insert);
            header('Location: grid_prato.php');

            mysqli_close($conn);
        }
    }


?>