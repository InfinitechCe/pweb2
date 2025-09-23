<?= $this->extend('layout/header')?>
<?=$this->section('content'); ?>
<div class="container">
  <div class="col">
    <h3 class="mt-2">Form Ubah Buku</h3>
    <form action="/buku/update/<?= $buku['id_buku'];?>" method="post" class="mt-4" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="sampulLama" value="<?= $buku['sampul'];?>">

      <div class="form-group row">
          <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-4">
              <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" 
                      name="judul" autofocus
                      value="<?= (old('judul')) ? old('judul'): $buku['judul']; ?>">
              <div class="invalid-feedback">
                  <?= $validation->getError('judul'); ?>
              </div>
          </div>
      </div>

      <div class="form-group row">
          <label for="inputPengarang" class="col-sm-2 col-form-label">Pengarang</label>
          <div class="col-sm-4">
              <input type="text" class="form-control" name="pengarang" value="<?= (old('pengarang')) ? old('pengarang'): $buku['pengarang']; ?>">
          </div>
      </div>

      <div class="form-group row">
          <label for="inputPenerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-4">
              <input type="text" class="form-control" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit'): $buku['penerbit']; ?>">
          </div>
      </div>

      <div class="form-group row">
          <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
          <div class="col-sm-4">
              <input type="number" class="form-control" name="tahun" value="<?= (old('tahun_terbit')) ? old('tahun_terbit'): $buku['tahun_terbit']; ?>">
          </div>
      </div>

      <div class="form-group row">
        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
        <div class="col-sm-4">
            <div class="costom-file">
            <input type="file" name="sampul" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sampul'); ?>
                </div>
                <label class="custom-file-label" for="customFile"></label>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
    

 <?= $this->endSection();?>