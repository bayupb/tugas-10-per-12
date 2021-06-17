<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Menambahkan mahasiswa baru</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama Mahasiswa: </label>
                <input type="text" name="nama_mhs" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="sekolah_asal">Nim Mahasiswa: </label>
                <input type="text" name="nim_mhs" placeholder="Nim Mahasiswa" />
            </p>
            <p>
                <input type="submit" value="Tambahkan Mahasiswa" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>