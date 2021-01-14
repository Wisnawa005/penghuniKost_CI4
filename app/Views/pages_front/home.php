<?= $this->extend('layout/front_end/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(<?= base_url('front_end/assets/img/slide/slide-1.jpg') ?>)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Penghuni Kost</span></h2>
                        <p class="animate__animated animate__fadeInUp">Selamat datang pada website kami untuk bisa melihat fasilitas dan harga dari kost kami</p>

                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(<?= base_url('front_end/assets/img/slide/slide-2.jpg') ?>)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Akses Jalan</h2>
                        <p class="animate__animated animate__fadeInUp">Jangan khawatir karena kost kami terletak di daerah Denpasar, Bali</p>

                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(<?= base_url('front_end/assets/img/slide/slide-3.jpg') ?>)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Harga Terjangkau</h2>
                        <p class="animate__animated animate__fadeInUp">Memberikan penawaran yang terjangkau untuk melakukan penyewaan secara bertahap dan terencana</p>

                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Service</h2>
                <p>Penghuni Kost</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-building"></i>
                        <h4>Kamar Mandi Dalem</a></h4>
                        <p>Memberikan fasilitas kamar mandi dalam yang memudahkan untuk pengguna dapat beraktifitas dengan leluasa</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-culinary"></i>
                        <h4>Dapur Dalam</a></h4>
                        <p>Memberikan kenyamanan untuk memasak secara private</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-bed"></i>
                        <h4>Kasur</a></h4>
                        <p>Memberikan kenyamanan dan kemudahan supaya bisa tinggal tidur saja</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-motor-biker"></i>
                        <h4>Tempat Parkir</a></h4>
                        <p>Tempat parkir yang luas dengan muat motor maupun mobil sekalipun</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


</main><!-- End #main -->
<?= $this->endSection(); ?>