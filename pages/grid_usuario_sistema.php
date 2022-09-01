<?php
include('header.php');
include('conexao.php');

$sql = "SELECT * FROM usuario";

$result = $conn->query($sql);

/* print_r($result); */
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
                        <a href="form_usuario_sistema.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-plus"></i> Novo</a>
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
                                <th scope="col">Nome</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {

                                $status = $dados['status'];

                                if($status == 1){
                                    $nome_status = "Ativo";
                                }else{
                                    $nome_status = "Inativo";
                                }

                                echo "<tr>";
                                echo "<td scope='row'>" . $dados['idusuario'] . "</td>";
                                echo "<td scope='row'>" . $dados['nome'] . "</td>";

                                if ($dados['status'] == 1) {
                                    echo "<td scope='row'><span class='badge text-bg-success' style='padding:5px; width: 50px;'>" . $nome_status . "</span>";
                                } else {
                                    echo "<td scope='row'><span class='badge text-bg-danger' style='padding:5px; width: 50px;'>" . $nome_status . "</span>";
                                }
                                echo "<td scope='row' class='position-sticky'>
                             <a class='btn btn-new' style='margin-left: 80%;' href='#'>
                             <i class='fa-solid fa-pen-to-square'></i></a>

                             <a class='btn btn-delete' href='./edit/delete-usuario-sistema.php?idusuario=$dados[idusuario]'>
                             <i class='fa-solid fa-trash'></i></a>
                             </td>";
                                echo "</tr>";
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

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

            <script>
                var search = document.getElementById('#pesquisar');

                function searchData() {
                    window.location = 'grid_cliente.php?search=' + search.value;
                }
            </script>

</body>