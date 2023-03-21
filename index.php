<!DOCTYPE html>
<html>

<head>
    <title>Program PHP Sederhana</title>
</head>

<body>
    <h2>Form Input Data</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir"><br><br>
        Pekerjaan:
        <select name="pekerjaan">
            <option value="">- Pilih Pekerjaan -</option>
            <option value="Fullstack">Fullstack</option>
            <option value="Front-end">Front-end</option>
            <option value="Back-end">Back-end</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // menghitung umur berdasarkan tanggal lahir
        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        // menentukan gaji berdasarkan pekerjaan
        if ($pekerjaan == 'Fullstack') {
            $gaji = 10000000;
        } elseif ($pekerjaan == 'Front-end') {
            $gaji = 8000000;
        } elseif ($pekerjaan == 'Back-end') {
            $gaji = 6000000;
        }

        // menampilkan output
        echo "<h2>Hasil</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ",", ".") . "<br>";
    }
    ?>
</body>

</html>