<?= $this->extend('template/templateadmin'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?= $this->include('template/topbar'); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Master Pelajaran</h1>
            </div>

            <div class="container">
                <form id="form" action="<?= base_url(); ?>/Siswa/tambahsiswa" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('inamalengkap')) ? 'is-invalid' : ''; ?>" name="nama_lengkap" id="nama_lengkap">
                        <div class="invalid-feedback">
                            <?= $validation->getError('inamalengkap'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-select form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomer Induk Siswa (NIS) </label>
                        <input type="text" name="nis" id="nis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="tel" name="no_telp" pattern="^\d{12}$" title="12 numeric characters only" id="no_telp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-select form-control" name="agama" id="agama">
                            <option selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Orangtua</label>
                        <input type="text" name="nama_orangtua" id="nama_orangtua" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Orangtua</label>
                        <textarea class="form-control" name="alamat_orangtua" id="alamat_orangtua" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>NO Telp Orangtua</label>
                        <input type="tel" name="no_telp_orangtua" pattern="^\d{12}$" title="12 numeric characters only" id="no_telp_orangtua" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-select form-control" name="jurusan" id="jurusan">
                            <option selected>Pilih jurusan</option>
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan (TKJ)</option>
                            <option value="Akuntansi">Akuntansi (AK)</option>
                            <option value="Administrasi Perkantoran">Administrasi Perkantoran (AP)</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                            <option value="Multimedia">Multimedia (MM)</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- End of Content Wrapper -->
<?= $this->endsection(); ?>