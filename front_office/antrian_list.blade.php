
<!DOCTYPE html>
<html lang="en">


<?php include ('head.blade.php') ?>

<body>
    <div class="main-wrapper">
      <?php include ('header.blade.php') ?>
      <?php include ('sidebar.blade.php') ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">List Antrian</h4>
                    </div>
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="antrian_add.html" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Tambah Antrian</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Nama Pasien</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Nama Poli</label>
                            <select class="select floating">
                                <option> -- Pilih Poli -- </option>
                                <option>Poli Umum</option>
                                <option>Poli Gigi</option>
                                <option>Poli Mata</option>
                                <option>Poli Kebidanan dan Penyakit Kandungan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Tanggal</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Cari </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>No. Urut</th>
                                        <th>Pasien</th>
                                        <th>Kode Pasien</th>
                                        <th>Jam Periksa</th>
                                        <th>Jam Batas</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="profile.html" class="avatar">H</a>
                                            <h2><a href="#">Hilda K.</a></h2>
                                        </td>
                                        <td>RM513241</td>
                                        <td>08.00</td>
                                        <td>08.30</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Selesai
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Datang</a>
                                                    <a class="dropdown-item" href="#">Sedang Diperiksa</a>
                                                    <a class="dropdown-item" href="#">Selesai</a>
                                                    <a class="dropdown-item" href="#">Batal</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Tindakan Medis</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="profile.html" class="avatar">J</a>
                                            <h2><a>	Budi Sutrisno  </h2>
                                        </td>
                                        <td>RM423241</td>
                                        <td>08.15</td>
                                        <td>08.45</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Sedang Diperiksa
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Datang</a>
                                                    <a class="dropdown-item" href="#">Sedang Diperiksa</a>
                                                    <a class="dropdown-item" href="#">Selesai</a>
                                                    <a class="dropdown-item" href="#">Batal</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Tindakan Medis</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="profile.html" class="avatar">J</a>
                                            <h2><a>Prima Zaki </a></h2>
                                        </td>
                                        <td>RM213247</td>
                                        <td>08.30</td>
                                        <td>09.00</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Batal
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Datang</a>
                                                    <a class="dropdown-item" href="#">Sedang Diperiksa</a>
                                                    <a class="dropdown-item" href="#">Selesai</a>
                                                    <a class="dropdown-item" href="#">Batal</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Tindakan Medis</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <a href="profile.html" class="avatar">H</a>
                                            <h2><a>Nurul Auliya </a></h2>
                                        </td>
                                        <td>RM913278</td>
                                        <td>08.45</td>
                                        <td>09.15</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-blue dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Datang
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Datang</a>
                                                    <a class="dropdown-item" href="#">Sedang Diperiksa</a>
                                                    <a class="dropdown-item" href="#">Selesai</a>
                                                    <a class="dropdown-item" href="#">Batal</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Tindakan Medis</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <a href="profile.html" class="avatar">R</a>
                                            <h2><a>Yofi Firmansyah </a></h2>
                                        </td>
                                        <td>RM513248</td>
                                        <td>09.00</td>
                                        <td>09.30</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-orange dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Belum Datang
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Datang</a>
                                                    <a class="dropdown-item" href="#">Sedang Diperiksa</a>
                                                    <a class="dropdown-item" href="#">Selesai</a>
                                                    <a class="dropdown-item" href="#">Batal</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Tindakan Medis</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
		<div id="delete_approve" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Leave Request?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>


<!-- leaves23:23-->
</html>
