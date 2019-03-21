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
                    <h4 class="page-title">Rekam Medis</h4>
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
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>APT0001</td>
                                <td><img width="28" height="28" src="../../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Jennifer Robinson</td>
                                <td>35</td>
                                <td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
                                <td>(207) 808 8863</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="../../edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>APT0002</td>
                                <td><img width="28" height="28" src="../../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Terry Baker</td>
                                <td>63</td>
                                <td>555 Front St #APT 2H, Hempstead, NY, 11550</td>
                                <td>(376) 150 6975</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="../../edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Hapus</a>
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
                    <h3>Apakah anda ingin menghapus bidan ini?</h3>
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
        $('#nav-rekammedis').addClass('active');
    });
</script>
</body>
</html>