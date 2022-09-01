<?php
include('header.php');
include('conexao.php');

$sql = "SELECT * FROM produto";

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

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ALTERAR PRODUTO</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <label for="">Nome Produto</label>
                                    <input type="text" name="nomeProduto" id="nomeProduto">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->



                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <button class="btn btn-success" type="button">
                        <a href="form_prato.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-plus"></i> Novo</a>
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
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Prato</th>
                                <th scope="col">Preço Prato</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- echo 'R$' . number_format($val, 2, ',', '.');  -->
                            <?php

                            while ($dados = mysqli_fetch_assoc($result)) {
                                $idPrato = $dados['idPrato'];
                                $nomePrato = $dados['nomePrato'];
                                $valorPrato = $dados['valorPrato'];

                                echo "<tr>";
                                echo "<td scope='row'>" . $dados['idPrato'] . "</td>";
                                echo "<td scope='row'>" . $dados['nomePrato'] . "</td>";
                                echo "<td scope='row'> R$" . number_format($valorPrato, 2, ',', '.') . "</td>";
                                echo "<td scope=''>
                             <a class='btn btn-new' data-bs-toggle='modal' data-bs-target='#exampleModal' style='margin-left: 50%;' href='idproduto=$dados[idproduto]'>
                             <i class='fa-solid fa-pen-to-square'></i></a>

                             <a class='btn btn-delete' href='./edit/delete-produto.php?idproduto=$dados[idproduto]'>
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
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>