<<<<<<< Updated upstream
<body>
    <!-- Transaksi -->
    <div id="transaksi-table-container" class="containered px-3">
        <div class="row my-2">
            <h3 class="fs-4 mb-2 mt-4">Transaksi</h3>
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table bg-light rounded shadow-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Admin</th>
                                        <th scope="col">Setor</th>
                                        <th scope="col">Tarik</th>
                                        <th scope="col">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($transaksi->result_array() as $key) { ?>
                                    <tr>
                                        <td><?php echo $key['tgl_tabungan_transaksi'] ?></td>
                                        <td><?php echo $key['nasabah_username'] ?></td>
                                        <td><?php echo $key['staff_username'] ?></td>
                                        <td><?php echo $key['debit'] ?></td>
                                        <td><?php echo $key['kredit'] ?></td>
                                        <td>
                                            <a href="<?=base_url()?>riwayat/invoice?id=<?=$key['id_tabungan_transaksi']?>" class="btn btn-primary">Invoice</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <?=$pagination ?>
                        </div>
                    </div>
                </div>
=======
<div id="transaksi-table-container" class="container-fluid pt-3">
    
    <style>
        .transaksi-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
            margin-bottom: 15px;
            transition: transform 0.2s;
        }
        .transaksi-card:active {
            transform: scale(0.98);
        }
        .transaksi-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }
        .transaksi-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            font-size: 14px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .info-label {
            color: #6c757d;
            font-weight: 500;
        }
        .info-value {
            font-weight: 600;
            color: #333;
        }
    </style>

    <div class="row">
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <h3 class="fs-4 fw-bold mb-3 mb-md-0"><i class="fas fa-exchange-alt me-2 text-primary"></i> Data Transaksi</h3>
>>>>>>> Stashed changes
            </div>

            <div class="mobile-cards">
                <?php foreach ($transaksi->result_array() as $key) { 
                    // Format Data
                    $tanggal = date('d M Y, H:i', strtotime($key['tgl_tabungan_transaksi']));
                    $debit = $key['debit'];
                    $kredit = $key['kredit'];
                ?>
                <div class="transaksi-card">
                    <div class="transaksi-header">
                        <span class="badge bg-light text-dark border"><i class="far fa-clock me-1"></i> <?= $tanggal ?></span>
                        <?php if($debit > 0): ?>
                            <span class="badge bg-success rounded-pill px-3 py-2">SETOR</span>
                        <?php elseif($kredit > 0): ?>
                            <span class="badge bg-danger rounded-pill px-3 py-2">TARIK</span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="transaksi-info mb-4">
                        <div class="info-row">
                            <span class="info-label"><i class="fas fa-user me-2 text-primary"></i>Nasabah</span>
                            <span class="info-value">@<?= $key['nasabah_username'] ?></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fas fa-user-tie me-2 text-warning"></i>Admin</span>
                            <span class="info-value">@<?= $key['staff_username'] ?></span>
                        </div>
                        <?php if($debit > 0): ?>
                        <div class="info-row">
                            <span class="info-label"><i class="fas fa-arrow-down me-2 text-success"></i>Nominal Setor</span>
                            <span class="info-value text-success fw-bold">Rp <?= number_format($debit, 0, ',', '.') ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if($kredit > 0): ?>
                        <div class="info-row">
                            <span class="info-label"><i class="fas fa-arrow-up me-2 text-danger"></i>Nominal Tarik</span>
                            <span class="info-value text-danger fw-bold">Rp <?= number_format($kredit, 0, ',', '.') ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <a href="<?=base_url()?>riwayat/invoice?id=<?=$key['id_tabungan_transaksi']?>" class="btn btn-outline-primary w-100 rounded-pill shadow-sm">
                        <i class="fas fa-receipt me-1"></i> Lihat Invoice
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="table-wrapper">
                <table class="table table-modern align-middle w-100">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Nasabah</th>
                            <th scope="col">Admin</th>
                            <th scope="col" class="text-end">Setor</th>
                            <th scope="col" class="text-end">Tarik</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi->result_array() as $key) { 
                            $tanggal = date('d M Y, H:i', strtotime($key['tgl_tabungan_transaksi']));
                        ?>
                        <tr>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1"><i class="far fa-clock text-muted me-1"></i> <?= $tanggal ?></span>
                            </td>
                            <td class="fw-bold text-primary">@<?= $key['nasabah_username'] ?></td>
                            <td class="text-muted">@<?= $key['staff_username'] ?></td>
                            
                            <td class="text-end fw-bold text-success">
                                <?= $key['debit'] > 0 ? '+ Rp ' . number_format($key['debit'], 0, ',', '.') : '-' ?>
                            </td>
                            
                            <td class="text-end fw-bold text-danger">
                                <?= $key['kredit'] > 0 ? '- Rp ' . number_format($key['kredit'], 0, ',', '.') : '-' ?>
                            </td>
                            
                            <td class="text-center">
                                <a href="<?=base_url()?>riwayat/invoice?id=<?=$key['id_tabungan_transaksi']?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 shadow-sm">
                                    <i class="fas fa-receipt me-1"></i> Invoice
                                </a>
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