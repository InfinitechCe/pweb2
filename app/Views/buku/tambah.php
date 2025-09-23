<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h3 class="mt-2">Form Tambah Buku</h3>
  
    <form action="/buku/simpan" method="post" class="d-flex flex-column mt-4 gap-2" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <div class="form-group row">
        <label for="InputJudul" class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" <?= ($validation->hasError('judul')) ? 'isInvalid' : ''; ?> name="judul" required autofocus>
          <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPengarang" class="col-sm-2 col-form-label">Pengarang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="pengarang" value="<?= old('pengarang'); ?>" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPenerbit" class="col-sm-2 col-form-label">Penerbit</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="penerbit" value="<?= old('penerbit'); ?>" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="tahun_terbit" value="<?= old('tahun_terbit'); ?>" required>
        </div>
      </div>

      <!-- <div class="form-group row">
        <label for="inputSampul" class="col-sm-2 col-form-label">Sampul Buku</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="sampul" value="<?= old('sampul'); ?>" required>
        </div>
      </div> -->


      <div class="form-group row">
        <label for="inputSampul" class="col-sm-2 col-form-label">Sampul Buku</label>
        <div class="col-sm-4">
          <div class="custom-file">
          <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
          id="sampul" name="sampul" required>
            <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
            </div>
            <label class="custom-file-label" for="customFile" hidden>Choose File</label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </form>
  </div>
</div>
<?= $this->endSection(); ?>