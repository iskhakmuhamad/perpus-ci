<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Buku</title>
</head>

<body>
    <a href="<?= base_url('buku/insert?page_insert=yes') ?>"><button class="btn btn-info">Tambah Buku</button></a>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Penerbit</th>
                <th>ISBN</th>
                <th>Jumlah Buku</th>
                <th>Lokasi</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $row) {
                ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->judul ?> </td>
                    <td><?= $row->pengarang ?></td>
                    <td><?= $row->penerbit ?></td>
                    <td><?= $row->thn_terbit ?></td>
                    <td><?= $row->isbn ?></td>
                    <td><?= $row->jumlah_buku ?></td>
                    <td><?= $row->lokasi ?></td>
                    <td>
                        <a href="<?= base_url('buku/delete?id=' . $row->id) ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="<?= base_url('buku/editPage?id=' . $row->id) ?>">
                            <button class="btn btn-info">Edit</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>