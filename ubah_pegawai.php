<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query ($conn,"select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $data_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>Ubah Pegawai</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="id_pegawai" value="<?=$data_pegawai['id_pegawai'] ?>">
        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="<?=$data_pegawai['nama_pegawai']?>" class="form-control">
        NIK :
        <input type="text" name="nik" value="<?=$data_pegawai['nik']?>" class="form-control">
        No Telp :
        <input type="date" name="no_telp" value="<?=$data_pegawai['no_telp']?>" class="form-control">
        Jenis Kelamin :
        <?php
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan')
        ?>
        <select name="gender" class="form-control">
            <option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                    if ($key_gender==$data_pegawai['gender']) {
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                ?>
            </option>
            <option value="<?=$key_gender?>" <?=$selek?>>
                <?=$val_gender?>
            </option>
            <?php endforeach ?>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"> <?=$data_pegawai['alamat']?></textarea>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option>
                <?php
                include "koneksi.php";
                $qry_jabatan=mysqli_query($conn,"SELECT * FROM jabatan");
                while ($data_jabatan=mysqli_fetch_array($qry_jabatan)) {
                    if ($data_jabatan['id_jabatan']==$data_pegawai['id_jabatan']) {
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                    echo '<option value="'.$data_jabatan['id_jabatan'].'"'.$selek.'>'.$data_jabatan['nama_jabatan'].'</option>';
                }
                ?>
            </option>
        </select>
        Username :
        <input type="text" name="username" value="<?=$data_pegawai['username']?>" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="save" value="Ubah Pegawai" class="btn btn-primary">
    </form>
</body>
</html>