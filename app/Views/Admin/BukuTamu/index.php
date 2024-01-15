<?= $this->extend('_LayoutsAdmin/Master') ?>
<?= $this->section('content') ?>
<style>
        .bukutamu-container {
            display: flex;
            justify-content: space-between;
        }

        .form-container,
        .table-container {
            width: 100%;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-container th, .table-container td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
<div class="container px-4 py-5 mt-5">
            <div class="bukutamu-container">

                <div class="table-container">
                <?php if (session()->has('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        <?php endif; ?>
                        <?php if (session()->has('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        <?php endif; ?>
                    <h2 class="fw-bold text-body-emphasis">Pesan Tamu</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $datas) : ?>
                            <tr>
                                <td><?= $datas['id'] ?></td>
                                <td><?= $datas['email'] ?></td>
                                <td><?= $datas['nama'] ?></td>
                                <td><?= $datas['pesan'] ?></td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>