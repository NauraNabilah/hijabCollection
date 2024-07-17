@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Cek Produk <span>Kami Sekarang!!</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Pashmina</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Segiempat</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Bergo</h4>
                    </a>
                </li><!-- End tab nav item -->
            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <h3>Pashmina</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/rayon.jpg" class="glightbox"><img src="assets/img/rayon.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Rayon</h4>
                            <p class="price">
                                Rp. 32.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/silk.jpg" class="glightbox"><img src="assets/img/silk.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Silk</h4>
                            <p class="price">
                                Rp. 24.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/shimmer.jpg" class="glightbox"><img src="assets/img/shimmer.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Shimmer</h4>
                            <p class="price">
                                Rp. 70.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/ceruty.jpg" class="glightbox"><img src="assets/img/ceruty.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Ceruty</h4>
                            <p class="price">
                                Rp. 17.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/plisket.jpg" class="glightbox"><img src="assets/img/plisket.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Plisket</h4>
                            <p class="price">
                                Rp. 18.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/jersey.jpg" class="glightbox"><img src="assets/img/jersey.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Jersey</h4>
                            <p class="price">
                                Rp. 22.000
                            </p>
                        </div><!-- Menu Item -->
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/shawl.jpeg" class="glightbox"><img src="assets/img/shawl.jpeg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Shawl</h4>
                            <p class="price">
                                Rp. 30.000
                            </p>
                        </div><!-- Menu Item -->
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/crinkle.jpg" class="glightbox"><img src="assets/img/crinkle.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Crinkle</h4>
                            <p class="price">
                                Rp. 10.000
                            </p>
                        </div><!-- Menu Item -->
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/oval.jpg" class="glightbox"><img src="assets/img/oval.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Pashmina Oval</h4>
                            <p class="price">
                                Rp. 100.000
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-breakfast">

                    <div class="tab-header text-center">
                        <h3>Segiempat</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/paris.jpg" class="glightbox"><img src="assets/img/paris.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Paris Premium</h4>
                            <p class="price">
                                Rp. 25.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/bella.jpg" class="glightbox"><img src="assets/img/bella.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bella Square</h4>
                            <p class="price">
                                Rp. 14.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/elzatta.jpg" class="glightbox"><img src="assets/img/elzatta.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Elzatta</h4>
                            <p class="price">
                                Rp. 23.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/rabbani.jpg" class="glightbox"><img src="assets/img/rabbani.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Rabbani</h4>
                            <p class="price">
                                Rp. 50.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/zaskia.jpg" class="glightbox"><img src="assets/img/zaskia.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Zaskia Mecca</h4>
                            <p class="price">
                                Rp. 45.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/zoya.jpg" class="glightbox"><img src="assets/img/zoya.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Zoya</h4>
                            <p class="price">
                                Rp. 25.000
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="menu-lunch">

                    <div class="tab-header text-center">
                        <h3>Bergo</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/bergo j.jpg" class="glightbox"><img src="assets/img/bergo j.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Jersey</h4>
                            <p class="price">
                                Rp. 7.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/bergo s.png" class="glightbox"><img src="assets/img/bergo s.png"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Silk</h4>
                            <p class="price">
                                Rp. 17.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/may=ryam.jpg" class="glightbox"><img src="assets/img/may=ryam.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Maryam</h4>
                            <p class="price">
                                Rp. 8.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/tali.jpg" class="glightbox"><img src="assets/img/tali.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Tali</h4>
                            <p class="price">
                                Rp. 56.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/instan.jpg" class="glightbox"><img src="assets/img/instan.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Instan</h4>
                            <p class="price">
                                Rp. 30.000
                            </p>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/hamid.jpg" class="glightbox"><img src="assets/img/hamid.jpg"
                                    class="menu-img img-fluid" alt=""></a>
                            <h4>Bergo Hamidah</h4>
                            <p class="price">
                                Rp. 12.000
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Lunch Menu Content -->

            </div>

        </div>
    </section><!-- End Menu Section -->

@endsection
