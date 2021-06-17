<?php

include("tersambung.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$mhs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>" />

            <p>
                <label for="nama">Nama Mahasiswa: </label>
                <input type="text" name="nama_mhs" placeholder="Nama Mahasiswa"
                    value="<?php echo $mhs['nama_mhs'] ?>" />
            </p>
            <p>
                <label for="nim">Nim Mahasiswa: </label>
                <input type="text" name="nim_mhs" placeholder="Nim Mahasiswa" value="<?php echo $mhs['nim_mhs'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $mhs['alamat'] ?></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>