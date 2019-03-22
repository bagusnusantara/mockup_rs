<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li id="nav-dashboard">
                    <a href="pemulasaraan_jenazah_dashboard.blade.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-edit"></i> <span>Pemeriksaan Pasien<br>DOA (Death On Arrival)</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a <?php if ($_SERVER['REQUEST_URI'] == '/mockup_rs/pemulasaraan_jenazah/pemulasaraan_jenazah_doa_create_rekam_medis.blade.php') { ?> class = "active" <?php } ?> href="pemulasaraan_jenazah_doa_create_rekam_medis.blade.php">Input Rekam Medis</a></li>
                        <li><a <?php if ($_SERVER['REQUEST_URI'] == '/mockup_rs/pemulasaraan_jenazah/pemulasaraan_jenazah_doa_create_rekam_daftar_jenazah.blade.php') { ?> class = "active" <?php } ?> href="">Daftar Jenazah</a></li>
                    </ul>
                </li>
                <li id="nav-bankdarah">
                    <a href=""><i class="fas fa-user-nurse"></i> <span>Pemeriksaan Jenazah<br>(Otopsi)</span></a>
                </li>
                <li id="nav-dialisis">
                    <a href=""><i class="fas fa-baby-carriage"></i> <span>Pemulasaraan Jenazah</span></a>
                </li>
                <li id="nav-anestesi">
                    <a href=""><i class="fas fa-briefcase"></i> <span>Pengawetan Jenazah/<br>Embalming (Formalin)</span></a>
                </li>
                <li id="nav-dental">
                    <a href=""><i class="fas fa-phone-volume"></i> <span>Penggalian Jenazah</span></a>
                </li>
                <li id="nav-medicalcheck">
                    <a href=""><i class="fas fa-phone-volume"></i> <span>Penitipan Jenazah<br>(dari luar RS)</span></a>
                </li>
                <li id="nav-radiologi">
                    <a href=""><i class="fas fa-phone-volume"></i> <span>Permintaan Kadaver</span></a>
                </li>
                <li id="nav-persalinan">
                    <a href=""><i class="fas fa-phone-volume"></i> <span>Visum Klinik<br>(VeR Forensik Klinik)</span></a>
                </li>
                <li id="nav-dietary">
                    <a href=""><i class="fas fa-phone-volume"></i> <span>Patternity test (DNA)</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>