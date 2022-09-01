<?php

    if(!empty($_GET['idusuario'])){

        include('../conexao.php');

        $idusuario = $_GET['idusuario'];

        $sql = "SELECT * FROM usuario WHERE idusuario = '$idusuario'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0){
            $sqlDelete = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
            $result = $conn->query($sqlDelete);
        }

} 
    header('Location:../grid_usuario_sistema.php');

?>