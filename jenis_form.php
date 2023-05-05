<?php
// buat objek baru dari class jenis produk
$obj_jenis_produk = new Jenis_produk();

// panggil fungsi yang ada di dalam class jenis produk untuk menampilkan data jenis produk
$data_jenis_produk = $obj_jenis_produk->tampil();

?>

<div class="container" style="min-height:50vh;">
    <h3 style="text-align:center;margin: 3vh 0;">Form Tambah Jenis Produk</h3>
<form method="POST" action="jenis_controller.php">
  <div class="form-group row">
    <label for="nama_jenis" class="col-4 col-form-label">Nama Jenis</label> 
    <div class="col-8">
      <input id="nama_jenis" name="nama_jenis" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>    
    </div>
  </div>
</form>
</div>