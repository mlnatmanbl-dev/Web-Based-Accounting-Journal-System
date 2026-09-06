<?php
// echo $title;
// debug($jurnals);

?>
<a class="btn btn-primary mb-2" href="<?php echo site_url('jurnal/create') ?>">Tambah Data</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Tgl. Transaksi</th>
            <th>No. Faktur</th>
            <th>Keterangan</th>
            <th>Kode Akun</th>
            <th>Debit</th>
            <th>Kredit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($jurnals as $jurnal): ?>
            <tr>
                <td><?php echo $jurnal['transaction_date'] ?></td>
                <td><?php echo $jurnal['reff_code'] ?></td>
                <td><?php echo $jurnal['name'] ?></td>
                <td><?php echo $jurnal['code'] ?></td>
                <td><?php echo $jurnal['debit'] ?></td>
                <td><?php echo $jurnal['credit'] ?></td>
                <td>
                    <a href="<?php echo site_url('jurnal/delete/'). $jurnal['code'] ?>">Hapus</a> 
                    <a href="<?php echo site_url('jurnal/edit/'). $jurnal['code'] ?>">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>    
</table>