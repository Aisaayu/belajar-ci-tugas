<h1>Data transaksi</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Total Harga</th>
        <th>Alamat</th>
        <th>Ongkir</th>
        <th>Status</th>
    </tr>

    <?php
    $no = 1;
    foreach ($transaction as $index => $transaksi) :
        // $path = "../public/img/" . $transaksi['foto'];
        // $type = pathinfo($path, PATHINFO_EXTENSION);
        // $data = file_get_contents($path);
        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    ?>
        <tr>
            <td align="center"><?= $index + 1 ?></td>
            <td><?= $transaksi['username'] ?></td>
            <td align="right"><?= "IDR " . number_format($transaksi['total_harga'], 2, ",", ".") ?></td>
            <td><?= $transaksi['alamat'] ?></td>
            <td align="right"><?= "IDR " . number_format($transaksi['ongkir'], 2, ",", ".") ?></td>
            <td><?= $transaksi['status'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>