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

        <!-- role Siswa -->

        <?php if (in_groups('siswa')) : ?>
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-bars"></i>
                    <span>Biodatadiri</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>jadwal Matapelajaran</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Raport Nilai</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url(); ?>/#">
                    <i class="fas fa-book-reader"></i>
                    <span>Laporan raport </span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Role Kepala Sekolah -->

        <?php if (in_groups('kepala_sekolah')) : ?>
            <div class="sidebar-heading">
                Interface
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

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            internal
        </div>

        <!-- role operator -->
        <?php if (in_groups('operator')) : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bars"></i>
                    <span>Data Tambahan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Ditambahkan:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>/mapel/">Mata Pelajaran</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/jurusan/">Jurusan</a>
                        <a class="collapse-item" href="<?= base_url(); ?>/tahunajaran/">tahun ajaran</a>
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
        <?php endif; ?>

        <!-- role guru -->

        <?php if (in_groups('guru')) : ?>
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
        <?php endif; ?>

        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/acoount/">
                    <i class="fas fa-cog"></i>
                    <span>Kelola Akun</span>
                </a>
            </li>
        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->