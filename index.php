<?php include("tersambung.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Mahasiswa Crud</title>
</head>

<body>

    <nav>
        <a href="add.php">[+] Tambah Baru</a>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        Hasilnya:
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Nim Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Alamat </th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mhs['nim_mhs']."</td>";
            echo "<td>".$mhs['nama_mhs']."</td>";
            echo "<td>".$mhs['alamat']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$mhs['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$mhs['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>