<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header ">
        <h1 class="space">Formulir Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4> Data Peminjaman</h4>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <form action="/peminjaman/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Tanggal dan Jam Peminjaman</label>
                            <input type="text" class="form-control datetimepicker" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="norm">No. Rekam Medis</label>
                            <input type="text" class="form-control" id="no_rm" name="no_rm" autofocus required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="peminjam">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="keperluan">Keperluan</label>
                            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="status">Status Dokumen</label>
                            <select class="form-control select2" id="status" name="status" required>
                                <option>Dipinjam</option>
                                <option>dikembalikan</option>

                            </select>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>