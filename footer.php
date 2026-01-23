
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
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='contact.php'">Message Us</button>
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
                                <li><a href="#aboutus" onclick="scrollOrRedirect(event, '#aboutus')">About Us</a></li>
                                <li><a href="#ourservice" onclick="scrollOrRedirect(event, '#ourservice')">Our Service</a></li>
                                <li><a href="#ourwork" onclick="scrollOrRedirect(event, '#ourwork')">Our Work</a></li>
                                <li><a href="#ourleader" onclick="scrollOrRedirect(event, '#ourleader')">Our Leader</a></li>
                                <li><a href="core_value.php">Core Value</a></li>
                                <li><a href="partner.php">Partnership</a></li>
                                <li><a href="certification.php">Certification</a></li>
                            </ul>
                        </aside><!-- /widget_infomation -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /foot-widget -->

        <div class="foot-credit">
            <div class="container">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="#aboutus" onclick="scrollOrRedirect(event, '#aboutus')">Who we are</a></li>
                    <li><a href="#ourservice" onclick="scrollOrRedirect(event, '#ourservice')">Our Service</a></li>
                    <li><a href="#ourwork" onclick="scrollOrRedirect(event, '#ourwork')">Our Work</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
                <p>© 2025 <a href="./" style="color:white">Cott Development</a>. All rights reserved.</p>
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

    <script>
    // Service content data
    const serviceData = {
        building: {
            title: "Building Construction",
            description: `<p>We undertake complete building construction works for residential, commercial, institutional, and government projects, from foundation works through to final completion and handover.</p>
            <br />
            <p>Our building construction services are backed by experienced professionals, quality materials, and strict adherence to safety standards. We ensure timely project delivery while maintaining the highest levels of workmanship and client satisfaction.</p>`,
            images: [
                'image/building_construction1.jpg',
                'image/building_construction2.jpg',
                'image/building_construction5.jpg',
                'image/building_construction4.jpg'
            ]
        },
        civil: {
            title: "Civil & Infrastructure Works",
            description: `<p>We carry out civil and infrastructure works including road construction, road upgrading, drainage systems, access roads, and supporting infrastructure for public and private developments.</p>
            <br />
            <p>Our civil engineering team brings extensive expertise in delivering robust infrastructure solutions that meet regulatory requirements and serve communities for decades. We handle projects from initial site assessment through to final commissioning.</p>`,
            images: [
                'image/civil_work1.jpg',
                'image/civil_work5.jpg',
                'image/civil_work3.jpg',
                'image/civil_work6.jpg'
            ]
        },
        earthworks: {
            title: "Earthworks & Site Preparation",
            description: `<p>Our earthworks services include land clearing, excavation, filling, leveling, and subbase preparation to support building, road, and infrastructure construction projects.</p>
            <br />
            <p>With modern equipment and experienced operators, we ensure precise site preparation that provides a solid foundation for your construction project. Our earthworks services are efficient, safe, and environmentally responsible.</p>`,
            images: [
                'image/earthwork1.jpg',
                'image/earthwork2.jpg',
                'image/earthwork5.jpg',
                'image/earthwork4.jpg'
            ]
        },
        drainage: {
            title: "Drainage, Irrigation & River Protection",
            description: `<p>We provide drainage improvement, irrigation infrastructure, and riverbank protection works to enhance flood control, water management, and long-term environmental stability.</p>
            <br />
            <p>Our specialized team designs and implements effective water management solutions that protect properties, enhance agricultural productivity, and preserve natural waterways for sustainable development.</p>`,
            images: [
                'image/river_protection6.jpg',
                'image/river_protection2.jpg',
                'image/river_protection1.jpg',
                'image/river_protection5.jpg'
            ]
        },
        renovation: {
            title: "Renovation, Refurbishment & Maintenance",
            description: `<p>We deliver renovation, refurbishment, and maintenance works for existing buildings, including interior upgrading, structural repairs, roofing, repainting, and related improvement works.</p>
            <br />
            <p>Whether you need minor repairs or major refurbishment, our skilled team restores and enhances your property while minimizing disruption. We breathe new life into existing structures with quality craftsmanship and attention to detail.</p>`,
            images: [
                'image/renovation1.jpg',
                'image/renovation2.jpg',
                'image/renovation3.jpg',
                'image/renovation4.jpg'
            ]
        },
        government: {
            title: "Institutional & Government Projects",
            description: `<p>We specialize in delivering construction and infrastructure projects for government agencies, statutory bodies, and institutional clients in compliance with required standards and procedures.</p>
            <br />
            <p>Our experience with government projects ensures strict adherence to procurement regulations, quality standards, and timely delivery. We understand the unique requirements of public sector construction and deliver accordingly.</p>`,
            images: [
                'image/government_project6.jpg',
                'image/government_project5.jpg',
                'image/government_project2.jpg',
                'image/government_project4.jpg'
            ]
        },
        mechanical: {
            title: "Mechanical & Ancillary Civil Structures",
            description: `<p>We construct ancillary civil structures such as pump houses, tank plinths, and supporting facilities for mechanical and fire protection systems within development projects.</p>
            <br />
            <p>These specialized structures are essential for modern building systems. Our team ensures proper design integration and construction quality to support mechanical equipment and safety systems effectively.</p>`,
            images: [
                'image/ancillary1.jpg',
                'image/ancillary6.jpg',
                'image/ancillary3.jpg',
                'image/ancillary5.jpg'
            ]
        },
        road: {
            title: "Road Marking & Traffic Works",
            description: `<p>We supply and apply reflective thermoplastic road markings to improve road safety, visibility, and traffic control in accordance with local authority specifications.</p>
            <br />
            <p>Our road marking services use durable, high-visibility materials that enhance traffic safety and comply with regulatory standards. We work efficiently to minimize traffic disruption while delivering quality results.</p>`,
            images: [
                'image/traffic_work1.jpg',
                'image/traffic_work2.jpg',
                'image/traffic_work3.jpg',
                'image/traffic_work4.jpg'
            ]
        },
        cleaning: {
            title: "Cleaning, Maintenance & Support Services",
            description: `<p>We provide cleaning, maintenance, manpower support, and related services to ensure construction projects are completed, operational, and well-maintained.</p>
            <br />
            <p>Our comprehensive support services keep your facilities running smoothly long after construction completion. From routine cleaning to ongoing maintenance, we ensure your investment remains in optimal condition.</p>`,
            images: [
                'image/cleaning_service1.jpg',
                'image/cleaning_service5.jpg',
                'image/cleaning_service7.jpg',
                'image/cleaning_service4.jpg'
            ]
        }
    };

    // Function to update slider images without destroying layout
    function updateSliderImages(images) {
        // Update main slider images (only original slides, not cloned)
        $('.work-slider').find('img').not('.slick-cloned img').each(function(index) {
            if (images[index]) {
                $(this).attr('src', images[index]);
            }
        });
        
        // Update thumbnail slider images (only original slides, not cloned)
        $('.work-item-slider').find('img').not('.slick-cloned img').each(function(index) {
            if (images[index]) {
                $(this).attr('src', images[index]);
            }
        });
        
        // Refresh the sliders to update cloned slides
        $('.work-slider').slick('setPosition');
        $('.work-item-slider').slick('setPosition');
        
        // Go to first slide
        $('.work-slider').slick('slickGoTo', 0);
        $('.work-item-slider').slick('slickGoTo', 0);
    }

    // Handle service link clicks
    document.addEventListener('DOMContentLoaded', function() {
        const serviceLinks = document.querySelectorAll('.service-link');
        
        serviceLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.widget_linklist li').forEach(li => {
                    li.classList.remove('active');
                });
                
                // Add active class to clicked link's parent
                this.parentElement.classList.add('active');
                
                // Get service data
                const serviceKey = this.getAttribute('data-service');
                const service = serviceData[serviceKey];
                
                // Update content
                document.getElementById('service-title').textContent = service.title;
                document.getElementById('service-description').innerHTML = service.description;
                
                // Update slider images
                updateSliderImages(service.images);
                
                // Scroll to top of content
                document.getElementById('content').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    });
</script>