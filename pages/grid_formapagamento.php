<?php
include('header.php');
include('conexao.php');

$sqlPag = "SELECT * FROM formapagamento";

$resultPag = $conn->query($sqlPag);
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
                    <a href="form_formapagamento.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-plus"></i> Novo</a>
                </button>

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" id="pesquisar">
                        <div class="input-group">
                            <input onclick="searchData()" type="text" class="form-control border-0 small border" placeholder="Pesquisar" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                <hr>
                    <table class="table table-hover table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Metodo</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                            while($dados = mysqli_fetch_assoc($resultPag)) 
                            {
                             echo "<tr>";
                             echo "<td scope='row'>".$dados['idFormaPagamento']."</td>";
                             echo "<td scope='row'>".$dados['metodo']."</td>";
                             echo "<td scope='row'>
                             <a class='btn btn-new' style='margin-left: 50%;' href='#'>
                             <i class='fa-solid fa-pen-to-square'></i></a>

                             <a class='btn btn-delete' href='./edit/delete-forma_pagamento.php?idFormaPagamento=$dados[idFormaPagamento]'>
                             <i class='fa-solid fa-trash'></i></a>
                             </td>";
                             echo"</tr>";
                            }
                        ?>
                            </tr>
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

            <script>
                var search = document.getElementById('#pesquisar');
                function searchData()
                {
                    window.location ='grid_cliente.php?search='+search.value;
                }
            </script>

</body>