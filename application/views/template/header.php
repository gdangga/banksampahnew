<!DOCTYPE html>
<html lang="en">

<<<<<<< Updated upstream
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
            <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>img/banjarangkan.png" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Admin Dashboard</title>
        </head>

        <style>
            :root {
            --main-bg-color: #009d63;     
            --main-text-color: #009d63;
            --second-text-color: #bbbec5;
            --second-bg-color: #c1efde;
            }
=======
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>img/logo white.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Dashboard</title>
</head>
>>>>>>> Stashed changes

<style>
    :root {
        --main-bg-color: #009d63;   
        --main-text-color: #009d63;
        --second-text-color: #bbbec5;
        --second-bg-color: #c1efde;
    }

    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden; /* Mencegah geser kanan-kiri pada halaman */
    }

    .containered {
        background-color: rgba(255, 255, 255, 0.9);
        width: 100%;
        border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .primary-text { color: var(--main-text-color); }
    .second-text { color: var(--second-text-color); }
    .primary-bg { background-color: var(--main-bg-color); }
    .secondary-bg { background-color: var(--second-bg-color); }
    .rounded-full { border-radius: 100%; }

    #wrapper {
        overflow-x: hidden;
        background-color: rgb(0,146,110);
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin 0.25s ease-out;
        -moz-transition: margin 0.25s ease-out;
        -o-transition: margin 0.25s ease-out;
        transition: margin 0.25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group { width: 15rem; }
    #page-content-wrapper { min-width: 100vw; } 
    #wrapper.toggled #sidebar-wrapper { margin-left: 0; }
    #menu-toggle { cursor: pointer; color: black; }

    .list-group-item {
        border: none;
        padding: 20px 30px;
    }

    .list-group-item.active {
        background-color: transparent;
        color: var(--main-text-color);
        font-weight: bold;
        border: none;
    }

    /* Gaya Tabel Modern */
    .table-modern {
        border-collapse: separate;
        border-spacing: 0 10px;
        margin-bottom: 0;
    }
    .table-modern tbody tr {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: transform 0.2s;
        border-radius: 8px;
    }
    .table-modern tbody tr:hover {
        transform: translateY(-2px);
        background-color: #f8f9fa;
    }
    .table-modern td, .table-modern th {
        vertical-align: middle;
        padding: 15px;
        border: none;
    }
    .table-modern thead th {
        background-color: transparent;
        color: #6c757d;
        font-weight: 500;
        border-bottom: 2px solid #eee;
    }

    /* Modifikasi Pembungkus Tabel Agar Tidak Muncul Scrollbar Kosong */
    .table-wrapper {
        overflow-x: auto;
        padding-bottom: 10px;
    }
    .table-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    .table-wrapper::-webkit-scrollbar-thumb {
        background-color: #d1d5db;
        border-radius: 4px;
    }

    /* CUSTOM PAGINASI MODERN BOOTSTRAP 5 */
    .custom-pagination .page-item .page-link {
        color: #6c757d;
        min-width: 42px;
        height: 42px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    
    /* Warna Hijau untuk yang Aktif */
    .custom-pagination .page-item.active .page-link {
        background-color: var(--main-bg-color) !important;
        color: white !important;
        box-shadow: 0 4px 10px rgba(0, 157, 99, 0.3) !important;
        z-index: 1; /* Mencegah tertumpuk */
    }
    
    /* Efek saat disentuh kursor */
    .custom-pagination .page-item .page-link:hover {
        background-color: var(--second-bg-color) !important;
        color: var(--main-text-color) !important;
        transform: translateY(-2px);
    }

    /* CUSTOM SEARCH BAR MODERN */
    .search-modern {
        display: flex;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 50px; /* Bentuk pill */
        padding: 4px; /* Memberi jarak dalam agar tombol search terlihat estetik */
        transition: all 0.3s ease;
    }
    .search-modern:focus-within {
        border-color: var(--main-bg-color);
        box-shadow: 0 0 0 3px rgba(0, 157, 99, 0.1);
    }
    .search-modern input {
        border: none;
        background: transparent;
        box-shadow: none !important; /* Menghilangkan glow biru bawaan Bootstrap */
        padding-left: 15px;
        width: 100%;
    }
    .search-modern button {
        background-color: var(--main-bg-color);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 8px 20px;
        transition: all 0.2s;
    }
    .search-modern button:hover {
        background-color: #008152; /* Hijau lebih gelap saat di-hover */
    }

    /* Modal Styling */
    .modal-content {
        border: none;
        border-radius: 15px;
    }
    .modal-header {
        border-bottom: 1px solid #f2f2f2;
        background: #fcfcfc;
        border-radius: 15px 15px 0 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper { margin-left: 0; }
        #page-content-wrapper { min-width: 0; width: 100%; }
        #wrapper.toggled #sidebar-wrapper { margin-left: -15rem; }
        
<<<<<<< Updated upstream

            #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
            }

            #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            }

            #sidebar-wrapper .list-group {
            width: 15rem;
            
            }

            #page-content-wrapper {
            min-width: 100vw;
            } 

            #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
            }

            #menu-toggle {
            cursor: pointer;
            color: black;
            }

            .list-group-item {
            border: none;
            padding: 20px 30px;
            }

            .list-group-item.active {
            background-color: transparent;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
            }

            @media (min-width: 1100px) {
                #sidebar-wrapper {
                    margin-left: 0;
                }

                #page-content-wrapper {
                    min-width: 0;
                    width: 100%;
                }

                #wrapper.toggled #sidebar-wrapper {
                    margin-left: -15rem;
                    z-index: 1000;
                }

                .popup-container {
                    display: none;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: white;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                }

                .ql-editor {
                    background-color: white !important;
                    border: 1px solid #ccc; /* Optional: Add a border for better visibility */
                    min-height: 150px; /* Adjust the height as needed */
                }

                /* Add this style to set the background of the Quill toolbar to white */
                .ql-toolbar {
                    background-color: white !important;
                }

                /* Additional styling for better appearance */
                #editor {
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    margin-top: 8px;
                    margin-bottom: 16px;
                }
            }

        </style>

=======
        .ql-editor {
            background-color: white !important;
            border: 1px solid #ccc;
            min-height: 150px;
        }
        .ql-toolbar { background-color: white !important; }
        #editor {
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
        }
    }

    /* RESPONSIVE TABLE TO CARDS (MOBILE VIEW) */
    .mobile-cards {
        display: none; /* Sembunyikan by default (untuk desktop) */
    }

    @media (max-width: 767px) {
        /* Sembunyikan tabel asli di layar HP */
        .table-modern {
            display: none !important;
        }

        /* Tampilkan format card */
        .mobile-cards {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .nasabah-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
            position: relative;
            transition: transform 0.2s;
        }

        .nasabah-card:active {
            transform: scale(0.98);
        }

        .nasabah-card .card-header-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }

        .nasabah-card .card-header-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .nasabah-card .card-body-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            font-size: 14px;
        }

        .nasabah-card .info-row {
            display: flex;
            align-items: center;
            color: #555;
        }

        .nasabah-card .info-row i {
            width: 25px;
            color: var(--main-bg-color);
            text-align: center;
        }

        .nasabah-card .action-btn {
            width: 100%;
            margin-top: 15px;
            border-radius: 10px;
        }
    }
</style>

>>>>>>> Stashed changes
<body>