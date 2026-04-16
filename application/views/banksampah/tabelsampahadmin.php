<<<<<<< Updated upstream
<body>
    <!-- SAMpah -->
    <div id="sampah-table-container" class="containered pt-3">
        <div class="row mx-2">

                <!-- Modal tambah sampah -->
                <div
                    class="modal fade"
                    id="tambahSampahModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sampah</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="<?= base_url('dashboard/tambahSampah') ?>"
                                    method="post"
                                    enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="jenis_sampah"
                                                placeholder="Masukkan Jenis Sampah"
                                                >
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori_sampah" class="form-label">Kategori</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="kategori_sampah"
                                                placeholder="Masukkan Kategori Sampah"
                                                >
                                    </div>
                                    <div class="mb-3">
                                        <label for="sub_kategori_sampah" class="form-label">Sub Kategori</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="sub_kategori_sampah"
                                                placeholder="Masukkan Sub Kategori Sampah"
                                                >
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                name="harga"
                                                placeholder="Masukkan Harga"
                                                >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                               
                <!-- Modal Import excel Sampah -->
                <div
                    class="modal fade"
                    id="importSampahModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Import Excel Sampah</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="<?= base_url('dashboard/importsampah') ?>"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="excel_sampah" class="form-label">Excel Sampah</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="excel_sampah"
                                            name="excel_sampah">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Sampah -->
                <h3 class="fs-4 mb-3">Tabel Sampah</h3>
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <button
                            type="button"
                            class="btn btn-success mb-3 ms-0"
                            data-bs-toggle="modal"
                            data-bs-target="#tambahSampahModal">
                            Tambah Sampah
                        </button>
                        <a
                            href="<?=base_url()?>uploads/excel/template_sampah_banksampah.xlsx"
                            class="btn btn-primary mb-3 ms-0"
                            >
                            Download Excel
                        </a>
                        <button
                            type="button"
                            class="btn btn-warning mb-3 ms-0"
                            data-bs-toggle="modal"
                            data-bs-target="#importSampahModal">
                            Import Excel
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mx-3">
                <div class="table-responsive">
                    <table class="wtable table bg-light rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Sampah</th>
                                <th>Kategori</th>
                                <th>Sub Kategori</th>
                                <th>Harga/kg</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sampah->result_array() as $key) { ?>
                            <tr>
                                <td><?=$key['id'] ?></td>
                                <td><?=$key['jenis_sampah'] ?></td>
                                <td><?=$key['kategori_sampah'] ?></td>
                                <td><?=$key['sub_kategori_sampah'] ?></td>
                                <td>Rp <?=$key['harga_sampah'] ?></td>
                                <td>
                                <a href="<?=base_url()?>dashboard/editSampah?id_sampah=<?=$key['id']?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=base_url()?>dashboard/deleteSampah?id_sampah=<?=$key['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Paginate -->
                <div style='margin-top: 10px;' id='pagination' class="">
                    <?=$pagination ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var profileImageSrc = '<?= base_url('uploads/profile/'); ?>' + button.data('profile');

            modal
                .find('#modal-profile-img')
                .attr('src', profileImageSrc);
            modal
                .find('#modal-nama')
                .text('Nama Lengkap: ' + button.data('nama'));
            modal
                .find('#modal-tempat-lahir')
                .text('Tempat Lahir: ' + button.data('tempat-lahir'));
            modal
                .find('#modal-tanggal-lahir')
                .text('Tanggal Lahir: ' + button.data('tanggal-lahir'));
            modal
                .find('#modal-alamat')
                .text('Alamat: ' + button.data('alamat'));
            modal
                .find('#modal-email')
                .text('Email: ' + button.data('email'));
            modal
                .find('#modal-telepon')
                .text('Nomor Telepon: ' + button.data('telepon'));
        });
    </script>
</body>
</html>
=======
<div id="sampah-table-container" class="container-fluid pt-3">
    
    <style>
        .sampah-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
            margin-bottom: 15px;
            transition: transform 0.2s;
        }
        .sampah-card:active {
            transform: scale(0.98);
        }
        .kategori-badge {
            font-size: 12px;
            padding: 6px 12px;
            border: 1px solid #eee;
            background: #f8f9fa;
            border-radius: 50px;
            color: #555;
        }
    </style>

    <div class="row">
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <h3 class="fs-4 fw-bold mb-3 mb-md-0"><i class="fas fa-trash-alt me-2 text-primary"></i> Data Sampah</h3>
                
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-success rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahSampahModal">
                        <i class="fas fa-plus me-1"></i> Tambah Sampah
                    </button>
                    <a href="<?=base_url()?>uploads/excel/template_banksampah.xlsx" class="btn btn-outline-primary rounded-pill px-3 shadow-sm">
                        <i class="fas fa-download me-1"></i> Template Excel
                    </a>
                    <button type="button" class="btn btn-warning text-white rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#importSampahModal">
                        <i class="fas fa-file-import me-1"></i> Import Excel
                    </button>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-5">
                    <form action="<?=base_url()?>dashboard/loadSampah" method="post">
                        <div class="search-modern shadow-sm">
                            <input type="text" placeholder="Cari jenis sampah..." id="keyword" name="keyword" value="<?= isset($_SESSION['keyword_sampah']) ? $_SESSION['keyword_sampah'] : '' ?>">
                            <button type="submit" id="submit" name="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mobile-cards">
                <?php 
                $no = 1;
                foreach ($sampah->result_array() as $key) { ?>
                <div class="sampah-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold text-dark mb-0"><?= $key['jenis_sampah'] ?></h5>
                        <span class="badge bg-success rounded-pill px-3 py-2 fs-6 shadow-sm">
                            Rp <?= number_format($key['harga_sampah'], 0, ',', '.') ?> <small class="fw-normal">/kg</small>
                        </span>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="kategori-badge"><i class="fas fa-layer-group text-primary me-1"></i> <?= $key['kategori_sampah'] ?></span>
                        <i class="fas fa-chevron-right text-muted" style="font-size: 10px;"></i>
                        <span class="kategori-badge"><?= $key['sub_kategori_sampah'] ?></span>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="table-wrapper">
                <table class="table table-modern align-middle w-100">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="30%">Jenis Sampah</th>
                            <th scope="col" width="20%">Kategori</th>
                            <th scope="col" width="25%">Sub Kategori</th>
                            <th scope="col" width="20%" class="text-end">Harga / kg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Perbaikan nomor urut paginasi
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
                        $no = ($page - 1) * 7 + 1; // Angka 7 menyesuaikan per_page di controller
                        foreach ($sampah->result_array() as $key) { 
                        ?>
                        <tr>
                            <td class="fw-bold text-muted"><?= $no++ ?></td>
                            <td class="fw-bold text-dark"><?= $key['jenis_sampah'] ?></td>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1"><?= $key['kategori_sampah'] ?></span>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1"><?= $key['sub_kategori_sampah'] ?></span>
                            </td>
                            <td class="text-end fw-bold text-success fs-6">
                                Rp <?= number_format($key['harga_sampah'], 0, ',', '.') ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4 w-100">
                <?=$pagination ?>
            </div>
            
        </div>
    </div>
</div>
>>>>>>> Stashed changes
