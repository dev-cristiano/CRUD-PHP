<?php
    include('conexao.php');

    if (isset($_POST['salvar'])) {

        $nome_pedido = mysqli_real_escape_string($conn, $_POST['nome_pedido']);
        $cliente_pedido = mysqli_real_escape_string($conn, $_POST['cliente_pedido']);
        $valor_pedido = $_POST['valor_pedido'];
        $forma_pagamento = $_POST['forma_pagamento'];
        $data_pedido = $_POST['forma_pagamento'];

        /* echo "Nome: $nome Senha: $senha Status: $status"; */
 
        if(isset($_POST['salvar'])) {
        
            $insert = "INSERT INTO pedido (nome_pedido,	cliente_pedido,	valor_pedido, forma_pagamento, data_pedido) VALUES ('$nome_pedido',  '$cliente_pedido', '$valor_pedido', '$forma_pagamento', '$data_pedido')";

            mysqli_query($conn, $insert);

            header('Location: grid_pedido.php');

            mysqli_close($conn);
        }
    }
?>