@extends('frontend.header', ['title' => 'About Us'])
@section('page-content')
    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center ">
            <div class="container">
                <h1>About Us</h1>
            </div>
        </section><!-- End Hero -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>About V-Care</h3>
                            <p>
                                At V-CARE Hospital, we are dedicated to providing exceptional
                                    healthcare
                                    services with compassion, integrity, and excellence. Since our inception, we have been
                                    committed to serving our community with the highest standards of medical care,
                                    innovation,
                                    and personalized attention.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Compassionate Care</h4>
                                        <p>At V-CARE Hospital, we prioritize compassion and empathy in everything we do. Our
                                            dedicated team of healthcare professionals is committed to providing
                                            personalized care with warmth and understanding.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Experienced Specialists</h4>
                                        <p>Our hospital boasts a team of highly skilled and experienced physicians,
                                            surgeons, and specialists who are leaders in their respective fields.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Patient-Centered Approach</h4>
                                        <p>We believe in putting our patients at the center of everything we do. From the
                                            moment you walk through our doors, you'll experience our unwavering dedication
                                            to meeting your needs and exceeding your expectations.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-2 px-lg-5">
                        <h3 class="card-title
                        ">Our Mission</h3>
                            <p class="card-text">Our mission at V-CARE Hospital is to promote health, prevent illness,
                                and
                                provide accessible and comprehensive medical services to individuals and families in our
                                community. We strive to deliver compassionate care that meets the physical, emotional,
                                and
                                spiritual needs of our patients.</p>

                        <h3>Our Values</h3>
                        <div class="icon-box mt-2">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Compassion</a></h4>
                            <p class="description">We approach every patient with kindness, empathy, and respect,
                                understanding the unique challenges they face.</p>
                        </div>
                        <div class="icon-box mt-2">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Excellence</a></h4>
                            <p class="description">We are dedicated to achieving the highest standards of quality and safety
                                in everything we do, from medical treatment to patient experience.</p>
                        </div>

                        <div class="icon-box mt-2">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Integrity</a></h4>
                            <p class="description">We uphold the highest ethical standards, maintaining transparency and
                                honesty in all our interactions.</p>
                        </div>
                        <div class="icon-box mt-2">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Innovation</a></h4>
                            <p class="description">We continuously seek new and advanced methods to improve patient care,
                                embracing technology and research to stay at the forefront of medical innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->
@endsection
@section('script')
    <!-- Additional JS start-->

    <!-- Additional JS Ends-->
@endsection
