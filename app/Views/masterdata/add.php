<?= $this->extend('template/templateadmin'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?= $this->include('template/topbar'); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Master Data</h1>
            </div>

            <div class="container">
                <!-- Content Row -->
                <form id="form" action="<?= base_url(); ?>/Masterdata/tambah" method="post">
                    <div class="mb-3 row">
                        <label class="col-sm-4">Tahun Ajaran</label>
                        <div class="col-sm-8">
                            <select name="tahun_ajaran" id="tahun_ajaran" class="selectpicker form-control form-select" data-live-search="true">
                                <option selected>Pilih Tahun Ajaran</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4">Nomer Induk Siswa (NIS) </label>
                        <div class="col-sm-8">
                            <select class="selectpicker nis form-control" data-live-search="true" name="nis" id="nis">
                                <option readonly selected>Pilih nis</option>
                                <?php foreach ($nis as $nis) : ?>
                                    <option value="<?= $nis['nis']; ?>"><?= $nis['nis']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control nama_lengkap" name="nama_lengkap" id="nama_lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4">Kelas</label>
                        <div class="col-sm-8">
                            <select class="selectpicker kelas form-control" data-live-search="true" name="kelas" id="kelas">
                                <option readonly selected>Pilih kelas</option>
                                <?php foreach ($kelas as $kelas) : ?>
                                    <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4">Jurusan</label>
                        <div class="col-sm-8">
                            <select class="selectpicker jurusan form-control" data-live-search="true" name="jurusan" id="jurusan">
                                <option readonly selected>Pilih jurusan</option>
                                <?php foreach ($jurusan as $jur) : ?>
                                    <option value="<?= $jur['jurusan']; ?>"><?= $jur['jurusan']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4">Nama Wali Kelas</label>
                        <div class="col-sm-8">
                            <select class="selectpicker nama_walikelas form-control" data-live-search="true" name="nama_walikelas" id="nama_walikelas">
                                <option readonly selected>Pilih nama walikelas</option>
                                <?php foreach ($guru as $guru) : ?>
                                    <option value="<?= $guru['nama_guru']; ?>"><?= $guru['nama_guru']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $('.nis').selectpicker();
    $('.tahun_ajaran').selectpicker();
    $('.kelas').selectpicker();
    $('.jurusan').selectpicker();
    $('.wali_kelas').selectpicker();
</script>
<!-- End of Content Wrapper -->
<?= $this->endsection(); ?>