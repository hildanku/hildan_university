<?= $this->extend('Master') ?>
<?= $this->section('content') ?>
<div class="container px-4 py-5">
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Learning Program</h2>
            <p class="text-body-secondary">Hildan University menyediakan berbagai program pembelajaran yang dirancang untuk membekali mahasiswa dengan keterampilan praktis dan pengetahuan mendalam di bidang Teknologi Informasi. Pilih dari berbagai spesialisasi, termasuk:</p>
            <ul class="text-body-secondary">
                <li>Cybersecurity</li>
                <li>Machine Learning</li>
                <li>Backend Development</li>
            </ul>
        </div>

        <div class="col">
            <div class="row row-cols-1 g-4">
                <div class="col d-flex flex-column gap-2">
                    <h2 class="fw-bold text-body-emphasis">Tujuan (Goals)</h2>
                    <ul class="text-body-secondary">
                        <li>Memberikan pendidikan tinggi berkualitas tanpa biaya untuk semua individu.</li>
                        <li>Mengembangkan keterampilan praktis dalam bidang Cybersecurity, Machine Learning, dan Backend Development.</li>
                        <li>Mendorong kolaborasi dan proyek penelitian untuk menghadirkan solusi nyata dalam dunia Teknologi Informasi.</li>
                        <li>Menyediakan lingkungan belajar inklusif yang memfasilitasi pertukaran ide dan kolaborasi antar mahasiswa.</li>
                        <li>Membantu mahasiswa merencanakan dan mencapai tujuan karir mereka melalui dukungan bimbingan karir.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>