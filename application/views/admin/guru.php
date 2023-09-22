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

</style>

<body>
    <?php $this->load->view('components/navbar') ?>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php $this->load->view('components/sidebar') ?>
            </div>
            <div class=" col-10">
                <div class="  mt-5">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    No
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Nama Guru
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    NIK
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Gender
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Mapel
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Aksi
                                </th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <div class="float-right mb-1">
                            <a href="<?php echo base_url('admin/tambah_guru'); ?>" type="submit" class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700">
                                            Tambah
                                        </a>
                            </div>
                            <?php $no = 0;
                            foreach ($guru as $row) : $no++ ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <?php echo $row->nama_guru ?>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nik ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"> <?php echo tampil_full_mapel_byid($row->id_mapel) ?> </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center">
                                        <a href="<?php echo base_url('admin/ubah_guru/') . $row->id ?>" class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">
                                            Ubah
                                        </a>
                                        <button onclick="hapus(<?php echo $row->id ?>)" class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                            Hapus
                                        </button>
                                       
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin Di Hapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_guru/') ?>" + id;
            }
        }
    </script>
</body>

</html>