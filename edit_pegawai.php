<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    <title>Register Page</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query ($conn,"select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $data_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?> 
        <div>
        <div class="form-container sign-up-container">
            <form action="proses_ubah_pegawai.php" method="post">
                <h1>Ubah Pegawai</h1>
                <input type="hidden" name="id_pegawai" value="<?=$data_pegawai['id_pegawai'] ?>">
                <input type="text" class="input "name="nama_pegawai" value="" placeholder="Name" />
                <input type="text" class="input name="nik" value="" placeholder="NIK" />
                <input type="text" class="input name="no_telp" value="" placeholder="Phone Number" />
                <select name="gender" class="input" placeholder="Gender">
                    <option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </option>
                </select>
                <input type="text" class="input name="alamat" value="" placeholder="Address" />
                <select name="id_jabatan" class="input" >
                    <option>
                    <?php
                    include "koneksi.php";
                    $qry_jabatan=mysqli_query($conn,"select * from jabatan");
                    while($data_jabatan=mysqli_fetch_array($qry_jabatan)) {
                        echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';
                    }
                    ?>
                    </option>
                </select>
                <input type="text" class="input" name="username" value="" placeholder="Username" />
                <input type="password" class="input" name="password" value="" placeholder="Password" />
                <input type="submit" name="save" class="btn-grad" value="register">
                <!-- <div class="btn-grad" >Sign Up</div> -->
            </form>
        </div>
    </div>

    </div>
    <script type="text/javascript" src="css/index.js"></script>
</body>
</html>