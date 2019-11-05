<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Buku</title>
</head>

<body>
    <form action="<?= base_url('buku/insert') ?>" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?= $buku->judul ?>"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang" value="<?= $buku->pengarang ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit" value="<?= $buku->penerbit ?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="date" name="thn_terbit" value="<?= $buku->thn_terbit ?>"></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><input type="text" name="isbn" value="<?= $buku->isbn ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Buku</td>
                <td>:</td>
                <td><input type="number" name="jumlah_buku" value="<?= $buku->jumlah_buku ?>"></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><input type="text" name="lokasi" value="<?= $buku->lokasi ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Input</td>
                <td>:</td>
                <td><input type="date" name="tgl_input"  value="<?= $buku->tgl_input ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn btn-success" name="submit">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>