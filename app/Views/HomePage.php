<?= $this->extend('Master') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
              <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Hildan University</h1>
                <p class="col-md-8 fs-4">Education for All, Without Limits.</p>
                <a href="/register" class="btn btn-primary">Join Now!</a>
              </div>
            </div>
        </div>
        <div class="container px-4 py-5">
          <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
              <h2 class="fw-bold text-body-emphasis">Kenapa harus kami?</h2>
              <p class="text-body-secondary">Hildan University adalah pilihan utama untuk pendidikan tinggi di bidang Teknologi Informasi. Kami memahami bahwa memilih universitas merupakan keputusan besar, dan kami memiliki alasan yang kuat mengapa Anda harus memilih kami.</p>
            </div>
      
            <div class="col">
              <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col d-flex flex-column gap-2">
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Pendidikan Gratis 100%</h4>
                  <p class="text-body-secondary">kami menawarkan pendidikan tinggi berkualitas tanpa biaya kuliah. Kami percaya bahwa pengetahuan di bidang IT harus dapat diakses oleh semua tanpa hambatan finansial.</p>
                </div>
      
                <div class="col d-flex flex-column gap-2">
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Kurikulum Berstandar Global</h4>
                  <p class="text-body-secondary">Kami mengadopsi kurikulum berstandar global yang dirancang untuk memastikan Anda mendapatkan pengetahuan dan keterampilan terkini yang dibutuhkan di industri Teknologi Informasi.</p>
                </div>
      
                <div class="col d-flex flex-column gap-2">
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Proyek Kolaboratif dan Peluang Penelitian</h4>
                  <p class="text-body-secondary">Dapatkan pengalaman praktis melalui proyek kolaboratif dan peluang penelitian yang menghadirkan tantangan dunia nyata dalam Teknologi Informasi.</p>
                </div>
      
                <div class="col d-flex flex-column gap-2">
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Komunitas Belajar Inklusif</h4>
                  <p class="text-body-secondary">Bergabunglah dengan komunitas belajar yang inklusif, di mana keragaman dihargai dan kolaborasi diterapkan untuk memajukan pemahaman bersama.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
              <h2 class="text-center mb-2">Testimonial</h2>
              <div class="col-lg-4">
               <img src="<?= base_url('front-end/assets/images/aisahcrop.jpg') ?>" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h4 class="fw-normal mt-2">Aisah Nur Ramadhani</h4>
                <p>Saya sungguh bersyukur bisa menjadi bagian dari Hildan Univesity. Terima kasih, Hildan University, karena telah membuka pintu menuju impian saya tanpa mengenal batasan.</p>

              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img src="<?= base_url('front-end/assets/images/mfhutomo.jpg') ?>" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h4 class="fw-normal mt-2">Muhammad Fahmi Hutomo</h4>
                <p>Hildan University adalah tempat yang luar biasa untuk mengembangkan diri. Saya sangat terkesan dengan keberagaman dan inklusivitas yang ditanamkan di sini. Meskipun tidak ada biaya kuliah, kualitas pendidikan yang saya terima jauh melampaui harapan saya.</p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img src="<?= base_url('front-end/assets/images/isna.png') ?>" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h4 class="fw-normal mt-2">Isnaeni Nur Khasanah</h4>
                <p>Pendidikan gratis di Hildan University bukan hanya sekadar konsep, tetapi kenyataan yang luar biasa. Saya bersyukur atas peluang luar biasa ini.</p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div>
<?= $this->endSection() ?>