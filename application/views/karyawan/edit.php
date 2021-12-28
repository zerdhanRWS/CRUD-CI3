<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Karyawan</h1>
    <?php foreach($karyawan as $karyawan){ ?>
    <form action="<?= base_url('karyawan/actionEdit') ?>" method="post">
    <input type="hidden" name="id" value="<?= $karyawan->id ?>">
            <div>
                <label for="">Nama Karyawan</label>
                <input type="text" name="nama" value="<?= $karyawan->nama ?>">
            </div>
            <div>
                <label for="">Alamat</label>
                <input type="text" name="alamat" value="<?= $karyawan->alamat ?>">
            </div>
            <div>
                <label for="">Gaji</label>
                <input type="number" name="gaji" value="<?= $karyawan->gaji ?>">
            </div>
            <button type="submit" name="submit">Edit Data</button>
    </form>
    <?php } ?>
</body>
</html>