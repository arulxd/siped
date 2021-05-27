<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Dokumen Sedang Dipinjam</h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen_dipinjam ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Dokumen Kembali</h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen_kembali ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Dokumen </h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Dokumen Terakhir Ditambahkan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Nomor RM</th>
                                <th>Nama Pasien</th>
                                <th>Nama Peminjam</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($peminjaman->getResult('array')  as $k) : ?>
                            <tr>
                                <td>
                                    <?= $i++; ?>
                                </td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['no_rm']; ?></td>
                                <td><?= $k['nama_pasien']; ?></td>
                                <td><?= $k['nama_peminjam']; ?></td>
                                <td>
                                    <?php
                                    if ($k['status'] == 'dipinjam') { ?>
                                        <span class="badge badge-danger"><?= $k['status'] ?></span>
                                    <?php } ?>
                                    <?php
                                    if ($k['status'] == 'dikembalikan') { ?>
                                        <span class="badge badge-success"><?= $k['status'] ?></span>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-body">
        <p>test</p>
    </div>
</section>

<?= $this->endSection() ?>