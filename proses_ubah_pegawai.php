<?php
if ($_POST) {
    $id_pegawai=$_POST['id_pegawai'];
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $no_telp=$_POST['no_telp'];
    $id_jabatan=$_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (empty($nama_pegawai)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($conn,"update pegawai set nik='".$nik."',nama_pegawai='".$nama_pegawai."',alamat='".$alamat."', gender='".$gender."', no_telp='".$no_telp."',id_jabatan='".$id_jabatan."', username='".$username."', password='".$password."' where id_pegawai = '".$id_pegawai."'")
            or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        
    } else {
        $update=mysqli_query($conn,"update pegawai set nik='".$nik."',nama_pegawai='".$nama_pegawai."',alamat='".$alamat."', gender='".$gender."', no_telp='".$no_telp."',id_jabatan='".$id_jabatan."', username='".$username."', password='".$password."' where id_pegawai = '".$id_pegawai."'")
        or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
        }
    }

    }
}
?>