<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('karyawan/tambah') ?>">Tambah Data</a>
    <form action="">
        <table border="1">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Alamat</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($karyawan as $kry): ?>
                    <tr>
                        <td><?= $kry['id'] ?></td>
                        <td><?= $kry['nama'] ?></td>
                        <td><?= $kry['alamat'] ?></td>
                        <td><?= $kry['gaji'] ?></td>
                        <td>
                            <a href="<?= base_url().'karyawan/edit/' ?><?= $kry['id'] ?>">Edit</a>
                            <a href="<?= base_url().'karyawan/actionHapus/' ?><?= $kry['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>
</body>
</html>