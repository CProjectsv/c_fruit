
            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>
                    <?php if (session()->get('message')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Data produk berhasil<strong><?= session()->getFlashdata('message'); ?></strong> 
                        </div>
                    <?php endif; ?>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm shadow-sm" data-toggle="modal" data-target="#modelId">
                            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Produk
                            </button>
                            
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Komoditi</th>
                                            <th>Nama Komoditi</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach ($product as $row) : ?>
                                            <tr>
                                                <td><?= $row['id_komoditi']; ?></td>
                                                <td><?= $row['nama_komoditi']; ?></td>
                                                <td><?= $row['jumlah']; ?></td>

                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            <!-- Modal -->
            <div class="modal fade" id="modelId">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                    <form action="<?= base_url('product/add'); ?>" method="post">
                        <div class="form-group mb-0">
                            <label for="nama_komoditi"></label>
                            <input type="text" name="nama_komoditi" id="" class="form-control" placeholder="Masukkan nama produk">
                        </div>
                        <div class="form-group mb-0">
                            <label for="jumlah"></label>
                            <input type="text" name="jumlah" id="" class="form-control" placeholder="Masukkan stok">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>




            </div>
            <!-- End of Main Content -->

