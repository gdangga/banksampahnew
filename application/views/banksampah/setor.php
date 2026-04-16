<style>
    .form-control[readonly], .form-select[readonly] {
        background-color: #f8f9fa;
        opacity: 1;
    }
    .user-highlight {
        background-color: #e8f5e9 !important;
        border-color: #c8e6c9 !important;
        color: #1b5e20 !important;
        font-weight: 600;
    }
    .item-row {
        background: #fdfdfd;
        padding: 15px;
        border-radius: 12px;
        border: 1px solid #e9ecef;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        transition: all 0.2s;
    }
    .item-row:hover {
        border-color: #009d63;
    }
    /* Menghilangkan border biru saat input di-klik */
    #search_text:focus {
        box-shadow: none !important;
    }
</style>

<div id="setor-table-container" class="container-fluid pt-3 pb-5">
    <div class="row">
        <div class="col-12 bg-white p-4 rounded-3 shadow-sm mx-auto" style="max-width: 98%;">
            
            <h3 class="fs-4 fw-bold mb-4 border-bottom pb-3"><i class="fas fa-box-open me-2 text-success"></i> Setor Sampah</h3>
            
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

            <form action="<?= base_url() ?>setorSampah/kalkulasi" method="post" id="add_form">
                
                <div class="bg-light p-3 rounded-3 border mb-4">
                    <h5 class="fw-bold mb-3 text-dark fs-6"><i class="fas fa-user-circle me-2 text-secondary"></i>Data Nasabah</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="userid" class="form-label text-muted small mb-1">ID Pengguna</label>
                            <input type="text" name="id_user" id="userid" class="form-control form-control-sm" readonly required placeholder="Pilih nasabah">
                        </div>
                        <div class="col-md-8">
                            <label for="username" class="form-label text-muted small mb-1">Username Nasabah</label>
                            <input type="text" name="username" id="username" class="form-control form-control-sm fw-bold" readonly required placeholder="-">
                        </div>
                    </div>
                </div>

                <h5 class="fw-bold mb-3 text-dark mt-4 border-bottom pb-2"><i class="fas fa-list me-2 text-primary"></i>Input Item Sampah</h5>
                
                <div id="show_item">
                    </div>
                
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button class="btn btn-outline-success rounded-pill px-4 shadow-sm add_btn" id="add_btn">
                        <i class="fas fa-plus me-1"></i> Tambah Baris Sampah
                    </button>
                    
                    <button type="submit" class="btn btn-primary rounded-pill px-5 shadow fw-bold">
                        <i class="fas fa-save me-1"></i> Simpan Setoran
                    </button>
                </div>

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

        // Fungsi Pencarian Live
        $('#search_text').on('keyup', function(){
            var query = $(this).val();
            if(query !== '') {
                $.ajax({
                    url     : '<?= base_url('setorSampah/setor')?>',
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

        // Pilih User dari Hasil Pencarian
        $('#result').on('click', '.result-item', function(){
            var userId = $(this).data('user-id');
            var username = $(this).data('username');

            $('#userid').val(userId).addClass('user-highlight');
            $('#username').val(username).addClass('user-highlight');

            $('#result').html('');
            $('#search_text').val('');
        });

        // Kosongkan berat dan harga jika jenis sampah diubah
        $(document).on('change', '.id_jenis_sampah', function(){
            $(this).closest('.item-row').find('.berat_sampah').val('');
            $(this).closest('.item-row').find('.harga_sampah').val('');
        });

        // Kalkulasi Harga Otomatis
        $(document).on('keyup', '.berat_sampah', function(){
            var beratSampah = $(this).val();
            var idSampah = $(this).closest('.item-row').find('.id_jenis_sampah').val();
            var hargaSampahInput = $(this).closest('.item-row').find('.harga_sampah');

            if(beratSampah !== ''){
                $.ajax({
                    url     : '<?= base_url('setorSampah/hitungHarga')?>',
                    type    : 'POST',
                    data    : {
                        berat : beratSampah,
                        id : idSampah
                    },
                    success: function(response) {
                        hargaSampahInput.val(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                hargaSampahInput.val('');
            }
        });

        // Tambah Baris Dinamis (Desain Baru)
        $("#add_btn").click(function(e){
            e.preventDefault();
            $("#show_item").append(`
                <div class="row align-items-end mb-3 item-row">
                    <div class="col-md-5 mb-2 mb-md-0">
                        <label class="form-label text-muted small mb-1">Pilih Jenis Sampah</label>
                        <select name="id_jenis_sampah[]" class="form-select border-0 shadow-sm id_jenis_sampah" required>
                            <option value="" selected disabled>-- Pilih Kategori --</option>
                            <?php foreach($option->result_array() as $key){ ?>
                                <option value="<?=$key['id']?>"><?=$key['jenis_sampah']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2 mb-md-0">
                        <label class="form-label text-muted small mb-1">Berat (Kg)</label>
                        <input type="number" name="berat_sampah[]" step="0.01" class="form-control border-0 shadow-sm berat_sampah" placeholder="0.00" required>
                    </div>
                    <div class="col-md-3 mb-2 mb-md-0 preview">
                        <label class="form-label text-muted small mb-1">Total Harga (Rp)</label>
                        <input type="number" name="harga_sampah[]" class="form-control border-0 shadow-sm harga_sampah fw-bold text-success bg-white" readonly placeholder="0">
                    </div>
                    <div class="col-md-1 text-end mt-2 mt-md-0">
                        <button class="btn btn-danger shadow-sm remove_btn rounded-circle" style="width: 40px; height: 40px;" title="Hapus Baris">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `);
        });

        // Hapus Baris
        $(document).on('click', '.remove_btn', function(e){
            e.preventDefault();
            let row_item = $(this).closest('.item-row');
            $(row_item).fadeOut(200, function() {
                $(this).remove(); 
            });
        });
        
        // Panggil klik sekali agar ada baris kosong pertama saat dibuka
        $("#add_btn").click();
    });
</script>