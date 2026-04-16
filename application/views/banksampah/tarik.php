<style>
    .form-control[readonly] {
        background-color: #f8f9fa;
        opacity: 1;
    }
    .user-highlight {
        background-color: #e8f5e9 !important;
        border-color: #c8e6c9 !important;
        color: #1b5e20 !important;
        font-weight: 600;
    }
    /* Menghilangkan border biru saat input di-klik */
    #search_text:focus {
        box-shadow: none !important;
    }
</style>

<div id="tarik-table-container" class="container-fluid pt-3">
    <div class="row">
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <h3 class="fs-4 fw-bold mb-4 border-bottom pb-3"><i class="fas fa-hand-holding-usd me-2 text-danger"></i> Tarik Saldo</h3>
            
            <div class="row mb-4">
                <div class="col-md-6 position-relative">
                    <label class="form-label fw-semibold text-muted">Cari Nasabah</label>
                    
                    <div class="d-flex align-items-center bg-white border shadow-sm px-3 py-1" style="border-radius: 50px; transition: all 0.3s;" id="search-wrapper">
                        <i class="fas fa-search text-muted me-2"></i>
                        <input type="text" name="search_text" id="search_text" placeholder="Masukkan username atau nama..." class="form-control border-0 shadow-none bg-transparent" />
                    </div>
                    
                    <div class="result mt-2 position-absolute bg-white shadow rounded-3 w-100" style="max-width: 95%; z-index: 1000; overflow: hidden;" id="result"></div>
                </div>
            </div>

            <form action="<?= base_url() ?>tarik/tarikTabungan" method="post" id="add_form" class="bg-light p-4 rounded-3 border">
                
                <h5 class="fw-bold mb-3 text-dark"><i class="fas fa-user-circle me-2 text-secondary"></i>Data Nasabah</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label for="id_tabungan" class="form-label text-muted small">ID Tabungan</label>
                        <input type="text" name="id_tabungan" id="id_tabungan" class="form-control" readonly required placeholder="Pilih nasabah dulu">
                    </div>
                    <div class="col-md-5">
                        <label for="username" class="form-label text-muted small">Username</label>
                        <input type="text" name="username" id="username" class="form-control" readonly required placeholder="-">
                    </div>
                    <div class="col-md-4">
                        <label for="saldo" class="form-label text-muted small">Total Saldo Saat Ini</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white">Rp</span>
                            <input type="text" name="saldo" id="saldo" class="form-control fw-bold text-success" readonly required placeholder="0">
                        </div>
                    </div>
                </div>

                <hr class="text-muted">

                <h5 class="fw-bold mb-3 text-dark mt-3"><i class="fas fa-money-bill-wave me-2 text-danger"></i>Nominal Penarikan</h5>
                <div class="row g-3 align-items-end">
                    <div class="col-md-6">
                        <label for="tariksaldo" class="form-label text-muted small">Jumlah Tarik</label>
                        <div class="input-group shadow-sm">
                            <span class="input-group-text bg-white text-danger fw-bold">Rp</span>
                            <input type="number" name="tariksaldo" id="tariksaldo" class="form-control fs-5 fw-bold" required placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end mt-3 mt-md-0">
                        <button type="submit" name="submit" class="btn btn-danger rounded-pill px-4 py-2 shadow-sm fw-bold">
                            <i class="fas fa-check-circle me-1"></i> Proses Penarikan
                        </button>
                    </div>
                </div>
                
                <div class="keterangan mt-3" id="keterangan"></div>
            </form>
            
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $('document').ready(function(){
        
        // Efek fokus pada search bar
        $('#search_text').focus(function() {
            $('#search-wrapper').css({'border-color': '#009d63', 'box-shadow': '0 0 0 3px rgba(0, 157, 99, 0.1)'});
        }).blur(function() {
            $('#search-wrapper').css({'border-color': '#dee2e6', 'box-shadow': '0 .125rem .25rem rgba(0,0,0,.075)'});
        });

        // Search user function
        $('#search_text').on('keyup', function(){
            var query = $(this).val();
            if(query !== '') {
                $.ajax({
                    url     : '<?= base_url('tarik/cariUser')?>',
                    type    : 'POST',
                    data    : { cari : query },
                    success : function(data){
                        if (data.error) {
                            console.error('Error:', data.error);
                        } else {
                            $('#result').html(data);
                        }
                    }
                });
            } else {
                $('#result').html('');
            }
        });

        // Validasi Saldo Live
        $('#tariksaldo').on('keyup', function(){
            $('#keterangan').html('');
            var saldo = document.getElementById('saldo').value;
            $.ajax({
                url     : '<?= base_url('tarik/cekSaldo')?>',
                type    : 'POST',
                data    : {
                    cari : $(this).val(),
                    saldo : saldo
                },
                success : function(data){
                    if (data.error) {
                        console.error('Error:', data.error);
                    } else {
                        $('#keterangan').html(data);
                    }
                }
            });
        });

        // Handle click event on the result items
        $('#result').on('click', '.result-item', function(){
            var idTabungan = $(this).data('tabungan-id');
            var username = $(this).data('username');
            var saldo = $(this).data('saldo');

            $('#id_tabungan').val(idTabungan).addClass('user-highlight');
            $('#username').val(username).addClass('user-highlight');
            $('#saldo').val(saldo).addClass('user-highlight');

            $('#result').html(''); // Clear result
            $('#search_text').val(''); // Clear search box
        });
    });
</script>