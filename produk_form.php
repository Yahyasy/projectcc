<?php
// buat objek baru dari class jenis produk
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new Produk();

// panggil fungsi yang ada di dalam class produk dan jenis produk untuk menampilkan data jenis produk
$data_jenis_produk = $obj_jenis_produk->tampil();
$data_produk = $obj_produk->tampil();

?>

<div class="container" style="min-height:50vh;">
    <h3 style="text-align:center;margin: 3vh 0;">Form Tambah Produk</h3>
<form method="POST" action="produk_controller.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="harga_jual" name="harga_jual" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected>Pilih Jenis Produk</option>
        <?php
        foreach ($data_jenis_produk as $jenis) {
            # code...
        ?>
        <option value="<?php echo $jenis['id'] ?>"><?php echo $jenis['nama_jenis'] ?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>