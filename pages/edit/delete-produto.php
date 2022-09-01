<?php

    if(!empty($_GET['idproduto'])){

        include('../conexao.php');

        $idproduto = $_GET['idproduto'];

        $sql = "SELECT * FROM produto WHERE idproduto = '$idproduto'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0){
            $sqlDelete = "DELETE FROM produto WHERE idproduto = '$idproduto'";
            $result = $conn->query($sqlDelete);
        }

} 
    header('Location:../grid_produto.php');

?>