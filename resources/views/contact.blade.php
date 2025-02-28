@extends('layouts.app')

@section('title', 'Contact')

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Kontak<span> Kami</span></p>
        </div>

        <div class="mb-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.996835214449!2d106.77748041002332!3d-6.647312193319571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf72fa441013%3A0xf9becfe9d1575e25!2sOla%20Stationery!5e0!3m2!1sid!2sid!4v1717346803137!5m2!1sid!2sid"
                width="1287" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-map flex-shrink-0"></i>
                    <div>
                        <h3>Our Address</h3>
                        <p>Jl. Pondok Indah, Jakarta Timur No. 9999</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>naurasyantik@gmail.com</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+62 123-456-789</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-share flex-shrink-0"></i>
                    <div>
                        <h3>Opening Hours</h3>
                        <div><strong>Sen-Sab:</strong> 10AM - 21PM;
                            <strong>Sunday:</strong> Closed
                        </div>
                    </div>
                </div>
            </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
            <div class="row">
                <div class="col-xl-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        required>
                </div>
                <div class="col-xl-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        required>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

    </div>
</section><!-- End Contact Section -->
@section('content')
