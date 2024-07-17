@extends('layouts.app')

@section('title', 'WAN Hijab Collection')

@section('content')
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">WAN Hijab<br>Collection</h2>
          <p data-aos="fade-up" data-aos-delay="100">Disini menyediakan berbagai jenis hijab yang aman dan nyaman saat
            digunakan.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="produk.html" class="btn-book-a-table">Produk</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hijabkol.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>Baca Selengkapnya <span>Mengenai Kami</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/hijab.jpg) ;"
            data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Kami menyediakan berbagai macam hijab yang nyaman untuk dikenakan sehari hari, bahan yang lembut dan
                sejuk, aktivitas harian anda pun takkan terganggu.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ringan: Kerudung yang ringan akan membuat Anda merasa nyaman
                  sepanjang hari tanpa memberikan beban tambahan pada kepala atau leher.</li>
                <li><i class="bi bi-check2-all"></i> Tidak Panas: Kerudung yang tidak membuat Anda merasa panas atau
                  gerah akan memungkinkan udara mengalir dengan baik, menjaga kesejukan kulit Anda.</li>
                <li><i class="bi bi-check2-all"></i> Tidak Menyebabkan Iritasi: Bahan kerudung yang lembut dan tidak
                  kasar akan mengurangi risiko iritasi pada kulit.</li>
              </ul>
              <p>
                Selain kerudung nyaman harga juga terjangkau dan gratis ongkir se-Jabodetabek!!
              </p>
              <div class="position-relative mt-4">
                <img src="assets/img/baju.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Mengapa memilih produk kami?</h3>
              <p>
                Pilihlah kami karena kami bukan sekadar jual hijab biasa. Kami adalah pilihan utama karena kami tidak
                hanya menyediakan hijab berkualitas tinggi, tetapi juga memberikan pengalaman berbelanja yang
                menyenangkan dan memuaskan. Dengan koleksi hijab yang unik, trendi, dan sesuai dengan gaya Anda, kami
                berkomitmen untuk memenuhi kebutuhan fashion hijab Anda. Kami juga menawarkan layanan pelanggan yang
                ramah dan responsif, serta harga yang terjangkau. Dengan memilih kami, Anda memilih untuk tampil dengan
                percaya diri dan gaya yang berkelas. Bersama kami, setiap hijabers akan merasa istimewa dan
                diperhatikan.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Bahan aman dan nyaman.</h4>
                  <p>Pilihlah kami karena kami menyediakan hijab yang terbuat dari bahan-bahan aman dan nyaman untuk
                    kesehatan dan kenyamanan Anda sepanjang hari.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Harga terjangkau</h4>
                  <p>Kami bangga menyajikan koleksi hijab berkualitas dengan harga terjangkau, memastikan bahwa gaya dan
                    kepercayaan diri tidak perlu dikenakan biaya mahal.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Gratis ongkir se-Jabodetabek</h4>
                  <p>Nikmati kenyamanan berbelanja dengan gratis ongkir untuk wilayah Jabodetabek, sehingga Anda dapat
                    mendapatkan hijab berkualitas tanpa harus memikirkan biaya pengiriman tambahan.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Produk Kami</h2>
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

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Article</h2>
          <p>Baca <span>Artikel</span> Kami Pliss</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/plafon.jpeg)">
              <h3>Berita: Orang jatuh dari plafon</h3>
              <p class="description">
                Insiden tragis terjadi ketika seorang individu jatuh dari atap sebuah bangunan di pusat kota.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/beras.jpeg)">
              <h3>Berita: Harga beras kini melonjak</h3>
              <p class="description">
                Para konsumen dikejutkan dengan lonjakan harga beras mahal yang mendadak dalam beberapa hari terakhir di
                pasar lokal.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/wo.jpg)">
              <h3>Berita: Harga wedding organizer</h3>
              <p class="description">
                Semakin banyak pasangan yang memilih untuk menggunakan jasa wedding organizer untuk mempersiapkan acara
                pernikahan mereka, meningkatkan permintaan akan layanan tersebut di pasar.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Gallery <span>Abaya</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($galleries as $gallery)
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
              href="{{ asset('gallery/' . $gallery) }}"><img src="{{ asset('gallery/' . $gallery) }}" class="img-fluid" alt="image"></a></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
  </main><!-- End #main -->

  <a href="https://api.whatsapp.com/send?phone=6281316966113" target="_blank">
    <button class="btn-floating whatsapp">
      <i class="fab fa-whatsapp"></i>
      <span>6281316966113</span>
    </button>
  </a>
@endsection
