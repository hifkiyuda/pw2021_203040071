<?php 
require '../functions.php';
$mobil = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php if(empty($mobil)) : ?>
        <tr>
            <td colspan="4">
                <p style="color: red; font-style: italic;">data mobil tidak ditemukan!</p>
            </td>
        </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach($mobil as $mb) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mb['gambar']; ?>" width="200"></td>
        <td><?= $mb['nama']; ?></td>
        <td>
            <a href="detail.php?id=<?= $mb['id']; ?>">lihat detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>