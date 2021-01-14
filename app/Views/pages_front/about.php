<?= $this->extend('layout/front_end/template'); ?>

<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol>
                    <li><a href="<?= base_url('view'); ?>">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>Penghuni Kost</h2>
                    <h3>Website yang menerapkan service sederhana terkait dengan tujuan penerapan tugas yang telah diberikan untuk menopang UAS</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Website Penghuni Kost yang dibuat oleh Wisnawa dan Ega yang bertujuan untuk tugas UAS dan diberlakukan untuk menerapkan Web Service. Menggunakan bahasa pemograman yang digunakan diantaranya :
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> PHP V.7.4</li>
                        <li><i class="ri-check-double-line"></i> Codenigter 4</li>
                        <li><i class="ri-check-double-line"></i> Bootstrap 4 Template</li>
                        <li><i class="ri-check-double-line"></i> Web Service</li>
                    </ul>
                    <p class="font-italic">
                        Untuk penerapannya tersebut dapat terlihat bahwa terbentuknya website Penghuni Kost yang difungsikan untuk pendataan setiap orang yang berada di kost tersebut.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p>Our Hardowrking Team</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= base_url('front_end/assets/img/team/team-1.png'); ?>" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Wayan Agus Wisnawa</h4>
                            <span>Web Developer </span>
                            <p>Kelas MI 5A</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= base_url('front_end/assets/img/team/team-2.png'); ?>" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Putu Ega Suwidi Dharma</h4>
                            <span>Web Design</span>
                            <p>Kelas MI 5A</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>