<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="mt-2">Detail Buku</h3>

      <div class="card" style="width: 18rem;">
        <img src="/img/<?= $buku['sampul']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $buku['judul']; ?></h5>
          <p class="card-text mb-0">Pengarang: <?= $buku['pengarang']; ?></p>
          <p class="card-text mb-0">penerbit: <?= $buku['penerbit']; ?></p>
          <p class="card-text mb-3">Tahun Terbit: <?= $buku['tahun_terbit']; ?></p>
          <div class="mb-4">
            <a href="/buku/ubah/<?= $buku['id_buku'];?>" class="btn btn-warning">Ubah</a>

            <form action="/buku/<?= $buku['id_buku']; ?>" method="post" class="d-inline">
              <?= csrf_field();?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data ini?')">Hapus</button>
            </form>
          </div>
          <a href="/buku" class="card-link btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>