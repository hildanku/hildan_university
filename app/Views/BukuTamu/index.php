<?= $this->extend('Master') ?>
<?= $this->section('content') ?>
    <style>
        /* CSS untuk mengatur tata letak kolom */
        .bukutamu-container {
            display: flex;
            justify-content: space-between;
        }

        .form-container,
        .table-container {
            width: 48%; /* Sesuaikan lebar kolom sesuai kebutuhan */
        }

        /* Tambahkan gaya tambahan sesuai kebutuhan Anda */
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
                <!-- Form Bukutamu -->
                <div class="form-container">
                    <h2 class="fw-bold text-body-emphasis">Bukutamu</h2>
                    <p class="text-body-secondary">Selamat datang di Bukutamu Hildan University! Silakan tinggalkan jejak dan berikan tanggapan atau kesan Anda tentang pengalaman di universitas ini. Kami sangat menghargai setiap masukan dari Anda.</p>

                    <form action="/submit-feedback" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan:</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Tabel Pesan Tamu -->
                <div class="table-container">
                    <h2 class="fw-bold text-body-emphasis">Pesan Tamu</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Isi tabel di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>