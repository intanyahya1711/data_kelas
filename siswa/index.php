<?php include_once "siswa.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">

    <h1>Data Siswa</h1>

    <table class="table">
        <thead>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Kelas</th>
        </thead>
        <tbody>

        <tr>
                <td>1</td>
                <td>culee</td>
                <td>Sorong, Papua Barat</td>
                <td>cule@gmail.com</td>
                <td>kalimantan, 11 02 2008</td>
                <td>12 MM  2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Muhammad Fauozil Yahya</td>
                <td>Sorong, Papua Barat</td>
                <td>ozilma363@gmail.com</td>
                <td>Sorong, 04 05 2009</td>
                <td>12 RPL 1</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Intan Febriyani Yahya</td>
                <td>Bajawa, Ngada</td>
                <td>yahyaintan44@gmail.com</td>
                <td>Sorong, 11 02 2008</td>
                <td>12 RPL 2</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Muhammad Farhan Yahya</td>
                <td>Sorong, Papua Barat</td>
                <td>farhanyhy@gmail.com</td>
                <td>Sorong, 26 11 2002</td>
                <td>12 RPL 3</td>
            </tr>

            <?php foreach ($dataSiswa as $key => $value) {
                echo "<tr>
                    <td>" . ($key + 1) . "</td>
                <td>" . $value['nama'] . "</td>
                <td>" . $value['alamat'] . "</td>
                <td>" . $value['email'] . "</td>
                <td>" . $value['ttl'] . "</td>
                <td>" . $value['kelas_name'] . "</td>
                </tr>";
            } ?>
        </tbody>

    </table>
    <div>
        <a class="btn btn-primary" href="create.php">Tambah Siswa</a>
        <a class="btn btn-warning" href="/folderform/#">Halaman Utama</a>
        <a class="btn btn-primary" href="/folderform/#">Data Kelas</a>
    </div>
</body>

</html>