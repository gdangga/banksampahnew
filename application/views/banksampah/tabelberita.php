<<<<<<< Updated upstream
<!-- Berita -->
<div id="berita-table-container" class="ms-3">
    <div class="row my-3 containered">
        <h2 class="mb-2 mt-3 fs-2">Berita</h2>
        <div class="d-flex justify-content-start mb-3">
            <button
                type="button"
                class="btn btn-success mb-3 ms-0 p-2"
                data-bs-toggle="modal"
                data-bs-target="#tambahBeritaModal">
                Tambah Berita
            </button>
        </div>
=======
<div id="berita-table-container" class="container-fluid pt-3">
    
    <style>
        .berita-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
            margin-bottom: 15px;
            transition: transform 0.2s;
        }
        .berita-img-mobile {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .deskripsi-preview {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #6c757d;
            font-size: 14px;
        }
        .berita-img-table {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
>>>>>>> Stashed changes

    <div class="row">

        <div class="modal fade" id="tambahBeritaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content shadow border-0">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('dashboard/tambahberita') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="judulBerita" class="form-label text-muted fw-semibold">Judul Berita</label>
                                <input type="text" class="form-control" id="judulBerita" name="judulBerita" placeholder="Masukkan Judul Berita" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambarBerita" class="form-label text-muted fw-semibold">Upload Gambar Berita</label>
                                <input type="file" class="form-control mb-2" id="gambarBerita" name="gambarBerita" accept="image/*" required onchange="previewTambahGambar(this)">
                                <img id="tambahGambarPreview" class="rounded shadow-sm mt-2" style="max-height: 150px; object-fit: cover; display: none;" alt="Preview">
                            </div>
                            <div class="mb-4">
                                <label for="deskripsiBerita" class="form-label text-muted fw-semibold">Deskripsi Berita</label>
                                <input type="text" style="display: none;" id="deskripsiBerita" name="deskripsiBerita">
                                <div id="deskripsiQuilli" style="min-height: 200px; border-radius: 0 0 8px 8px;"></div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary rounded-pill">Publish Berita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editBeritaModal" tabindex="-1" aria-labelledby="editBeritaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content shadow border-0">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="editBeritaModalLabel">Edit Berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm" action="<?= base_url('dashboard/updateBerita') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="editBeritaId">
                            <input type="hidden" name="gambarBerita_existing" id="editGambarBeritaExisting">

                            <div class="mb-3">
                                <label for="editJudulBerita" class="form-label text-muted fw-semibold">Judul Berita</label>
                                <input type="text" class="form-control" id="editJudulBerita" name="judulBerita" placeholder="Masukkan Judul Berita" required>
                            </div>
                            <div class="mb-3">
                                <label for="editGambarBerita" class="form-label text-muted fw-semibold">Upload Gambar Baru (Opsional)</label>
                                <input type="file" class="form-control mb-2" id="editGambarBerita" name="gambarBerita" accept="image/*" onchange="previewEditGambar(this)">
                                <small class="text-muted d-block mb-2">Gambar saat ini:</small>
                                <img id="editGambarPreview" class="rounded shadow-sm" style="max-height: 150px; object-fit: cover;" alt="Current Image">
                            </div>
                            <div class="mb-4">
                                <label for="editDeskripsiBerita" class="form-label text-muted fw-semibold">Deskripsi Berita</label>
                                <div id="editEditor" style="min-height: 200px; border-radius: 0 0 8px 8px;"></div>
                                <input type="hidden" id="editDeskripsiBerita" name="deskripsiBerita">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning text-white rounded-pill">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<<<<<<< Updated upstream
        <!-- Table -->
        <div class="col">
            <div class="table-responsive">
                <table class="table bg-light rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($berita->result_array() as $key) { ?>
                        <tr>
                            <td><?php echo $key['id'] ?></td>
                            <td><?php echo $key['judul'] ?></td>
                            <td>
                                <img
                                    src="<?php echo base_url('uploads/' . $key['gambar']); ?>"
                                    alt="Gambar Berita"
                                    width="50">
                            </td>
                            <td><?php echo $key['deskripsi'] ?></td>
                            <td>
                                <button
                                    class="btn btn-warning"
                                    onclick="openEditModal('<?php echo $key['id']; ?>', '<?php echo $key['judul']; ?>', '<?php echo $key['gambar']; ?>', '<?php echo htmlspecialchars($key['deskripsi']); ?>')">Edit</button>
                                <!--<a href="<?php echo base_url('dashboard/editberita/' . $key['id']) ?>"
                                class="btn btn-info">Edit</a>-->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $key['id']; ?>" onclick="showConfirmationModal(<?= $key['id']; ?>)">
                                    Delete
                                </button>
=======
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <h3 class="fs-4 fw-bold mb-3 mb-md-0"><i class="fas fa-newspaper me-2 text-primary"></i> Data Berita</h3>
                <button type="button" class="btn btn-success rounded-pill px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahBeritaModal">
                    <i class="fas fa-plus me-1"></i> Tambah Berita
                </button>
            </div>

            <div class="mobile-cards">
                <?php foreach ($berita->result_array() as $key) { ?>
                <div class="berita-card">
                    <img src="<?= base_url('uploads/' . $key['gambar']); ?>" alt="Gambar Berita" class="berita-img-mobile">
                    <h5 class="fw-bold text-dark mb-2"><?= $key['judul'] ?></h5>
                    
                    <div class="deskripsi-preview mb-3">
                        <?= strip_tags($key['deskripsi']) ?>
                    </div>
                    
                    <div class="d-flex gap-2 mt-3">
                        <button type="button" class="btn btn-warning text-white btn-sm rounded-pill flex-fill shadow-sm" 
                            data-bs-toggle="modal"
                            data-bs-target="#editBeritaModal"
                            data-id="<?= $key['id']; ?>"
                            data-judul="<?= htmlspecialchars($key['judul']); ?>"
                            data-gambar="<?= $key['gambar']; ?>"
                            data-deskripsi="<?= htmlspecialchars($key['deskripsi']); ?>"
                            data-gambarurl="<?= base_url('uploads/' . $key['gambar']); ?>">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm rounded-pill flex-fill shadow-sm" 
                            onclick="hapusBerita(<?= $key['id']; ?>)">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="table-wrapper">
                <table class="table table-modern align-middle w-100">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="15%">Gambar</th>
                            <th scope="col" width="25%">Judul</th>
                            <th scope="col" width="40%">Deskripsi Singkat</th>
                            <th scope="col" width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
                        $no = ($page - 1) * 5 + 1;
                        foreach ($berita->result_array() as $key) { 
                        ?>
                        <tr>
                            <td class="fw-bold text-muted"><?= $no++ ?></td>
                            <td>
                                <img src="<?= base_url('uploads/' . $key['gambar']); ?>" alt="Gambar Berita" class="berita-img-table">
                            </td>
                            <td class="fw-bold text-dark"><?= $key['judul'] ?></td>
                            <td>
                                <div class="deskripsi-preview">
                                    <?= strip_tags($key['deskripsi']) ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button type="button" class="btn btn-warning text-white btn-sm rounded-pill px-3 shadow-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editBeritaModal"
                                        data-id="<?= $key['id']; ?>"
                                        data-judul="<?= htmlspecialchars($key['judul']); ?>"
                                        data-gambar="<?= $key['gambar']; ?>"
                                        data-deskripsi="<?= htmlspecialchars($key['deskripsi']); ?>"
                                        data-gambarurl="<?= base_url('uploads/' . $key['gambar']); ?>">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 shadow-sm" 
                                        onclick="hapusBerita(<?= $key['id']; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
>>>>>>> Stashed changes
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
<<<<<<< Updated upstream
            <div class="pagination mt-2">
=======

            <div class="d-flex justify-content-center mt-4 w-100">
>>>>>>> Stashed changes
                <?=$pagination ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
    var quill = new Quill('#deskripsiQuilli', {theme: 'snow'});
    var modalForm = document.querySelector('#tambahBeritaModal form');
    modalForm.onsubmit = function () {
        document.getElementById('deskripsiBerita').value = quill.root.innerHTML;
        return true;
    };

    var editQuill = new Quill('#editEditor', {theme: 'snow'});
    var editModalForm = document.querySelector('#editForm');
    editModalForm.addEventListener('submit', function () {
        document.getElementById('editDeskripsiBerita').value = editQuill.root.innerHTML;
        return true; 
    });

    // SISTEM BARU: Menangkap Event Modal Bootstrap (Anti Gagal)
    $('#editBeritaModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        
        // Ambil data dari atribut data-* tombol
        var id = button.data('id');
        var judul = button.data('judul');
        var gambar = button.data('gambar');
        var deskripsi = button.data('deskripsi');
        var gambarUrl = button.data('gambarurl');

        var modal = $(this);
        
        // Isi form modal dengan data
        modal.find('#editBeritaId').val(id);
        modal.find('#editJudulBerita').val(judul);
        modal.find('#editGambarBeritaExisting').val(gambar);
        modal.find('#editGambarPreview').attr('src', gambarUrl);
        
        // Set HTML Quill editor
        editQuill.root.innerHTML = deskripsi;
    });

    function previewTambahGambar(input) {
        var preview = document.getElementById('tambahGambarPreview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }

    function previewEditGambar(input) {
        var preview = document.getElementById('editGambarPreview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function hapusBerita(id) {
        Swal.fire({
            title: 'Hapus Berita Ini?',
            text: "Berita yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#009d63',
            confirmButtonText: '<i class="fas fa-trash me-1"></i> Ya, Hapus!',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= site_url('dashboard/deleteb?id='); ?>" + id;
            }
        });
    }
</script>