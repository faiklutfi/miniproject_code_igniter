<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<style>
    .card {
        background-color: #20B2AA;
        border: 1px solid #ccc;
        transition: margin-left 0.5s;
    }


    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .login-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008B8B;
        color: #fff;

        text-decoration: none;
        text-align: center;
        font-size: 10px;
        border: none;

        width: 100px;
    }

    .navbar {
        background-color: #333;
        color: #fff;
        padding: 10px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    /* CSS Untuk Side Navbar (Samping) */
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 2;
        top: 0;
        left: 0;
        background-color: #333;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 5px 10px;
        text-decoration: none;
        font-size: 18px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        background-color: #555;
    }

    /* CSS Untuk Konten */
    .content {
        margin-left: 0;
        padding: 20px;
        transition: margin-left 0.5s;
    }

    /* CSS Umum */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Tombol untuk membuka side navbar */
    .openbtn {
        background-color: #333;
        color: #fff;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        margin-left: 0;
        transition: margin-left 0.5s;
    }

    .openbtn:hover {
        background-color: #555;
    }

    .search-container {
        float: right;
    }

    .search-box {
        padding: 2px;
        border: none;
        border-radius: 5px;
    }

    .navbar h1 {
        margin: 0;
    }

    .table-container {
        margin-top: 80px;
        /* Membuat ruang antara navbar dan tabel */
        padding: 20px;
    }
</style>

<body>
    <?php $this->load->view('components/navbar') ?>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php $this->load->view('components/sidebar') ?>
            </div>
            <div class=" col-10">
                <form action="<?php echo base_url('admin/aksi_tambah_guru') ?>" enctype="multipart/form-data" method="post">
                    <div class="max-full rounded border overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <p class="text-xl font-bold text-center">Tambah guru</p>
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                                        Nama guru
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="nama" type="text" placeholder="Nama">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nik">
                                        NIK
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nik" name="nik" type="number" placeholder="nik">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                                        Gender
                                    </label>
                                    <select name="gender" id="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option selected>Pilih Gender</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mapel">
                                        mapel
                                    </label>
                                    <select name="id_mapel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option selected>Pilih mapel</option>
                                        <?php foreach ($mapel as $row) : ?>
                                            <option value="<?php echo $row->id ?>">
                                                <?php echo $row->nama_mapel ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-2/6">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>