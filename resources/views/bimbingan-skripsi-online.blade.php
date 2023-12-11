<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

 <!-- Menautkan Montserrat Font -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
    <!-- Include Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <!-- ======= Hero Section ======= -->
            {{-- Header atas --}}
            <section id="about" class="heada"  style="background: url(assets/img/bg/utama.png);background-size: cover; ">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <!-- <h2>About</h2> -->
                        <h3>Bimbingan Skripsi Online (BSO)</h3>
                        <p>Home > Bimbingan Skripsi Online (BSO)</p>
                        {{-- <span>BSO</span> --}}
                    </div>
                </div>
            </section>


            <section id="hero"
                class="d-flex align-items-center"style="background: url(assets/img/bg/bso.png);background-size: cover; ">
                <div class="container" data-aos="zoom-out" data-aos-delay="100">
                    <div class="d-flex">
                        <div style="width: 250px; height: 100%; padding: 10px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <div style="color: white; font-size: 23px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">CLASS PROGRAM</div>
                        </div>

                    </div>
                    <div class="inijudulbso" style="font-family: Montserrat;">
                        <h2 style=" margin: 0px 0px 0px 0px; font-size: 60px;
                        font-style: normal;
                        font-weight: 600;
                        line-height: 125%;">Apa Itu Bimbingan <br> Skripsi Online (BSO)?</h2>
                    </div>
                    <h2 style="width: 876px;
                    height: 183px;
                    flex-direction: column;
                    justify-content: center;
                    flex-shrink: 0;
                    font-family: Montserrat;
                    color: #FFF;
                    font-size: 20px;
                    font-style: normal;
                    /* font-weight: 200; */
                    line-height: 125%;
                    letter-spacing:1px;">Bimbingan Skripsi Online (BSO) Class Program <br> disediakan
                     secara khusus untuk membantu  <br>  mahasiswa dalam memahami langkah-langkah  <br>
                      penyusunan dan pengerjaan skripsi dengan sistem  <br> mentoring/pendampingan secara
                      intensif dan privat  <br> dalam bentuk paket hemat dan konsultasi reguler.</h2>
            </section>


<!-- ======= About Section ======= -->
<section id="about"
                style="background: url(assets/img/bg/bso1.png);
                background-size: cover;
                background-position: center;">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between"
                        style="margin-left: -140px; margin-top: -80px;">
                        <div class="col-lg-6 text-centerr">
                            <style>
                                .row {

                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 100%;
                                }

                                .col-lg-6 {
                                    text-align: center;
                                }

                                .play-button {
                                    margin-top: 460px;
                                    position: absolute;
                                    margin-left: -160px;
                                    border-radius: 100%;
                                }
                            </style>
                            <video width="280" height="500" controls style="margin-left: 120px; margin-top: 160px" id="myVideo">
                                <source src="assets/vidio/1.mp4" type="video/mp4">
                            </video>
                            <button class="play-button" onclick="togglePlay()">▶ </button>
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

                                }

                                .garis {
                                    margin-top: 100px;
                                    position: center;
                                }
                            </style>

                            <div class="section-title">
                                <!-- <h2>About</h2> -->
                                <span class="garis">
                                    <h3 style="margin-top: 130px; text-align: left; font-size: 45px; color: #000;
                                    font-family: Montserrat;">Keunggulan <br>
                                        Bimbingan Skripsi <br> Online <span>BSO</span></h3>
                                </span>

                                <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
                            </div>

                            <div class="content-box">
                                <span class="veryikasi">
                                    <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                </span>
                                <div class="content-text">
                                    <h5  style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Pendampingan oleh Mentor profesional secara privat online dan intensif.</h5>
                                    {{-- <p  style="text-align: left; margin-left: 15px;">Sobat Insans akan mendapatkan pendampingan oleh Mentor profesional secara privat
                                        online dan intensif</p> --}}
                                </div>
                            </div>

                            <div class="content-box">
                                <span class="veryikasi">
                                    <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                </span>
                                <div class="content-text">
                                    <h5   style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Jadwal bimbingan fleksibel, sesuai kesepakatan Sobat Insans dan Mentor.</h5>
                                    {{-- <p  style="text-align: left; margin-left: 15px;">Bimbingan Skripsi Online (BSO) Class Program disediakan untuk semua jurusan</p> --}}
                                </div>
                            </div>

                            <div class="content-box">
                                <span class="veryikasi">
                                    <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                </span>
                                <div class="content-text">
                                    <h5   style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Konsultasi langsung melalui Zoom Meet, Google Meet, Video Call WhatsApp dan telepon.</h5>
                                    {{-- <p  style="text-align: left; margin-left: 15px;">Bimbingan Skripsi Online (BSO) Class Program disediakan untuk semua jurusan</p> --}}
                                </div>
                            </div>

                            <div class="content-box">
                                <span class="veryikasi">
                                    <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                                </span>
                                <div class="content-text">
                                    <h5   style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Terbuka untuk semua jurusan.</h5>
                            </div>
                            </div>
                        </div>
                    </div>
</section>
<!-- End About Section -->


<section id="hero2" class="d-flex align-items-center">
    <img src="assets/img/bg/elemen1.png" alt="elemen1" style="width:10%;">
       {{-- <div style="width: 100%; text-align: center; margin-top:-200px; color: black; font-size: 65px; font-family: Montserrat; font-weight: 650; line-height: 100px; ">Nanti di BSO bakalan <br> ngapain aja sih?</div> 
       <div class="row" style="margin-left:20px;">
        <div class="row">
            <div class="col-sm-6"  style="max-width: 540px;">
              <div class="card">
                <div class="card-body">
                  <p class="card-text">Bahas tips-tips jitu penyusunan skripsi.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6"  style="max-width: 540px;">
              <div class="card">
                <div class="card-body">
                  <p class="card-text">Bahas tips-tips jitu penyusunan skripsi.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
</section>




<section id="hero2" class="d-flex align-items-center">
                {{-- style="background: url(); background-size: cover; background-position: center; margin-top: 100px"> --}}
                <div class="container" data-aos="zoom-out" data-aos-delay="100">
                    <div class="juduldua">
                        <h3 >
                            <span style="color: #3E87F8; font-family: Montserrat;   ">3000+</span>
                            Mahasiswa <br> Lulus Bersama Kami
                        </h3>
                        <img src="assets/img/bg/bso2.png" alt="">
                    </div>

                    <p style="font-family: Montserrat; font-size: 18px; color: #000; margin-top:-200px;">Bimbingan belajar online perkuliahan dan persiapan
                       karir  <br> dengan sistem kenaikan pertama di Indonesia
                        yang menyediakan  <br> berbagai macam program kelas serta akan
                        dibimbing langsung oleh <br> Mentor
                        yang ahli di bidangnya.</p>
                </div>
</section>

<img style="margin-bottom: 20px;" src="assets/img/bg/kotakkk.jpg" alt="">


<h3 style="text-align: center; color: #000;
margin-bottom: 50px;
font-family: Montserrat;
font-size: 35px;
font-style: normal;
font-weight: 700;
line-height: 125%; /* 100px */">
    Paket Hemat yang Tersedia di <br> Bimbingan Skripsi Online (BSO)
</h3>

<div class="card text-center  ml-5 mr-5 " style="border-radius: 25px;">
    <div class="card-header bg-primary" style="border-radius: 25px; margin-top:-10px;">
        <style>
            /* .color-white {
                color: blue;
            } */

            .color-white2 {
                color: white;
            }
            .color-blue {
                color: blue;
            }

            .bg-blue {
                background-color: white;
                border-radius: 50%;

            }
            .border-radius {
            border-radius: 50%;
        }
        </style>
   <ul class="nav nav-pills card-header-pills" id="buttonGroup">
            <li class="nav-item" style="border-radius:50%">
                <button style="border-radius: 50px" class="nav-link color-white border-radius bg-blue" onclick="switchButton(this)"><b>PAKET SILVER</b></button>
            </li>
            <li class="nav-item">
                <button class="nav-link color-white2 border-radius" onclick="switchButton(this)"  data-target="all"><b>PAKET GOLD</b></button>
            </li>
            <li class="nav-item">
                <button class="nav-link color-white2 border-radius" onclick="switchButton(this)" data-target="ktk"><b>PAKET PLATINUM</b></button>
            </li>
            <li class="nav-item">
                <button class="nav-link color-white2 border-radius" onclick="switchButton(this)"><b>PAKET DIAMOND</b></button>
            </li>
            <li class="nav-item">
                <button class="nav-link color-white2 border-radius" onclick="switchButton(this)"><b>PAKET COMPLETE</b></button>
            </li>
        </ul>

    </div>
    <div class="card-body ml-5" >
        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png"  alt="">
        <div style="font-family: Montserrat; text-align: left; margin-left: 500px; margin-top: 50px; color: black; font-size: 28px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
            Dikhususkan kepada Sobat Insans yang <br>
            sedang membutuhkan bimbingan dalam <br> pembuatan dan penyusunan judul skripsi.
        </div>

        <div style="display: flex; align-items: center;">
            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam merumuskan judul skripsi.
            </div>
        </div>

        <div style="display: flex; align-items: center;">
            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                Sobat Insans akan dibantu dalam menemukan masalah untuk judul skripsi yang akan dibuat.
            </div>
        </div>


    </div>
  </div>
</section>




{{-- <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="text-center mt-4 mb-4">
            <a href="#" class="btn btn-primary change-content" data-target="all">Semua Paket</a>
            <a href="#" class="btn btn-primary change-content" data-target="ktk">Paket Silver</a>
            <a href="#" class="btn btn-primary change-content" data-target="bso">Paket Gold</a>
            <a href="#" class="btn btn-primary change-content" data-target="kpk">Paket Platinum</a>
            <a href="#" class="btn btn-primary change-content" data-target="kpi">Paket Diamond</a>
        </div>



        <div class="content" id="all-content">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="#">Paket Silver</a></h4>
                    <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan dalam pembuatan dan penyusunan judul skripsi.</p>
                </div>
            </div>


            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">
  Paket Gold</a></h4>
                <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju Seminar Proposal (Sempro) atau bimbingan bab 1-3.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Paket Platinum</a></h4>
                <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju sidang skripsi atau bimbingan bab 4 hingga selesai.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Paket Diamond</a></h4>
                <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan Simulasi Seminar Proposal dan Sidang Skripsi.</p>
              </div>
            </div>

        </div>
        </div>



       <div class="content" id="bso-content" style="display: none;">
       <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
               <h4 class="title"><a href="">
 Paket Gold</a></h4>
               <p class="description">Dikhususkan kepada Sobat Insans yang sedang <br> membutuhkan bimbingan menuju Seminar Proposal (Sempro) atau bimbingan bab 1-3.</p>
               <br>
               <ul>
           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan dibantu dalam memahami proses penyusunan proposal penelitian skripsi.</span>
           </li>


           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan diberikan berbagai materi dasar seputar proposal skripsi oleh mentor untuk memudahkan proses penyusunan.</span>
           </li>
       </ul>
             </div>
           </div>
       </div>
       <div class="content" id="kpk-content" style="display: none;">
       <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
               <h4 class="title"><a href="">
 Paket Platinum</a></h4>
               <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju sidang skripsi atau bimbingan bab 4 hingga selesai.</p>
               <br>
               <ul>
           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan dibantu dalam memahami proses penyusunan hasil dan pembahasan penelitian skripsi.</span>
           </li>

           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan diberikan berbagai materi dasar seputar menganalisis penelitian skripsi oleh mentor untuk memudahkan proses penyusunan.</span>
           </li>
       </ul>
             </div>
           </div>
       </div>
       <div class="content" id="kpi-content" style="display: none;">
       <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
               <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
               <h4 class="title"><a href="">Paket Diamond</a></h4>
               <p class="description">Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan Simulasi Seminar Proposal dan Sidang Skripsi.</p>
               <br>
               <ul>
           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan dibimbing dalam pembuatan dan cara mempresentasikan powerpoint seminar proposal dan sidang skripsi.</span>
           </li>


           <li class="left-aligned">
               <span class="checkmark">&#10003;</span>
               <span class="feature-text">Sobat Insans akan dibimbing dalam simulasi seminar proposal dan sidang skripsi.</span>
           </li>
       </ul>
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
            button.addEventListener('click', function (event) {
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
</script> --}}


            <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing" style="margin-top:10px;margin-bottom:30px;border-radius:5%;" style="background-color: blue">
                <div class="container" data-aos="fade-up">
                    <h4 class="paket" >Paket</h4>
                    <div class="section-title judul">
                        <h3 class="bsa">Bimbingan Skripsi Online (BSO)</h3>
                        <h4 style="margin-bottom: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Nunc consectetur ut ligula vel laoreet.</h4>
                    </div>

                    <div class="row align-items-center justify-content-center" >
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box"style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET SILVER</h4>
                                <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 250.000</h4></div>
                                <div class="custom-pricee" ><strong>1 Bulan</strong></div>
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

                                </ul>
                                <div class="custom-btn-wrap"style="margin-top:25%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box"style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET GOLD</h4>
                                <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 450.000</h4></div>
                                <div class="custom-pricee" ><strong>2 Bulan</strong></div>
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
                                        <span class="text"> Bimbingan intensif pembuatan <br> bab 1-3</span>
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
                            <div class="custom-box"style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package"  style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET PLATINUM</h4>
                                <div class="rupiah-display" ><h4 style="color: #1E1E1E">Rp 410.000</h4></div>
                                <div class="custom-pricee" ><strong>2 Bulan</strong></div>
                                      <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan intensif pembuatan bab 4 sampai selesai</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Bimbingan intensif pembuatan bab 4 sampai selesai</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Bimbingan pembuatan abstrak</span>
                                    </li>

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


<section id="paketmentorr" class="paketmentor" style="background-color: white; ">
    {{-- <h4 class="custom-packagee mt-4" style="color: #FFF; font-size:18;
    font-family: Montserrat;">Bimbingan Skripsi Online (BSO)</h4> --}}
    {{-- <div class="custom-btn-wrap"style="margin-top:26%">
        <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
    </div> --}}
</section>


<section id="paketmentor" class="paketmentor" style="background-color: #f0f0f0;mt-5">
                <div class="paketmentorbg mb-5">
                    <h4 class="custom-packagee mt-4">Bimbingan Skripsi Online (BSO)</h4>
                    <h2 class="judul-tengah"style="margin-top:20px;;font-family: Manrope;">Konsultasi Reguler <br> Bimbingan Skripsi Online (BSO)
                    </h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 ml-2 mr-2 mt-5 ">
                        <div class="col">
                            <div class="card h-100" style="border-radius: 25px;">
                            <div class="card-body">
                              <h5 class="card-title">
                                <table >
                                    <thead>
                                        <tr>
                                            <th scope="col">Reguler
                                                <br><span class="green-text">Silver</span>
                                            </th>
                                             <th scope="col">Harga
                                                <br><span class="blue-text">Rp 47.000</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                              </h5>
                              <p class="card-text">
                                <table class="table table-no-border">
                                    <thead>
                                        <tr>
                                            <th scope="col">1 Sesi</th>
                                            <th scope="col">1 Jam Konsultasi</th>
                                        </tr>
                                    </thead>
                                </table>
                                <ul class="deskripsi" style="list-style: none;">
                                    {{-- <i class="fa-solid fa-check"></i> --}}
                                    <strong> Materi: </strong>
                                    <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;margin-left: -22px;"></i> Topik penelitian. </li>
                                    <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Variabel penelitian. </li>
                                    <li  style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>   Objek penelitian. </li>
                                    <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Judul penelitian.  </li>
                                    <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Rumusan masalah penelitian.</li>
                                    <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>    Dasar teori berdasarkan variabel yang digunakan.</li>
                                </ul>
                              </p>
                            </div>
                               <div class="card-footer text-center"  style="border-radius: 25px;">
                                <a href="#" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-radius: 25px;">
                              <div class="card-body">
                                <h5 class="card-title">
                                  <table >
                                      <thead>
                                          <tr>
                                            <th scope="col">Reguler
                                                <br><span class="green-text">Gold</span>
                                            </th>
                                             <th scope="col">Harga
                                                <br><span class="blue-text">Rp 66.000</span>
                                            </th>
                                          </tr>
                                      </thead>
                                  </table>
                                </h5>
                                <p class="card-text">
                                  <table class="table table-no-border">
                                      <thead>
                                          <tr>
                                              <th scope="col">1 Sesi</th>
                                              <th scope="col">1 Jam Konsultasi</th>
                                          </tr>
                                      </thead>
                                  </table>
                                  <ul class="deskripsi" style="list-style: none;">
                                      {{-- <i class="fa-solid fa-check"></i> --}}
                                      <strong> Materi: </strong>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Latar belakang.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Identifikasi masalah. </li>
                                      <li  style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>  Rumusan masalah. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Tujuan dan manfaat penelitian. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Teori dasar.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Kerangka konseptual.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Tinjauan literatur.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Riset-riset terkait.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Kerangka konsep.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Hipotesis penelitian.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Metode penelitian.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>    Populasi dan sampel.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Variabel-variabel penelitian.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>    Teknik pengumpulan data.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Teknik analisis data.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Teknik validasi data.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>   Prosedur penelitian.</li>
                                    </ul>
                                </p>
                              </div>
                                                   <div class="card-footer text-center"  style="border-radius: 25px;">
                    <a href="#" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar</a>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100" style="border-radius: 25px;">
                              <div class="card-body">
                                <h5 class="card-title">
                                  <table >
                                      <thead>
                                          <tr>
                                            <th scope="col">Reguler
                                                <br><span class="green-text">Platinum</span>
                                            </th>
                                             <th scope="col">Harga
                                                <br><span class="blue-text">Rp 62.000</span>
                                            </th>
                                          </tr>
                                      </thead>
                                  </table>
                                </h5>
                                <p class="card-text">
                                  <table class="table table-no-border">
                                      <thead>
                                          <tr>
                                              <th scope="col">1 Sesi</th>
                                              <th scope="col">1 Jam Konsultasi</th>
                                          </tr>
                                      </thead>
                                  </table>
                                  <ul class="deskripsi" style="list-style: none;">
                                      {{-- <i class="fa-solid fa-check"></i> --}}
                                      <strong> Materi: </strong>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Input data.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Olah data. </li>
                                      <li  style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Tabulasi data. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Interpretasi data. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Hasil dan pembahasan.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Menyusun transkrip wawancara.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Menyusun hasil wawancara.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Kesimpulan, keterbatasan, dan saran penelitia.</li>
                                    </ul>
                                </p>
                              </div>
                                   <div class="card-footer text-center"  style="border-radius: 25px;">
                    <a href="#" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar</a>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100" style="border-radius: 25px;">
                              <div class="card-body">
                                <h5 class="card-title">
                                  <table >
                                      <thead>
                                          <tr>
                                            <th scope="col">Reguler
                                                <br><span class="green-text">Titanium</span>
                                            </th>
                                             <th scope="col">Harga
                                                <br><span class="blue-text">Rp 57.000</span>
                                            </th>
                                          </tr>
                                      </thead>
                                  </table>
                                </h5>
                                <p class="card-text">
                                  <table class="table table-no-border">
                                      <thead>
                                          <tr>
                                              <th scope="col">1 Sesi</th>
                                              <th scope="col">1 Jam Konsultasi</th>
                                          </tr>
                                      </thead>
                                  </table>
                                  <ul class="deskripsi" style="list-style: none;">
                                      {{-- <i class="fa-solid fa-check"></i> --}}
                                      <strong> Materi: </strong>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Review proposal skripsi <br> bab 1-3.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Review skripsi full bab 1-5. </li>
                                      <li  style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>  Review artikel jurnal. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Teknis penulisan skripsi atau artikel jurnal yang masih keliru. </li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Teknis penulisan skripsi atau artikel jurnal yang masih keliru.</li>
                                      <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>  Saran dan masukan terhadap file skripsi atau artikel jurnal.</li>
                                  </ul>
                                </p>
                              </div>
                              <div class="card-footer text-center"  style="border-radius: 25px;">
                    <a href="#" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
</section>

{{-- <section id="testimonials" class="testimonials"style="margin-top:-100px ;margin-bottom:30px;">
    <div class="section-title">
        <h3 style="margin-top: 80px;">Mentor Profesional Class Program</h3>
    </div>
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="centered-content">
                    <img src="assets/img/testimonials/sobat1.png" width="300px" height="auto"  class="img-fluid" alt="">
                </div>
                <div class="centered-content">
                    <img src="assets/img/team/a.png" width="50px" height="auto" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
</section> --}}

<section id="testibaru" class="testibaru section-bg">
    <div class="profile-container">
        <p>Cerita Sobat Insans</p>
        <p1>Selama Bergabung di Class Program</p1>
        <br>
        <div class="profile-slider">
            <div class="profile">
                <div class="gabung">
                    <img class="profile-image" src="assets/img/team/team-2.jpg" alt="Gambar Profil">
                    <div class="profile-info">
                        <h1>Yohanes Hernandes SYohan</h1>
                        <p>" Dengan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen pembimbing jadi ngalir
                            gitu aja banyak ide muncul."</p>
                    </div>
                </div>
            </div>
            <div class="profile">

                <div class="gabung">
                    <img class="profile-image" src="assets/img/team/team-1.jpg" alt="Gambar Profil">
                    <!-- Ganti dengan path gambar profil Anda -->
                    <div class="profile-info">
                        <h1>ELouis Patric</h1>
                        <p>" Gan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen pembimbing jadi ngalir
                            gitu aja banyak ide muncul."
                        </p>
                    </div>
                    <!-- Tambahkan elemen tambahan di sini -->
                </div>
            </div>

            <div class="profile">
                <div class="gabung">
                    <img class="profile-image" src="assets/img/team/team-3.jpg" alt="Gambar Profil">
                    <!-- Ganti dengan path gambar profil Anda -->
                    <div class="profile-info">
                        <h1>Adinda Cahayani Supriyanto</h1>
                        <p>" Saya sangat berterima kasih pada BSO karena sudah menyediakan program bimbingan
                            skripsi online yang berkualitas dan juga ramah dikantong."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-navigation">
            <button id="prevProfile">
                {{-- << /button> --}}
                <button id="nextProfile">></button>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials"style="margin-top:-100px ;margin-bottom:30px;">

    <div class="section-title">
        <h3 style="margin-top: 80px;">Mentor Profesional Class Program</h3>
    </div>
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="centered-content">
                    <img src="assets/img/team/mentor1.png" class="img-fluid" alt="">
                    <img src="assets/img/team/mentor2.png" class="img-fluid" alt="">
                    <img src="assets/img/team/mentor3.png" class="img-fluid" alt="">
                </div>
                <div class="centered-content">
                    <img src="assets/img/team/a.png" width="50px" height="auto" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
</section>

<section id="konsultasi" class="konsultasi section-bg" style="font-family: 'Manrope', sans-serif;margin-top: -120px; " >
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        {{-- <h2>Team</h2> --}}
                        <h3> Alur bimbingan</h3>
                        {{-- <h3> Alur Konsultasi</h3> --}}
                        <br>
                        <div class="team-slider">
                            <div class="row" id="team-members">
                                <!-- Anggota Tim 1 -->
                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="konsultasi-content">
                                        <h4>1. Pesan Produk</h4>
                                        <div class="member-img">
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            <img src="assets/img/bg/al11.png" class="img-fluid"  style="width: 180px; margin-left:20px;"
                                                alt="">
                                        </div>
                                        <div class="member-infoo">
                                            <br>
                                            <p>Pilih paket bimbingan yang sesuai dengan kebutuhanmu</p><br>

                                        </div>
                                    </div>
                                </div>


                                <!-- Anggota Tim 2 -->
                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="konsultasi-content">
                                        <h4>2. Lakukan Pembayaran</h4>
                                        <div class="member-img">
                                            <div style="position: relative; display: flex; align-items: center;">
                                                <!-- Gambar pertama -->
                                                 <img style="margin-left: -80px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                                <!-- Gambar kedua -->
                                                <img src="assets/img/bg/al2.png" class="img-fluid"  style="width: 180px; margin-left:-20px;"
                                                alt="">
                                            </div>
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            {{-- <img src="assets/img/bg/al2.png" class="img-fluid"  style="width: 180px; margin-left:20px;"
                                                alt=""> --}}
                                        </div>
                                        <div class="member-infoo">

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
                                        <h4>3. Jadwalkan Sesi</h4>
                                        <div class="member-img">
                                            <div style="position: relative; display: flex; align-items: center;">
                                                <!-- Gambar pertama -->
                                                 <img style="margin-left: -50px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                                <!-- Gambar kedua -->
                                                <img src="assets/img/bg/al3.png" class="img-fluid" style="width: 255px; margin-left:-30px;  margin-top:5px; alt="">
                                            </div>
                                            <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                            {{-- <img src="assets/img/bg/al3.png" class="img-fluid" style="width: 255px;"
                                                alt=""> --}}
                                        </div>
                                        <div class="member-infoo">
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
                                        <h4>4. Mulai Konsultasi</h4>
                                        <div class="member-img">
                                            <div style="position: relative; display: flex; align-items: center;">
                                                <!-- Gambar pertama -->
                                                 <img style="margin-left: -50px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                                <!-- Gambar kedua -->
                                                <img src="assets/img/bg/al4.png" class="img-fluid" style="width: 230px; margin-left: -20px;" alt="">
                                            </div>
                                        </div>

                                        <div class="member-infoo" >
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

<section id="faq" class="faq section-bg" style="background-size: cover; margin-top: -1000px; background-color: #bbcde9; position: relative;">
    <img src="assets/img/bg/kananatasfaq.png" style="position: absolute; top: 0; right: 0; width: 200px; height: 250px;" alt="">
    <img src="assets/img/bg/kirifaq.png.png" style="position: absolute;  bottom: 0;left: 0; width: 200px; height: 250px;" alt="">
    {{-- ackground: url(assets/img/bg/bso4.png); --}}
                <div class="background-faq"></div>
                <div class="container kontener" data-aos="fade-up">
                    <div class="row">
                        <div class="col-xl-6" style="margin-bottom: 50px;">
                            <div class="section-title">
                                <h3>Paling Sering Ditanyakan</h3>
                            </div>

                                <div class="accordion" id="accordionFlushExample">
                                    <div class="accordion-item" >
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button  class="accordion-button collapsed"  type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">01</div> <b>Apakah di Class Program bisa ganti Mentor?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">02</div>  <b>Apakah bisa bimbingan malam hari?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingthree">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                                                <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">03</div><b>Apakah bimbingan menggunakan video call?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingfour">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">04</div><b>Sistem pembayaran bagaimana?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingfive">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">05</div><b>Apakah bimbingan private?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>

                                </div>
                                <a href="#pricing" style="width: 100%; height: auto; position: relative; display: inline-block; text-decoration: none;">
                                    <div style="width: 350px; height: 65.02px; left: 0px; top: 0px; position: absolute; background: #0849B2;  rgba(0, 0, 0, 0.20); border-radius: 20.32px"></div>
                                    <div style="left: 30.48px; top: 13.21px; position: absolute; color: white; font-size: 32.51px; font-family: Raleway; font-weight: 700; word-wrap: break-word">Baca selengkapnya</div>
                                </a>
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


                function switchButton(button) {
        // Dapatkan semua button dalam grup
        const buttons = document.querySelectorAll('#buttonGroup button');

        // Hapus kelas active dari semua button
        buttons.forEach(btn => btn.classList.remove('active', 'bg-blue', 'color-white', 'border-radius'));

        // Tambahkan kelas active pada button yang diklik
        button.classList.add('active', 'bg-blue', 'color-white', 'border-radius');
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profiles = document.querySelectorAll('.profile');
        let currentIndex = 0;

        function showProfile(index) {
            profiles.forEach((profile, i) => {
                profile.style.display = i === index ? 'block' : 'none';
            });
        }

        showProfile(currentIndex);

        document.getElementById('nextProfile').addEventListener('click', function() {
            if (currentIndex < profiles.length - 1) {
                currentIndex++;
                showProfile(currentIndex);
            }
        });

        document.getElementById('prevProfile').addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                showProfile(currentIndex);
            }
        });

        function autoRotate() {
            if (currentIndex < profiles.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            showProfile(currentIndex);
        }

        // Jalankan fungsi autoRotate setiap 5 detik
        setInterval(autoRotate, 3000);

    });



    var scrollableColumn1 = document.querySelector('#scrollableColumn1');
            var scrollAmount = 201; // Sesuaikan dengan lebar elemen single_left_coloum

            function scrollLeft() {
                scrollableColumn1.scrollLeft -= scrollAmount;
            }

            function scrollRight1() {
                scrollableColumn1.scrollLeft += scrollAmount;

                if (scrollableColumn1.scrollLeft >= scrollableColumn1.scrollWidth - scrollableColumn1.clientWidth) {
                    // Konten mencapai akhir, kembali ke awal
                    scrollableColumn1.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                }
            }






            var scrollableColumn = document.querySelector('#scrollableColumn');
            var scrollAmount = 201; // Sesuaikan dengan lebar elemen single_left_coloum

            function scrollLeft() {
                scrollableColumn.scrollLeft -= scrollAmount;
            }

            function scrollRight() {
                scrollableColumn.scrollLeft += scrollAmount;

                if (scrollableColumn.scrollLeft >= scrollableColumn.scrollWidth - scrollableColumn.clientWidth) {
                    // Konten mencapai akhir, kembali ke awal
                    scrollableColumn.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                }
            }

        </script>



    </body>

    </html>
@endsection
