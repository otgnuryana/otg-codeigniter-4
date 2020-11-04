<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Komik</h2>
            <div class="card mb-3" id="darkmode" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" alt="" width="205px" height="260px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ml-5">
                            <div class="card-title"></div>
                            <h5 class="card-title">
                                <?= $komik['judul']; ?>
                            </h5>
                            <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['penerbit']; ?></small></p>

                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-secondary">Edit</a>

                            <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                            </form>
                            <br><br>
                            <span><a href="/komik">Kembali ke daftar komik</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<?= $this->endSection(); ?>