<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    
<body>
<?php $this->load->view('components/navbar')?>

<div class="container">
<div class=" row">
<div class="col-2">
            <?php $this->load->view('components/sidebar')?>
        </div>
    <div class=" col-10"> 
    <div class="  mt-5">      
                    <table class="table table-striped">
                    <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama siswa</th>
                                    <th scope="col">NISN </th>
                                    <th scope="col"> Gender </th>
                                    <th scope="col"> Kelas </th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <div class="float-right mb-1">
                            <a href="<?php echo base_url('admin/tambah_siswa'); ?>" type="submit" class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700">
                                            Tambah
                                        </a>
                            </div>
                    <?php $no = 0; 
                                foreach ($siswa as $row): 
                                    $no++ ?> 
                    <tr> 
                        <td> 
                            <?php echo $no ?> 
                        </td> 
                        <td> 
                            <?php echo $row->nama_siswa ?> 
                        </td> 
                        <td> 
                            <?php echo $row->nisn ?> 
                        </td> 
                        <td> 
                            <?php echo $row->gender ?> 
                        </td> 
                        <td> 
                            <?php echo tampil_full_kelas_byid($row->id_kelas) ?> 
 
                        </td>
                        <td class="text-center"> 
                            <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa ?>" class="btn btn-primary btn-sm">Ubah</a> 
                            <button onclick="hapus(<?php echo $row->id_siswa ?>)" 
                                class="btn btn-danger btn-sm">Hapus</button> 
                                
                        </td> 
                    </tr> 
                    <?php endforeach ?> 
                </tbody>
                </table>
            </div>
 </div>
 </div>

 
    <!-- Konten --> 
    <!-- Tabel --> 
    
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
        }
    }
    </script>
</body>
</html>
</body>
</html>