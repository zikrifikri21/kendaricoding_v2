 <main id="main">

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
     <div class="container">
       <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
         <img src="<?php echo base_url(); ?>assets/template/img/about.jpg" class="img-fluid" alt="">
       </div>
       <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
         <h3>Katalog Kelas</h3>
         <p class="font-italic">
           " Barang siapa tidak mau merasakan pahitnya belajar, ia akan merasakan hinanya kebodohan sepanjang hidupnya"
           <br>
           --Imam Syafi'i rahimahullah--
         </p>
         <ul>
           <li><i class="icofont-check-circled"></i>Tersedia Kelas <b>GRATIS</b> dan berbayar</li>
           <li><i class="icofont-check-circled"></i>Tersedia Kelas Offline di wilayah kota Kendari dan sekitarnya</li>
           <li><i class="icofont-check-circled"></i>Di bimbing langsung oleh tenaga pengajar yang sudah berpengalaman di bidangnya dan sudah sering menangani proyek tentang pengembangan Aplikasi web dan mobile</li>
           <li><i class="icofont-check-circled"></i>Bisa belajar di mana saja dan kapan saja dengan waktu yang fleksibel</li>
           <li><i class="icofont-check-circled"></i>Berkesempatan untuk gabung dalam proyek yang di akusisi oleh kendari coding dan technoreative</li>
         </ul>
         <a href="#" class="read-more">Lihat Katalog Kelas<i class="icofont-long-arrow-right"></i></a>
       </div>
     </div>
   </section>
   <!-- End About Section -->

   <!-- API YOUTUBE START -->
   <?php
function get_CURL($url)
{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

  
return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC10ulOnRz2JO5jjPQFMltew&key=AIzaSyB8JXGNkcaxa35VSvmB_EgHx22qX0_EFXg');

$youtubeProfilePic = $result['items'] [0] ['snippet'] ['thumbnails'] ['medium'] ['url'];
$channelName = $result['items'] [0] ['snippet'] ['title'];
$subscriber =  $result['items'] [0] ['statistics'] ['subscriberCount'];


//latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyB8JXGNkcaxa35VSvmB_EgHx22qX0_EFXg&channelId=UC10ulOnRz2JO5jjPQFMltew&maxResults=4&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'] [0] ['id'] ['videoId'];
$latestVideoId1 = $result['items'] [1] ['id'] ['videoId'];
?>

 <main id="main">


  <section class="social" id="social" >
    <div class="row pt-4 mb-4">

  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <div class="col text-center">
        <h2>Youtube Channel</h2>
       </div>


      <div class="row justify-content-center">
      <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
            <img src="<?= $youtubeProfilePic?>" width="100" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subscriber?> Subscriber</p>
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen style="width: 500px; height:170px;"></iframe>
              </div>
            </div>
            <div class="col">
              <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId1; ?>?rel=0" allowfullscreen style="width: 500px; height:170px;"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
   </div>
  </section>
  <!-- API YOUTUBE END -->


  

   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
     <div class="container">

       <div class="row counters">

         <div class="col-lg-3 col-6 text-center">
           <span data-toggle="counter-up">28</span>
           <p>Member Kelas</p>
         </div>

         <div class="col-lg-3 col-6 text-center">
           <span data-toggle="counter-up">20</span>
           <p>Materi Kelas</p>
         </div>

         <div class="col-lg-3 col-6 text-center">
           <span data-toggle="counter-up">6</span>
           <p>Team Pengajar</p>
         </div>

         <div class="col-lg-3 col-6 text-center">
           <span data-toggle="counter-up">15</span>
           <p>Project Aplikasi Web & Mobile</p>
         </div>

       </div>

     </div>
   </section><!-- End Counts Section -->
   <!-- punya cindi -->

   <head>


     <script type="text/javascript" async="" src="https://widget.intercom.io/widget/ei5f5f8i"></script>
     <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
     <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WCYD3HR7G7&amp;l=dataLayer&amp;cx=c"></script>
     <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/duyHVVR9Brf6N2GewjkPRfsA/recaptcha__id.js" crossorigin="anonymous" integrity="sha384-XXDXwVaTKdkODRMY8JK5fYhvze8lwam7M0qwZBtLH979nqZOjf2t6MaBG+1z1r7Q"></script>
     <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146603038-1"></script>
     <script>
       window.dataLayer = window.dataLayer || [];

       function gtag() {
         dataLayer.push(arguments);
       }
       gtag('js', new Date());

       gtag('config', 'UA-146603038-1');
     </script>


     <script>
       (function(h, o, t, j, a, r) {
         h.hj = h.hj || function() {
           (h.hj.q = h.hj.q || []).push(arguments)
         };
         h._hjSettings = {
           hjid: 1587807,
           hjsv: 6
         };
         a = o.getElementsByTagName('head')[0];
         r = o.createElement('script');
         r.async = 1;
         r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
         a.appendChild(r);
       })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
     </script>
     <script async="" src="https://static.hotjar.com/c/hotjar-1587807.js?sv=6"></script>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Belajar Coding dan Design Dari Mentor Berpengalaman — BuildWith Angga</title>
     <meta name="description" content="Tempat belajar coding dan design gratis secara online dari mentor berpengalaman dan lebih terarah untuk mengembangkan skills baru yang digunakan untuk mendapatkan pekerjaan di bidang IT.">
     <meta name="keywords" content="Web Design, Web Development, UI UX Design, Android Development, Full-Stack Developer">
     <!-- <meta name="author" content="BuildWith Angga"> -->
     <!-- <meta image="https://buildwithangga.com/themes/front/images/belajar_design_coding_online_di_buildwith_angga.png"> -->
     <!-- <meta property="og:type" content="article">
<meta property="og:image" content="https://buildwithangga.com/themes/front/images/belajar_design_coding_online_di_buildwith_angga.png">
<meta property="og:title" content="Belajar Coding dan Design Dari Mentor Berpengalaman — BuildWith Angga">
<meta property="og:site_name" content="BuildWith Angga">
<meta property="og:url" content="https://buildwithangga.com/"> -->
     <meta property="og:description" content="Tempat belajar coding dan design gratis secara online dari mentor berpengalaman dan lebih terarah untuk mengembangkan skills baru yang digunakan untuk mendapatkan pekerjaan di bidang IT.">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://buildwithangga.com/themes/front/css/nd.css">

     <link rel="icon" type="image/png" href="https://buildwithangga.com/themes/front/images/favicon.ico">
     <link rel="apple-touch-icon" href="https://buildwithangga.com/themes/front/images/favicon.ico">
     <link rel="stylesheet" href="https://buildwithangga.com/tippy/css/tippy.css">
     <link rel="stylesheet" href="https://buildwithangga.com/tippy/css/shift-away.css">
     <style>
       .modal-content {
         border-radius: 16px;
         border: none;
       }

       .modal-header {
         background-color: #f6f8fd;
         border-radius: 16px 16px 0 0;
       }

       .modal .modal-body .video-iframe {
         border: none;
         border-radius: 0 0 16px 16px;
       }

       .modal .modal-body .embed-responsive {
         height: 100%;
       }
     </style>
     <script async="" src="https://script.hotjar.com/modules.d5eb3c97b67a0b8958ff.js" charset="utf-8"></script>
     <style type="text/css">
       iframe#_hjRemoteVarsFrame {
         display: none !important;
         width: 1px !important;
         height: 1px !important;
         opacity: 0 !important;
         pointer-events: none !important;
       }
     </style>
   </head>
   
   <div class="container-fluid">
     <div class="mb-4 text-center mt-3">
       <div class="front-text-group ">
         <h2 class="header-primary mb-0">Alur Belajar Terbaik <br class="desktop">
           Untuk Membangun Karir</h2>
         <p class="capt"></p>
         
       </div>
     </div>
     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5">
      
     <?php foreach ($data_kursus as $rows) : ?>
       <div class="col position-relative stack-card-group">
         <div class="course-card-responsive gap-3">
           <div class="d-flex flex-row flex-md-column align-items-start">
             <img src="<?php echo base_url('assets/gambar/').$rows->gambar; ?>" alt="" class="img-fluid" style="max-height:190px;">

             <div class="course-detail mt-0 mt-md-3">
               <div class="course-name">
               <?php echo $rows->judul_kursus; ?>
               </div>
               <p>
               <?php echo $rows->jumlah; ?> courses • <?php echo $rows->jam; ?> hours
               </p>
               <!-- <a href="https://buildwithangga.com/journey/become-user-interface-designer" class="stretched-link"></a> -->
             </div>
           </div>
           <div class="d-flex align-items-center justify-content-end justify-content-md-start gap-2 roadmap-tools">
             
           </div>
         </div>
        
         <div class="stack-card-ornament sco-1"></div>
         <div class="stack-card-ornament sco-2"></div>
       </div>
       <?php endforeach; ?>

     </div>
   </div>
   <!-- end punya cindi -->






   <!-- ======= Services Section ======= -->
   <section id="services" class="services section-bg">
     <?php include 'assets/translate.php' ?>
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Layanan Kami</h2>
         <p>Adapun layanan kami adalah kelas <b>GRATIS</b> dan berbayar dimana kami mengajarkan segala hal terkait pemrograman web dan mobile, kami juga menyediakan channel Youtube untuk kelas gratis kami yang bisa kalian akses kapan saja dan dimana saja. Selain itu kami juga menerima jasa pembuatan dan pengembangan Aplikasi Web dan Mobile serta jasa IT lainnya yang bekerjasama langsung dengan perusahaan IT partner kami yaitu <b>technocreative.id</b></p>
       </div>

       <div class="row">
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
           <div class="icon-box iconbox-blue">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
               </svg>
               <i class="bx bxl-dribbble"></i>
             </div>
             <h4><a href="">Kelas Online Gratis</a></h4>
             <p>Seputar pemrograman web dan mobile untuk pemula</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
           <div class="icon-box iconbox-orange ">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
               </svg>
               <i class="bx bx-file"></i>
             </div>
             <h4><a href="">Kelas Online / Offline Berbayar</a></h4>
             <p>Membahas mengenai cara merancang dan membuat aplikasi web dan mobile dengan studi kasus proyek tersedia dalam kelas online dan offline (tatap muka)</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
           <div class="icon-box iconbox-pink">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
               </svg>
               <i class="bx bx-tachometer"></i>
             </div>
             <h4><a href="">Jasa Digital Marketing</a></h4>
             <p>Menerima Jasa SEO, Google Adwords/ads & Facebook Ads untuk iklan perusahaan, instansi perkantoran, perusahaan swasta maupun UMKM.</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
           <div class="icon-box iconbox-yellow">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
               </svg>
               <i class="bx bx-layer"></i>
             </div>
             <h4><a href="">Jasa Software Development</a></h4>
             <p>Menerima Jasa Pembuatan Website, Aplikasi Android dan aplikasi custom by request. Saat ini sudah ada puluhan client kami, baik dari Perusahaan, Instansi Pemerintahan, Kampus, Sekolah, Yayasan dll</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
           <div class="icon-box iconbox-red">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
               </svg>
               <i class="bx bx-slideshow"></i>
             </div>
             <h4><a href="">Jasa Desain Branding</a></h4>
             <p>Menerima jasa Desain Logo, Desain Undangan Digital dan Desain Video Animasi digital untuk pemasaran Produk / Jasa sesuai dengan permintaan client.</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
           <div class="icon-box iconbox-teal">
             <div class="icon">
               <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
               </svg>
               <i class="bx bx-arch"></i>
             </div>
             <h4><a href="">Jasa IT Lainnya</a></h4>
             <p>Menerima jasa pemasangan CCTV, Jaringan Network, Kerjasama perbaikan peralatan IT perkantoran seperti komputer - printer, Pengadaan Peralatan IT (printer, komputer, ups, peralatan jaringan) dan peralatan IT lainnya</p>
           </div>
         </div>

       </div>

     </div>
   </section>
   <!-- End Services Section -->

   <!-- ======= Features Section ======= -->
   <section id="features" class="features">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Keunggulan</h2>
         <p>Adapun Keunggulan Belajar di Kendari Coding adalah </p>
       </div>

       <div class="row">
         <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
           <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
             <i class="bx bx-receipt"></i>
             <h4>Bisa Pilih Jenis Belajar Offline / Online</h4>
             <p>Pilih jalur belajar sesuai dengan target yang ingin kamu capai. Kamu juga bisa belajar melompat ke kelas tertentu di luar jalur jika kamu sudah tahu apa yang ingin kamu pelajari.</p>
           </div>
           <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
             <i class="bx bx-cube-alt"></i>
             <h4>Trainer yang sudah biasa menangani proyek pembuatan web / Aplikasi</h4>
             <p>Ikuti semua materi belajarnya, jangan lewatkan kecuali kamu benar-benar sudah memahaminya. Ulangi materi kembali jika belum paham. Jangan terburu-buru, semua butuh proses.</p>
           </div>
           <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
             <i class="bx bx-images"></i>
             <h4>Fasilitas Belajar yang Lengkap</h4>
             <p>Fasilitas Berupa Materi Belajar, Ruang Belajar yang Ber AC dan Komputer / Laptop Jika tidak memiliki</p>
           </div>
           <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
             <i class="bx bx-shield"></i>
             <h4>Ada Sertifikat</h4>
             <p>Ikuti evaluasi belajar yang telah disediakan untuk menyempurnakan proses belajar dan mengukur pemahamanmu. Jangan lupa klaim semua sertifikat yang ada.</p>
           </div>
         </div>
         <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
           <img src="<?php echo base_url(); ?>assets/template/img/features.svg" alt="" class="img-fluid">
         </div>
       </div>

     </div>
   </section>

   <!-- End Features Section -->


    
   <!-- ======= Pricing Section ======= -->
   <section id="pricing" class="pricing section-bg">
     <div class="container-fluid mx-4" data-aos="fade-up">

       <div class="section-title">
         <h2>Harga</h2>

       </div>

       <div class="row">

         <div class="col-lg-3 col-md-6 mt-4 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
           <?php include 'kartubeli.php' ?>
         </div>

         <div class="col-lg-3 col-md-6 mt-4 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
           <?php include 'kartubeli.php' ?>
         </div>

         <div class="col-lg-3 col-md-6 mt-4 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
           <?php include 'kartubeli.php' ?>
         </div>

         <div class="col-lg-3 col-md-6 mt-4 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
           <?php include 'kartubeli.php' ?>
         </div>

       </div>

     </div>

   </section>
   <!-- End Pricing Section -->



   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Portfolio</h2>
         <!-- <p></p> -->
       </div>

       <div class="row">
         <div class="col-lg-12 d-flex justify-content-center">
           <ul id="portfolio-flters">
             <li data-filter="*" class="filter-active">All</li>
             <li data-filter=".filter-app">Website</li>
             <li data-filter=".filter-card">Office App</li>
             <li data-filter=".filter-web">Branding</li>
             <li data-filter=".filter-web">Logo</li>
             <li data-filter=".filter-web">Mobile App</li>
             <li data-filter=".filter-web">Other Project</li>
           </ul>
         </div>
       </div>

       <!-- awalportofolio -->
       <div class="row portfolio-container">

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (1).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>App 1</h4>
               <p>App</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portfolio-1 (1).png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (12).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (12).png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (13).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>App 2</h4>
               <p>App</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (13).png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (14).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Card 2</h4>
               <p>Card</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (14).png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (15).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Web 2</h4>
               <p>Web</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (15).png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (16).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>App 3</h4>
               <p>App</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (16).png" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (17).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Card 1</h4>
               <p>Card</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (17).png" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (18).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Card 3</h4>
               <p>Card</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (18).png" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (19).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (19).png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (20).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (20).png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <div class="portfolio-wrap">
             <img src="<?php echo base_url(); ?>assets/template/img/portfolio/portofolio-1 (21).png" class="img-fluid" alt="">
             <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
             </div>
             <div class="portfolio-links">
               <a href="assets/template/img/portfolio/portofolio-1 (21).png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
             </div>
           </div>
         </div>

       </div>

     </div>
   </section>
   <!-- End Portfolio Section -->



   <!-- ======= Testimonials Section ======= -->
   <section id="testimonials" class="testimonials section-bg">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Testimonials</h2>
         <p>Pesan dan kesan serta masukan dari para costumer.</p>
       </div>

       <div class="owl-carousel testimonials-carousel">

         <?php foreach ($data_testimoni as $rows) : ?>

           <div class="testimonial-item">
             <p>
               <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               <?php echo $rows->pesan; ?>
               <i class="bx bxs-quote-alt-right quote-icon-right"></i>
             </p>
             <img src="<?php echo base_url(); ?>assets/template/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
             <h3><?php echo $rows->penulis; ?></h3>
             <h4><?php echo $rows->penulis; ?></h4>
           </div>

         <?php endforeach; ?>

       </div>

     </div>
   </section><!-- End Testimonials Section -->

   <!-- ======= Frequently Asked Questions Section ======= -->
   <!-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> -->
   <!-- End Frequently Asked Questions Section -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Kontak</h2>
       </div>

       <div class="row">
         <div class="col-lg-6">
           <div class="info-box mb-4">
             <i class="bx bx-map"></i>
             <h3>Alamat Kantor / Tempat Kursus</h3>
             <p>Jalan Kelapa, no. 35, Kelurahan Anduonohu, Kecamatan Poasia <br>Kota Kendari, Sulawesi Tenggara
               <br>Kode Pos 93232
             </p>
           </div>
         </div>

         <div class="col-lg-3 col-md-6">
           <div class="info-box  mb-4">
             <i class="bx bx-envelope"></i>
             <h3>Email Kami</h3>
             <p>admin@kendaricoding.id</p>
           </div>
         </div>

         <div class="col-lg-3 col-md-6">
           <div class="info-box  mb-4">
             <i class="bx bx-phone-call"></i>
             <h3>SMS / WA</h3>
             <p>085342433353</p>
           </div>
         </div>

       </div>

       <div class="row">

         <div class="col-lg-6 ">
           <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.7544784325907!2d122.54125409878692!3d-4.005691969322615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c18ce95f48233ad!2sKendari%20Coding!5e0!3m2!1sid!2sid!4v1606043371750!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" allowfullscreen></iframe>
         </div>

         <div class="col-lg-6">
           <form action="forms/contact.php" method="post" role="form" class="php-email-form">
             <div class="form-row">
               <div class="col-md-6 form-group">
                 <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                 <div class="validate"></div>
               </div>
               <div class="col-md-6 form-group">
                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                 <div class="validate"></div>
               </div>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
               <div class="validate"></div>
             </div>
             <div class="form-group">
               <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
               <div class="validate"></div>
             </div>
             <div class="mb-3">
               <div class="loading">Loading</div>
               <div class="error-message"></div>
               <div class="sent-message">Your message has been sent. Thank you!</div>
             </div>
             <div class="text-center"><button type="submit">Kirim Pesan</button></div>
           </form>
         </div>

       </div>

     </div>
   </section>
   <!-- End Contact Section -->

 </main><!-- End #main -->