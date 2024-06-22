<?php include 'header.php' ?>


<!-- ======= Contact Section ======= -->

<section id="contact" class="contact section-bg contactpage">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p> -->
        </div>

        <div class="row  justify-content-center">

            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>127/Gauri Apartment <br>
                                Navghar Road, Near Saree Compound<br>
                                Vasai Road (East) - 401208 <br><br>
                            </p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@deltasoftsys.in</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>8976039699 / 8976069699</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-4">
            <div class="col-lg">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=Gauri+App%2C+near+bank+of+baroda%2C+Vasai+East%2C+Vasai-Virar%2C+Maharashtra+401208&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://textcaseconvert.com/"></a><br><a href="https://timenowin.net/"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 360px;
                                width: 100%;
                            }
                        </style>
                        <!-- <a href="https://www.mapembed.net">google satellite maps zoom</a> -->
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 360px;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="w-100 form-control" id="name" placeholder="Your Name" autocomplete="off" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" autocomplete="off" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Contact Section -->

<?php include 'footer.php' ?>