<?php

include("tersambung.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE mahasiswa SET nama_mhs='$nama', nim_mhs='$nim', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>