<?php
include('header.php');
include('conexao.php');
/* 
$queryPrato = "SELECT * FROM prato";
$result = $conn->query($queryPrato);
 */
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
                    <form method="POST" action="insert_prato.php" class="row g-3">
                        <div class="container mt-5">

                            <button class="btn btn-danger" type="button">
                                <a href="grid_prato.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-angle-left"></i> Voltar</a>
                            </button>

                            <button class="btn btn-primary" type="submit" name="salvar"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="form col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nome Prato</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nomePrato" placeholder="Ex: Frango a Passarinho">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Preço</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="22,00" name="valorPrato">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="form col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                </div>
                            </div> -->
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