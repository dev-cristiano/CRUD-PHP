<?php
    include('conexao.php');

    if (isset($_POST['salvar'])) {

        $nome = $_POST['nome'];
        $preco_custo = $_POST['preco_custo'];
        $preco_compra = $_POST['preco_compra'];
        $preco_venda = $_POST['preco_venda'];
 
        if(isset($_POST['salvar'])) {
        
            $insert = "INSERT INTO produto (nome, preco_custo, preco_compra, preco_venda) VALUES ('$nome','$preco_custo', '$preco_compra', '$preco_venda')";

            mysqli_query($conn, $insert);

            header('Location: grid_produto.php');

            mysqli_close($conn);
        }
    }
?>