<!DOCTYPE html>
<html class="" lang="en">

    <?php include 'header.php'; ?>

<body>

    <?php include 'nav_top.php'; ?>

<style>
    #service-slider {
        height: 400px;
        overflow: hidden;
    }

    /* Mobile view: auto height */
    @media (max-width: 767px) {
        #service-slider {
            height: 200px !important;
        }

        #service-slider img {
            height: auto !important;
        }
    }
</style>
<div id="page-wrap">
    <!-- SUB HEADER -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="image/service_background.jpg">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>Services</h1>
                <h2 class="h4">From foundation to finishing, we deliver comprehensive construction solutions tailored to your needs. Our experienced team ensures quality workmanship, timely delivery, and excellence in every project we undertake.</h2>

                <div class="breadcrumb-container right clearfix">
                    <span>You are here: </span>
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li>Our Service</li>
                    </ul>
                </div><!-- /breadcrumb -->
            </div><!-- /sub-wrapper -->
        </div><!-- /container -->
    </section>
    <!-- END / SUB HEADER -->

    <!-- CONTENT -->
    <section class="section bg-white pt-70 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">
                            <!-- Service Title -->
                            <h2 class="section-header" id="service-title">Building Construction</h2>
                            
                            <!-- Image Slider -->
                            <div class="work-slider mb-20" id="service-slider" style="height: 400px; overflow: hidden;">
                                <img src="image/building_construction1.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                <img src="image/building_construction2.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                <img src="image/building_construction6.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                <img src="image/building_construction4.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                            </div>

                            <div class="work-item-slider-wrapper">
                                <div class="work-item-slider" id="service-thumb-slider">
                                    <a href="#"><img src="image/building_construction1.jpg" alt="" style="width: 100%; height: 80px; object-fit: cover;" /></a>
                                    <a href="#"><img src="image/building_construction2.jpg" alt="" style="width: 100%; height: 80px; object-fit: cover;" /></a>
                                    <a href="#"><img src="image/building_construction6.jpg" alt="" style="width: 100%; height: 80px; object-fit: cover;" /></a>
                                    <a href="#"><img src="image/building_construction4.jpg" alt="" style="width: 100%; height: 80px; object-fit: cover;" /></a>
                                </div>
                            </div>

                            <div class="divider pt-20"></div>

                            <div class="page-grid">
                                <div class="page-content col-9">
                                    <h2 class="section-header">Description</h2>
                                    <div id="service-description">
                                        <p>We undertake complete building construction works for residential, commercial, institutional, and government projects, from foundation works through to final completion and handover.</p>
                                        <br />
                                        <p>Our building construction services are backed by experienced professionals, quality materials, and strict adherence to safety standards. We ensure timely project delivery while maintaining the highest levels of workmanship and client satisfaction.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <h2 class="section-header">Frequently Asked Questions</h2>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="panel-group" id="accordion1">
                                        <div class="panel">
                                            <button class="panel-btn" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content1" aria-expanded="true" aria-controls="content1">
                                                What types of projects do you handle?
                                            </button>
                                            <div id="content1" class="collapse in" aria-expanded="true">
                                                <p>We handle a wide range of construction projects including residential buildings, commercial complexes, institutional facilities, and government infrastructure. Our experienced team is equipped to manage projects of various scales and complexities.</p>
                                            </div>
                                        </div>

                                        <div class="panel">
                                            <button class="panel-btn collapsed" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content2" aria-expanded="false" aria-controls="content2">
                                                How do you ensure quality and safety?
                                            </button>
                                            <div id="content2" class="collapse" aria-expanded="false">
                                                <p>We prioritize safety and quality through strict compliance with industry standards, regular site inspections, and the use of certified materials. Our qualified team follows comprehensive safety protocols to protect workers, clients, and the community.</p>
                                            </div>
                                        </div>

                                        <div class="panel">
                                            <button class="panel-btn collapsed" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content3" aria-expanded="false" aria-controls="content3">
                                                What is your project timeline?
                                            </button>
                                            <div id="content3" class="collapse" aria-expanded="false">
                                                <p>Project timelines vary based on scope and complexity. We provide detailed schedules during the planning phase and maintain transparent communication throughout the project to ensure timely completion within agreed deadlines.</p>
                                            </div>
                                        </div>

                                        <div class="panel">
                                            <button class="panel-btn collapsed" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content4" aria-expanded="false" aria-controls="content4">
                                                Do you provide warranties?
                                            </button>
                                            <div id="content4" class="collapse" aria-expanded="false">
                                                <p>Yes, we provide warranties on our construction work and stand behind the quality of our craftsmanship. Warranty terms are discussed and agreed upon during the contract phase based on the specific project requirements.</p>
                                            </div>
                                        </div>

                                        <div class="panel">
                                            <button class="panel-btn collapsed" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content5" aria-expanded="false" aria-controls="content5">
                                                Can you work within our budget?
                                            </button>
                                            <div id="content5" class="collapse" aria-expanded="false">
                                                <p>We work closely with clients to develop cost-effective solutions that meet their budget requirements without compromising on quality. Our team provides transparent cost estimates and helps optimize resources throughout the project.</p>
                                            </div>
                                        </div>

                                        <div class="panel">
                                            <button class="panel-btn collapsed" type="button" data-parent="#accordion1" data-toggle="collapse" data-target="#content6" aria-expanded="false" aria-controls="content6">
                                                Do you offer maintenance services after completion?
                                            </button>
                                            <div id="content6" class="collapse" aria-expanded="false">
                                                <p>Yes, we offer comprehensive maintenance and support services after project completion. Our team remains available to address any issues and ensure your facility continues to operate efficiently.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="divider"></div>

                        </main>
                    </div>
                </div>

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_linklist">
                                <ul>
                                    <li class="active"><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="building">Building Construction</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="civil">Civil & Infrastructure Works</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="earthworks">Earthworks & Site Preparation</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="drainage">Drainage, Irrigation & River Protection</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="renovation">Renovation & Maintenance</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="government">Institutional & Government Projects</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="mechanical">Mechanical & Ancillary Structures</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="road">Road Marking & Traffic Works</a></li>
                                    <li><a href="#" class="btn btn-gray fullwidth text-left service-link" data-service="cleaning">Cleaning & Support Services</a></li>
                                </ul>
                            </aside>

                            <aside class="widget widget_contact">
                                <h3 class="widget-title">Our offices</h3>
                                <ul>
                                    <li><i class="icon icon-paper-plane"></i><a href="#">cottdevelopment@gmail.com</a></li>
                                    <li><i class="icon icon-phone"></i>082-528567</li>
                                    <li><i class="fa fa-fax"></i>082-522270</li>
                                    <li><i class="icon icon-clock"></i>Mon - Fri: 8:00 - 18:00</li>
                                    <li><i class="fa fa-map-marker"></i>2nd Floor, Sublot 13, Lot 19870, Aeroville Commercial Centre Phase 1, Jalan Stutong Baru, 93350 Kuching, Sarawak, Malaysia.</li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / CONTENT -->

    <!-- GET QUOTE -->
    <section class="section bg-primary pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <h3 class="play-font fsi mb-0 white text-center text-left-md" style="line-height: 2.3em;">What does innovation mean to you? click here to see what it means to us.</h3>
                </div><!-- /col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="text-center text-right-md"><button type="button" class="btn btn-transparent" onclick="window.location.href='contact.php'">Get a quote</button></div>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / GET QUOTE -->

    <?php include 'footer.php'; ?>

</body>
</html>