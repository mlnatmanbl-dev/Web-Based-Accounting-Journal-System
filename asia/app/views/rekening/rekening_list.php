<?php
// echo $title;
// debug($rekenings);

?>
<a class="btn btn-primary mb-2" href="<?php echo site_url('rekening/create') ?>">Tambah Data</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode Rekening</th>
            <th>Nama Rekening</th>
            <th>Tipe</th>
            <th>Saldo Normal</th>
            <th>Induk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rekenings as $rekening): ?>
            <tr>
                <td><?php echo $rekening['code'] ?></td>
                <td><?php echo $rekening['name'] ?></td>
                <td><?php echo $rekening['types'] ?></td>
                <td><?php echo $rekening['sn'] ?></td>
                <td><?php echo $rekening['parent'] ?></td>
                <td>
                    <a href="<?php echo site_url('rekening/delete/'). $rekening['code'] ?>">Hapus</a> 
                    <a href="<?php echo site_url('rekening/edit/'). $rekening['code'] ?>">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>    
</table>