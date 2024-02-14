<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Include Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slenco:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>
@extends('layout.header')
@section('content')

<body>

    <!-- ======= Hero Section ======= -->
    {{-- Header atas --}}
    <section id="about" class="heada" style="background: url(assets/img/bg/utama.png);background-size: cover; margin-top:100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 style="font-size:40px !important; font-family:Manrope !important; font-weight:900;">Pelatihan Skripsi</h3>
                <p style="margin-top: -2px;font-family:Manrope !important;  font-size:15px;font-weight:400;">Home > Pelatihan Skripsi</p>
            </div>
        </div>
    </section>


    <section id="hero-skripsi" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex" style="margin-top:-100px;">
                <strong class="btn-get-started-skripsi1 scrollto" style="background: #3E87F8; font-size:20px;">CLASS PROGRAM</strong>
            </div>
            <div class="judulketiga-skripsi">
                <h3 style="font-size: 45px; color:#FFF;letter-spacing: 1px; font-weight:bold;
                ">Pelatihan Skripsi</h3>
            </div>
            <h2 style="font-family: Montserrat;">Kelas Pelatihan Skripsi Class Program bertujuan untuk membantu Sobat Insans dalam memahami sistematika dan penyusunan skripsi yang akan dibimbing langsung oleh Mentor</h2>
        </div>
    </section>
    <!-- ======= End Section Hero ======= -->


    <!-- ======= Cart Section ======= -->
    <section id="card-skripsi" class="card-skripsi">
        <div class="container">
            <div class="d-flex">
                <strong class="btn-get-started2 scrollto">Pelatihan Skripsi</strong>
            </div>

            <div class="section-title">
                <h3>Materi Yang Didapatkan Pelatihan Skripsi</h3>
                <h4>Pelatihan Skripsi Class Program</h4>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="centered-content">
                            <div class="image-container">
                                <img src="assets/img/bg/cart-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="image-container">
                                <img src="assets/img/bg/cart-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="image-container">
                                <img src="assets/img/bg/cart-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="image-container">
                                <img src="assets/img/bg/cart-4.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ======= End Cart Section ======= -->


    <!-- ======= Benefit Section ======= -->
    <section id="benefit" class="benefit" style="margin-top: -50px;">
        <div class="container" data-aos="fade-up">
            <div class="d-flex" style="margin-left: 400px; margin-top:-20px ">
                <a href="#pricing" class="btn-get-started scrollto" style="display: flex;
          width: 280px;
          height: 40px;
          margin-left: 200 ;
          padding: 10px;
          justify-content: center;
          border-radius: 77.273px;
          align-items: center;
          gap: 15.455px;
          flex-shrink: 0; background: #3E87F8;
          box-shadow: 15.455px 15.455px 30.909px 0px rgba(0, 0, 0, 0.15); font-size: 25px; color: #FFF;
          font-family: Manrope;
          font-style: normal;
          font-weight: 800 !important;
          line-height: 125%; /* 61.818px */
          letter-spacing: 1px;
          font-size:20px !important;
          margin-bottom:-10px;">CLASS PROGRAM</a>
            </div>

            <div class="section-title">
                <h3 style="font-size:35px !important;">Apa Yang Akan Kamu Dapatkan</h3>
                <h4 style="margin-bottom: 20px !important; margin-top:10px; font-size:20px !important;">Kelas Pelatihan Skripsi Class Program </h4>
            </div>

            <div class="card-containerr">
                <div class="roww ">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style=" height: 360px; border-radius: 20px; margin-left:25px; border: 2px solid #020202;">
                            <strong class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">Video Materi</strong>
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/video.png" class="img-fluid" style="width: 180px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans akan mendapatkan resume materi berupa video dari Mentor kelas pelatihan skripsi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 360px; border-radius: 20px; margin-left:25px;  border: 2px solid #020202;">
                            <strong href="#pricing" class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">Grup Sharing</strong>
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/group-chat.png" class="img-fluid" style="width: 180px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans akan mendapatkan fasilitas bergabung di grup WhatsApp untuk konsultasi bersama Mentor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 360px; border-radius: 20px; margin-left:25px;  border: 2px solid #020202;">
                            <strong href="#pricing" class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">PPT Materi</strong>
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/web-devices.png" class="img-fluid" style="width: 180px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans akan mendapatkan PPT materi pelatihan skripsi </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 360px; border-radius: 20px; margin-left:25px;  border: 2px solid #020202;">
                            <strong href="#pricing" class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">Networking</strong>

                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/connect.png" class="img-fluid" style="width: 180px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans dapat membangun relasi bersama Mentor dan peserta lainnya melalui grup WhatsApp</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 360px; border-radius: 20px; margin-left:25px;  border: 2px solid #020202;">
                            <strong href="#pricing" class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">Penghargaan</strong>

                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/digital-presentation.png" class="img-fluid" style="width: 180px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans akan mendapatkan penghargaan yang diberikan kepada peserta terbaik</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 360px; border-radius: 20px; margin-left:25px;  border: 2px solid #020202;">
                            <strong href="#pricing" class="btn-get-started3 scrollto" style="font-family: Montserrat; font-size:15px !important;">E-Sertifikat</strong>

                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                    <img src="assets/img/logo/certification.png" class="img-fluid" style="width: 110px;" alt="">
                                </div>
                                <div class="member-infoo" style="margin-top: -10px;">
                                    <p style="font-size: 15px !important;">Sobat Insans akan mendapatkan e-sertifikat dari kelas pelatihan skripsi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Benefit Section ======= -->

    <!-- ======= Mentor Section ======= -->
    <section id="mentor-skripsi" class="mentor-skripsi" style="margin-top:-70px;">
        <div class="container">
            <div class="section-title">
                <h3 style="color:rgb(0,29,73); font-size: 40px;  margin-top:10px  !important;">Mentor Yang Berpengalaman</h3>
                <h4 style="color:rgb(0,29,73); margin-top:10px !important; ">Kelas Pelatihan Skripsi Class Program </h4>
            </div>

            <div class="mentor-img">
                <div class="mentor-card" >
                    <div class="card-img" style="margin-top:-30px !important;">
                        <img src="assets/img/team/SkripsiMaya.png" style=" width: 300px;" alt="Image 1">
                    </div>
                    <div class="name">
                        <h3 style="margin-top:-10px;font-size:18px;">Maya Ulani, M.Pd</h3>
                        <h4 style="margin-top:-10px;">Mentor</h4>
                    </div>
                </div>

                <div class="mentor-card">
                    <div class="card-img">
                        <img src="assets/img/team/SkripsiBayu.png" style="  width: 300px; " alt="Image 2">
                    </div>
                    <div class="name">
                        <h3 style="margin-top:-10px;font-size:18px;">Bayu Ade Candra, S.Kom., M.M</h3>
                    <h4 style="margin-top:-10px;">Mentor</h4>
                    </div>
                </div>

                <div class="mentor-card">
                    <div class="card-img">
                        <img src="assets/img/team/SkripsiAci.png" style="width: 300px; " alt="Image 3">
                    </div>
                    <div class="name">
              <h3 style="margin-top:-10px;font-size:18px;">Aci Meidayanti, S.Pd., M.M</h3>
                    <h4 style="margin-top:-10px;">Mentor</h4>
                    </div>
                </div>

                <div class="mentor-card">
                    <div class="card-img">
                        <img src="assets/img/team/SkripsiAli.png" style="width: 300px;" alt="Image 4">
                    </div>
                    <div class="name">
                         <h3 style="margin-top:-10px; font-size:18px;">Ali Bin Abi Thalib Salman, S.Hut,  M.Si</h3>
                    <h4 style="margin-top:-10px;">Mentor</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Mentor Section ======= -->


    <!-- ======= Kotak Skripsi Section ======= -->
    <section id="kotak-skripsi" class="kotak-skripsi" style="margin-top:-100px;">
        <div class="profile-container">
            <div class="profile-slider">
                <div class="profile">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/bg/riska.png" alt="Gambar Profil">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <!-- <h1>ELouis Patric</h1> -->
                            <p>Workshop Skripsi <br>Batch 9 Telah Dibuka</p>
                            <button class="button" style="background-color: #3E87F8 !important">Daftar Sekarang!<span class="d-flex justify-content-center align-items-center"><img src="assets/img/bg/Icons.png" style=" margin-left: 15px" alt=""></span></a></button>
                            <!--<h2 style="font-weight: 100;">No credit card required</h2>-->
                        </div>
                        <!-- Tambahkan elemen tambahan di sini -->
                    </div>
                </div>
            </div>
    </section>
   
    <section id="faq" class="faq section-bg" style="background-size: cover; background-color: #bbcde9; position: relative; margin-top:-200px;">
        <img src="assets/img/bg/kananatasfaq.png" style="position: absolute; top: 0; right: 0; width: 200px; height: 250px;" alt="">
        <img src="assets/img/bg/kirifaq.png.png" style="position: absolute; bottom: 0; left: 0; width: 200px; height: 250px;" alt="">
        <div class="background-faq"></div>
        <div class="container kontener aos-init aos-animate" data-aos="fade-up">
            <div class="col-xl-12"> <!-- Gunakan kolom penuh lebar untuk memastikan accordion berada di tengah -->
                <div class="section-title" style="margin-top:150px;margin-bottom: 20px;
            ">
                    <h3 style="color:rgb(0,29,73); margin-bottom:50px; font-size:35px !important; font-family: 'Nunito', sans-serif !important;">Frequently Asked Questions</h3>
                </div>
                <style>
                    .accordion {
                        max-width: 610px;
                        margin: 20px auto;
                    }

                    .accordion-item {
                        border: 1px solid #ddd;
                        margin-bottom: 10px;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        background-color: #fff;
                        transition: box-shadow 0.3s ease, background-color 0.3s ease;
                    }

                    .accordion-header {
                        padding: 15px;
                        background-color: #f5f5f5;
                        cursor: pointer;
                        user-select: none;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        transition: background-color 0.3s ease;
                    }

                    .icon-container {
                        background-color: #007bff;
                        border-radius: 50%;
                        padding: 10px;
                        transition: background-color 0.3s ease;
                        margin-left: 5px;
                    }

                    .icon {
                        font-size: 18px;
                        font-weight: bold;
                        color: #0056b3;
                        transition: color 0.3s ease;
                    }

                    .accordion-content {
                        padding: 15px;
                        display: none;
                        margin: 0;
                    }

                    .icon:hover {
                        color: #ececec;
                    }

                    .accordion-item:hover .accordion-header {
                        background-color: #e0e0e0;
                    }

                    .accordion-item:hover .icon-container {
                        background-color: #0056b3;
                    }

                    .accordion-item:hover {
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                        background-color: #f0f0f0;
                    }
                </style>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(1)">
                            <div style="color: #000000; font-size: 18px; font-family: font-family: 'Nunito', sans-serif !important;  font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                1.</div><b style="    margin-left: -300px; font-family: 'Nunito', sans-serif !important;
                                "> Siapa pemateri workshop skripsi?</b>
                            <div class="icon">+</div>
                        </div>
                        <div class="accordion-content">
                            <p style="font-family: 'Nunito', sans-serif !important;  font-size:12px; margin-left:30px;">Pemateri yang mengisi workshop berasal dari Mentor terbaik dari Bimbingan Skripsi Online Class Program.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(2)">
                            <div style="color: #000000; font-size: 18px; font-family: 'Nunito', sans-serif !important;  font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                2.</div><b style="    margin-left: -348px;font-family: 'Nunito', sans-serif !important; ">Bagaimana cara daftarnya?</b>
                            <div class="icon">+</div>
                        </div>
                        <div class="accordion-content">
                            <p style="font-family: 'Nunito', sans-serif !important;  font-size:12px; margin-left:30px;">Sobat Insans cukup klik link registrasi yang tercantum di website, linktree Instagram Class Program dan linktree Zona Mahasiswa. Ikuti syarat dan ketentuan untuk mengikuti workshop skripsi dan konfirmasikan bukti mengikuti persyaratan dan bukti pembayaran pada Minma.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(3)">
                            <div style="color: #000000; font-size: 18px;font-family: 'Nunito', sans-serif !important;  font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                3.</div><b style="    margin-left: -220px; font-family: 'Nunito', sans-serif !important;
                                "> Apa saja persyaratan ikut workshop skripsi?</b>
                            <div class="icon">+</div>
                        </div>
                        <div class="accordion-content">
                            <p style="font-family: 'Nunito', sans-serif !important;  font-size:12px; margin-left:30px;">Sobat Insans memiliki beberapa persyaratan untuk mengikuti workshop skripsi dari Class Program yaitu wajib follow Instagram <code>@zonamahasiswa.id</code> dan <code>@classprogram.id</code>, mention atau tag 5 orang teman di postingan pamflet workshop lalu menyerahkan bukti screenshoot-nya kepada Minma.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(4)">
                            <div style="color: #000000; font-size: 18px; font-family: 'Nunito', sans-serif !important;  font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                4.</div><b style="    margin-left: -350px; font-family: 'Nunito', sans-serif !important;
                                "> Apa saja isi workshopnya?</b>
                            <div class="icon">+</div>
                        </div>
                        <div class="accordion-content">
                            <p style="font-family: 'Nunito', sans-serif !important;  font-size:12px; margin-left:30px;">Workshop skripsi akan membahas masalah-masalah seputar dunia skripsi mulai dari penentuan judul sampai kiat-kiat sidang skripsi. Hanya saja di setiap workshop memiliki tema yang berbeda-beda dan setiap workshop lebih spesifik mengusung tema perbagian skripsi mana yang akan dibahas.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(5)">
                            <div style="color: #000000; font-size: 18px; font-family: 'Nunito', sans-serif !important;  font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                5.</div><b style="    margin-left: -250px; font-family: 'Nunito', sans-serif !important;
                                "> Fasilitas apa saja yang akan didapatkan?</b>

                            <div class="icon">+</div>
                        </div>
                        <div class="accordion-content">
                            <p style="font-family: 'Nunito', sans-serif !important;  font-size:12px; margin-left:30px;">Class
                                Sobat Insans akan mendapatkan E-sertifikat dan hadiah E-wallet bagi Sobat Insans yang memenangkan mini challenge yang sedang diadakan</p>
                        </div>
                    </div>
                </div>

                <script src="script.js"></script>

                <script>
                    function toggleAccordion(index) {
                        var content = document.getElementsByClassName('accordion-content')[index - 1];

                        if (content.style.display === 'block') {
                            content.style.display = 'none';
                            document.getElementsByClassName('icon')[index - 1].innerText = '+';
                        } else {
                            content.style.display = 'block';
                            document.getElementsByClassName('icon')[index - 1].innerText = '-';
                        }
                    }
                </script>
            </div>
        </div>
    </section>




    <!--   <section id="qna" class="qna" style="color:#e4ebf7;">
    <div class="container">

      <div class="section-title" style="margin-top: 180px;">
        <h3 style="color: var(--Midnight-Blue-950, #09326F); font-family: Nunito;">Frequently Asked Questions</h3>
      </div>

      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-header">
            <h1>1. Where is my order? Quisque molestie</h1>
            <span class="icon" style=" margin-left: 445px;"><img src="assets/img/bg/_.png" style="width: 35px;"></span>
          </div>
          <div class="accordion-content">
            <p>Content for Section 1 goes here.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
          <h1> 2. How can I return an item purchased online?</h1>
          <span class="icon" ><img src="assets/img/bg/_.png" style="width: 35px;"></span>
          </div>
          <div class="accordion-content">
            <p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
          <h1>3. Can I cancel or change my order?</h1>
            <span class="icon" style=" margin-left: 478px;"><img src="assets/img/bg/_.png" style="width: 35px;"></span>
          </div>
          <div class="accordion-content">
            <p>Content for Section 1 goes here.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
          <h1>4. I have a promotional or discount code?</h1>
            <span class="icon" style=" margin-left: 436px;"><img src="assets/img/bg/_.png" style="width: 35px;"></span>
          </div>
          <div class="accordion-content">
            <p>Content for Section 1 goes here.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
          <h1>5. Can I integrate my store with Facebook?</h1>
            <span class="icon"  style=" margin-left: 425px;"><img src="assets/img/bg/_.png" style="width: 35px;"></span>
          </div>
          <div class="accordion-content">
            <p>Content for Section 1 goes here.</p>
          </div>
        </div>


      </div>

      <script src="script.js"></script>
    </div>
  </section> -->

    <!-- =======  End Qn A Section ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
@endsection
