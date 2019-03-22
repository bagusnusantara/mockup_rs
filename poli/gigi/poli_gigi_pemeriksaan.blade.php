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

            <div class="card-box profile-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img class="avatar" src="../../assets/img/doctor-03.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">Cristina Groves</h3>
                                            <small class="text-muted">Pasien</small>
                                            <div class="staff-id">ID Pasien : P-0001</div>
                                            <div class="staff-msg"><a href="../../chat.html" class="btn btn-primary">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Telpon:</span>
                                                <span class="text"><a href="">770-889-6484</a></span>
                                            </li>
                                            <li>
                                                <span class="title">Tanggal Lahir:</span>
                                                <span class="text">3 Maret 1990</span>
                                            </li>
                                            <li>
                                                <span class="title">Umur:</span>
                                                <span class="text">29 Tahun</span>
                                            </li>
                                            <li>
                                                <span class="title">Address:</span>
                                                <span class="text">714 Burwell Heights Road, Bridge City, TX, 77611</span>
                                            </li>
                                            <li>
                                                <span class="title">Jenis Kelamin:</span>
                                                <span class="text">Perempuan</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a class="nav-link active" href="#pemeriksaan" data-toggle="tab">Pemeriksaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rekammedis" data-toggle="tab">Rekam Medis</a></li>
                </ul>

                <div class="tab-content">
                    <?php include ('poli_gigi_extend_tab_pemeriksaan.blade.php') ?>
                    <?php include ('poli_gigi_extend_tab_detail_rekam_medis.blade.php') ?>
                </div>
            </div>
        </div>

        <?php include ('poli_gigi_extend_modal_detail_rekam_medis.blade.php') ?>

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
