x <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Puskesmas | Hafiz azzaidan</title>

  <!-- Favicon, Apple Touch Icon, Android Chrome 192 & 512, Favicon 16 & 32, Site.Web Manifest  -->
  <link rel="icon" href="dist/img/favicon/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="dist/img/favicon/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="512x512" href="dist/img/favicon/android-chrome-512x512.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicon/favicon-32x32.png" />
  <link rel="manifest" href="dist/img/favicon/site.webmanifest" />

  <!-- Bootstrap core CSS -->
  <link href="assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/landing/css/fontawesome.css">
  <link rel="stylesheet" href="assets/landing/css/landing.css">
  <link rel="stylesheet" href="assets/landing/css/owl.css">
  <link rel="stylesheet" href="assets/landing/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<?php

require 'config/dbkoneksi.php';
$dokter = $dbh->query("SELECT COUNT(*) AS total FROM dokter")->fetchColumn();
$pasien = $dbh->query("SELECT COUNT(*) AS total FROM pasien")->fetchColumn();
$periksa = $dbh->query("SELECT COUNT(*) AS total FROM periksa")->fetchColumn();
$unit_kerja = $dbh->query("SELECT COUNT(*) AS total FROM unit_kerja")->fetchColumn();



?>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h1>Puskesmas</h1>
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Hal. Utama</a></li>
              <li class="scroll-to-section"><a href="#services">Layanan</a></li>
              <li class="scroll-to-section"><a href="#about">Tentang</a></li>
              <li class="scroll-to-section"><a href="#courses">Kegiatan</a></li>
              <li class="scroll-to-section"><a href="#team">Dokter</a></li>
              <li class="scroll-to-section"><a href="#events">Jadwal</a></li>
              <li class="scroll-to-section"><a href="auth/index.php" style="border-radius: 5px; border: 2px solid white; cursor: pointer; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Login!</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Puskesmas Kami</span>
                <h2>Puskesmas</h2>
                <p>Puskesmas adalah singkatan dari Pusat Kesehatan Masyarakat. Mereka adalah unit pelayanan kesehatan dasar di Indonesia yang berfokus pada pelayanan kesehatan primer.Puskesmas biasanya menjadi titik pusat bagi penduduk setempat dalam akses layanan kesehatan.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#services">Layanan</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Dokter Kami</span>
                <h2>Dokter Puskesmas</h2>
                <p>Dokter Puskesmas adalah tenaga medis yang memberikan pelayanan kesehatan primer kepada masyarakat. Mereka melakukan diagnosa, pengobatan, imunisasi, konseling, dan edukasi kesehatan. Dokter Puskesmas juga merujuk pasien ke fasilitas kesehatan yang lebih spesialis bila diperlukan.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#team">Dokter</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Kegiatan Kami</span>
                <h2>Kegiatan Puskesmas</h2>
                <p>Puskesmas memberikan pelayanan medis primer, termasuk diagnosa, pengobatan, dan imunisasi. Mereka juga memberikan konseling kesehatan dan edukasi kepada masyarakat. Kegiatan puskesmas mencakup penyuluhan tentang pola hidup sehat dan program pencegahan penyakit.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#courses">Kegiatan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/landing/images/service-01.png" alt="pelayanan_1">
            </div>
            <div class="main-content">
              <h4>Pelayanan Kesehatan Umum</h4>
              <p>Memberikan pemeriksaan kesehatan rutin, pengobatan, dan penyuluhan gaya hidup sehat kepada masyarakat secara umum.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/landing/images/service-02.png" alt="pelayanan_2">
            </div>
            <div class="main-content">
              <h4>Pelayanan Kesehatan Ibu dan Anak (KIA)</h4>
              <p>Pelayanan Kesehatan Ibu dan Anak (KIA) adalah pendekatan terintegrasi dalam sistem kesehatan yang dirancang khusus untuk memberikan perawatan yang holistik kepada ibu hamil, ibu menyusui, bayi, dan anak-anak.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/landing/images/service-03.png" alt="pelayanan_3">
            </div>
            <div class="main-content">
              <h4>Pelayanan Kesehatan Gigi dan Mulut</h4>
              <p>Memberikan pemeriksaan gigi, perawatan gigi dasar, dan penyuluhan tentang pentingnya menjaga kesehatan gigi dan mulut.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apa peran utama Puskesmas dalam kesehatan?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Peran utama Puskesmas adalah <strong>pelayanan kesehatan dasar kepada masyarakat, meliputi aspek promotif, preventif, kuratif, dan rehabilitatif.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apa saja jenis layanan kesehatan yang biasanya tersedia di Puskesmas?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Puskesmas menyediakan berbagai jenis layanan kesehatan, seperti pemeriksaan kesehatan umum, pelayanan kesehatan ibu dan anak, imunisasi, pelayanan gizi, dan pelayanan penyakit menular dan tidak menular.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Bagaimana Puskesmas bekerja sama dengan masyarakat setempat dalam melaksanakan program-program kesehatan?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Puskesmas melibatkan masyarakat setempat dalam perencanaan, pelaksanaan, dan evaluasi program-program kesehatan, serta menyediakan penyuluhan dan promosi kesehatan untuk meningkatkan kesadaran masyarakat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Apa yang dilakukan Puskesmas jika terdapat kasus penyakit yang tidak dapat ditangani di tingkat Puskesmas?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Puskesmas akan merujuk pasien tersebut ke fasilitas kesehatan yang lebih tinggi, seperti rumah sakit, untuk mendapatkan pelayanan yang lebih kompleks atau spesialis.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Tentang Puskesmas</h6>
            <h2>Apa Itu Puskesmas?</h2>
            <p>
              Pusat Kesehatan Masyarakat (Puskesmas) adalah unit pelayanan kesehatan yang menjadi tulang punggung sistem kesehatan di tingkat pertama di Indonesia. Secara deskriptif, Puskesmas biasanya terdiri dari bangunan atau gedung yang dilengkapi dengan berbagai fasilitas kesehatan dan tenaga medis yang terlatih. Lokasinya tersebar di berbagai wilayah, baik perkotaan maupun pedesaan, untuk menjangkau sebanyak mungkin masyarakat..</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Kegiatan</h6>
            <h2>Kegiatan Puskesmas</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Semua Kegiatan</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Pelayanan Kesehatan Utama</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Pelayanan Kesehatan Ibu dan Anak (KIA)</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Pelayanan Kesehatan Gigi dan Mulut</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-01.jpg" alt="" width="300px" height="270px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>Contoh Halaman Depan Puskesmas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-02.jpg" alt="" width="300px" height="300px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>Contoh Desain Puskesmas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-03.jpg" alt="" width="300px" height="270px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>Contoh Desain Ruang Tunggu Puskesmas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-04.jpg" alt="" width="300px" height="300px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>Ruang Tunggu Puskesmas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-05.jpg" alt="" width="300px" height="300px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>Gambar Depan Puskesmas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/landing/images/kegiatan-06.jpg" alt="" width="300px" height="300px"></a>
            </div>
            <div class="down-content">
              <span class="author">Pinterest</span>
              <h4>NS (NurseStation) Puskesmas</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="<?= $dokter ?>" data-speed="1000"></h2>
                  <p class="count-text ">Jumlah Dokter</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="<?= $periksa ?>" data-speed="1000"></h2>
                  <p class="count-text ">Pasien Telah Diperiksa</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="<?= $unit_kerja ?>" data-speed="1000"></h2>
                  <p class="count-text ">Unit Kerja</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="<?= $pasien ?>" data-speed="1000"></h2>
                  <p class="count-text ">Jumlah Pasien</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <?php
        $query = $dbh->query("SELECT nama, kategori FROM dokter LIMIT 4");
        foreach ($query as $row) {
        ?>

          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="assets/landing/images/dokter_ico.jpg" alt="">
                <span class="category"><?= $row['kategori'] ?></span>
                <h4><?= $row['nama'] ?></h4>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Jadwal</h6>
            <h2>Puskesmas Beroperasi</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/landing/images/jadwal-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Waktu Praktek</span>
                    <h4>Hari Senin - Jumat : </h4>
                  </li>
                  <li>
                    <span>Kegiatan:</span>
                    <h6>Semua Pelayanan</h6>
                  </li>
                  <li>
                    <span>Beroperasi:</span>
                    <h6>08.00 - 22.00</h6>
                  </li>
                  <li>
                    <span>Selama:</span>
                    <h6>14 Jam</h6>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/landing/images/jadwal-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Waktu Praktek</span>
                    <h4>Hari Sabtu :</h4>
                  </li>
                  <li>
                    <span>Kegiatan:</span>
                    <h6>Pelayanan umum, pemeriksaan kesehatan, imunisasi.</h6>
                  </li>
                  <li>
                    <span>Beroperasi:</span>
                    <h6>08.00 - 22.00</h6>
                  </li>
                  <li>
                    <span>Selama:</span>
                    <h6>14 Jam</h6>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/landing/images/jadwal-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Waktu Praktek</span>
                    <h4>Minggu dan Hari Libur Nasional : </h4>
                  </li>
                  <li>
                    <span>Kegiatan:</span>
                    <h6>Tidak Beroperasi</h6>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2025 Hafiz azzaidan. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="assets/landing/vendor/jquery/jquery.min.js"></script>
  <script src="assets/landing/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/landing/js/isotope.min.js"></script>
  <script src="assets/landing/js/owl-carousel.js"></script>
  <script src="assets/landing/js/counter.js"></script>
  <script src="assets/landing/js/custom.js"></script>

</body>

</html>