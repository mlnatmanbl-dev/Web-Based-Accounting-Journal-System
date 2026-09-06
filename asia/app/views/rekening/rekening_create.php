<form action="<?php echo site_url('rekening/store') ?>" method="POST">
    <div class="form-group">
        <label for="">Kode Rekening</label>
        <input type="text" name="code" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama Rekening</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Tipe Rekening</label>
        <input type="radio" name="type" value="general">General
        <input type="radio" name="type" value="detail">Detail
    </div>
    <div class="form-group">
        <label for="">Saldo Normal</label>
        <input type="radio" name="sn" value="D">Debit
        <input type="radio" name="sn" value="K">Kredit
    </div>
    <div class="form-group">
        <label for="">Induk</label>
        <input type="text" name="parent" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="kirim" value="Simpan" class="btn btn-primary">
    </div>
</form>
