<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Anggota</title>
</head>

<body>
    <a href="<?= base_url('buku/insert?page_insert=yes') ?>"><button class="btn btn-info">Tambah Buku</button></a>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Prodi</th>
                <th>Tahun Masuk</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anggota as $row) {
                ?>
                <tr>
                    <td><?= $row->nim ?></td>
                    <td><?= $row->nama ?> </td>
                    <td><?= $row->tempat_lahir ?></td>
                    <td><?= $row->tgl_lahir ?></td>
                    <td><?= $row->jk ?></td>
                    <td><?= $row->prodi ?></td>
                    <td><?= $row->thn_masuk ?></td>
                    <td>
                        <a href="<?= base_url('buku/delete?id=' . $row->nim) ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="<?= base_url('buku/editPage?id=' . $row->nim) ?>">
                            <button class="btn btn-info">Edit</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>