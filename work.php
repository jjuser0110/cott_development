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
        'title_bm' => 'Kerja Penandaan Jalan – Kuching Selatan',
        'title_zh' => '道路标线工程 – 古晋南部',
        'client' => 'MBKS',
        'category' => 'Road Works',
        'category_bm' => 'Kerja Jalan',
        'category_zh' => '道路工程',
        'location' => 'Kuching South, Sarawak',
        'year' => '2023',
        'value' => 'RM 2,000,000',
        'description' => array(
            "This project involved the supply and application of reflective thermoplastic paint markings to roads in Zones 5 and 6 within the jurisdiction of the Council of the City of Kuching South. The scope included zebra crossings, lane markings, directional arrows, and other road safety markings, all completed to meet local authority specifications and enhance traffic safety for road users.",
            "Our team ensured strict quality control and adherence to safety protocols throughout the project. The work was completed efficiently, minimizing disruption to local traffic while providing durable and highly visible road markings that improve navigation and reduce accident risks."
        ),
        'description_bm' => array(
            "Projek ini melibatkan pembekalan dan aplikasi penandaan cat termoplastik reflektif ke jalan-jalan di Zon 5 dan 6 dalam bidang kuasa Majlis Bandaraya Kuching Selatan. Skop termasuk lintasan zebra, tanda lorong, anak panah arah, dan tanda keselamatan jalan lain, semuanya disiapkan untuk memenuhi spesifikasi pihak berkuasa tempatan dan meningkatkan keselamatan lalu lintas untuk pengguna jalan.",
            "Pasukan kami memastikan kawalan kualiti yang ketat dan pematuhan protokol keselamatan sepanjang projek. Kerja disiapkan dengan cekap, meminimumkan gangguan kepada lalu lintas tempatan sambil menyediakan penandaan jalan yang tahan lama dan sangat jelas yang meningkatkan navigasi dan mengurangkan risiko kemalangan."
        ),
        'description_zh' => array(
            "该项目涉及在古晋南市议会管辖范围内的5区和6区道路上供应和应用反光热塑性涂料标记。范围包括斑马线、车道标记、方向箭头和其他道路安全标记，所有工作均按照地方当局规范完成，以增强道路使用者的交通安全。",
            "我们的团队在整个项目中确保严格的质量控制和遵守安全协议。工作高效完成，最大限度地减少对当地交通的干扰，同时提供耐用且高度可见的道路标记，改善导航并降低事故风险。"
        ),
        'images' => array(
            'image/roadmarking1.jpg',
            'image/roadmarking2.jpg',
            'image/roadmarking3.jpg'
        )
    ),
    2 => array(
        'title' => 'Masjid As-Syuhadah Construction',
        'title_bm' => 'Pembinaan Masjid As-Syuhadah',
        'title_zh' => 'As-Syuhadah清真寺建设',
        'client' => 'Markas Briged Ketiga Infantri Malaysia',
        'category' => 'Building Construction',
        'category_bm' => 'Pembinaan Bangunan',
        'category_zh' => '建筑施工',
        'location' => 'Kuching, Sarawak',
        'year' => '2023',
        'value' => 'RM 2,498,688',
        'description' => array(
            "The project entailed the construction of the new Masjid As-Syuhadah Tun Abang Haji Openg on part of Lot 202, Blk 17, Kuching Central Land District. The mosque design incorporated traditional Islamic architectural elements while using modern construction techniques to ensure structural integrity, aesthetic appeal, and durability.",
            "The construction included foundations, structural framing, roofing, interior finishes, and landscaping. Our team coordinated closely with the client to ensure compliance with religious and cultural requirements while maintaining timelines and budget, delivering a facility that serves both spiritual and community needs."
        ),
        'description_bm' => array(
            "Projek ini melibatkan pembinaan Masjid As-Syuhadah Tun Abang Haji Openg yang baru di sebahagian Lot 202, Blk 17, Daerah Tanah Kuching Tengah. Reka bentuk masjid menggabungkan elemen seni bina Islam tradisional sambil menggunakan teknik pembinaan moden untuk memastikan integriti struktur, daya tarikan estetik, dan ketahanan.",
            "Pembinaan termasuk asas, rangka struktur, bumbung, kemasan dalaman, dan landskap. Pasukan kami berkoordinasi rapat dengan pelanggan untuk memastikan pematuhan keperluan agama dan budaya sambil mengekalkan garis masa dan bajet, menyampaikan kemudahan yang memenuhi keperluan rohani dan komuniti."
        ),
        'description_zh' => array(
            "该项目涉及在古晋中央土地区第202号地段第17区部分土地上建造新的Masjid As-Syuhadah Tun Abang Haji Openg清真寺。清真寺设计融合了传统伊斯兰建筑元素，同时采用现代建筑技术以确保结构完整性、美学吸引力和耐用性。",
            "施工包括基础、结构框架、屋面、室内装饰和景观美化。我们的团队与客户密切协调，确保符合宗教和文化要求，同时保持时间表和预算，提供满足精神和社区需求的设施。"
        ),
        'images' => array(
            'image/masjidassyuhadah1.jpg',
            'image/masjidassyuhadah2.jpg',
            'image/masjidassyuhadah3.jpg'
        )
    ),
    3 => array(
        'title' => 'Jalan Baru Matang Road Upgrade',
        'title_bm' => 'Naik Taraf Jalan Baru Matang',
        'title_zh' => 'Jalan Baru Matang道路升级',
        'client' => 'Mirecont SDN BHD',
        'category' => 'Road Works',
        'category_bm' => 'Kerja Jalan',
        'category_zh' => '道路工程',
        'location' => 'Matang, Sarawak',
        'year' => '2024',
        'value' => 'RM 2,693,600',
        'description' => array(
            "This project focused on the upgrade of Jalan Baru Matang, including subbase construction and completion of remaining works. The aim was to improve road durability, ensure smooth traffic flow, and enhance overall safety along this critical access route in the Kuching Division.",
            "Key tasks included pavement strengthening, drainage improvements, road surfacing, and installation of safety features such as signage and road markings. Throughout the project, we prioritized minimizing disruption to local communities while adhering to strict construction quality and safety standards."
        ),
        'description_bm' => array(
            "Projek ini memberi tumpuan kepada naik taraf Jalan Baru Matang, termasuk pembinaan lapisan bawah dan penyiapan kerja yang tinggal. Matlamatnya adalah untuk meningkatkan ketahanan jalan, memastikan aliran lalu lintas lancar, dan meningkatkan keselamatan keseluruhan di sepanjang laluan akses kritikal ini di Bahagian Kuching.",
            "Tugas utama termasuk pengukuhan turapan, penambahbaikan saliran, pelapisan jalan, dan pemasangan ciri keselamatan seperti papan tanda dan penandaan jalan. Sepanjang projek, kami mengutamakan meminimumkan gangguan kepada komuniti tempatan sambil mematuhi piawaian kualiti dan keselamatan pembinaan yang ketat."
        ),
        'description_zh' => array(
            "该项目专注于Jalan Baru Matang的升级，包括基层建设和完成剩余工程。目标是改善道路耐久性，确保交通流畅，并增强古晋区这条关键通道的整体安全性。",
            "主要任务包括路面加固、排水改善、路面铺设以及安装标志和道路标记等安全设施。在整个项目中，我们优先考虑最大限度地减少对当地社区的干扰，同时遵守严格的施工质量和安全标准。"
        ),
        'images' => array(
            'image/matangroadupgrade1.jpg',
            'image/matangroadupgrade2.jpg',
            'image/matangroadupgrade3.jpg'
        )
    ),
    4 => array(
        'title' => 'Construction of Wet Market (Non-Halal)',
        'title_bm' => 'Pembinaan Pasar Basah (Bukan Halal)',
        'title_zh' => '湿市场建设（非清真）',
        'client' => 'Majlis daerah Bau / Bau Council',
        'category' => 'Earthwork & Construction',
        'category_bm' => 'Kerja Tanah & Pembinaan',
        'category_zh' => '土方工程与建筑',
        'location' => 'Bau, Sarawak',
        'year' => '2020',
        'value' => 'RM 793,540.50',
        'description' => array(
            "The project involved the redevelopment of a wet market in Bau, focusing on extensive earthworks, foundation preparation, and structural construction to accommodate non-halal food vendors. The design incorporated functional market layouts with adequate stalls, drainage systems, and public access pathways.",
            "Site preparation included grading, excavation, and soil stabilization to ensure a stable base for construction. Throughout the project, our team coordinated with local authorities to meet regulatory standards and ensure that the market would serve the community efficiently and safely."
        ),
        'description_bm' => array(
            "Projek ini melibatkan pembangunan semula pasar basah di Bau, memberi tumpuan kepada kerja tanah yang meluas, penyediaan asas, dan pembinaan struktur untuk menampung penjual makanan bukan halal. Reka bentuk menggabungkan susun atur pasar berfungsi dengan gerai yang mencukupi, sistem saliran, dan laluan akses awam.",
            "Penyediaan tapak termasuk penggredan, penggalian, dan penstabilan tanah untuk memastikan asas yang stabil untuk pembinaan. Sepanjang projek, pasukan kami berkoordinasi dengan pihak berkuasa tempatan untuk memenuhi piawaian peraturan dan memastikan pasar akan berkhidmat kepada komuniti dengan cekap dan selamat."
        ),
        'description_zh' => array(
            "该项目涉及Bau湿市场的重建，重点是广泛的土方工程、基础准备和结构建设，以容纳非清真食品供应商。设计融合了功能性市场布局，配备充足的摊位、排水系统和公共通道。",
            "场地准备包括平整、挖掘和土壤稳定，以确保建设的稳定基础。在整个项目中，我们的团队与地方当局协调，以满足监管标准，并确保市场能够高效、安全地为社区服务。"
        ),
        'images' => array(
            'image/bayearthwork1.jpeg',
            'image/bayearthwork2.jpeg',
            'image/bayearthwork3.jpeg'
        )
    ),
    5 => array(
        'title' => 'Army Camp Cabin Office Construction',
        'title_bm' => 'Pembinaan Pejabat Kabin Kem Tentera',
        'title_zh' => '军营营房办公室建设',
        'client' => 'Indra NDRA Petra SDN BHD',
        'category' => 'Building Construction',
        'category_bm' => 'Pembinaan Bangunan',
        'category_zh' => '建筑施工',
        'location' => 'Kuching, Sarawak',
        'year' => '2024',
        'value' => 'RM 195,486.40',
        'description' => array(
            "This project comprised the construction of modular cabin offices for an army camp at Jalan Penrissen, Kuching. The cabins were designed to meet military specifications, offering durable and functional office spaces for administrative and operational activities within the camp.",
            "Our team handled the entire process from foundation works to structural assembly, installation of utilities, and interior finishes. The modular approach allowed for quick assembly and future scalability, ensuring that the facilities met operational requirements efficiently."
        ),
        'description_bm' => array(
            "Projek ini terdiri daripada pembinaan pejabat kabin modular untuk kem tentera di Jalan Penrissen, Kuching. Kabin direka untuk memenuhi spesifikasi ketenteraan, menawarkan ruang pejabat yang tahan lama dan berfungsi untuk aktiviti pentadbiran dan operasi dalam kem.",
            "Pasukan kami mengendalikan keseluruhan proses dari kerja asas hingga pemasangan struktur, pemasangan utiliti, dan kemasan dalaman. Pendekatan modular membenarkan pemasangan pantas dan kebolehskalaan masa depan, memastikan kemudahan memenuhi keperluan operasi dengan cekap."
        ),
        'description_zh' => array(
            "该项目包括在古晋Jalan Penrissen的军营建造模块化营房办公室。营房设计符合军事规范，为营地内的行政和作战活动提供耐用且功能齐全的办公空间。",
            "我们的团队处理从基础工程到结构组装、公用设施安装和室内装饰的整个过程。模块化方法允许快速组装和未来的可扩展性，确保设施高效地满足运营要求。"
        ),
        'images' => array(
            'image/cabinoffice1.jpeg',
            'image/cabinoffice3.jpeg',
            'image/cabinoffice2.jpeg'
        )
    ),
    6 => array(
        'title' => 'New Community Hall – Igan, Mukah',
        'title_bm' => 'Dewan Komuniti Baru – Igan, Mukah',
        'title_zh' => '新社区会堂 – Igan, Mukah',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'category_bm' => 'Pembinaan Bangunan',
        'category_zh' => '建筑施工',
        'location' => 'Igan, Mukah',
        'year' => '2019',
        'value' => 'RM 2,633,300',
        'description' => array(
            "The project involved constructing a new community hall in Igan, Mukah, providing a central facility for events, meetings, and local gatherings. The hall includes a main hall, stage, kitchen facilities, and washrooms designed to serve community needs effectively.",
            "Construction included site preparation, structural works, finishing, and landscaping. Our team ensured compliance with local building codes and standards while delivering a safe and durable facility that enhances social cohesion and serves as a community hub."
        ),
        'description_bm' => array(
            "Projek ini melibatkan pembinaan dewan komuniti baru di Igan, Mukah, menyediakan kemudahan pusat untuk acara, mesyuarat, dan perkumpulan tempatan. Dewan termasuk dewan utama, pentas, kemudahan dapur, dan bilik air yang direka untuk memenuhi keperluan komuniti dengan berkesan.",
            "Pembinaan termasuk penyediaan tapak, kerja struktur, kemasan, dan landskap. Pasukan kami memastikan pematuhan kod dan piawaian bangunan tempatan sambil menyampaikan kemudahan yang selamat dan tahan lama yang meningkatkan perpaduan sosial dan berfungsi sebagai hab komuniti."
        ),
        'description_zh' => array(
            "该项目涉及在Igan, Mukah建造一个新的社区会堂，为活动、会议和当地聚会提供中心设施。会堂包括主厅、舞台、厨房设施和洗手间，旨在有效满足社区需求。",
            "建设包括场地准备、结构工程、装饰和景观美化。我们的团队确保符合当地建筑规范和标准，同时提供安全耐用的设施，增强社会凝聚力并作为社区中心。"
        ),
        'images' => array(
            'image/communityhall1.jpg',
            'image/communityhall2.jpg',
            'image/communityhall3.jpg'
        )
    ),
    7 => array(
        'title' => 'Redevelopment of SK Lebur Remun – Serian',
        'title_bm' => 'Pembangunan Semula SK Lebur Remun – Serian',
        'title_zh' => 'SK Lebur Remun学校重建 – Serian',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'category_bm' => 'Pembinaan Bangunan',
        'category_zh' => '建筑施工',
        'location' => 'Serian, Sarawak',
        'year' => '2020',
        'value' => 'RM 5,302,341.90',
        'description' => array(
            "This project focused on the redevelopment of SK Lebur Remun in Serian, improving facilities for underprivileged state school students. The work included classrooms, administrative blocks, playgrounds, and other educational facilities, enhancing the learning environment significantly.",
            "The project emphasized modern construction techniques and compliance with safety and educational standards. Our team ensured timely completion while maintaining high-quality workmanship, creating a school that provides long-term educational benefits to the local community."
        ),
        'description_bm' => array(
            "Projek ini memberi tumpuan kepada pembangunan semula SK Lebur Remun di Serian, meningkatkan kemudahan untuk pelajar sekolah negeri yang kurang bernasib baik. Kerja termasuk bilik darjah, blok pentadbiran, padang permainan, dan kemudahan pendidikan lain, meningkatkan persekitaran pembelajaran dengan ketara.",
            "Projek menekankan teknik pembinaan moden dan pematuhan piawaian keselamatan dan pendidikan. Pasukan kami memastikan penyiapan tepat pada masanya sambil mengekalkan kerja berkualiti tinggi, mewujudkan sekolah yang memberikan manfaat pendidikan jangka panjang kepada komuniti tempatan."
        ),
        'description_zh' => array(
            "该项目专注于Serian的SK Lebur Remun学校的重建，改善贫困州立学校学生的设施。工作包括教室、行政大楼、游乐场和其他教育设施，显著改善了学习环境。",
            "该项目强调现代建筑技术以及遵守安全和教育标准。我们的团队确保及时完工，同时保持高质量的工艺，创建一所为当地社区提供长期教育效益的学校。"
        ),
        'images' => array(
            'image/skleburremun1.jpeg',
            'image/skleburremun2.jpeg',
            'image/skleburremun3.jpeg'
        )
    ),
    8 => array(
        'title' => 'Redevelopment of SK Nanga Kesit – Lubok Antu',
        'title_bm' => 'Pembangunan Semula SK Nanga Kesit – Lubok Antu',
        'title_zh' => 'SK Nanga Kesit学校重建 – Lubok Antu',
        'client' => 'JKR SARAWAK',
        'category' => 'Building Construction',
        'category_bm' => 'Pembinaan Bangunan',
        'category_zh' => '建筑施工',
        'location' => 'Lubok Antu, Sarawak',
        'year' => '2020',
        'value' => 'RM 4,761,493.72',
        'description' => array(
            "The project involved redeveloping SK Nanga Kesit in Lubok Antu to provide modern educational facilities to a remote area. The scope included classrooms, administration blocks, and support facilities, improving the school's overall functionality and accessibility.",
            "Our team focused on quality construction and timely execution, ensuring the building met all safety and educational standards. The redevelopment provides students with a safe, well-equipped environment that supports effective learning and community growth."
        ),
        'description_bm' => array(
            "Projek ini melibatkan pembangunan semula SK Nanga Kesit di Lubok Antu untuk menyediakan kemudahan pendidikan moden kepada kawasan terpencil. Skop termasuk bilik darjah, blok pentadbiran, dan kemudahan sokongan, meningkatkan fungsi dan kebolehcapaian keseluruhan sekolah.",
            "Pasukan kami memberi tumpuan kepada pembinaan berkualiti dan pelaksanaan tepat pada masanya, memastikan bangunan memenuhi semua piawaian keselamatan dan pendidikan. Pembangunan semula menyediakan pelajar dengan persekitaran yang selamat dan lengkap yang menyokong pembelajaran berkesan dan pertumbuhan komuniti."
        ),
        'description_zh' => array(
            "该项目涉及重建Lubok Antu的SK Nanga Kesit学校，为偏远地区提供现代化的教育设施。范围包括教室、行政大楼和配套设施，改善了学校的整体功能和可达性。",
            "我们的团队专注于优质建设和及时执行，确保建筑符合所有安全和教育标准。重建为学生提供了安全、设备齐全的环境，支持有效的学习和社区发展。"
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
                <h1 data-en="Our Works" data-bm="Kerja Kami" data-zh="我们的项目">Our Works</h1>
                <h2 class="h4" data-en="We take pride in delivering high-quality projects across diverse sectors. If you'd like to discuss a project, collaboration, or any inquiries, we'd be delighted to hear from you." data-bm="Kami berbangga menyampaikan projek berkualiti tinggi merentas pelbagai sektor. Jika anda ingin membincangkan projek, kerjasama, atau sebarang pertanyaan, kami dengan senang hati mendengar daripada anda." data-zh="我们为在各个领域提供高质量项目而自豪。如果您想讨论项目、合作或任何咨询，我们很乐意听取您的意见。">We take pride in delivering high-quality projects across diverse sectors. If you'd like to discuss a project, collaboration, or any inquiries, we'd be delighted to hear from you.</h2>

                <div class="breadcrumb-container right clearfix">
                    <span data-en="You are here: " data-bm="Anda berada di sini: " data-zh="您在这里：">You are here: </span>
                    <ul class="breadcrumb">
                        <li><a href="./" data-en="Home" data-bm="Laman Utama" data-zh="首页">Home</a></li>
                        <li data-en="Our Work" data-bm="Kerja Kami" data-zh="我们的项目">Our Work</li>
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
                <h2 class="section-header" data-en="Projects" data-bm="Projek" data-zh="项目">Projects</h2>
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
                                    <a href="work.php?id=1" class="btn btn-gray fullwidth text-left" data-en="Road Marking Works" data-bm="Kerja Penandaan Jalan" data-zh="道路标线工程">Road Marking Works</a>
                                </li>
                                <li class="<?php echo ($current_id == 2) ? 'active' : ''; ?>">
                                    <a href="work.php?id=2" class="btn btn-gray fullwidth text-left" data-en="Masjid As-Syuhadah Construction" data-bm="Pembinaan Masjid As-Syuhadah" data-zh="As-Syuhadah 清真寺建设">Masjid As-Syuhadah Construction</a>
                                </li>
                                <li class="<?php echo ($current_id == 3) ? 'active' : ''; ?>">
                                    <a href="work.php?id=3" class="btn btn-gray fullwidth text-left" data-en="Jalan Matang Road Upgrade" data-bm="Naik Taraf Jalan Matang" data-zh="Jalan Matang 道路升级">Jalan Matang Road Upgrade</a>
                                </li>
                                <li class="<?php echo ($current_id == 4) ? 'active' : ''; ?>">
                                    <a href="work.php?id=4" class="btn btn-gray fullwidth text-left" data-en="Construction of Wet Market" data-bm="Pembinaan Pasar Basah" data-zh="湿市场建设">Construction of Wet Market</a>
                                </li>
                                <li class="<?php echo ($current_id == 5) ? 'active' : ''; ?>">
                                    <a href="work.php?id=5" class="btn btn-gray fullwidth text-left" data-en="Army Camp Cabin Office Construction" data-bm="Pembinaan Pejabat Kabin Kem Tentera" data-zh="军营营房办公室建设">Army Camp Cabin Office Construction</a>
                                </li>
                                <li class="<?php echo ($current_id == 6) ? 'active' : ''; ?>">
                                    <a href="work.php?id=6" class="btn btn-gray fullwidth text-left" data-en="New Community Hall" data-bm="Dewan Komuniti Baru" data-zh="新社区会堂">New Community Hall</a>
                                </li>
                                <li class="<?php echo ($current_id == 7) ? 'active' : ''; ?>">
                                    <a href="work.php?id=7" class="btn btn-gray fullwidth text-left" data-en="Redevelopment of SK Lebur Remun" data-bm="Pembangunan Semula SK Lebur Remun" data-zh="SK Lebur Remun 学校重建">Redevelopment of SK Lebur Remun</a>
                                </li>
                                <li class="<?php echo ($current_id == 8) ? 'active' : ''; ?>">
                                    <a href="work.php?id=8" class="btn btn-gray fullwidth text-left" data-en="Redevelopment of SK Nanga Kesit" data-bm="Pembangunan Semula SK Nanga Kesit" data-zh="SK Nanga Kesit 学校重建">Redevelopment of SK Nanga Kesit</a>
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
                        <h2 class="section-header" data-en="Project Info" data-bm="Maklumat Projek" data-zh="项目信息">Project Info</h2>
                        <p data-en="<?php echo $project['title']; ?>" data-bm="<?php echo $project['title_bm']; ?>" data-zh="<?php echo $project['title_zh']; ?>"><?php echo $project['title']; ?></p>

                        <br />

                        <h3 class="h5 text-uppercase" data-en="Client" data-bm="Pelanggan" data-zh="客户">Client</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['client']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase" data-en="Categories" data-bm="Kategori" data-zh="类别">Categories</h3>
                        <h4 class="play-font fsi h5" data-en="<?php echo $project['category']; ?>" data-bm="<?php echo $project['category_bm']; ?>" data-zh="<?php echo $project['category_zh']; ?>"><?php echo $project['category']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase" data-en="Location" data-bm="Lokasi" data-zh="位置">Location</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['location']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase" data-en="Year Complete" data-bm="Tahun Siap" data-zh="完成年份">Year Complete</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['year']; ?></h4>

                        <br />

                        <h3 class="h5 text-uppercase" data-en="Value" data-bm="Nilai" data-zh="价值">Value</h3>
                        <h4 class="play-font fsi h5"><?php echo $project['value']; ?></h4>
                    </div><!-- /Project Info -->

                </div><!-- /row -->

                <div class="divider"></div>

                <!-- Description -->
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2 class="section-header" data-en="Description" data-bm="Penerangan" data-zh="描述">Description</h2>
                        <div class="project-description">
                            <?php 
                            if(!empty($project['description']) && is_array($project['description'])) {
                                foreach($project['description'] as $index => $paragraph) {
                                    $paragraph_bm = isset($project['description_bm'][$index]) ? $project['description_bm'][$index] : $paragraph;
                                    $paragraph_zh = isset($project['description_zh'][$index]) ? $project['description_zh'][$index] : $paragraph;
                                    echo '<p data-en="' . htmlspecialchars($paragraph) . '" data-bm="' . htmlspecialchars($paragraph_bm) . '" data-zh="' . htmlspecialchars($paragraph_zh) . '">' . $paragraph . '</p>';
                                }
                            } else {
                                echo '<p>' . $project['description'] . '</p>';
                            }
                            ?>
                        </div>
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