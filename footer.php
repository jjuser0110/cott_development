
    <!-- FOOTER -->
    <footer id="footer" class="footer bg-dark">
        <div class="foot-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_about">
                            <div class="logo">
                                <a href="./"><img src="image/logo_80.png" alt="logo" /></a>
                            </div><!-- /#logo -->
                            <p>COTT Development Sdn. Bhd. is a trusted construction company specializing in infrastructure, building, and earthwork projects across Sarawak. We are committed to quality workmanship and sustainable solutions.</p>
                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </aside><!-- /widget_about -->
                    </div><!-- /col -->

                    <div class="col-md-3 col-md-push-6 col-sm-6 col-xs-12">
                        <aside class="widget widget_subscribe">
                            <h3 class="widget-title h4">Contact Us</h3>
                            <p>Get in touch with us for any inquiries about our construction services.</p>
                            <button type="submit" class="btn btn-primary">Message Us</button>
                        </aside><!-- /widget_subscribe -->
                    </div><!-- /col -->

                    <div class="clearfix hidden-lg hidden-md hidden-xs"></div>

                    <div class="col-md-3 col-md-pull-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_contact">
                            <h3 class="widget-title h4">Get in touchs</h3>
                            <ul>
                                <li><i class="icon icon-paper-plane"></i><a href="#">cottdevelopment@gmail.com</a></li>
                                <li><i class="icon icon-phone"></i>082-528567</li>
                                <li><i class="fa fa-fax"></i>082-522270</li>
                                <li><i class="icon icon-clock"></i>Mon - Fri: 8:00 - 18:00</li>
                                <li><i class="fa fa-map-marker"></i>2nd Floor, Sublot 13, Lot 19870, Aeroville Commercial Centre Phase 1, Jalan Stutong Baru, 93350 Kuching, Sarawak, Malaysia.</li>
                            </ul>
                        </aside><!-- /widget_contact -->
                    </div><!-- /col -->

                    <div class="col-md-3 col-md-pull-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_infomation">
                            <h3 class="widget-title h4">Infomation</h3>
                            <ul class="list-style">
                                <li><a href="#">History of Brooklyn</a></li>
                                <li><a href="#">Penang Street Food</a></li>
                                <li><a href="#">The mist of madagascar</a></li>
                                <li><a href="#">J.R.R. Tolkien</a></li>
                                <li><a href="#">Morocco Road Trip</a></li>
                                <li><a href="#">The noise - Elixir</a></li>
                            </ul>
                        </aside><!-- /widget_infomation -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /foot-widget -->

        <div class="foot-credit">
            <div class="container">
                <ul>
                    <li><a href="input.html">Home</a></li>
                    <li><a href="about-us.html">Who we are</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="work4col.html">Our work</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
                <p>© 2025 <a href="./">Cott Development</a>. All rights reserved.</p>
            </div><!-- /container -->
        </div><!-- /foot-credit -->
    </footer>
    <!-- END / FOOTER -->
</div><!-- /page-wrap -->

<!-- JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="js/lib/owl.carousel.min.js"></script>
    <!-- Overflow Text -->
    <script type="text/javascript" src="js/lib/overflow-text.js"></script>

    <!-- Easing -->
    <script type="text/javascript" src="js/lib/jquery.easing.min.js"></script>

    <!-- Select to div -->
    <script type="text/javascript" src="js/lib/select2.min.js"></script>

    <!-- Parallax -->
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>

    <!-- Waypoint -->
    <script type="text/javascript" src="js/lib/waypoints.min.js"></script>

    <!-- Count To -->
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>

    <!-- Magnific Popup -->
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>

    <!-- Image Loaded -->
    <script type="text/javascript" src="js/lib/imagesloaded.pkgd.min.js"></script>

    <!-- Isotope -->
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>

    
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <script>
        function scrollOrRedirect(e, target) {
            e.preventDefault();

            const isHome =
                window.location.pathname === '/' ||
                window.location.pathname === '/index.php';

            if (isHome) {
                const el = document.querySelector(target);
                if (el) {
                    el.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                window.location.href = '/' + target;
            }
        }

        // Optional: scroll smoothly if user lands on page with anchor
        window.addEventListener('load', () => {
            if (window.location.hash) {
                const el = document.querySelector(window.location.hash);
                if (el) el.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>