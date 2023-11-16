<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/css/pindah/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/pindah/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/css/pindah/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tambah.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tambah Data +</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"></nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Ini Adalah Database dari penjualan Hexashop.</p>

                    <!-- DataTales Example -->

                    <?php
                    include '../koneksi.php';
                    $query = mysqli_query($conn, "SELECT * from produk as p join ukuran_produk as up on p.id_ukuran = up.id_ukuran join status_produk as sp on p.id_status = sp.id_status join gender_produk as gp on p.id_gender = gp.id_gender ORDER BY p.id ASC;");
                    ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th>Harga</th>
                                            <th>Gender</th>
                                            <th>Ukuran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $data["id"]?></td>
                                            <td><?php echo $data["nama_produk"]?></td>
                                            <td> <img src="<?php echo $data["image"] ?>" width="50"> </td>
                                            <td><?php echo $data["harga"]?></td>
                                            <td><?php echo $data["gender"]?></td>
                                            <td><?php echo $data["ukuran"]?></td>
                                            <td><?php echo $data["status_produk"]?></td>
                                            <td>
                                            <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning fs-6"> Ubah</a>
                                            &nbsp;
                                            <a href="proses_hapus.php?id=<?php echo $data["id"] ?>"onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"class="btn btn-danger fs-6">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <?php } ?>
                                    <?php } ?>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/css/pindah/jquery.min.js"></script>
    <script src="../assets/css/pindah/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/css/pindah/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/css/pindah/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/css/pindah/jquery.dataTables.min.js"></script>
    <script src="../assets/css/pindah/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/css/pindah/datatables-demo.js"></script>

</body>

</html>