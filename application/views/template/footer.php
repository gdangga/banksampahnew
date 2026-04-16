</div>
            </div>
        </div>
            
        <script>
            // Fitur Confirm Logout dengan SweetAlert2
            function logoutModal() {
                Swal.fire({
                    title: 'Keluar Dashboard?',
                    text: "Sesi admin kamu akan diakhiri.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#009d63',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Logout!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo site_url('auth/logout'); ?>";
                    }
                })
            }
            
            // Fungsi untuk menampilkan/menyembunyikan sidebar
            function toggleSidebar() {
                var el = document.getElementById("wrapper");
                el.classList.toggle("toggled");
                // Simpan status sidebar ke localStorage
                localStorage.setItem("sidebarToggled", el.classList.contains("toggled"));
            }

            // Menerapkan toggle saat menu diklik
            document.getElementById("menu-toggle").onclick = function () {
                toggleSidebar();
            };

            // Menjaga state sidebar dari localStorage saat reload
            window.onload = function() {
                var isToggled = localStorage.getItem("sidebarToggled");
                var el = document.getElementById("wrapper");
                if (isToggled === "true") {
                    el.classList.add("toggled");
                }
<<<<<<< Updated upstream

                function tampilkanFormEditBerita() {
                    var formTambahBerita = document.getElementById("form-edit-berita");
                    formTambahBerita.style.display = "block";
                }

                function tambahBerita() {
                        try {
                            var judulBerita = document.getElementById("judulBerita").value;
                            var gambarBerita = document.getElementById("gambarBerita").value;
                            var deskripsiBerita = document.getElementById("deskripsiBerita").value;

                            // Lakukan sesuatu dengan data berita, misalnya simpan ke database

                            var formTambahBerita = document.getElementById("form-tambah-berita");
                            formTambahBerita.style.display = "none";
                        } catch (error) {
                            console.error("Terjadi kesalahan:", error);
                        }
                }
                
                */

                function logoutModal() {
                    $('#logoutModal').modal('show');
                    console.log('confirm : ');
                    // Set the 'id' data to the confirm button
                };

                // Function to handle the confirmed deletion
                function logout() {
                    console.log('action :');
                    // Call your controller method to delete the item
                    window.location.href = "<?php echo site_url('auth/logout'); ?>"
                };
                
                // Fungsi untuk menampilkan/menyembunyikan sidebar
                function toggleSidebar() {
                    var wrapper = document.getElementById("wrapper");
                    wrapper.classList.toggle("toggled");
                }

          
=======
            }
>>>>>>> Stashed changes
        </script>

    </body>
</html>