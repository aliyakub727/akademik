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
                <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
            </div>

            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary mb-4" href="/masterdata/tambah">Tambah Siswa</a>
                        <?php if (session()->getFlashdata('Pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('Pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table class="table table-hover" id="users-list">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tahun Ajaran</th>
                                    <th scope="col">Nomer Induk Siswa</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Nama Wali Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($masterdata as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['tahun_ajaran']; ?></td>
                                        <td><?= $k['nis']; ?></td>
                                        <td><?= $k['nama_lengkap']; ?></td>
                                        <td><?= $k['kelas']; ?></td>
                                        <td><?= $k['jurusan']; ?></td>
                                        <td><?= $k['nama_walikelas']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $k['id']; ?>" data-tahun_ajaran="<?= $k['tahun_ajaran']; ?>" data-nis="<?= $k['nis']; ?>" data-nama_lengkap="<?= $k['nama_lengkap']; ?>" data-kelas="<?= $k['kelas']; ?>" data-jurusan="<?= $k['jurusan']; ?>" data-nama_walikelas="<?= $k['nama_walikelas']; ?>">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $k['id'] ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- tambah -->
                <div class=" modal fade" id="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data</h5>
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form" action="<?= base_url(); ?>/Masterdata/tambah" method="post">
                                    <div class="form-group">
                                        <label>Tahun Ajaran</label>
                                        <select name="tahun_ajaran" id="tahun_ajaran" class="selectpicker form-control" data-live-search="true">
                                            <option selected>Pilih Tahun Ajaran</option>
                                            <option value="2019-2020">2019-2020</option>
                                            <option value="2020-2021">2020-2021</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomer Induk Siswa (NIS) </label>
                                        <select class="selectpicker nis form-control" data-live-search="true" name="nis" id="nis">
                                            <option readonly selected>Pilih nis</option>
                                            <?php foreach ($nis as $nis) : ?>
                                                <option value="<?= $nis['nis']; ?>"><?= $nis['nis']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control nama_lengkap" name="nama_lengkap" id="nama_lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select class="selectpicker kelas form-control" data-live-search="true" name="kelas" id="kelas">
                                            <option readonly selected>Pilih kelas</option>
                                            <?php foreach ($kelas as $kelas) : ?>
                                                <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="selectpicker jurusan form-control" data-live-search="true" name="jurusan" id="jurusan">
                                            <option readonly selected>Pilih jurusan</option>
                                            <?php foreach ($jurusan as $jur) : ?>
                                                <option value="<?= $jur['jurusan']; ?>"><?= $jur['jurusan']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Wali Kelas</label>
                                        <select class="selectpicker nama_walikelas form-control" data-live-search="true" name="nama_walikelas" id="nama_walikelas">
                                            <option readonly selected>Pilih nama walikelas</option>
                                            <?php foreach ($guru as $guru) : ?>
                                                <option value="<?= $guru['nama_guru']; ?>"><?= $guru['nama_guru']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update -->


                <form id="form" action="<?= base_url(); ?>/masterdata/update" method="post">
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label>Tahun Ajaran</label>
                                        <select name="tahun_ajaran" id="tahun_ajaran" class="form-select form-control tahun_ajaran">
                                            <option selected>Pilih Tahun Ajaran</option>
                                            <option value="2019-2020">2019-2020</option>
                                            <option value="2020-2021">2020-2021</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomer Induk Siswa (NIS) </label>
                                        <input type="text" name="nis" id="nis" class="form-control nis">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control nama_lengkap" name="nama_lengkap" id="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" class="form-control kelas" name="kelas" id="kelas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select name="jurusan" id="jurusan" class="form-select form-control jurusan">
                                            <option selected>Pilih jurusan</option>
                                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan (TKJ)</option>
                                            <option value="Akuntansi">Akuntansi (AK)</option>
                                            <option value="Administrasi Perkantoran">Administrasi Perkantoran (AP)</option>
                                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                                            <option value="Multimedia">Multimedia (MM)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Wali Kelas</label>
                                        <input type="text" class="form-control nama_walikelas" name="nama_walikelas" id="nama_walikelas">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" id="id" class="id">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>



                <!-- Delete -->

                <form action="/Masterdata/delete" method="post">
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <h4>Are you sure want to delete this Data?</h4>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" class="id">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script>
    $('#users-list').DataTable();
    $('.nis').selectpicker('click', function() {
        const nama = $(this).data('nama');
        $('#nama_lengkap').val(nama);
    });


    $(document).ready(function() {
        $('.btn-edit').on('click', function() {

            // get data from button edit
            const id = $(this).data('id');
            const tahun_ajaran = $(this).data('tahun_ajaran');
            const nis = $(this).data('nis');
            const nama_lengkap = $(this).data('nama_lengkap');
            const kelas = $(this).data('kelas');
            const jurusan = $(this).data('jurusan');
            const nama_walikelas = $(this).data('nama_walikelas');

            // Set data to Form Edit
            $('.id').val(id);
            $('.tahun_ajaran').val(tahun_ajaran);
            $('.nis').val(nis);
            $('.nama_lengkap').val(nama_lengkap);
            $('.kelas').val(kelas);
            $('.jurusan').val(jurusan);
            $('.nama_walikelas').val(nama_walikelas);

            // Call Modal Edit
            $('#editModal').modal('show');
        });

        $('.btn-delete').on('click', function() {

            // get data from button edit
            const id = $(this).data('id');

            // Set data to Form Edit
            $('.id').val(id);

            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
    });
</script>
<!-- End of Content Wrapper -->
<?= $this->endsection(); ?>