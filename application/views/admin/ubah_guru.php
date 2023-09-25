<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Guru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            background-color: #f0f8ff;
            /* Light blue background */
        }

        #sidebar {
            background-color: #3399ff;
            /* Light blue sidebar */
            color: #fff;
            height: 100%;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            transition: 0.3s;
            padding-top: 20px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #sidebar a:hover {
            background-color: #3366ff;
            /* Darker blue on hover */
        }

        #content {
            flex: 1;
            margin-left: 250px;
            transition: 0.3s;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php $this->load->view('components/sidebar') ?>

    <div id="content">
        <div class="card mb-4 shadow">
            <div class="card-body">
                <h5 class="card-title">Edit Data Guru</h5>
                <?php foreach ($guru as $data_guru) : ?>
                    <form action="<?php echo base_url('admin/aksi_ubah_guru') ?>" enctype="multipart/form-data" method="POST">
                        <input name="id_guru" type="hidden" value="<?php echo $data_guru->id_guru ?>">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Guru</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Guru" value="<?php echo $data_guru->nama_guru ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="<?php echo $data_guru->nik ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option selected value="<?php echo $data_guru->gender ?>">
                                            <?php echo $data_guru->gender ?>
                                        </option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <label for="id_mapel">Mapel</label>
                                <select class="form-control" id="id_mapel" name="id_mapel" required>
                                    <option selected value="<?php $data_guru->id_mapel ?>">
                                        <?php echo tampil_full_mapel_byid($data_guru->id_mapel) ?>
                                    </option>
                                    <?php foreach ($mapel as $row) : ?>
                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->nama_mapel ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>

</html>