<!DOCTYPE html>
<html class="" lang="en">

    <?php include 'header.php'; ?>

<body>

    <?php include 'nav_top.php'; ?>

<style>
/* Main slider image responsive heights */
.slider-main-image {
    width: auto;
    height: 500px;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

@media (max-width: 767px) {
    .slider-main-image {
        height: 250px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .slider-main-image {
        height: 350px;
    }
}
</style>

<?php
// Project data array
$projects = array(
    1 => array(
        'title' => 'Road Marking Works – Kuching South',
        'client' => 'MBKS',
        'category' => 'Road Works',
        'location' => 'Kuching South, Sarawak',
        'year' => '2023',
        'value' => 'RM 2 MIL above',
        'description' => array(
            "This project involved the supply and application of reflective thermoplastic paint markings to roads in Zones 5 and 6 within the jurisdiction of the Council of the City of Kuching South. The scope included zebra crossings, lane markings, directional arrows, and other road safety markings, all completed to meet local authority specifications and enhance traffic safety for road users.",
            "Our team ensured strict quality control and adherence to safety protocols throughout the project. The work was completed efficiently, minimizing disruption to local traffic while providing durable and highly visible road markings that improve navigation and reduce accident risks."
        ),
        'images' => array(
            'image/roadmarking1.jpg',
            'image/roadmarking2.jpg',
            'image/roadmarking3.jpg'
        )
    ),
    2 => array(
        'title' => 'Masjid As-Syuhadah Construction',
        'client' => 'Markas Briged Ketiga Infantri Malaysia',
        'category' => 'Building Construction',
        'location' => 'Kuching, Sarawak',
        'year' => '2023',
        'value' => 'RM 2,498,688',
        'description' => array(
            "The project entailed the construction of the new Masjid As-Syuhadah Tun Abang Haji Openg on part of Lot 202, Blk 17, Kuching Central Land District. The mosque design incorporated traditional Islamic architectural elements while using modern construction techniques to ensure structural integrity, aesthetic appeal, and durability.",
            "The construction included foundations, structural framing, roofing, interior finishes, and landscaping. Our team coordinated closely with the client to ensure compliance with religious and cultural requirements while maintaining timelines and budget, delivering a facility that serves both spiritual and community needs."
        ),
        'images' => array(
            'image/masjidassyuhadah1.jpg',
            'image/masjidassyuhadah2.jpg',
            'image/masjidassyuhadah3.jpg'
        )
    ),
    3 => array(
        'title' => 'Jalan Baru Matang Road Upgrade',
        'client' => 'Mirecont SDN BHD',
        'category' => 'Road Works',
        'location' => 'Matang, Sarawak',
        'year' => '2024',
        'value' => 'RM 2,693,600',
        'description' => array(
            "This project focused on the upgrade of Jalan Baru Matang, including subbase construction and completion of remaining works. The aim was to improve road durability, ensure smooth traffic flow, and enhance overall safety along this critical access route in the Kuching Division.",
            "Key tasks included pavement strengthening, drainage improvements, road surfacing, and installation of safety features such as signage and road markings. Throughout the project, we prioritized minimizing disruption to local communities while adhering to strict construction quality and safety standards."
        ),
        'images' => array(
            'image/matangroadupgrade1.jpg',
            'image/matangroadupgrade2.jpg',
            'image/matangroadupgrade3.jpg'
        )
    ),
    4 => array(
        'title' => 'Construction of Wet Market (Non-Halal)',
        'client' => 'Majlis daerah Bau / Bau Council',
        'category' => 'Earthwork & Construction',
        'location' => 'Bau, Sarawak',
        'year' => '2020',
        'value' => 'RM 793,540.50',
        'description' => array(
            "The project involved the redevelopment of a wet market in Bau, focusing on extensive earthworks, foundation preparation, and structural construction to accommodate non-halal food vendors. The design incorporated functional market layouts with adequate stalls, drainage systems, and public access pathways.",
            "Site preparation included grading, excavation, and soil stabilization to ensure a stable base for construction. Throughout the project, our team coordinated with local authorities to meet regulatory standards and ensure that the market would serve the community efficiently and safely."
        ),
        'images' => array(
            'image/bayearthwork1.jpeg',
            'image/bayearthwork2.jpeg',
            'image/bayearthwork3.jpeg'
        )
    ),
    5 => array(
        'title' => 'Army Camp Cabin Office Construction',
        'client' => 'Indra NDRA Petra SDN BHD',
        'category' => 'Building Construction',
        'location' => 'Kuching, Sarawak',
        'year' => '2024',
        'value' => 'RM 195,486.40',
        'description' => array(
            "This project comprised the construction of modular cabin offices for an army camp at Jalan Penrissen, Kuching. The cabins were designed to meet military specifications, offering durable and functional office spaces for administrative and operational activities within the camp.",
            "Our team handled the entire process from foundation works to structural assembly, installation of utilities, and interior finishes. The modular approach allowed for quick assembly and future scalability, ensuring that the facilities met operational requirements efficiently."
        ),
        'images' => array(
            'image/cabinoffice1.jpeg',
            'image/cabinoffice3.jpeg',
            'image/cabinoffice2.jpeg'
        )
    ),
    6 => array(
        'title' => 'New Community Hall – Igan, Mukah',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Igan, Mukah',
        'year' => '2019',
        'value' => 'RM 2,633,300',
        'description' => array(
            "The project involved constructing a new community hall in Igan, Mukah, providing a central facility for events, meetings, and local gatherings. The hall includes a main hall, stage, kitchen facilities, and washrooms designed to serve community needs effectively.",
            "Construction included site preparation, structural works, finishing, and landscaping. Our team ensured compliance with local building codes and standards while delivering a safe and durable facility that enhances social cohesion and serves as a community hub."
        ),
        'images' => array(
            'image/communityhall1.jpg',
            'image/communityhall2.jpg',
            'image/communityhall3.jpg'
        )
    ),
    7 => array(
        'title' => 'Redevelopment of SK Lebur Remun – Serian',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Serian, Sarawak',
        'year' => '2020',
        'value' => 'RM 5,302,341.90',
        'description' => array(
            "This project focused on the redevelopment of SK Lebur Remun in Serian, improving facilities for underprivileged state school students. The work included classrooms, administrative blocks, playgrounds, and other educational facilities, enhancing the learning environment significantly.",
            "The project emphasized modern construction techniques and compliance with safety and educational standards. Our team ensured timely completion while maintaining high-quality workmanship, creating a school that provides long-term educational benefits to the local community."
        ),
        'images' => array(
            'image/skleburremun1.jpeg',
            'image/skleburremun2.jpeg',
            'image/skleburremun3.jpeg'
        )
    ),
    8 => array(
        'title' => 'Redevelopment of SK Nanga Kesit – Lubok Antu',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Lubok Antu, Sarawak',
        'year' => '2020',
        'value' => 'RM 4,761,493.72',
        'description' => array(
            "The project involved redeveloping SK Nanga Kesit in Lubok Antu to provide modern educational facilities to a remote area. The scope included classrooms, administration blocks, and support facilities, improving the school's overall functionality and accessibility.",
            "Our team focused on quality construction and timely execution, ensuring the building met all safety and educational standards. The redevelopment provides students with a safe, well-equipped environment that supports effective learning and community growth."
        ),
        'images' => array(
            'image/sknangakesit1.jpeg',
            'image/sknangakesit2.jpeg',
            'image/sknangakesit3.jpeg'
        )
    )
);

// Get project ID from URL
$project_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Get project data or default to first project
$project = isset($projects[$project_id]) ? $projects[$project_id] : $projects[1];
?>

<div id="page-wrap">
    <!-- SUB HEADER -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="image/work_background.jpg">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>Our Works</h1>
                <h2 class="h4">We take pride in delivering high-quality projects across diverse sectors. If you’d like to discuss a project, collaboration, or any inquiries, we’d be delighted to hear from you.</h2>

                <div class="breadcrumb-container right clearfix">
                    <span>You are here: </span>
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li>Our Work</a></li>
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

            <!-- Left Sidebar -->
            <div class="col-md-3 col-sm-12 col-xs-12" style="padding-bottom:20px;">
                <h2 class="section-header">Projects</h2>
                <div id="sidebar" class="sidebar">
                    <div id="widget-area">

                        <!-- Navigation Links -->
                        <?php
                            // Get current project id from URL
                            $current_id = isset($_GET['id']) ? $_GET['id'] : 1; // default to 1
                        ?>

                        <aside class="widget widget_linklist">
                            <ul>
                                <li class="<?php echo ($current_id == 1) ? 'active' : ''; ?>">
                                    <a href="work.php?id=1" class="btn btn-gray fullwidth text-left">Road Marking Works</a>
                                </li>
                                <li class="<?php echo ($current_id == 2) ? 'active' : ''; ?>">
                                    <a href="work.php?id=2" class="btn btn-gray fullwidth text-left">Masjid As-Syuhadah Construction</a>
                                </li>
                                <li class="<?php echo ($current_id == 3) ? 'active' : ''; ?>">
                                    <a href="work.php?id=3" class="btn btn-gray fullwidth text-left">Jalan Matang Road Upgrade</a>
                                </li>
                                <li class="<?php echo ($current_id == 4) ? 'active' : ''; ?>">
                                    <a href="work.php?id=4" class="btn btn-gray fullwidth text-left">Construction of Wet Market</a>
                                </li>
                                <li class="<?php echo ($current_id == 5) ? 'active' : ''; ?>">
                                    <a href="work.php?id=5" class="btn btn-gray fullwidth text-left">Army Camp Cabin Office Construction</a>
                                </li>
                                <li class="<?php echo ($current_id == 6) ? 'active' : ''; ?>">
                                    <a href="work.php?id=6" class="btn btn-gray fullwidth text-left">New Community Hall</a>
                                </li>
                                <li class="<?php echo ($current_id == 7) ? 'active' : ''; ?>">
                                    <a href="work.php?id=7" class="btn btn-gray fullwidth text-left">Redevelopment of SK Lebur Remun</a>
                                </li>
                                <li class="<?php echo ($current_id == 8) ? 'active' : ''; ?>">
                                    <a href="work.php?id=8" class="btn btn-gray fullwidth text-left">Redevelopment of SK Nanga Kesit</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div><!-- /Left Sidebar -->

            <!-- Main Content -->
            <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="row">
                    <!-- Image Slider -->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="work-slider mb-20">
                            <?php foreach($project['images'] as $image): ?>
                            <div>
                                <img src="<?php echo $image; ?>" alt="" class="slider-main-image" />
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="work-item-slider-wrapper">
                            <div class="work-item-slider">
                                <?php foreach($project['images'] as $image): ?>
                                <a href="#"><img src="<?php echo $image; ?>" alt="" style="width:100%;height:80px;object-fit:cover;" /></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Project Info on Right -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h2 class="section-header">Project Info</h2>
                        <p><?php echo $project['title']; ?></p>

                        <br />

                        <h3 class="h5 text-uppercase">Client</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['client']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase">Categories</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['category']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase">Location</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['location']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase">Year Complete</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['year']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase">Value</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['value']; ?></h4>
                    </div><!-- /Project Info -->

                </div><!-- /row -->

                <div class="divider"></div>

                <!-- Description -->
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2 class="section-header">Description</h2>
                        <?php 
                        if(!empty($project['description']) && is_array($project['description'])) {
                            foreach($project['description'] as $paragraph) {
                                echo '<p>' . $paragraph . '</p>';
                            }
                        } else {
                            echo '<p>' . $project['description'] . '</p>';
                        }
                        ?>
                        <br />
                    </div>
                </div>

            </div><!-- /Main Content -->

        </div><!-- /row -->
    </div><!-- /container -->
</section>


    <?php include 'footer.php'; ?>

</body>
</html>