<?php
include('header.php');
include('conexao.php');

$data_pedido = date('Y-m-d H:i:s');
$data_con = str_replace("/", "-", $data_pedido);


$queryCliente = "SELECT * FROM cliente";
$result = $conn->query($queryCliente);

$formaPagamento = "SELECT * FROM formaPagamento";
$resultPag = $conn->query($formaPagamento);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        include('sidebar.php');
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                include('navbar.php');
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form method="POST" action="insert_pedido.php" class="row g-3">
                        <div class="container mt-5">

                            <button class="btn btn-danger" type="button">
                                <a href="grid_pedidos.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-angle-left"></i> Voltar</a>
                            </button>

                            <button class="btn btn-primary" type="submit" name="salvar"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="form col-md-4">
                                    <label for="inputPedido" class="form-label">Cliente</label>
                                    <select class="form-select" name="cliente">
                                        <option selected>Selecione</option>
                                        <!-- BUSCA O ID DO CLIENTE PARA COLOCAR NO SELECT E EXIBE O NOME DO CLIENTE NOME NO INPUT -->
                                        <?php
                                        while ($dados = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $dados['idcliente'] . ">" . $dados['nome'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <div class="form mt-3">
                                        <label for="inputPedido" class="form-label">Pedido</label>
                                        <select class="form-select" name="pedido">
                                            <option selected>Selecione</option>
                                            <!-- BUSCA FORMA DE PAGAMENTO -->
                                            <?php
                                            while ($dados = mysqli_fetch_assoc($resultPedido)) {
                                                echo "<option value=" . $dados['idpedido'] . ">" . $dados['nome_pedido'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputPrecoPedido" class="form-label">Valor Pedido</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputPrecoPedido" class="form-label">Data Pedido</label>
                                        <input class="form-control" type="text" value="<?php echo date('d-m-Y', strtotime($data_con)); ?>" disabled readonly>
                                    </div>
                                    <div class="form col-md-3 mt-3">
                                        <label for="inputPedido" class="form-label">Forma Pagamento</label>
                                        <select class="form-select" name="pedido">
                                            <option selected>Selecione</option>
                                            <!-- BUSCA FORMA DE PAGAMENTO -->
                                            <?php
                                            while ($dados = mysqli_fetch_assoc($resultPag)) {
                                                echo "<option value=" . $dados['idpagamento'] . ">" . $dados['forma_pagamento'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <label for="inputPedido" class="form-label">Cliente</label>
                                    <select class="form-select" name="cliente">
                                        <option selected>Selecione</option>
                                        <!-- BUSCA O ID DO CLIENTE PARA COLOCAR NO SELECT E EXIBE O NOME DO CLIENTE NOME NO INPUT -->
                                        <?php
                                        while ($dados = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $dados['idcliente'] . ">" . $dados['nome'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="../vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/chart-area-demo.js"></script>
            <script src="../js/demo/chart-pie-demo.js"></script>

</body>