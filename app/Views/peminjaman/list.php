<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Daftar Peminjaman Dokumen Rekam Medis</h1>

    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped " id="table-2">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Nomor RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Peminjam</th>
                                        <th>Status</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($peminjaman as $k) : ?>
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
                                            <td><?= $k['tanggal_kembali']; ?></td>
                                            <td>
                                                <a href="/peminjaman/detail/<?= $k['id_peminjaman']; ?>" class="btn btn-success">Lihat</a>
                                                <a href="/peminjaman/edit/<?= $k['id_peminjaman']; ?>" class="btn btn-primary">Edit</a>
                                                <a href="/peminjaman/delete/<?= $k['id_peminjaman']; ?>" class="btn btn-danger btn-delete">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    $(document).ready(function() {
        $('#table-2').DataTable()({
            "order": [],
            "columnDefs": [{
                "sortable": true,
            }],
            "serverside": true,
            "responsive": true,

        });

    });
</script>

<?= $this->endSection() ?>