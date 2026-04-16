<<<<<<< Updated upstream
<body>
    <!-- Nasabah -->
    <div id="nasabah-table-container" class="containered pt-3">
        <div class="row mx-2">

                <!-- Modal Tambah Nasabah -->
                <div
                    class="modal fade"
                    id="tambahNasabahModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Nasabah</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="<?= base_url('dashboard/tambahnasabah') ?>"
                                    method="post"
                                    enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="username"
                                            name="username"
                                            placeholder="Masukkan Username Nasabah"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="password"
                                            name="password"
                                            placeholder="Masukkan Password Nasabah"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notelp" class="form-label">Nomor HP</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="notelp"
                                            name="notelp"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Nasabah</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="saldo" class="form-label">Saldo Nasabah</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="saldo"
                                            name="saldo"
                                            value="0"
                                            required>
                                    </div>
                                    <div class="">
                                        <h4>Data Pelengkap</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap Nasabah</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nama_lengkap"
                                            name="nama_lengkap"
                                            placeholder="Masukkan Nama Lengkap Nasabah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">tempat_lahir</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="tempat_lahir"
                                            name="tempat_lahir"
                                            placeholder="Masukkan tempat_lahir Nasabah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">tanggal Lahir</label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tanggal_lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="alamat"
                                            name="alamat">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
=======
<div id="nasabah-table-container" class="container-fluid pt-3">
        <div class="row">
            
            <div class="modal fade" id="tambahNasabahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content shadow">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Nasabah</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('dashboard/tambahnasabah') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="username" class="form-label text-muted">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-muted">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="notelp" class="form-label text-muted">Nomor HP</label>
                                    <input type="number" class="form-control" id="notelp" name="notelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label text-muted">Email Nasabah</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <hr>
                                <h5 class="fw-bold mb-3">Data Pelengkap</h5>
                                
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label text-muted">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label text-muted">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label text-muted">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill">Simpan Data</button>
                                </div>
                            </form>
>>>>>>> Stashed changes
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< Updated upstream
                <!-- Modal Edit Nasabah -->
                <div
                    class="modal fade"
                    id="editNasabahModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Nasabah</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="<?= base_url('dashboard/updatenasabah') ?>"
                                    method="post"
                                    enctype="multipart/form-data">
                                    <!-- Hidden id input -->
                                        <input
                                            type="hidden"
                                            class="form-control"
                                            id="id"
                                            name="id_user"
                                            value=""
                                            required>
                              
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="editusername"
                                            name="username"
                                            readonly
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notelp" class="form-label">Nomor HP</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="editnotelp"
                                            name="notelp"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Nasabah</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="editemail"
                                            name="email"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="saldo" class="form-label">Saldo Nasabah</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="editsaldo"
                                            name="saldo"
                                            value=""
                                            required>
                                    </div>
                                    <div class="">
                                        <h4>Data Pelengkap</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap Nasabah</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="editnama_lengkap"
                                            name="nama_lengkap"
                                            placeholder="Masukkan Nama Lengkap Nasabah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">tempat_lahir</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="edittempat_lahir"
                                            name="tempat_lahir"
                                            placeholder="Masukkan tempat_lahir Nasabah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">tanggal Lahir</label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="edittanggal_lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="editalamat"
                                            name="alamat">
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
=======
            <div class="modal fade" id="importNasabahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content shadow">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Import Excel Nasabah</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('dashboard/importnasabah') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label for="excel_nasabah" class="form-label text-muted">Pilih File Excel (.xlsx)</label>
                                    <input type="file" class="form-control" id="excel_nasabah" name="excel_nasabah" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-warning text-white rounded-pill">Import Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
>>>>>>> Stashed changes
                
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                    <h3 class="fs-4 fw-bold mb-3 mb-md-0"><i class="fas fa-users me-2 text-primary"></i> Data Nasabah</h3>
                    
                    <div class="d-flex gap-2 flex-wrap">
                        <button type="button" class="btn btn-success rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahNasabahModal">
                            <i class="fas fa-plus me-1"></i> Tambah Nasabah
                        </button>
                        <a href="<?=base_url()?>uploads/excel/template_banksampah.xlsx" class="btn btn-outline-primary rounded-pill px-3 shadow-sm">
                            <i class="fas fa-download me-1"></i> Template
                        </a>
                        <button type="button" class="btn btn-warning text-white rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#importNasabahModal">
                            <i class="fas fa-file-import me-1"></i> Import
                        </button>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-5">
                        <form action="<?=base_url()?>dashboard/loadNasabah" method="post">
                            <div class="search-modern shadow-sm">
                                <input type="text" placeholder="Cari username atau email..." id="keyword" name="keyword" value="<?= isset($_SESSION['keyword_nasabah']) ? $_SESSION['keyword_nasabah'] : '' ?>">
                                <button type="submit" id="submit" name="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
<<<<<<< Updated upstream
                    <div class="col-lg-4">
                        <button
                            type="button"
                            class="btn btn-success mb-3 ms-0"
                            data-bs-toggle="modal"
                            data-bs-target="#tambahNasabahModal">
                            Tambah Nasabah
                        </button>
                        <a
                            href="<?=base_url()?>uploads/excel/template_nasabah_banksampah.xlsx"
                            class="btn btn-primary mb-3 ms-0"
                            >
                            Download Excel
                        </a>
                        <button
                            type="button"
                            class="btn btn-warning mb-3 ms-0"
                            data-bs-toggle="modal"
                            data-bs-target="#importNasabahModal">
                            Import Excel
=======
                </div>

                <div class="table-wrapper">
                    <table class="table table-modern align-middle w-100">
                        <thead>
                            <tr>
                                <th>Profil Nasabah</th>
                                <th>Kontak & Email</th>
                                <th>Tanggal Lahir</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user->result_array() as $key) { 
                                if ($key['role'] === 'admin') {
                                    continue;
                                }

                                // Mencegah tanggal 0000-00-00 berubah menjadi tahun -0001
                                if (!empty($key['tanggal_lahir']) && $key['tanggal_lahir'] !== '0000-00-00') {
                                    $tanggal_lahir_format = date('d M Y', strtotime($key['tanggal_lahir']));
                                } else {
                                    $tanggal_lahir_format = 'Belum diatur';
                                }

                                // Handle Nama Lengkap (Mencegah Error urlencode null)
                                $nama_lengkap_aman = !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : 'Nasabah';

                                // Handle Foto Profil
                                $foto_profil = !empty($key['profile']) 
                                    ? base_url('uploads/profile/'.$key['profile']) 
                                    : 'https://ui-avatars.com/api/?name='.urlencode($nama_lengkap_aman).'&background=009d63&color=fff&rounded=true';
                            ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="<?= $foto_profil ?>" alt="Profile" class="rounded-circle shadow-sm" width="45" height="45" style="object-fit: cover;">
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark"><?php echo !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : '<em class="text-muted fw-normal">Belum diatur</em>' ?></div>
                                            <small class="text-muted">@<?php echo $key['username'] ?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-dark"><i class="fas fa-envelope text-muted me-1"></i> <?php echo $key['email'] ?></div>
                                    <small class="text-muted"><i class="fas fa-phone text-muted me-1"></i> <?php echo !empty($key['notelp']) ? $key['notelp'] : '-' ?></small>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">
                                        <?php echo $tanggal_lahir_format ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-3 shadow-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        data-profile="<?= $foto_profil ?>"
                                        data-nama="<?php echo !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : 'Belum diatur' ?>"
                                        data-tempat-lahir="<?php echo !empty($key['tempat_lahir']) ? $key['tempat_lahir'] : '-' ?>"
                                        data-tanggal-lahir="<?php echo $tanggal_lahir_format ?>"
                                        data-alamat="<?php echo !empty($key['alamat']) ? $key['alamat'] : '-' ?>"
                                        data-email="<?php echo $key['email'] ?>"
                                        data-telepon="<?php echo !empty($key['notelp']) ? $key['notelp'] : '-' ?>">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="mobile-cards">
                    <?php foreach ($user->result_array() as $key) { 
                        if ($key['role'] === 'admin') continue;

                        $tanggal_lahir_format = (!empty($key['tanggal_lahir']) && $key['tanggal_lahir'] !== '0000-00-00') ? date('d M Y', strtotime($key['tanggal_lahir'])) : 'Belum diatur';
                        $nama_lengkap_aman = !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : 'Nasabah';
                        $foto_profil = !empty($key['profile']) ? base_url('uploads/profile/'.$key['profile']) : 'https://ui-avatars.com/api/?name='.urlencode($nama_lengkap_aman).'&background=009d63&color=fff&rounded=true';
                    ?>
                    <div class="nasabah-card">
                        <div class="card-header-info">
                            <img src="<?= $foto_profil ?>" alt="Profile">
                            <div>
                                <h5 class="fw-bold mb-0 text-dark"><?= !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : '<em class="text-muted fs-6">Belum diatur</em>' ?></h5>
                                <small class="text-muted">@<?= $key['username'] ?></small>
                            </div>
                        </div>
                        <div class="card-body-info">
                            <div class="info-row">
                                <i class="fas fa-envelope"></i>
                                <span><?= $key['email'] ?></span>
                            </div>
                            <div class="info-row">
                                <i class="fas fa-phone"></i>
                                <span><?= !empty($key['notelp']) ? $key['notelp'] : '-' ?></span>
                            </div>
                            <div class="info-row">
                                <i class="fas fa-calendar-alt"></i>
                                <span><?= $tanggal_lahir_format ?></span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-primary action-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            data-profile="<?= $foto_profil ?>"
                            data-nama="<?= !empty($key['nama_lengkap']) ? $key['nama_lengkap'] : 'Belum diatur' ?>"
                            data-tempat-lahir="<?= !empty($key['tempat_lahir']) ? $key['tempat_lahir'] : '-' ?>"
                            data-tanggal-lahir="<?= $tanggal_lahir_format ?>"
                            data-alamat="<?= !empty($key['alamat']) ? $key['alamat'] : '-' ?>"
                            data-email="<?= $key['email'] ?>"
                            data-telepon="<?= !empty($key['notelp']) ? $key['notelp'] : '-' ?>">
                            <i class="fas fa-eye me-1"></i> Lihat Detail Nasabah
>>>>>>> Stashed changes
                        </button>
                    </div>
                    <?php } ?>
                </div>
<<<<<<< Updated upstream
            </div>
            <div class="row mx-3">
                <div class="table-responsive ">
                    <table class="table bg-light rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">username</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Email</th>
                                <th scope="col">Saldo></th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user->result_array() as $key) { 
                                if ($key['role'] === 'admin') {
                                    continue;
                                }
                            ?>
                            <tr>
                                <td><?php echo $key['username'] ?></td>
                                <td><?php echo $key['nama_lengkap'] ?></td>
                                <td><?php echo $key['tanggal_lahir'] ?></td>
                                <td><?php echo $key['email'] ?></td>
                                <td><?php echo $key['saldo'] ?></td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        data-profile="<?php echo $key['profile'] ?>"
                                        data-nama="<?php echo $key['nama_lengkap'] ?>"
                                        data-tempat-lahir="<?php echo $key['tempat_lahir'] ?>"
                                        data-tanggal-lahir="<?php echo $key['tanggal_lahir'] ?>"
                                        data-alamat="<?php echo $key['alamat'] ?>"
                                        data-email="<?php echo $key['email'] ?>"
                                        data-telepon="<?php echo $key['notelp'] ?>">
                                        Detail
                                    </button>
                                    <button
                                        class="btn btn-success"
                                        onclick="editNasabahModal('<?php echo $key['id_user']; ?>','<?php echo $key['username']; ?>', '<?php echo $key['nama_lengkap']; ?>' , '<?php echo $key['notelp']; ?>', '<?php echo $key['email']; ?>', '<?php echo $key['saldo']; ?>', '<?php echo $key['tempat_lahir']; ?>', '<?php echo $key['tanggal_lahir']; ?>', '<?php echo $key['alamat']; ?>')">Edit</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <!-- Paginate -->
                <div style="margin-top: 10px;" id="pagination" class="">
                    <?=$pagination ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Details</h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img
                        id="modal-profile-img"
                        src=""
                        alt="Profile Image"
                        class="img-fluid rounded-circle mx-auto d-block">
                    <p id="modal-nama"></p>
                    <p id="modal-tempat-lahir"></p>
                    <p id="modal-tanggal-lahir"></p>
                    <p id="modal-alamat"></p>
                    <p id="modal-email"></p>
                    <p id="modal-telepon"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
=======
                <div class="d-flex justify-content-center mt-4 w-100">
                    <?=$pagination ?>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow border-0">
                <div class="modal-header text-center d-block position-relative pb-0 border-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img id="modal-profile-img" src="" alt="Profile Image" class="img-fluid rounded-circle shadow mt-3 mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #fff;">
                    <h5 class="modal-title fw-bold fs-4" id="modal-nama"></h5>
                    <p class="text-muted mb-0" id="modal-email"></p>
                </div>
                <div class="modal-body px-4 pt-4 pb-4">
                    <div class="card border-0 bg-light rounded-3 p-3">
                        <div class="row mb-2">
                            <div class="col-5 text-muted fw-semibold">Tempat Lahir</div>
                            <div class="col-7 text-dark text-end" id="modal-tempat-lahir"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 text-muted fw-semibold">Tanggal Lahir</div>
                            <div class="col-7 text-dark text-end" id="modal-tanggal-lahir"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 text-muted fw-semibold">No. Telepon</div>
                            <div class="col-7 text-dark text-end" id="modal-telepon"></div>
                        </div>
                        <div class="row mt-3 border-top pt-3">
                            <div class="col-12 text-muted fw-semibold mb-1">Alamat Lengkap</div>
                            <div class="col-12 text-dark" id="modal-alamat"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);
            
            // Mengambil URL foto lengkap dari data-profile
            var profileImageSrc = button.data('profile');

            modal.find('#modal-profile-img').attr('src', profileImageSrc);
            modal.find('#modal-nama').text(button.data('nama'));
            modal.find('#modal-email').text(button.data('email'));
            modal.find('#modal-tempat-lahir').text(button.data('tempat-lahir'));
            modal.find('#modal-tanggal-lahir').text(button.data('tanggal-lahir'));
            modal.find('#modal-telepon').text(button.data('telepon'));
            modal.find('#modal-alamat').text(button.data('alamat'));
        });
<<<<<<< Updated upstream


        function editNasabahModal(id, username, nama_lengkap, notelp, email, saldo, tempat_lahir, tanggal_lahir, alamat) {
        document
            .getElementById('id')
            .value = id;
        document
            .getElementById('editusername')
            .value = username;
        document
            .getElementById('editnama_lengkap')
            .value = nama_lengkap;
        document
            .getElementById('editemail')
            .value = email;
        document
            .getElementById('editnotelp')
            .value = notelp;
        document
            .getElementById('editsaldo')
            .value = saldo;
        document
            .getElementById('edittempat_lahir')
            .value = tempat_lahir;
        document
            .getElementById('edittanggal_lahir')
            .value = tanggal_lahir;
        document
            .getElementById('editalamat')
            .value = alamat;
        $('#editNasabahModal').modal('show');
    }
    </script>
</body>
</html>
=======
    </script>
>>>>>>> Stashed changes
