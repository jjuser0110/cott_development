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
        'description' => 'Supply and Application Of Reflective Thermoplastic Paint Marking To Roads In Zones 5 and 6 Within The Juridiction Of The Council Of The City Of Kuching South For The Year 2023. The project included zebra crossings, lane markings, and directional arrows in compliance with local authority specifications.',
        'images' => array(
            'image/roadmarking1.jpg',
            'image/roadmarking2.jpg',
            'image/roadmarking3.jpg',
            // 'image/roadmarking4.jpg'
        )
    ),
    2 => array(
        'title' => 'Masjid As-Syuhadah Construction',
        'client' => 'Markas Briged Ketiga Infantri Malaysia',
        'category' => 'Building Construction',
        'location' => 'Kuching, Sarawak',
        'year' => '2023',
        'value' => 'RM 2,498,688',
        'description' => 'Proposed New Masjid As-Syuhadah Tun Abang Haji Openg On Part Of Lot 202, Blk 17, Kuching Central Land District, At Jalan Kuching Ranger Depot, Semonggok, Kuching. The project incorporated traditional Islamic architectural elements with modern construction techniques.',
        'images' => array(
            'image/masjidassyuhadah1.jpg',
            'image/masjidassyuhadah2.jpg',
            'image/masjidassyuhadah3.jpg',
            // 'image/masjidassyuhadah4.jpg'
        )
    ),
    3 => array(
        'title' => 'Jalan Baru Matang Road Upgrade',
        'client' => 'Mirecont SDN BHD',
        'category' => 'Road Works',
        'location' => 'Matang, Sarawak',
        'year' => '2024',
        'value' => 'RM 2,693,600',
        'description' => 'Construction work of subbase construction and completion of the remaining works for upgrading of Jalan Baru Matang, Kuching Division. The project enhanced traffic flow and safety along this critical access route.',
        'images' => array(
            'image/matangroadupgrade1.jpg',
            'image/matangroadupgrade2.jpg',
            'image/matangroadupgrade3.jpg',
            // 'image/matangroadupgrade4.jpg'
        )
    ),
    4 => array(
        'title' => 'Construction of Wet Market (Non-Halal)',
        'client' => 'Majlis daerah Bau / Bau Council',
        'category' => 'Earthwork & Construction',
        'location' => 'Bau, Sarawak',
        'year' => '2020',
        'value' => 'RM 793,540.50',
        'description' => 'Proposal for the Redevelopment of Underprivileged State Schools in Sarawak Using RM1 Billion Allocation (Phase 1) at SK Lebur Remun, Serian. The project included extensive site preparation and foundation works.',
        'images' => array(
            'image/bayearthwork1.jpeg',
            'image/bayearthwork2.jpeg',
            'image/bayearthwork3.jpeg',
            // 'image/bayearthwork4.jpg'
        )
    ),
    5 => array(
        'title' => 'Army Camp Cabin Office Construction',
        'client' => 'Indra NDRA Petra SDN BHD',
        'category' => 'Building Construction',
        'location' => 'Kuching, Sarawak',
        'year' => '2024',
        'value' => 'RM 195,486.40',
        'description' => 'Construction of modular cabin offices for army camp facilities at Jalan Penrissen, Kuching (DEFENCE SERVICES SDN BHD). Built to military specifications with durable materials.',
        'images' => array(
            'image/cabinoffice1.jpeg',
            'image/cabinoffice3.jpeg',
            'image/cabinoffice2.jpeg',
            // 'image/cabinoffice4.jpg'
        )
    ),
    6 => array(
        'title' => 'New Community Hall – Igan, Mukah',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Igan, Mukah',
        'year' => '2019',
        'value' => 'RM 2,633,300',
        'description' => 'Proposal to Construct a New Community Hall for Igan Sub-District, Mukah Division, Sarawak. The facility includes a main hall, stage, kitchen facilities, and washrooms designed to serve the local community.',
        'images' => array(
            'image/communityhall1.jpg',
            'image/communityhall2.jpg',
            'image/communityhall3.jpg',
            // 'image/communityhall4.jpg'
        )
    ),
    7 => array(
        'title' => 'Redevelopment of SK Lebur Remun – Serian',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Serian, Sarawak',
        'year' => '2020',
        'value' => 'RM 5,302,341.90',
        'description' => 'Proposal for the Redevelopment of Underprivileged State Schools in Sarawak Using RM1 Billion Allocation (Phase 1) at SK Lebur Remun, Serian. The project provided modern educational facilities for rural students.',
        'images' => array(
            'image/skleburremun1.jpeg',
            'image/skleburremun2.jpeg',
            'image/skleburremun3.jpeg',
            // 'image/skleburremun4.jpg'
        )
    ),
    8 => array(
        'title' => 'Redevelopment of SK Nanga Kesit – Lubok Antu',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'location' => 'Lubok Antu, Sarawak',
        'year' => '2020',
        'value' => 'RM 4,761,493,72',
        'description' => 'Proposal for the Redevelopment of Underprivileged State Schools in Sarawak Using RM1 Billion Allocation (Phase 1) at SK Nanga Kesit, Lubok Antu. The project brought quality educational infrastructure to this remote area.',
        'images' => array(
            'image/sknangakesit1.jpeg',
            'image/sknangakesit2.jpeg',
            'image/sknangakesit3.jpeg',
            // 'image/sknangakesit4.jpg'
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
                <h2 class="h4">If you’d like to talk to us about a project, or anything else, we’d love to hear from you.</h2>

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
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="work-slider mb-20">
                    <?php foreach($project['images'] as $image): ?>
                    <div>
                        <img src="<?php echo $image; ?>" alt="" class="slider-main-image" />
                    </div>
                    <?php endforeach; ?>
                </div><!-- /work-slider -->

                <div class="work-item-slider-wrapper">
                    <div class="work-item-slider">
                        <?php foreach($project['images'] as $image): ?>
                        <a href="#"><img src="<?php echo $image; ?>" alt="" style="width: 100%; height: 80px; object-fit: cover;" /></a>
                        <?php endforeach; ?>
                    </div><!-- /work-slider -->
                </div><!-- /work-item-slider-wrapper -->
            </div><!-- /col -->

            <div class="col-md-3 col-sm-12 col-xs-12">
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
            </div><!-- /col -->
        </div><!-- /row -->

        <div class="divider"></div>

        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <h2 class="section-header">Description</h2>
                <p><?php echo $project['description']; ?></p>
                <br />
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</section>

    <?php include 'footer.php'; ?>

</body>
</html>