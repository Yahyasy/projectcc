<?php
$obj_pelanggan = new Pelanggan();
$obj_produk = new Produk();

$data_pelanggan = $obj_pelanggan->tampil();
$data_produk = $obj_produk->tampil();

// proses edit data
// tangkap request idedit ketika di klik
$idedit = $_REQUEST['idedit'];

$pelanggan = !empty($idedit)? $obj_pelanggan->ambildata($idedit) : [];

?>

<div class="container" style="min-height:53vh;">
<form method="POST" action="pelanggan_controller.php">
  <div class="form-group row">
    <h3 style="text-align:center;margin: 3vh 0;">Edit Pelanggan</h3>
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $pelanggan['nama'] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="laki-laki" <?= $pelanggan['jenis_kelamin']=="laki-laki"? 'checked' : '' ?>> 
        <label for="jenis_kelamin_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="perempuan" <?= $pelanggan['jenis_kelamin']=="perempuan"? 'checked' : '' ?>> 
        <label for="jenis_kelamin_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" value="<?= $pelanggan['alamat'] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_telepon" class="col-4 col-form-label">No Telepon</label> 
    <div class="col-8">
      <input id="no_telepon" name="no_telepon" value="<?= $pelanggan['no_telepon'] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah_beli" name="jumlah_beli" value="<?= $pelanggan['jumlah_beli'] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
      <option disabled>Pilih Jenis Produk</option>
        <?php
        foreach ($data_produk as $jenis) {
        ?>
        <option value="<?php echo $jenis['id'] ?>" <?= $jenis['id']==$pelanggan['produk_id']? 'selected' : '' ?>><?php echo $jenis['nama'] ?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
        <button name="proses" value="ubah" type="submit" class="btn btn-primary">Ubah</button>
    </div>

    <!-- hidden field untuk klausa where id=? -->
    <input type="hidden" name="idx" value="<?= $idedit ?>">
  </div>
</form>
</div>