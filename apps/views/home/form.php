<form method="POST">
  <div class="form-group">
    <?php if(isset($data['id'])) : ?>
  <input type="hidden" name="id" value="<?=  isset($data['id'])? $data['id'] : "" ?>"/>
    <?php endif ?>
  <label for="InputNama">Nama Barang</label>
    <input name="nama" type="text" class="form-control" id="InputNama" aria-describedby="namaHelp" value="<?=  isset($data['nama'])? $data['nama'] : "" ?>">
    <small id="namalHelp" class="form-text text-muted">Isikan nama barang.</small>
    
    <label for="InputJumlah">Jumlah Barang</label>
    <input name="qty" type="text" class="form-control" id="InputJumlah" aria-describedby="jumlahHelp" value="<?=  isset($data['qty'])? $data['qty'] : "" ?>">
    <small id="jumlahlHelp" class="form-text text-muted">Isikan jumlah barang.</small>
  </div>
 
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>