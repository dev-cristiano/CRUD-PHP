<?php

    if(!empty($_GET['idcliente'])){

        include('../conexao.php');

        $idcliente = $_GET['idcliente'];

        $sql = "SELECT * FROM cliente WHERE idcliente = '$idcliente'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0){
            $sqlDelete = "DELETE FROM cliente WHERE idcliente = '$idcliente'";
            $result = $conn->query($sqlDelete);
        }

}
    header('Location:../grid_produto.php');

?>