<?= $this->extend('layout/front_end/template'); ?>

<?= $this->section('content'); ?>
<main id="main">
    <br><br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('front_end/assets/img/slide/slide-1.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('front_end/assets/img/slide/slide-2.jpg') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('front_end/assets/img/slide/slide-3.jpg') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

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
                        <i class="icofont-computer"></i>
                        <h4>Kamar Mandi Dalem</a></h4>
                        <p>Memberikan fasilitas kamar mandi dalam yang memudahkan untuk pengguna dapat beraktifitas dengan leluasa</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-chart-bar-graph"></i>
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
                        <i class="icofont-settings"></i>
                        <h4>Tempat Parkir</a></h4>
                        <p>Tempat parkir yang luas dengan muat motor maupun mobil sekalipun</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


</main><!-- End #main -->
<?= $this->endSection(); ?>