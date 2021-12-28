<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>
    <form action="<?= base_url('karyawan/actionTambah') ?>" method="post">
            <div>
                <label for="">Nama Karyawan</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="">Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div>
                <label for="">Gaji</label>
                <input type="number" name="gaji">
            </div>
            <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>