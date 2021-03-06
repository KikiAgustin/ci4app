<?= $this->extend('template/template');  ?>


<?= $this->section('content');  ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="mt-3 mb-2">Detail Komik</h4>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $detail['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $detail['nama'];  ?></h5>
                            <p class="card-text"><b>Penulis : </b> <?= $detail['penulis']; ?></p>
                            <p class="card-text"><b>Penerbit : </b><?= $detail['penerbit']; ?></p>
                            <a class="btn btn-warning" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                            <br><br>
                            <a href="/komik">Kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>