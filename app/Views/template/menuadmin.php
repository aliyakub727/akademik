<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Akademik</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

<<<<<<< Updated upstream
        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>
=======
        <?php if (in_groups('admin')) : ?>
            <div class="sidebar-heading">
                Menu Operator
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/siswa/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/guru/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/masterdata/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Master Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                    <i class="fas fa-bars"></i>
                    <span>Data Tambahan</span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Ditambahkan:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>/mapel/">Mata Pelajaran</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/jurusan/">Jurusan</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/tahun_ajaran/">Tahun Ajaran</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bars"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan-Laporan:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>/siswa/#">Data Siswa</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/guru/#">Data Guru</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/mapel/#">Data pelajaran</a>
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                Menu Guru
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-plus-circle"></i>
                    <span>Input Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-plus-circle"></i>
                    <span>Input absensi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Review Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bars"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">laporan-laporan:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>/#">Nilai</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/#">Absensi</a>
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                Kepala Sekolah
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan Raport siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan absensi siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan Data siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan Data guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan Data pelajaran</span>
                </a>
            </li>
        <?php endif; ?>
        <!-- role operator -->
        <?php if (in_groups('operator')) : ?>
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/siswa/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/guru/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/masterdata/">
                    <i class="fas fa-plus-circle"></i>
                    <span>Master Data</span>
                </a>
            </li>
        <?php endif; ?>

        <!-- role guru -->

        <?php if (in_groups('guru')) : ?>
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-plus-circle"></i>
                    <span>Input Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-plus-circle"></i>
                    <span>Input absensi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Review Nilai</span>
                </a>
            </li>
        <?php endif; ?>
>>>>>>> Stashed changes

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/siswa/">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data Siswa</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Siswa</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Ditambahkan:</h6>
                    <a class="collapse-item" href="<?= base_url(); ?>/makanan/">Biodata Siswa</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/sayuran/">Sayuran Dll</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/minuman/">Minuman</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Kelola Akun</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kriteria Akun:</h6>
                    <a class="collapse-item" href="<?= base_url(); ?>/account/admin">Administrator</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/account/operator">Operator</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/acoount/guru">Guru</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/account/kepsek">Kepala Sekolah</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/account/siswa">Siswa</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            internal
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Menu Pegawai</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Pegawai:</h6>
                    <a class="collapse-item" href="login.html">Daftar Pegawai</a>
                    <a class="collapse-item" href="register.html">Penggajian</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Stoks</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->