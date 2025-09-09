<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Daftar Buku</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $i = 1;
            foreach ($buku as $b) :
          ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $b['sampul']; ?>" alt="" class="sampul"></td>
            <td><?= $b['judul']; ?></td>
            <td>
              <a href="#" class="btn btn-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>