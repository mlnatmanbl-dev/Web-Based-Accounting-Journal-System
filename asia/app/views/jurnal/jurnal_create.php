<?php
//debug($accounts);
?>

<form action="<?php echo site_url('jurnal/create') ?>">
<div class="row mb-3">
<div class="col-md-4">
		<input type="text" class="form-control" name="item" placeholder="Masukan jumlah item">
</div>
<div class="col-md-2">
		<button type="submit" class="btn btn-info">Go</button>
</div>
</div>
	</form>
	
<div class="card mb-4">
   <form method="POST" action="<?php echo site_url('jurnal/store'); ?>" autocomplete="off">
   <div class="card-header bg-primary text-light"><h3 class="card-title">Tambah Jurnal</h3></div>
       <div class="card-body">
       <div class="row">
       		<div class="col-md-6">
			   <div class="form-group">
				 <label>Tanggal Transaksi</label>
				 <input type="date" name="transaction_date" class="form-control" value="<?php echo old('name') ?>">
			   </div>
		   </div>
		   <div class="col-md-6">
			   <div class="form-group">
				 <label>No. Bukti</label>
				 <input type="text" name="reff_code" class="form-control" value="<?php echo old('name') ?>"> 
			   </div>
			</div>
	   </div>
	   <hr>
	   <table>
	   		<thead>
	   			<tr>
	   				<th>Kode Rekening</th>
	   				<th>Debit</th>
	   				<th>Kredit</th>
	   			</tr>
	   		</thead>
	   		<tbody>
	   			<?php for($i=0; $i < $item; $i++): ?>
	   			<tr>
	   				<td>
		   				<select name="codes[]" class="form-control">
		   					<option></option>
		   					<?php foreach($accounts as $groupAccounts): ?>
		   						<optgroup label="<?php echo $groupAccounts[0]['name'] ?>">
		   						<?php foreach($groupAccounts as $a): ?>
		   						<option value="<?php echo $a['code'] ?>"><?php echo $a['code'].' - '.$a['name'] ?></option>
		   						<?php endforeach; ?>
		   						</optgroup>
		   					<?php endforeach; ?>
		   				</select>
	   				</td>
	   				<td><input type="text" name="debits[]" class="form-control" value=""> </td>
	   				<td><input type="text" name="credits[]" class="form-control" value=""> </td>
	   			</tr>
	   			<?php endfor; ?>
	   		</tbody>
	   </table>

	 
	
    </div>
    <div class="card-footer">
       <div class="form-group float-start">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	   </div>
    	<div class="form-group float-end">
	    	<a href="<?php echo site_url('jurnal') ?>" class="btn btn-info">Kembali</a>
	   </div>
    </div>
    </form>
</div>

