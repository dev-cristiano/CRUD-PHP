<?php
include('header.php');
include('conexao.php');

$sqlPedido = "SELECT * FROM pedido";
$resultPedido = $conn->query($sqlPedido);

/* print_r($resultPedido); */

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
                <button class="btn btn-success" type="button">
                    <a href="form_pedidos.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-plus"></i> Novo</a>
                </button>
                <hr>
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cliente Pedido</th>
                                <th scope="col">Valor Pedido</th>
                                <th scope="col">Data Pedido</th>
                                <th scope="col">#</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($dados = mysqli_fetch_assoc($resultPedido)) 
                            {
                             echo "<tr>";
                             echo "<td scope='row'>".$dados['idpedido']."</td>";
                             echo "<td scope='row'>".$dados['nome_pedido']."</td>";
                             echo "<td scope='row'>".$dados['cliente_pedido']."</td>";
                             echo "<td scope='row'>".$dados['valor_pedido']."</td>";  
                             echo "<td scope='row'>".$dados['data_pedido']."</td>";
                             echo "<td scope='row'>
                             <a class='btn btn-new' style='margin-left: 50%;' href='#'>
                             <i class='fa-solid fa-pen-to-square'></i></a>

                             <a class='btn btn-delete' href='./edit/delete-pedido.php?idpedido=$dados[idpedido]'>
                             <i class='fa-solid fa-trash'></i></a>
                             </td>";
                             echo"</tr>";
                            }
                        ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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