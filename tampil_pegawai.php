<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h3>Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>NO</th><th>NAMA PEGAWAI</th><th>NIK</th>
            <th>ALAMAT</th><th>GENDER</th><th>NO TELP</th>
            <th>USERNAME</th><th>JABATAN</th><th>AKSI</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_pegawai=mysqli_query($conn,"select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan");
            $no=0;
            while($data_pegawai=mysqli_fetch_array($qry_pegawai)) {
                $no++;?>
                <tr>
                    <td><?=$no?></td><td><?=$data_pegawai['nama_pegawai']?></td><td><?=$data_pegawai['nik']?></td>
                    <td><?=$data_pegawai['alamat']?></td><td><?=$data_pegawai['gender']?></td><td><?=$data_pegawai['no_telp']?></td>
                    <td><?=$data_pegawai['username']?></td><td><?=$data_pegawai['nama_jabatan']?></td>
                    <td><a href="ubah_pegawai.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>"
                    class="btn btn-success">Ubah</a>
                    <a href="hapus.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>