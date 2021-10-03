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
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Kelas</h1>
            </div>

            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary mb-4" id="bayar" hred data-toggle="modal" data-target="#modal">Tambah Kelas</a>
                        <?php if (session()->getFlashdata('Pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('Pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table class="table table-striped" id="data-list">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kelas as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['kelas']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $k['id'] ?>" data-kelas="<?= $k['kelas']; ?>">Edit</a>
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
                                <h5 class="modal-title">Data Kelas</h5>
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form" action="<?= base_url(); ?>/Kelas/tambahkelas" method="post">
                                    <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input type="text" class="form-control" name="kelas" id="kelas" required>
                                    </div>
                                    <button class="btn btn-success" type="submit">Tambah</button>
                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update -->


                <form action="/Kelas/updatekelas" method="post">
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kelas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input type="hidden" class="id" name="id">
                                        <input type="text" class="form-control kelas" name="kelas" id="kelas" required>
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

                <form action="/Kelas/deletekelas" method="post">
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Jurusan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <h4>Are you sure want to delete this Jurusan?</h4>

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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $('#data-list').DataTable();
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const kelas = $(this).data('kelas');
            // Set data to Form Edit
            $('.id').val(id);
            $('.kelas').val(kelas);



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
