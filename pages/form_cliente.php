<?php
include('header.php');

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
                    <form method="POST" action="insert_cliente.php" class="row g-3">
                        <div class="container mt-5">
                            <button class="btn btn-danger" type="button">
                                <a href="grid_cliente.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-angle-left"></i> Voltar</a>
                            </button>

                            <button class="btn btn-primary" type="submit" name="salvar"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                            <hr>
                        </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                <label for="inputNome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="inputNome" name="nome">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mt-2">
                                <label for="inputcpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="inputCpf" name="cpf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="inputEndereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="inputEndereco" placeholder="1234 Main St" name="endereco">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mt-2">
                                <label for="inputPhone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="inputPhone" name="telefone">
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