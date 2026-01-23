<!DOCTYPE html>
<html class="" lang="en">

    <?php include 'header.php'; ?>

<body>

    <?php include 'nav_top.php'; ?>

<div id="page-wrap">
    <!-- SUB HEADER -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="image/contactus_background.jpg">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>Contact us</h1>
                <h2 class="h4">If you’d like to talk to us about a project, or anything else, we’d love to hear from you.</h2>

                <div class="breadcrumb-container right clearfix">
                    <span>You are here: </span>
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div><!-- /breadcrumb -->
            </div><!-- /sub-wrapper -->
        </div><!-- /container -->
    </section>
    <!-- END / SUB HEADER -->

    <!-- CONTENT -->
    <section class="section bg-white pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">
                            <p>Have a project in mind or need more information about our services? Contact us today and our team will respond as soon as possible.</p>

                            <br />

                            <form id="contact-form" action="processContact.php" method="post">
                                <div class="group clearfix">
                                    <div class="group-item mb-30">
                                        <input type="text" name="name" placeholder="Name" />
                                    </div><!-- /group-item -->

                                    <div class="group-item mb-30">
                                        <input type="text" name="subject" placeholder="Subject" />
                                    </div><!-- /group-item -->
                                </div><!-- /group -->

                                <input type="email" name="email" placeholder="Email" class="mb-30" />

                                <textarea name="message" placeholder="Message"></textarea>

                                <button type="submit" class="btn btn-primary radius">Send message</button>
                                <div id="contact-content" style="padding-top: 20px"></div>
                            </form>
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_text">
                                <iframe
                                    src="https://maps.google.com/maps?q=2nd%20Floor%2C%20Sublot%2013%2C%20Lot%2019870%2C%20Aeroville%20Commercial%20Centre%20Phase%201%2C%20Jalan%20Stutong%20Baru%2C%2093350%20Kuching%2C%20Sarawak%2C%20Malaysia&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="600"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen
                                    loading="lazy">
                                </iframe>
                            </aside><!-- /widget_text -->

                            <aside class="widget widget_contact">
                                <ul>
                                    <li><i class="icon icon-paper-plane"></i><a href="#">cottdevelopment@gmail.com</a></li>
                                    <li><i class="icon icon-phone"></i>082-528567</li>
                                    <li><i class="icon icon-clock"></i>Mon - Fri: 8:00 - 18:00</li>
                                    <li><i class="fa fa-map-marker"></i>2nd Floor, Sublot 13, Lot 19870, Aeroville Commercial Centre Phase 1, Jalan Stutong Baru, 93350 Kuching, Sarawak, Malaysia.</li>
                                </ul>
                            </aside><!-- /widget_contact -->
                        </div><!-- /widget-area -->
                    </div><!-- /sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / CONTENT -->

    <?php include 'footer.php'; ?>

</body>
</html>