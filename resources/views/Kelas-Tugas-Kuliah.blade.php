<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Favicons -->
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-9YET8/TniDXKOiij1Qe1eblgJFFfD4jlYn/+9T6oPe4eVBN5LME6wJWoJPlD/Z1k3wrPQF0Gv9m9IPqFGe56WpA=="
        crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-lY6/JB9Xa4kADl06IZ5FWYKTjnKiSiafwqz3VGssFSc8sPJwZP+DmGQ1TxI9Ld6D" crossorigin="anonymous">
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


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>

@extends('layout.header')
@section('content')

    <body>

        <main id="main">
            <!-- ======= Top Bar ======= -->
            <!-- <section id="topbar" class="d-flex align-items-center">
                                <div class="container d-flex justify-content-center justify-content-md-between">
                                  <div class="contact-info d-flex align-items-center">

                                    <a href="#" class="facebook"><i style="padding:10px;">Tentang</i>|</a>
                                    <a href="#" class="facebook"><i style="padding:10px;">FAQ</i>|</a>
                                    <a href="#" class="facebook"><i class="bi bi-youtube"style="padding:10px;"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"style="padding:10px;"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-tiktok"style="padding:10px;"></i></i></a>
                                  </div>
                                  <div class="social-links d-none d-md-flex align-items-center">
                                    <i class="bi bi-envelope d-flex align-items-center"style="margin-right:-35px;"><a href="https://mail.google.com/"></i>classprogram.id@gmail.com</a>
                                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                                  </div>
                                </div>
                              </section> -->

            <!-- ======= Header ======= -->
            <!-- <header id="header" class="d-flex align-items-center">
                                <div class="container d-flex align-items-center justify-content-between">

                                  <h1 class="logo"><a href="index.html">sip Program<span>.</span></a></h1>
                                  Uncomment below if you prefer to use an image logo
                                  <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>

                                  <nav id="navbar" class="navbar">
                                    <ul>
                                      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                                      <li class="dropdown"><a href="#"><span>Program Kelas</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                                        <ul>
                                          <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"><a href="#"><span>Workshop</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                                        <ul>
                                          <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"><a href="#"><span>Creatif Class</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                                        <ul>
                                          <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                                        <ul>
                                          <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
                                          <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
                                        </ul>
                                      </li>


                                    </ul>
                                    <i class="bi bi-list mobile-nav-toggle"></i>
                                  </nav>
                                  .navbar

                                </div>
                              </header> -->
            <!-- End Header -->

            <!-- ======= Hero Section ======= -->
            {{-- Header atas --}}
            {{-- ok1 --}}
<section id="about" class="heada" style="background: url(assets/img/bg/utama.png);background-size: cover; ">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <!-- <h2>About</h2> -->
                        <h3>Bimbingan Mata Kuliah Jurusan</h3>
                        <p>Home > Bimbingan Mata Kuliah Jurusan (BMJ)</p>
                        {{-- <span>BSO</span> --}}
                    </div>
                </div>
</section>

{{-- ok2     --}}
<section id="hero"
                class="d-flex align-items-center"style="background: url(assets/img/bg/bmj.png);background-size: cover; ">
                <div class="container" data-aos="zoom-out" data-aos-delay="100">
                    <div class="d-flex">
                        <a href="#pricing" class="btn-get-started scrollto"
                            style="border-radius: 50px;
                                    margin-left: 500px;
                                   background: #3E87F8;
                                   box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.15); font-family: Montserrat;"><strong>Pilihan
                                Program</strong></a>
                    </div>
                    <style>
                        .judulketiga {
                            color: #FFF;
                            font-family: Montserrat;
                            font-size: 80px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: 125%;

                            /* 100px */
                            letter-spacing: -4px;
                        }
                    </style>
                    <div class="judulketiga" style="  margin-left: 500px;  ">
                        <h3>Apa Itu Bimbingan Mata</h3>
                        <h3>Kuliah Jurusan(BMJ)</h3>
                    </div>
                    <h2 style="  margin-left: 500px;  ">Bimbingan belajar online perkuliahan dan persiapan karir dengan sistem kenaikan pertama di Indonesia
                        yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh Mentor yang ahli di
                        bidangnya.</h2>
</section>

{{-- ok3 --}}
<section id="about"
                style="background: url(assets/img/bg/bmj2.png);
                background-size: cover;
                background-position: center;">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between" style=" margin-top: -80px;">
                        <div class="section-title">
                            <!-- <h2>About</h2> -->
                            <span class="gariss">
                                <h3 style=" margin-top: 100px; text-align: center; font-size: 45px;"> Keunggulan
                                    Bimbingan <br> Mata Kuliah Jurusan <span>(BMJ)</span></h3>
                            </span>

                            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            {{-- text --}}
                            <style>
                                .content-box {
                                    display: flex;
                                    align-items: center;
                                    background-color: #FFF;
                                }

                                .veryikasi {
                                    margin-left: -35px;
                                    /* Adjust the margin as needed */
                                }

                                .garis {
                                    margin-top: 100px;
                                    position: center;
                                }
                            </style>
                            <div class="content-box" style="background-color: #1461d4; ">

                                <div class="content-text">
                                    <div>
                                        <span class="veryikasi">
                                            <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                        </span>
                                        <h5 style="color: #FFF; display: inline-block; margin-left: 10px;">Tersedia Untuk Semua Jurusan</h5>
                                    </div>

                                    <p style="color: #FFF; ">Bimbingan Mata Kuliah Jurusan (BMJ) Class Program disediakan untuk semua jurusan.</p>
                                </div>
                            </div>

                            <div class="content-box">

                                <div class="content-text">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <span class="veryikasi">
                                            <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                        </span>
                                        <h5 style="display: inline-block; margin-left: 10px; text-align: left;">Menggunakan Sistem Pendampingan</h5>
                                    </div>

                                    <p style="text-align: left; ">Sobat Insans akan dibimbing langsung oleh Mentor menggunakan Zoom Meeting, Google Meet, Video Call WhatsApp, dan telepon untuk memudahkan proses pendampingan.</p>
                                </div>
                            </div>

                            <div class="content-box">

                                <div class="content-text">
                                    <div>
                                        <span class="veryikasi">
                                            <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                        </span>
                                        <h5 style=" display: inline-block; text-align: left; ">Jadwal Konsultasi yang Fleksibel</h5>
                                    </div>

                                    <p style="text-align: left; ">Sobat Insans dapat memilih waktu bimbingan kapan saja sesuai kesepakatan bersama Mentor.</p>
                                </div>
                            </div>

                            <div class="content-box">
                                <div class="content-text">

                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <span class="veryikasi">
                                            <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                        </span>
                                        <h5 style="display: inline-block; margin-left: 10px; text-align: left;">Konsultasi Konsentrasi Jurusan <br> langsung bersama Mentor</h5>
                                    </div>


                                    <p style="text-align: left; ">Sobat Insans akan mendapatkan bimbingan berupa konsultasi konsentrasi jurusan yang sesuai dengan minat yang dipilih.</p>
                                </div>
                            </div>

                            <!-- Tambahkan kode serupa untuk item berikutnya -->
                        </div>

                        <div class="col-lg-6 text-centerr">
                            <style>
                                .row {

                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .col-lg-6 {
                                    text-align: center;
                                }

                                .play-button {
                                    margin-top: 250px;
                                    position: absolute;
                                    margin-left: -200px;
                                }
                            </style>
                            <video width="380" height="500" controls style="margin-left: 120px" id="myVideo">
                                <source src="assets/vidio/1.mp4" type="video/mp4">
                            </video>
                            <button class="play-button" onclick="togglePlay()">▶ </button>
                        </div>
                    </div>
</section>
<!-- End About Section -->

{{-- ok4 --}}
<section id="hero3" class="d-flex align-items-center"
                style="background: url(assets/img/bg/bmj3.png); background-size: cover; background-position: center; margin-top: 100px">
                <div class="container" data-aos="zoom-out" data-aos-delay="100">
                    <div class="judultiga">
                        <h3><span  style="color: #3E87F8;
                            font-family: Montserrat; ">3000+ </span>Mahasiswa <br> Lulus Bersama Kami</h3>
                    </div>
                    <p>Bimbingan belajar online perkuliahan dan persiapan
                       karir dengan sistem kenaikan pertama di Indonesia
                        yang menyediakan berbagai macam program kelas serta akan
                        dibimbing langsung oleh Mentor
                        yang ahli di bidangnya.</p>
                </div>
</section>

            <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing" style="margin-top:10px;margin-bottom:30px;border-radius:5%;">
                <div class="container" data-aos="fade-up">
                    <h4 class="paket" style="color: #FFF posision">Paket</h4>
                    <div class="section-title judul">
                        <h3 >Bimbingan Skripsi Online (BSO)</h3>
                        <h4 style="margin-bottom: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Nunc consectetur ut ligula vel laoreet.</h4>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box"style="height: 600px;">
                                <h4 class="custom-package" style="color: #FFF">PAKET SILVER</h4>
                              <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 250.000</h4></div>
                                <div class="custom-pricee" style="margin-left: -90px; font-size: 24px;"><strong>1 Bulan</strong></div>
                                <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text" > Bimbingan intensif pembuatan <br> judul skripsi</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text" > Bimbingan rumusan masalah</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"  > Penentuan dasar <br> teori berdasarkan variabel</span>
                                    </li>
                                    <!-- <li class="left-aligned"style="margin-bottom:70px;">
                    <span class="checkmark">&#10003;</span>
                    <span class="text">Konsultasi Konsentrasi Jurusan</span>
                  </li> -->
                                </ul>
                                <div class="custom-btn-wrap"style="margin-top:25%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box"style="height: 600px;">
                                <h4 class="custom-package" style="color: #FFF">PAKET GOLD</h4>
                                <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 450.000</h4></div>
                                <div class="custom-pricee" style="margin-left: -90px; font-size: 24px;"><strong>2 Bulan</strong></div>
                                <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Mahasiswa semester 3 dan 4</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan intensif pembuatan <br> bab 1-3</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan dalam pembuatan outline</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Bimbingan metode penelitian</span>
                                    </li>
                                </ul>
                                <div class="custom-btn-wrap"style="margin-top:40px">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box"style="height: 600px;">
                                <h4 class="custom-package" style="color: #FFF">PAKET PLATINUM</h4>
                                <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 410.000</h4></div>
                                <div class="custom-pricee" style="margin-left: -90px; font-size: 24px;"><strong>2 Bulan</strong></div>
                                      <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan intensif pembuatan bab 4 sampai selesai</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan hasil dan pembahasan penelitian</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Bimbingan pembuatan abstrak</span>
                                    </li>
                                    <!-- <li class="left-aligned">
                    <span class="checkmark">&#10003;</span>
                    <span class="text">Konsultasi Praktek Kerja Lapangan (PKL)</span>
                  </li> -->
                                </ul>
                                <div class="custom-btn-wrap"style="margin-top:26%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 </section>


            {{-- OKOKOKOKOKOKOK --}}

            {{--
            <section id="featured-services" class="featured-services">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mt-4 mb-4 ">
                        <a href="#" class="btn btn-primary change-content" data-target="all">Semua Paket</a>
                        <a href="#" class="btn btn-primary change-content" data-target="ktk">Paket Silver</a>
                        <a href="#" class="btn btn-primary change-content" data-target="bso">Paket Gold</a>
                        <a href="#" class="btn btn-primary change-content" data-target="kpk">Paket Platinum</a>
                        <a href="#" class="btn btn-primary change-content" data-target="kpi">Paket Diamond</a>
                    </div>

                    <div class="content" id="all-content">
                        <div class="row">
                            <!-- Paket Silver -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Silver</a>
                                        </h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan dalam pembuatan dan penyusunan judul skripsi.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Gold -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Gold</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan menuju Seminar Proposal (Sempro) atau bimbingan bab 1-3.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Platinum -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Platinum</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan menuju sidang skripsi atau bimbingan bab 4 hingga selesai.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Diamond -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Diamond</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan Simulasi Seminar Proposal dan Sidang Skripsi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Paket Silver -->
                    <div class="content" id="ktk-content" style="display: none;">
                        <div class="row">
                            <div class="col-md-9 col-lg-6 mb-5">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Silver</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan dalam pembuatan dan penyusunan judul skripsi.</p>
                                        <br>
                                        <ul>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans dapat membawa objek permasalahan
                                                    dan Mentor akan membimbing dalam merumuskan judul skripsi.</span>
                                            </li>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan dibantu dalam menemukan
                                                    masalah untuk judul skripsi yang akan dibuat.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Paket Gold -->
                    <div class="content" id="bso-content" style="display: none;">
                        <div class="row">
                            <div class="col-md-9 col-lg-6 mb-5">
                                <div class="card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Gold</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan menuju Seminar Proposal (Sempro) atau bimbingan bab 1-3.</p>
                                        <br>
                                        <ul>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan dibantu dalam memahami proses
                                                    penyusunan proposal penelitian skripsi.</span>
                                            </li>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan diberikan berbagai materi
                                                    dasar seputar proposal skripsi oleh mentor untuk memudahkan proses
                                                    penyusunan.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Paket Platinum -->
                    <div class="content" id="kpk-content" style="display: none;">
                        <div class="row">
                            <div class="col-md-9 col-lg-6 mb-5">
                                <div class="card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Platinum</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan menuju sidang skripsi atau bimbingan bab 4 hingga selesai.</p>
                                        <br>
                                        <ul>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan dibantu dalam memahami proses
                                                    penyusunan hasil dan pembahasan penelitian skripsi.</span>
                                            </li>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan diberikan berbagai materi
                                                    dasar seputar menganalisis penelitian skripsi oleh mentor untuk
                                                    memudahkan proses penyusunan.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Paket Diamond -->
                    <div class="content" id="kpi-content" style="display: none;">
                        <div class="row">
                            <div class="col-md-9 col-lg-6 mb-5">
                                <div class="card" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Paket Diamond</a></h4>
                                        <p class="card-text">Dikhususkan kepada Sobat Insans yang sedang membutuhkan
                                            bimbingan Simulasi Seminar Proposal dan Sidang Skripsi.</p>
                                        <br>
                                        <ul>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan dibimbing dalam pembuatan dan
                                                    cara mempresentasikan powerpoint seminar proposal dan sidang
                                                    skripsi.</span>
                                            </li>
                                            <li class="left-aligned">
                                                <span class="checkmark">&#10003;</span>
                                                <span class="feature-text">Sobat Insans akan dibimbing dalam simulasi
                                                    seminar proposal dan sidang skripsi.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    const changeContentButtons = document.querySelectorAll('.change-content');
                    const contentContainers = document.querySelectorAll('.content');

                    contentContainers.forEach(container => {
                        container.style.display = 'none';
                    });

                    document.getElementById('all-content').style.display = 'block';

                    changeContentButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();
                            const target = this.getAttribute('data-target');

                            contentContainers.forEach(container => {
                                container.style.display = 'none';
                            });

                            const contentContainer = document.getElementById(`${target}-content`);
                            if (contentContainer) {
                                contentContainer.style.display = 'block';
                            }
                        });
                    });
                </script>
            </section> --}}





<section id="paketmentor" class="paketmentor" style="background-color: white; mt-5">
                <div class="paketmentorbg mb-5">
                    <h2 class="judul-tengah"style="margin-top:20px;;font-family: Manrope;">Konsultasi Reguler <br> Dengan
                        Mentor
                    </h2>
                    <div class="container">
                        <div class="kotak">
                            <div class="segitiga">
                                <div class="kiri-atas">
                                    <h3><span
                                            style="color: #1E1E1E;
                                  font-family: 'Manrope';
                                  font-size: 27.644px;
                                  font-style: normal;
                                  font-weight: 700;
                                  line-height: normal;">PAKET</span>
                                        <br> Super
                                    </h3>
                                </div>
                                <div class="kanan-atas">
                                    <p style="">Harga per sesi: <br> <span style="color:#0539b1"> Rp 18.000</span>
                                    </p>
                                </div>
                            </div>
                            <div class="keterangan">
                                <div class="teks-kiri"><span style="color:#0539b1">Konstultasi </span> Judul Skripsi</div>
                                {{-- <div class="teks-kanan">Teks di kanan</div> --}}
                                <div class="clear"></div>
                            </div>
                            <ul class="deskripsi">
                                <strong> Materi: </strong>


                                <li> Bimbingan instensif pembuatan judul skripsi.</li>
                                <li> Bimbingan pembuatan rumusan masalah. </li>
                                <li> Penentuan dasar teori berdasarkan variabel. </li>
                                <li> Waktu bimbingan 12x pertemuan </li>
                                <li> Durasi bimbingan minimal 2 jam maksimal 4 jam.</li>
                                {{-- <p>Ini adalah kelas yang cocok untuk mereka yang ingin menikmati ketenangan dan kenyamanan selama menginap. Kelas 1A menyediakan fasilitas lengkap dan kenyamanan tingkat tinggi.</p> --}}

                            </ul>

                        </div>

                        <div class="kotak">
                            <div class="segitiga">
                                <div class="kiri-atas">
                                    <h3>
                                        <span
                                            style="color: #1E1E1E;
                            font-family: 'Manrope';
                            font-size: 27.644px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                                            PAKET
                                        </span> <br>Super
                                    </h3>
                                </div>
                                <div class="kanan-atas">
                                    <p style="">
                                        Harga per sesi: <br><span style="color: #0539b1"> Rp 20.000</span>
                                    </p>
                                </div>
                            </div>
                            <div class="keterangan">
                                <div class="teks-kiri">
                                    <span style="color: #0539b1">Konsultasi </span> Proposal Skripsi
                                </div>
                                {{-- <div class="teks-kanan">Teks di kanan</div> --}}
                                <div class="clear"></div>
                            </div>
                            <ul class="deskripsi">
                                <strong> Materi: </strong>

                                <li>Bimbingan intensif pembuatan bab 4 sampai selesai.</li>
                                <li>Bimbingan hasil dan pembahasan penelitian.</li>
                                <li>Bimbingan pembuatan abstrak.</li>
                                <li>Waktu bimbingan 24x pertemuan.</li>
                                <li>Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 hours.</li>

                            </ul>
                        </div>


                        <div class="kotak">
                            <div class="segitiga">
                                <div class="kiri-atas">
                                    <h3><span
                                            style="color: #1E1E1E;
                              font-family: 'Manrope';
                              font-size: 27.644px;
                              font-style: normal;
                              font-weight: 700;
                              line-height: normal;">PAKET
                                        </span><br> Super</h3>
                                </div>
                                <div class="kanan-atas">
                                    <p style="">Harga per sesi: <br><span style="color:#0539b1"> Rp 33.000 </span>
                                    </p>
                                </div>
                            </div>
                            <div class="keterangan">
                                <div class="teks-kiri"><span style="color:#0539b1">Konsultasi </span> Hasil dan Pembahasan
                                </div>
                                {{-- <div class="teks-kanan">Teks di kanan</div> --}}
                                <div class="clear"></div>
                            </div>
                            <ul class="deskripsi">
                                <strong> Materi: </strong>
                                <li> Bimbingan intensif pembuatan bab 1-3. </li>
                                <li> Bimbingan dalam pembuatan outline. </li>
                                <li> Bimbingan Metode Penelitian. </li>
                                <li> Waktu bimbingan 24x pertemuan. </li>
                                <li> Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 jam.</li>

                            </ul>
                        </div>
                    </div>
                </div>
</section>

<section id="testimonials" class="testimonials"style="margin-top:-50px ;margin-bottom:30px;">
                <div class="container"
                    data-aos="zoom-in"style="background: url(assets/img/bg/.png);background-size: cover;">
                    <div class="section-title">
                        {{-- <h2>Team</h2> --}}
                        <h3>Mentor Profesional Class Program</h3>
                        {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
                    </div>
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="centered-content">
                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/mentor2.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="member-info"><br>
                                                <h4 class="name">Ali Bin Abithalib Salman <br>S.Hut, M.Si</h4>
                                                <span class="position">Master Teacher Biologi</span>
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>Experimental Research and Laboratory</li>
                                                    <li>Mikrobiologi </li>
                                                    <li>SPSS </li>
                                                    <li>Teknologi Hasil Hutan</li>
                                                    {{-- <li>4. Asisten Riset dan Publikasi Ilmiah Internasional </li> --}}
                                                    <br>
                                                    {{-- <br><br> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/team4.png" class="img-fluid"
                                                    alt=""style="margin-left: -65px;">
                                            </div>
                                            <div class="member-info"> <br>
                                                <h4 class="name">Maya Ulyani,M.Pd</h4> <br>
                                                <span class="position">Master English Language Educationn</span>
                                                {{-- <br> --}}
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>S1 & S2 Pendidikan Bahasa Inggris</li>
                                                    <li>Outbound Educational Ruangguru</li>
                                                    <li>Partner Support Care Lazada</li>
                                                    <li>Lecturer of English Language Education</li>
                                                    <li>Lecturer English for specific purposes/li>
                                                    <li>Teacher in Vocational High School</li>
                                                    <li>Content Writer Quena</li>
                                                    <br>
                                                    {{-- <li>4.Teacher in Vocational High School</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/mentor1.png" class="img-fluid"
                                                    alt=""sgtyle="margin-left: -15px;margin-top:5xpx;width: 280px;height: 100px;">
                                            </div>
                                            <div class="member-info"><br>
                                                <h4 class="name">Bayu Ade Candra, <br>
                                                    S.Kom., M.M.</h4>
                                                <span class="position">Master Teacher Biologi</span>
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>9 tahun bekerja di Multinational Company and Government Institution
                                                    </li>
                                                    <li>2018 - 1st Winner, Indonesia Independence Run 10K Limitless RaceID
                                                    </li>
                                                    <li>2016 - 1st Winner, Creativity Idea Competition Great Giant Pineapple
                                                        Co.</li>
                                                    {{-- <li>2016 - 3rd Winner, Best Employee Of The Year Great Giant Pineapple Co</li> --}}
                                                    <br>
                                                    {{-- <li>4. Lecturer of English Language Education</li> --}}
                                                    {{-- <li>5. Lecturer English for specific purposes</li>
                    <li>6. Teacher in Vocational High School</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="centered-content">
                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img"style="width:400px;margin-left:-35px">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/mentor3.png" class="img-fluid"
                                                    alt=""style="width:600px;">
                                            </div>
                                            <div class="member-info"><br>
                                                <h4 class="name">Faidatul Ainiyah, S.E., M.E <br><br></h4>
                                                <span class="position"> Master teacher of Economics
                                                </span>
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>Master of Economics</li>
                                                    <li> Penerima Beasiswa Dinas pendidikan Lamongan Jawa Timur 2014-2018
                                                    </li>
                                                    {{-- <li> 3. Ekonomi Syariah dan Perbankan Syariah</li>   --}}
                                                    <li>Penerima Dana Penelitian Lembaga Penelitian dan Pengabdian kepada
                                                        Masyarakat 2017/2018</li>
                                                    <li> Asisten research</li>
                                                    <li> Publish berbagai hasil penelitian</li>
                                                    <br>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img"style="width:400px;margin-left:-35px">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/mentor4.png" class="img-fluid"
                                                    alt=""style="width:500px;">
                                            </div>
                                            <div class="member-info"> <br>
                                                <h4 class="name">Aci Meidayanti, S.Pd., M.M. <br> <br></h4>
                                                <span class="position">Master Teacher Management</span>
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>D1 Prodistik</li>
                                                    <li>S1 Teknik Informatika</li>
                                                    <li> S2 Management Marketing</li>
                                                    <li>Pendamping Proses Produk Halal</li>
                                                    <li>Bisnis Owner</li>
                                                    {{-- <li>Prestasi 3</li> --}}
                                                    <br>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member">
                                            <div class="member-img"style="width:400px;margin-left:-20px;height: 260px;">
                                                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                                <img src="assets/img/team/team5.png" class="img-fluid"
                                                    alt=""style="width:500px;margin-top:-10px">
                                            </div>
                                            <div class="member-info"style="margin-bottom:20px"> <br>
                                                <h4 class="name">Denny Iswanto, S.AP., M.AP <br><br> </h4>
                                                <span class="position">Master English Language Education</span>
                                                <div class="line"></div>
                                                <p class="achievement">Keahlian dan Prestasi :</p>
                                                <ul>
                                                    <li>Publish jurnal terindeks Sinta 2, Sinta 3, dan Sinta 4 (Proceeding
                                                        International)</li>
                                                    <li>Peneliti di program Lembaga Penelitian dan Pengabdian Kepada
                                                        Masyarakat (LPPM)</li>
                                                    <li>Presentator di konferensi nasional dan internasional</li>
                                                    <li>Analisis data SPSS, SEM, PLS</li>
                                                    {{-- <li>Prestasi 3</li>
                    <li>Prestasi 3</li> --}}
                                                    <br>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
</section>

<section id="konsultasi" class="konsultasi section-bg"
                style="font-family: 'Manrope', sans-serif;margin-top: -120px; " >
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        {{-- <h2>Team</h2> --}}
                        <h3> Alur bimbingan</h3>
                        {{-- <h3> Alur Konsultasi</h3> --}}
                        <br>
                        <div class="team-slider">
                            <div class="row" id="team-members">
                                <!-- Anggota Tim 1 -->
                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="konsultasi-content">
                                        <div class="member-img">
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            <img src="assets/img/bg/al1.png" class="img-fluid" style="width: 180px;"
                                                alt="">
                                        </div>
                                        <div class="member-infoo">
                                            <h4>1. Pesen Produk</h4>
                                            <br>
                                            <p>Pilih paket bimbingan yang sesuai dengan kebutuhanmu</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Anggota Tim 2 -->
                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="konsultasi-content">
                                        <div class="member-img">
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            <img src="assets/img/bg/al2.png" class="img-fluid" style="width: 165px;"
                                                alt="">
                                        </div>
                                        <div class="member-infoo">
                                            <h4>2. Lakukan Pembayaran</h4>
                                            <br>
                                            {{-- <span>Product Manager</span> --}}
                                            <p>Pilih paket bimbingan yang sesuai dengan kebutuhanmu</p><br>
                                            {{-- <ul>
              <li>Prestasi 1</li>
              <li>Prestasi 2</li>
              <li>Prestasi 3</li>
            </ul> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="konsultasi-content">
                                        <div class="member-img">
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            <img src="assets/img/bg/al3.png" class="img-fluid" style="width: 255px;"
                                                alt="">
                                        </div>
                                        <div class="member-infoo">
                                            <h4>3. Jadwalkan Sesi</h4>
                                            <br>
                                            {{-- <span>Product Manager</span> --}}
                                            <p>Mengirim bukti pembayaran dan menunggu verifikasi</p><br>
                                            {{-- <ul>
              <li>Prestasi 1</li>
              <li>Prestasi 2</li>
              <li>Prestasi 3</li>
            </ul> --}}
                                        </div>
                                    </div>
                                </div>

                                <!-- Anggota Tim 3 -->
                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="konsultasi-content">
                                        <div class="member-img">
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            <img src="assets/img/bg/al4.png" class="img-fluid" style="width: 240px;"
                                                alt="">
                                        </div>
                                        <div class="member-infoo" >
                                            <h4>4. Mulai Konsultasi</h4>
                                            <br>
                                            {{-- <span>CTO</span> --}}
                                            <p  >Kamu siap melakukan bimbingan bersama mentor</p><br>
                                            {{-- <ul>
              <li>Prestasi 1</li>
              <li>Prestasi 2</li>
              <li>Prestasi 3</li>
            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

<section id="faq" class="faq section-bg"
                style="background: url(assets/img/bg/bso4.png);background-size: cover; margin-top: 30px;">
                <div class="background-faq"></div>
                <div class="container kontener" data-aos="fade-up">
                    <div class="row">
                        <div class="col-xl-6">
                        </div>
                        <div class="col-xl-6">
                            <div class="section-titlee">
                                <h3>Paling Sering Ditanyakan</h3>
                            </div>
                            <ul class="faq-list" id="faq-list">
                                <li>
                                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question"> Siapa saja
                                        yang bisa belajar di Class Program? </div>
                                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Class Program terbuka untuk umum, baik mahasiswa ataupun non-mahasiswa yang
                                            ingin belajar seputar perkuliahan dan persiapan karir.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"> Apa saja
                                        jenis program kelas yang tersedia di Class Program?</div>
                                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Program kelas terdiri atas 4 jenis yaitu Kelas Tugas Kuliah (KTK), Bimbingan
                                            Matakuliah Jurusan (BMJ), Bimbingan Skripsi Online (BSO), dan Kelas Persiapan
                                            Karir (KPK).
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana
                                        cara memilih program kelas yang sesuai di Class Program?</div>
                                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Kelas Tugas Kuliah (KTK) diperuntukkan bagi sobat yang memerlukan bimbingan
                                            seputar tugas umum perkuliahan dengan sistem kenaikan kelas. Paket basic cocok
                                            untuk sobat yang ingin memahami tugas seputar penyusunan makalah, footnote dan
                                            endnote, jurnal, esai hingga materi karya tulis ilmiah yang umumnya ditemui pada
                                            semester 1-4. Sedangkan paket excellent diperuntukkan bagi sobat yang ingin
                                            memahami materi seputar metodologi penelitian dan skripsi yang umumnya ditemui
                                            pada semester 5 keatas. <br>
                                            Bimbingan Mata Kuliah Jurusan (BMJ) cocok untuk sobat yang ingin mendalami
                                            materi mata kuliah yang ada di jurusan masing-masing dengan sistem pendampingan.
                                            Paket Bronze untuk semester 1-2, Paket emerald untuk semester 3-4 dan paket
                                            diamond untuk semester 5-6. <br>
                                            Bimbingan Skripsi Online (BSO) diperuntukkan bagi sobat yang sedang menyusun
                                            tugas akhir atau skripsi dengan sistem mentoring. Paket Silver membimbing dalam
                                            pembuatan judul skripsi, paket gold membimbing dalam pembuatan proposal skripsi,
                                            paket platinum membimbing hasil dan pembahasan skripsi, dan paket diamond
                                            membimbing simulasi sempro atau sidang skripsi. <br>
                                            Kelas Persiapan Karir (KPK) diperuntukkan bagi sobat yang ingin mengasah soft
                                            skill dan hard skill untuk terjun di dunia kerja. <br>
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana
                                        cara bimbingan di Class Program?</div>
                                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                        <p>Sobat Insan perlu melakukan registrasi terlebih dahulu. Lengkapi data diri,
                                            kemudian login menggunakan akun yang telah terdaftar. Setelah itu memilih
                                            program yang tersedia sesuai dengan kebutuhan sobat insan. Lalu lakukan
                                            pembayaran sesuai pesanan dan Sobat insan akan diarahkan ke Minma untuk
                                            mendapatkan mentor. Setelah semua proses selesai, Sobat Insans siap untuk
                                            belajar di Class Program.

                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <button id="showMoreBtn" class="btn btn-faq">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <script src="script.js"></script>
</section>

            {{--
  WTGF
<section id="menu" class="menu">
  <div class="container" style="margin-top: 0px">
    <div class="content" id="content1">
      <div class="row blok">
        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3 style="color: black; font-family: Manrope; font-size: 50.279px; font-weight: bold; line-height: 100%;">WORKSHOP CLASS PROGRAM</h3>
          <div class="content-selectora mb-4 d-flex flex-row justify-content-around" style="margin-top: 10px;">
            <div class="d-flex align-items-end flex-column mt-3 ml-3 mb-3">
              <button id="content1Btn" class="btn btn-primary active">Paket Silver</button>
              <button id="content2Btn" class="btn btn-primary" style="width: 100%;">Paket Silver</button>
            </div>
            <br>
            <div class="d-flex align-items-end flex-column mt-3 mr-3 mb-3">
              <button id="content3Btn" class="btn btn-primary">Paket Silver</button>
              <button id="content4Btn" class="btn btn-primary">Paket Silver</button>
            </div>
          </div>
          <p>
            Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan skripsi dengan sistematika yang baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
          </p>
          <ul>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan pelatihan dalam penyusunan dan pembuatan skripsi oleh mentor yang ahli di bidangnya.
            </li>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.
            </li>
          </ul>
        </div>

        <div class="gambareo col-lg-6" data-aos="fade-right" data-aos-delay="100" style="margin-bottom: -100px;">
          <br> <br>
          <img src="assets/img/bg/wshop1.png" class="img-fluid" alt="" style="width: 100%; margin-bottom: -100px;">
        </div>
      </div>
    </div>

    <div class="content" id="content2">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3 style="color: black; font-family: Manrope; font-size: 50.279px; font-weight: bold; line-height: 100%;">WORKSHOP CLASS PROGRAM</h3>
          <div class="content-selectora mb-4 d-flex flex-row justify-content-around" style="margin-top: 10px;">
            <div class="d-flex align-items-end flex-column mt-3 ml-3 mb-3">
              <button id="content5Btn" class="btn btn-primary">Paket Silver</button>
              <button id="content6Btn" class="btn btn-primary" style="width: 100%;">Paket Silver</button>
            </div>
            <br>
            <div class="d-flex align-items-end flex-column mt-3 mr-3 mb-3">
              <button id="content7Btn" class="btn btn-primary">Paket Silver</button>
              <button id="content8Btn" class="btn btn-primary">Paket Silver</button>
            </div>
          </div>
          <p>
            Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan Karya Tulis Ilmiah (KTI) dengan baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
          </p>
          <ul>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh mentor yang ahli di bidangnya.
            </li>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.
            </li>
          </ul>
        </div>
        <div class="x col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <br> <br>
          <img src="assets/img/bg/wshop3.png" class="img-fluid" alt="" style="width: 100%;">
        </div>
      </div>
    </div>

    <div class="content" id="content3">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3 style="color: black; font-family: Manrope; font-size: 50.279px; font-weight: bold; line-height: 100%;">WORKSHOP CLASS PROGRAM</h3>
          <div class="content-selectora mb-4 d-flex flex-row justify-content-around" style="margin-top: 10px;">
            <div class="d-flex align-items-end flex-column mt-3 ml-3 mb-3">
              <button id="content9Btn" class="btn btn-primary active">Paket Silver</button>
              <button id="content10Btn" class="btn btn-primary" style="width: 100%;">Paket Silver</button>
            </div>
            <br>
            <div class="d-flex align-items-end flex-column mt-3 mr-3 mb-3">
              <button id="content11Btn" class="btn btn-primary">Paket Silver</button>
              <button id="content12Btn" class="btn btn-primary">Paket Silver</button>
            </div>
          </div>
          <p>
            Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan Karya Tulis Ilmiah (KTI) dengan baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
          </p>
          <ul>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh mentor yang ahli di bidangnya.
            </li>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.
            </li>
          </ul>
        </div>
        <div class="x col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <br> <br>
          <img src="assets/img/bg/wshop3.png" class="img-fluid" alt="" style="width: 100%;">
        </div>
      </div>
    </div>

    <div class="content" id="content4">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3 style="color: black; font-family: Manrope; font-size: 50.279px; font-weight: bold; line-height: 100%;">WORKSHOP CLASS PROGRAM</h3>
          <div class="content-selectora mb-4 d-flex flex-row justify-content-around" style="margin-top: 10px;">
            <div class="d-flex align-items-end flex-column mt-3 ml-3 mb-3">
              <button id="content13Btn" class="btn btn-primary active">Paket Silver</button>
              <button id="content14Btn" class="btn btn-primary" style="width: 100%;">Paket Silver</button>
            </div>
            <br>
            <div class="d-flex align-items-end flex-column mt-3 mr-3 mb-3">
              <button id="content15Btn" class="btn btn-primary">Paket Silver</button>
              <button id="content16Btn" class="btn btn-primary">Paket Silver</button>
            </div>
          </div>
          <p>
            Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan Karya Tulis Ilmiah (KTI) dengan baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
          </p>
          <ul>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh mentor yang ahli di bidangnya.
            </li>
            <li>
              <span class="circle">
                <span class="check">
                  <img src="assets/img/bg/centang.png" alt="Check Mark">
                </span>
              </span>
              Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.
            </li>
          </ul>
        </div>
        <div class="x col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <br> <br>
          <img src="assets/img/bg/wshop3.png" class="img-fluid" alt="" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</section> --}}



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
            {{-- butoon vidio play --}}
            <script>
                var video = document.getElementById("myVideo");
                var playButton = document.querySelector(".play-button");

                function togglePlay() {
                    if (video.paused || video.ended) {
                        video.play();
                        playButton.style.display = "none";
                    } else {
                        video.pause();
                    }
                }




                const faqData = [{
                        question: "Apa itu Class Program?",
                        answer: "Class Program adalah platform belajar online perkuliahan dan persiapan karir dengan sistem kenaikan kelas pertama di indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh mentor yang ahli di bidangnya."
                    },
                    {
                        question: "Siapa saja yang bisa belajar di Class Program?",
                        answer: " Class Program terbuka untuk umum, baik mahasiswa ataupun non-mahasiswa yang ingin belajar seputar perkuliahan dan persiapan karir."
                    },
                    {
                        question: "Apa saja jenis program kelas yang tersedia di Class Program?",
                        answer: "Program kelas terdiri atas 4 jenis yaitu Kelas Tugas Kuliah (KTK), Bimbingan Matakuliah Jurusan (BMJ), Bimbingan Skripsi Online (BSO), dan Kelas Persiapan Karir (KPK)."
                    },
                    {
                        question: "Bagaimana cara memilih program kelas yang sesuai di Class Program?",
                        answer: "Kelas Tugas Kuliah (KTK) diperuntukkan bagi sobat yang memerlukan bimbingan seputar tugas umum perkuliahan dengan sistem kenaikan kelas. Paket basic cocok untuk sobat yang ingin memahami tugas seputar penyusunan makalah, footnote dan endnote, jurnal, esai hingga materi karya tulis ilmiah yang umumnya ditemui pada semester 1-4. Sedangkan paket excellent diperuntukkan bagi sobat yang ingin memahami materi seputar metodologi penelitian dan skripsi yang umumnya ditemui pada semester 5 keatas. Bimbingan Mata Kuliah Jurusan (BMJ) cocok untuk sobat yang ingin mendalami materi mata kuliah yang ada di jurusan masing-masing dengan sistem pendampingan. Paket Bronze untuk semester 1-2, Paket emerald untuk semester 3-4 dan paket diamond untuk semester 5-6.Bimbingan Skripsi Online (BSO) diperuntukkan bagi sobat yang sedang menyusun tugas akhir atau skripsi dengan sistem mentoring. Paket Silver membimbing dalam pembuatan judul skripsi, paket gold membimbing dalam pembuatan proposal skripsi, paket platinum membimbing hasil dan pembahasan skripsi, dan paket diamond membimbing simulasi sempro atau sidang skripsi.Kelas Persiapan Karir (KPK) diperuntukkan bagi sobat yang ingin mengasah soft skill dan hard skill untuk terjun di dunia kerja."
                    },
                    {
                        question: "Bagaimana cara bimbingan di Class Program?",
                        answer: "MSobat Insan perlu melakukan registrasi terlebih dahulu. Lengkapi data diri, kemudian login menggunakan akun yang telah terdaftar. Setelah itu memilih program yang tersedia sesuai dengan kebutuhan sobat insan. Lalu lakukan pembayaran sesuai pesanan dan Sobat insan akan diarahkan ke Minma untuk mendapatkan mentor. Setelah semua proses selesai, Sobat Insans siap untuk belajar di Class Program."
                    },
                    {
                        question: "Siapa mentor yang ada di Class Program?.",
                        answer: "Mentor di Class Program berasal dari lulusan-lulusan top kampus yang berpengalaman dan ahli di bidangnya."
                    },
                    {
                        question: "Bagaimana sistem belajar di Class Program?",
                        answer: "Sistem belajar Class Program menggunakan sistem pendampingan yang sepenuhnya dilaksanakan secara online dengan metode Live teaching dan group sharing. Proses belajar turut dilengkapi  berbagai fasilitas pendukung pembelajaran seperti flash card, Video Pembelajaran, dan lainnya."
                    },
                    // {
                    //     question: "FAQ 8",
                    //     answer: "Jawaban untuk FAQ 8."
                    // }
                ];

                const faqList = document.getElementById('faq-list');
                const showMoreBtn = document.getElementById('showMoreBtn');
                let displayAll = false;

                function displayFAQ() {
                    faqList.innerHTML = ''; // Menghapus FAQ yang sebelumnya ditampilkan

                    const maxFAQsToShow = displayAll ? faqData.length : 5;

                    faqData.slice(0, maxFAQsToShow).forEach((faq, index) => {
                        const listItem = document.createElement('li');
                        listItem.innerHTML = `
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq${index + 1}">${faq.question}</div>
            <div id="faq${index + 1}" class="collapse" data-bs-parent=".faq-list">
                <p>${faq.answer}</p>
            </div>
        `;
                        faqList.appendChild(listItem);
                    });

                    // Menyembunyikan tombol "Baca Selengkapnya" jika semua FAQ ditampilkan
                    if (faqData.length <= 5) {
                        showMoreBtn.style.display = 'none';
                    } else if (displayAll) {
                        showMoreBtn.textContent = 'Tampilkan Lebih Sedikit';
                    } else {
                        showMoreBtn.textContent = 'Baca Selengkapnya';
                    }
                }

                showMoreBtn.addEventListener('click', () => {
                    displayAll = !displayAll;
                    displayFAQ();
                });

                document.addEventListener("DOMContentLoaded", function() {
                    // Testimonial Slider
                    var testimonialSwiper = new Swiper(".testimonials-slider", {
                        loop: true,
                        navigation: {
                            nextEl: "#nextProfile",
                            prevEl: "#prevProfile",
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                    });
                });
            </script>
    </body>
    </html>
@endsection
