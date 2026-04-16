<div id="laporan-container" class="container-fluid pt-3 pb-5">
    <div class="row">
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <div class="mb-4 border-bottom pb-3">
                <h3 class="fs-4 fw-bold mb-1"><i class="fas fa-file-pdf me-2 text-danger"></i> Cetak Laporan Transaksi</h3>
                <p class="text-muted small mb-0">Tentukan rentang tanggal untuk mengunduh rekapitulasi data transaksi dalam format PDF.</p>
            </div>
            
            <form method="post" action="<?= base_url('generatepdf/pdftransaksi'); ?>" target="_blank" class="bg-light p-4 rounded-3 border mb-5">
                <div class="row g-3 align-items-end">
                    
                    <div class="col-md-5">
                        <label for="date_from" class="form-label fw-semibold text-muted small mb-2">Mulai dari Tanggal</label>
                        <div class="input-group shadow-sm" style="border-radius: 10px; overflow: hidden;">
                            <span class="input-group-text bg-white border-end-0"><i class="far fa-calendar-alt text-muted"></i></span>
                            <input type="date" class="form-control border-start-0" id="date_from" name="date_from" required style="box-shadow: none;">
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <label for="date_to" class="form-label fw-semibold text-muted small mb-2">Sampai Tanggal</label>
                        <div class="input-group shadow-sm" style="border-radius: 10px; overflow: hidden;">
                            <span class="input-group-text bg-white border-end-0"><i class="far fa-calendar-alt text-muted"></i></span>
                            <input type="date" class="form-control border-start-0" id="date_to" name="date_to" required style="box-shadow: none;">
                        </div>
                    </div>
                    
                    <div class="col-md-2 mt-4 mt-md-0">
                        <button type="submit" class="btn btn-danger w-100 shadow-sm fw-bold" style="border-radius: 10px; padding: 10px 0;">
                            <i class="fas fa-print me-1"></i> Cetak PDF
                        </button>
                    </div>
                    
                </div>
            </form>

            <div class="table-wrapper">
                <table class="table table-modern align-middle w-100" id="previewTable">
                    </table>
            </div>

        </div>
    </div>
</div>

<script>
    // Sedikit sentuhan UX: memastikan tanggal 'Sampai' tidak bisa lebih kecil dari tanggal 'Mulai'
    document.addEventListener("DOMContentLoaded", function() {
        const dateFrom = document.getElementById('date_from');
        const dateTo = document.getElementById('date_to');

        dateFrom.addEventListener('change', function() {
            dateTo.min = this.value; // Set atribut 'min' pada date_to sesuai pilihan date_from
        });
    });
</script>