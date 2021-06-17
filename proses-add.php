<?php

include("tersambung.php");

if(isset($_POST['tambah'])){

    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nama_mhs, nim_mhs, alamat) VALUE ('$nama', '$nim', '$alamat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>