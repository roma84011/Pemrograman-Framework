<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Guru</h1>
    <table border ="1" cellspacing="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Jenjang</th>
            <th>Mata Pelajaran</th>
            <th>Tanggal Masuk</th>
        </tr>
        <?php $i = 1 ;?>
        <?php foreach($data_guru as $row): ?>
            <tr>
                <td><?= $i++;?></td>
                <td><?php echo $row['nip']?></td>
                <td><?= $row['nama_guru']?></td>
                <td><?= $row['sex']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['tgl_lhr']?></td>
                <td><?= $row['agama']?></td>
                <td><?= $row['jenjang']?></td>
                <td><?= $row['mapel']?></td>
                <td><?= $row['tgl_masuk']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>