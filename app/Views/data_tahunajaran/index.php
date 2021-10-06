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
<<<<<<< Updated upstream
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Tahun Ajaran</h1>
=======
                <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
>>>>>>> Stashed changes
            </div>

            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
<<<<<<< Updated upstream
                        <a class="btn btn-primary mb-4" id="bayar" hred data-toggle="modal" data-target="#modal">Tambah Siswa</a>
=======
                        <a class="btn btn-primary mb-4" id="bayar" hred data-toggle="modal" data-target="#modal">Tambah Data</a>
>>>>>>> Stashed changes
                        <?php if (session()->getFlashdata('Pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('Pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
<<<<<<< Updated upstream
                                    <th scope="col">ID TAHUN AJARAN</th>
                                    <th scope="col">TAHUN AJARAN</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">AKSI</th>
=======
                                    <th scope="col">ID Tahun Ajaran</th>
                                    <th scope="col">Tahun Ajaran</th>
                                    <th scope="col">Status</th>

                                    <th scope="col">Aksi</th>
>>>>>>> Stashed changes
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
<<<<<<< Updated upstream
                                <?php foreach ($tahunajaran as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['id_tahun']; ?></td>
                                        <td><?= $k['tahunajaran']; ?></td>
                                        <td><?= $k['status']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm btn-edit" data-id_tahun="<?= $k['id_tahun'] ?>" data-tahunajaran="<?= $k['tahunajaran']; ?> " data-status=" <?= $k['status']; ?>">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm btn-delete" data-id_tahun="<?= $k['id_tahun'] ?>">Delete</a>
=======
                                <?php foreach ($tahun as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['id']; ?></td>
                                        <td><?= $k['tahunajaran']; ?></td>
                                        <td><?= $k['status']; ?></td>

                                        <td>
                                            <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $k['id'] ?>" data-tahun_ajaran="<?= $k['tahunajaran']; ?>" data-status="<?= $k['status']; ?>">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $k['id'] ?>">Delete</a>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                                <h5 class="modal-title">Data Tahun ajaran</h5>
=======
                                <h5 class="modal-title">Tambah Data </h5>
>>>>>>> Stashed changes
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<<<<<<< Updated upstream
                                <form id="form" action="<?= base_url(); ?>/tahunajaran/tambahtahun" method="post">
                                    <div class="form-group">
                                        <label>ID Tahun Ajaran</label>
                                        <input type="text" class="form-control" name="id_tahun" id="id_tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Ajaran</label>
                                        <input type="text" class="form-control" name="tahunajaran" id="tahunajaran" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" name="status" id="status" required>
                                    </div>
=======
                                <form id="form" action="<?= base_url(); ?>/Tahunajaran/tambahtahun" method="post">
                                    <div class="form-group">
                                        <label>id</label>
                                        <input type="text" class="form-control" name="id" id="id" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Ajaran</label>
                                        <select class="form-select form-control" name="tahunajaran" id="tahunajaran">
                                            <option selected>Pilih Tahun</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status </label>
                                        <input type="text" name="status" id="status" class="form-control" required="">
                                    </div>

>>>>>>> Stashed changes
                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

<<<<<<< Updated upstream
                <!-- update -->


                <form action="/tahunajaran/update" method="post">
=======

                <!-- update -->

                <form id="form" action="<?= base_url(); ?>/Tahunajaran/updatetahun" method="post">
>>>>>>> Stashed changes
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
<<<<<<< Updated upstream
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jurusan</h5>
=======
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
>>>>>>> Stashed changes
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
<<<<<<< Updated upstream
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>ID tahun ajaran</label>

                                        <input type="text" class="form-control id_tahun" name="id_tahun" id="id_tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun ajaran</label>

                                        <input type="text" class="form-control tahunajaran" name="tahunajaran" id="tahunajaran" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>

                                        <input type="text" class="form-control status" name="status" id="status" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <form action="/tahunajaran/delete" method="post">
=======

                                <div class="modal-body">
                                    <input type="hidden" name="id" id="id">

                                    <div class="form-group">
                                        <label>id tahun ajaran</label>
                                        <input type="text" class="form-control id" name="id" id="id" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Ajaran</label>
                                        <select class="form-select form-control tahunajaran" name="tahunajaran" id="tahunajaran">
                                            <option selected>Pilih Tahun Ajaran</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>status </label>
                                        <input type="text" name="status" id="status" class="form-control status">
                                    </div>

                                    <div class="modal-footer">
                                        <input type="hidden" name="id" class="id">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                </form>

                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Data Siswa</h5>
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form" action="<?= base_url(); ?>/Tahunajaran/updatetahun" method="post">

                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="/Tahunajaran/deletetahun" method="post">
>>>>>>> Stashed changes
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
<<<<<<< Updated upstream
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Jurusan</h5>
=======
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
>>>>>>> Stashed changes
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

<<<<<<< Updated upstream
                                    <h4>Are you sure want to delete this Jurusan?</h4>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_tahun" class="id_tahun">
=======
                                    <h4>Are you sure want to delete this product?</h4>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" class="id">
>>>>>>> Stashed changes
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
<script>
<<<<<<< Updated upstream
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id_tahun = $(this).data('id_tahun');
            const tahunajaran = $(this).data('tahunajaran');
            const status = $(this).data('status');


            // Set data to Form Edit
            $('.id_tahun').val(id_tahun);
=======
    $("#tgl_lahir").datepicker({
        dateFormat: "yy-mm-dd"
    });
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const tahunajaran = $(this).data('tahunajaran');
            const status = $(this).data('status');
            // Set data to Form Edit
            $('.id').val(id);
>>>>>>> Stashed changes
            $('.tahunajaran').val(tahunajaran);
            $('.status').val(status);



<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
            // Call Modal Edit
            $('#editModal').modal('show');
        });
        $('.btn-delete').on('click', function() {
            // get data from button edit
<<<<<<< Updated upstream
            const id_tahun = $(this).data('id_tahun');
            // Set data to Form Edit
            $('.id_tahun').val(id_tahun);
=======
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.id').val(id);
>>>>>>> Stashed changes
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
    });
</script>
<!-- End of Content Wrapper -->
<?= $this->endsection(); ?>