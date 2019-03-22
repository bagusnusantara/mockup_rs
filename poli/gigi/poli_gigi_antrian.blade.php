<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/fa/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.min.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <?php include ('../poli_temp_top_navbar.blade.php') ?>
    <?php include ('poli_gigi_temp_side_navbar.blade.php') ?>

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Daftar Antrian Poli Gigi</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="datatables-bidan" class="table table-border table-striped custom-table datatable mb-0">
                            <thead>
                            <tr>
                                <th>ID Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Nomor Telpon</th>
                                <th>Dokter</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>APT0001</td>
                                <td>Jennifer Robinson</td>
                                <td>35</td>
                                <td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
                                <td>(207) 808 8863</td>
                                <td>Henry Daniels</td>
                                <td><span class="custom-badge status-green">Menunggu Diperiksa</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="poli_gigi_pemeriksaan.blade.php"><i class="fas fa-stethoscope m-r-5"></i> Periksa</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fas fa-forward m-r-5"></i> Lewati</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>APT0002</td>
                                <td>Terry Baker</td>
                                <td>63</td>
                                <td>555 Front St #APT 2H, Hempstead, NY, 11550</td>
                                <td>(376) 150 6975</td>
                                <td>Henry Daniels</td>
                                <td><span class="custom-badge status-green">Menunggu Diperiksa</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="poli_gigi_pemeriksaan.blade.php"><i class="fas fa-stethoscope m-r-5"></i> Periksa</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fas fa-forward m-r-5"></i> Lewati</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="../../assets/img/sent.png" alt="" width="50" height="46">
                    <h3>Apakah anda ingin melewati antrian ini?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Tutup</a>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include ('../poli_temp_footer.blade.php') ?>
<script>
    $(document).ready(function () {
        $('.nav>li').removeClass('active');
        $('#nav-antrian').addClass('active');
    });
</script>
</body>
</html>