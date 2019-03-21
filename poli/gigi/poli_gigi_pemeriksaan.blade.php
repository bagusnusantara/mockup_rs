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
                <div class="col-sm-12">
                    <h4 class="page-title">Pemeriksaan Pasien</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="card-title">Basic Inputs</h4>
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Tekanan Darah Atas</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_bawah">Tekanan Darah Bawah</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_bawah" name="tekanan_darah_bawah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Riwayat Penyakit</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Subjektif</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Objektif</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Diagnosa</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Planning</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="tekanan_darah_atas">Resep</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tekanan_darah_atas" name="tekanan_darah_atas">
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Simpan</button>
                            </div>
                        </form>
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
        $('#nav-pemeriksaan').addClass('active');
    });
</script>
</body>
</html>
