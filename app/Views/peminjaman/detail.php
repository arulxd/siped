<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Detail Dokumen Rekam Medis</h1>
    </div>
    <div class="section-body">
        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="">Tanggal Peminjaman</label>
                            <li class=""><?= $peminjaman['tanggal']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nomor RM</label>
                            <li class=""><?= $peminjaman['no_rm']; ?></li>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Nama Pasien</label>
                            <li class=""><?= $peminjaman['nama_pasien']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Peminjam</label>
                            <li class=""><?= $peminjaman['nama_peminjam']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tanggal Kembali</label>
                            <li class=""><?= $peminjaman['tanggal_kembali']; ?></li>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Keperluan Peminjaman</label>
                            <li class=""><?= $peminjaman['keperluan']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Status Dokumen</label>
                            <?php
                            if ($peminjaman['status'] == 'dipinjam') { ?>
                                <span class="badge badge-danger"><?= $peminjaman['status'] ?></span>
                            <?php } ?>
                            <?php
                            if ($peminjaman['status'] == 'dikembalikan') { ?>
                                <span class="badge badge-success"><?= $peminjaman['status'] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
</section>

<?= $this->endSection() ?>