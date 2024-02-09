<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-9YET8/TniDXKOiij1Qe1eblgJFFfD4jlYn/+9T6oPe4eVBN5LME6wJWoJPlD/Z1k3wrPQF0Gv9m9IPqFGe56WpA==" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-lY6/JB9Xa4kADl06IZ5FWYKTjnKiSiafwqz3VGssFSc8sPJwZP+DmGQ1TxI9Ld6D" crossorigin="anonymous">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">


</head>

@extends('layout.header')
@section('content')

<body>

    <main id="main">
        <!-- ======= Hero Section ======= -->
        {{-- Header atas --}}
        <section id="about" class="heada" style="background: url(assets/img/bg/utama.png);background-size: cover; margin-top:100px;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <!-- <h2>About</h2> -->
                    <h3>Bimbingan Skripsi Online (BSO)</h3>
                    <p style="margin-top: -2px; font-size:15px;font-weight:400;">Home > Bimbingan Skripsi Online (BSO)
                    </p>
                    {{-- <span>BSO</span> --}}
                </div>
            </div>
        </section>


        <section id="hero" class="d-flex align-items-center" style="background: url(assets/img/bg/bso.png);background-size: cover; ">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="d-flex">
                    <div style="width: 250px; height: 100%; padding: 10px; background:rgb(0,29,73); box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div style="color: white; font-size: 23px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">
                            CLASS PROGRAM</div>
                    </div>

                </div>
                <div class="inijudulbso">
                    <h2 style=" margin: 0px 0px 0px 0px; font-size: 50px;
                        font-style: normal;
                        font-weight: 600;
                        line-height: 125%;
                        font-family:Montserrat !important; ">
                        Apa Itu Bimbingan <br> Skripsi Online (BSO)?</h2>
                </div>
                <h2 style="width: 876px;
                    height: 183px;
                    flex-direction: column;
                    justify-content: center;
                    flex-shrink: 0;
                    font-family: Montserrat !important;
                    color: #FFF;
                    font-size: 19px;
                    font-style: normal;
                    /* font-weight: 200; */
                    line-height: 125%;
                    letter-spacing:1px;">
                    Bimbingan Skripsi Online (BSO) Class Program disediakan <br>
                    secara khusus untuk membantu mahasiswa dalam memahami <br> langkah-langkah
                    penyusunan dan pengerjaan skripsi dengan <br> sistem mentoring/pendampingan secara
                    intensif dan privat <br> dalam bentuk paket hemat dan konsultasi reguler.</h2>
        </section>


        <!-- ======= About Section ======= -->
        <section id="about" style="background: url(assets/img/bg/bso1.png);
                background-size: cover;
                background-position: center; margin-top: -100px;">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center justify-content-between" style="margin-left: -140px; margin-top: -80px;">
                    <div class="col-lg-6 text-centerr">
                        <style>
                            .row {
                                /* display: flex; */
                                /* align-items: center; */
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
                        <video width="280" height="500" controls style="margin-left: 120px; margin-top: 160px; border-radius:5%;" id="myVideo">
                            <source src="assets/video/1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <style>
                            .content-box {
                                display: flex;
                                align-items: center;
                                background-color: #FFF;
                            }

                            .veryikasi {
                                margin-left: -30px;
                                width: 30px;

                            }

                            .garis {
                                margin-top: 100px;
                                position: center;
                            }
                        </style>

                        <div class="section-title">
                            <span class="garis">
                                <h3 style="margin-top: 140px; text-align: left; font-size: 45px; color: #000;
                                    font-family: Montserrat;">
                                    Keunggulan <br>
                                    Bimbingan Skripsi <br> Online (BSO)</h3>
                            </span>

                        </div>

                        <div class="content-box" style="margin-top:30px; box-shadow: 0 0 10px rgba(0, 0, 0, 1);">
                            <span class="veryikasi">
                                <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                            </span>
                            <div class="content-text">
                                <h5 style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">
                                    Pendampingan oleh Mentor profesional secara privat online dan intensif</h5>
                                {{-- <p  style="text-align: left; margin-left: 15px;">Sobat Insans akan mendapatkan pendampingan oleh Mentor profesional secara privat
                                        online dan intensif</p> --}}
                            </div>
                        </div>

                        <div class="content-box" style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);">
                            <span class="veryikasi">
                                <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                            </span>
                            <div class="content-text">
                                <h5 style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Jadwal
                                    bimbingan fleksibel, sesuai kesepakatan Sobat Insans dan Mentor</h5>
                                {{-- <p  style="text-align: left; margin-left: 15px;">Bimbingan Skripsi Online (BSO) Class Program disediakan untuk semua jurusan</p> --}}
                            </div>
                        </div>

                        <div class="content-box" style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);">
                            <span class="veryikasi">
                                <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                            </span>
                            <div class="content-text">
                                <h5 style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">
                                    Konsultasi langsung melalui Zoom Meet, Google Meet, Video Call WhatsApp dan telepon
                                </h5>
                                {{-- <p  style="text-align: left; margin-left: 15px;">Bimbingan Skripsi Online (BSO) Class Program disediakan untuk semua jurusan</p> --}}
                            </div>
                        </div>

                        <div class="content-box" style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);">
                            <span class="veryikasi">
                                <img src="assets/img/bg/veryikasi.png" alt="veryikasi">
                            </span>
                            <div class="content-text">
                                <h5 style="text-align: left; margin-left: 15px; font-size: 15px; color: #000;">Terbuka
                                    untuk semua jurusan</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End About Section -->




        <img src="assets/img/bg/elemen1.png" alt="elemen1" style="width: 10%; background-size: cover; background-position: center;">
        <section id="hero2" class="align-items-center" style="margin-top:-400px; ">
            <h2 style="
                            text-align:center;
                            color: black;
                            font-size: 50px;
                            font-family: Montserrat;
                            font-weight: 580;
                            /* font-weight: 700;
                            line-height: 100px; */
                            word-wrap: break-word;
                        ">
                Nanti di BSO bakalan <br> ngapain aja sih?</h2>
            <div class="paketmentorbg mt-4">
                <div class="row row-cols-1 row-cols-md-4 g-4 ml-2 mr-2 mt-5 " style="margin-top:-80px;">
                    <div class="col">
                        <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1); width: 300px; height: 100px; background: rgb(240,246,255); border-radius: 25px; border: 0.91px #C3C3C3 solid">
                            <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                <img src="assets/img/bg/tips.png" alt="">
                                <div style="margin-top: -70px; margin-left:100px; color:#000;">Bahas tips-tips jitu
                                    <br> penyusunan skripsi
                                </div>
                            </div>
                            <div style="margin-left:  25px; margin-top: 25px; width: 50px; height: 5px;  background: #3E87F8">
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);width: 300px; height: 100px; background: rgb(240,246,255); border-radius: 25px; border: 0.91px #C3C3C3 solid">
                            <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                <img src="assets/img/bg/wenibar.png" alt="" style="width: 80px; margin-top:-5px;">
                                <div style="margin-top: -65px; margin-left:100px; color:#000;">Latihan seminar proposal
                                    dan sidang skripsi
                                </div>
                            </div>
                        </div>
                        <div style="margin-left:  25px; margin-top: -5px;  width: 50px; height: 5px;  background: #3E87F8">
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-4 g-4 ml-2 mr-2 mt-5 " style="margin-top:-80px;">
                    <div class="col">
                        <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);width: 300px; height: 100px; background: rgb(240,246,255);  border-radius: 25px; border: 0.91px #C3C3C3 solid">
                            <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                <img src="assets/img/bg/cakap.png" alt="" style="width: 80px;">
                                <div style="margin-top: -70px; margin-left:100px; color:#000;">Bisa curhat masalah <br>
                                    skripsi pada Mentor
                                </div>
                            </div>
                            <div style="margin-left:  20px; margin-top: 25px;  width: 50px; height: 5px;  background: #3E87F8">
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);width: 300px; height: 100px; background: rgb(240,246,255); border-radius: 25px; border: 0.91px #C3C3C3 solid">
                            <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                <img src="assets/img/bg/motivation.png" alt="" style="width: 80px;">
                                <div style="margin-top: -70px; margin-left:100px; color:#000;">Mendapatkan motivasi
                                    mengerjakan skripsi
                                </div>
                            </div>
                        </div>
                        <div style="margin-left:  30px; margin-top: -5px; width: 50px; height: 5px;  background: #3E87F8">
                        </div>
                    </div>
                    <div class="col">
                        {{-- <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);width: 300px; height: 100px; background: linear-gradient(0deg, white 0%, white 100%), linear-gradient(180deg, white 0%, #ECF4FF 100%);  border-radius: 25px; border: 0.91px #C3C3C3 solid"> --}}
                        <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 1);width: 300px; height: 100px; background: rgb(240,246,255);  border-radius: 25px; border: 0.91px #C3C3C3 solid">
                            <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                <img src="assets/img/bg/problem-solve.png" alt="" style="width: 80px;">
                                <div style="margin-top: -70px; margin-left:100px; color:#000;">Menemukan solusi dari
                                    masalah skripsi
                                </div>
                            </div>
                        </div>
                        <div style="margin-left:  30px; margin-top: -5px; width: 50px; height: 5px;  background: #3E87F8">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="assets/img/bg/elemen2.png" alt="elemen1" style="width: 10%; float: right;">



        <section id="hero2" class="d-flex align-items-center" style="margin-top: -50px;">
            <div class="container" data-aos="zoom-out" data-aos-delay="100" style="margin-left: 100px;">
                <div class="juduldua">
                    <h3>
                        <br>
                        <br>
                        <span style="color: #3E87F8; font-family: Montserrat; font-weight: 700;
                            line-height: 125%; font-size:80px;">3297+</span>
                        <br>
                        Mahasiswa Lulus <br> Bersama Kami <br>
                        <!-- <a href="#" class="custom-btn-buy">Daftar Sekarang</a> -->
                        <a href="{{ Auth::check() ? '/bimbingan-skripsi-online#pricing' : '/login' }}" style="text-decoration: none;">
                            <div style="width: 250px; padding: 8px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                <div style="letter-spacing: 1px; color: white; font-size: 20px; font-family: Montserrat; font-weight: 600; line-height: 35px; word-wrap: break-word">
                                    Pesan Sekarang
                                </div>
                            </div>
                        </a>
                        <br>

                        <div class="row">
                            <div class="col">
                                <div style="width: 180px; margin-top: 40px; height: 100px; background: #F5F5F4; linear-gradient:(180deg, white 0%, #ECF4FF 100%); box-shadow: 0px 18.36px 38.25px rgba(0, 0, 0, 0.15); border-radius: 18.36px; border: 0.76px #09326F solid;">
                                    <div class="card-title">
                                        <img style="margin-top:15px;margin-left:15px " src="assets/img/bg/ps1.png" alt="">
                                        <div style="margin-top: -80px; margin-left:100px; color: #101828; font-size: 25px; font-family: Inter; font-weight: 700; letter-spacing: 1px; word-wrap: break-word">
                                            24+</div>
                                        <div style="margin-top: -50px; margin-left:100px;   color: #000000 !important; font-size: 12px; font-family: Inter; font-weight: 600; letter-spacing: 1px; word-wrap: break-word">
                                            Kampus</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div style=" margin-left: -50px; width: 180px; margin-top: 40px; height: 100px; background: #F5F5F4; linear-gradient:(180deg, white 0%, #ECF4FF 100%); box-shadow: 0px 18.36px 38.25px rgba(0, 0, 0, 0.15); border-radius: 18.36px; border: 0.76px #09326F solid;">
                                    <div class="card-title" style="margin-top: 10px; margin-left:10px;">
                                        <img style="margin-top:15px;" src="assets/img/bg/ps2.png" alt="">
                                        <div style="margin-top: -76px; margin-left:90px; color: #101828; font-size: 25px; font-family: Inter; font-weight: 700; letter-spacing: 1px; word-wrap: break-word">
                                            78+</div>
                                        <div style="margin-top: -50px; margin-left:90px;  color: #000000 !important; font-size: 12px; font-family: Inter; font-weight: 600; letter-spacing: 1px; word-wrap: break-word">
                                            Mentor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h3>
                    <img style="margin-top: 150px;" src="assets/img/bg/bso2.png" alt="">
                </div>
                {{-- <p style="font-family: Montserrat; font-size: 18px; color: #000; margin-top:-150px;">Bimbingan belajar online perkuliahan dan persiapan
                       karir  <br> dengan sistem kenaikan pertama di Indonesia
                        yang menyediakan  <br> berbagai macam program kelas serta akan
                        dibimbing langsung oleh <br> Mentor
                        yang ahli di bidangnya.</p> --}}
            </div>
        </section>


        {{-- <section id="berita" class="berita container"> --}}
        <section id="pakethematbso" class="pakethematbso" style="z-index: auto;">
            <!--<img src="assets/img/bg/Ornament_kotak.jpg" alt="gambar sebelah kiri" style="transform: rotate(91deg); margin-top:-50px;">-->
            <h3 style="text-align: center; color: #000;
                    margin-bottom: 50px;
                    font-family: Montserrat;
                    font-size: 35px;
                    font-style: normal;
                    margin-top: -50px;
                    font-weight: 700;
                    line-height: 125%; /* 100px */">
                Program Bimbingan Skripsi Online (BSO) <br> yang Tersedia di Class Program
            </h3>

            <div class="card text-center  ml-5 mr-5 " style="border-radius: 25px;">
                <div class="card-header" style="border-radius: 25px;padding-bottom: 0px; background: linear-gradient(0deg, #09326F 0%, #3E87F8 113.49%);    margin-top: -35px;">
                    <style>
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

                        #silver-package:hover {
                            color: black;
                            /* Change this to your desired hover color */
                        }
                    </style>
                    <ul class="nav nav-pills card-header-pills d-flex justify-content-between align-items-center m-0 p-0" id="buttonGroup">
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content1')"><b id="silver-package">PAKET SILVER</b></button>
                        </li>
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content2')"><b id="silver-package">PAKET GOLD</b></button>
                        </li>
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content3')"><b id="silver-package">PAKET PLATINUM</b></button>
                        </li>
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content4')"><b id="silver-package">PAKET DIAMOND</b></button>
                        </li>
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content5')"><b id="silver-package">PAKET COMPLETE</b></button>
                        </li>
                        <li class="nav-item" style="border-radius: 50%; flex: 1;">
                            <button style="border-radius: 50px" class="nav-link color-white2 w-100" onclick="showContent('content6')"><b id="silver-package">KONSULTASI REGULER</b></button>
                        </li>
                    </ul>

                </div>

                <script>
                    // Menambahkan logika untuk mengubah warna tombol saat diklik
                    var buttons = document.querySelectorAll('.nav-link');
                    buttons.forEach(function(button) {
                        button.addEventListener('click', function() {
                            buttons.forEach(function(btn) {
                                btn.classList.remove('bg-blue', 'active');
                                btn.style.backgroundColor =
                                    ''; // Menghapus style latar belakang yang mungkin ditetapkan sebelumnya
                                btn.style.color =
                                    ''; // Menghapus style warna teks yang mungkin ditetapkan sebelumnya
                            });
                            this.classList.add('bg-blue', 'active');
                            this.style.backgroundColor = 'white'; // Setel latar belakang menjadi putih
                            this.style.color = 'blue'; // Setel warna teks menjadi biru
                        });
                    });

                    // Fungsi untuk menampilkan konten sesuai dengan tombol yang diklik
                    function showContent(contentId) {
                        // Mengambil semua elemen konten
                        var allContents = document.querySelectorAll('.content');

                        // Menyembunyikan semua konten
                        allContents.forEach(function(element) {
                            element.classList.remove('active');
                        });

                        // Menampilkan konten yang sesuai dengan ID yang diklik
                        document.getElementById(contentId).classList.add('active');
                    }
                </script>

                {{-- Silver --}}
                <div id="content1" class="content active">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan dalam pembuatan dan
                        penyusunan judul skripsi
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing<br> dalam
                            merumuskan judul skripsi
                        </div>
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam menemukan masalah untuk judul skripsi<br> yang akan dibuat
                        </div>
                    </div>

                </div>
                {{-- Gold --}}
                <div id="content2" class="content">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju seminar
                        proposal (sempro) atau bimbingan<br> bab 1-3
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam memahami proses penyusunan proposal<br>penelitian skripsi
                        </div>
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan diberikan berbagai materi dasar seputar proposal skripsi<br> oleh Mentor
                            untuk memudahkan proses penyusunan </div>
                    </div>


                </div>
                {{-- Platinum --}}
                <div id="content3" class="content ">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju sidang
                        skripsi atau bimbingan bab 4 hingga<br> selesai
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam memahami proses penyusunan hasil dan<br> pembahasan
                            penelitian skripsi </div>
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan diberikan berbagai materi dasar seputar menganalisis<br> penelitian
                            skripsi oleh Mentor untuk memudahkan proses penyusunan </div>
                    </div>

                </div>
                {{-- Diamond --}}
                <div id="content4" class="content ">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan Simulasi Seminar
                        Proposal dan Sidang Skripsi
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibimbing dalam pembuatan dan cara mempresentasikan<br> powerpoint seminar
                            proposal dan sidang skripsi </div>
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibimbing dalam simulasi seminar proposal dan<br> sidang skripsi </div>
                    </div>
                </div>
                {{-- Complate --}}
                <div id="content5" class="content ">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan skripsi secara
                        menyeluruh mulai dari pembuatan dan penyusunan judul hingga sidang skripsi
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam merumuskan judul skripsi, memahami penyusunan proposal
                            penelitian skripsi, pembahasan hasil penelitian skripsi,dan dibimbing dalam<br> persiapan
                            seminar proposal dan sidang skripsi </div>
                    </div>

                    <div style="display: flex; align-items: center; margin-left:368px;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans dapat request pembahasan dengan Mentor mengikuti progres pengerjaan
                            skripsi </div>
                    </div>
                </div>
                {{-- Konsultasi Reguler --}}
                <div id="content6" class="content ">
                    <img class="ml-5" style="margin-bottom: px; float: left; width: 320px; margin-left: 100px; height: auto; padding-left:30px;" src="assets/img/bg/kotakk.png" alt="">
                    <div style="font-family: Montserrat; text-align: left; margin-left: 420px; margin-top: -2px; color: black; font-size: 24px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang membutuhkan konsultasi skripsi dengan menentukan sendiri topik konsultasi (By Request) mulai dari perumusan judul hingga skripsi selesai
                    </div>

                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam merumuskan judul skripsi, memahami penyusunan proposal penelitian skripsi, pembahasan hasil penelitian skripsi sampai selesai </div>
                    </div>

                    <div style="display: flex; align-items: center; margin-left:368px;">
                        <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -8px; margin-right: 10px; font-size:25px;"></i>
                        <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans dapat request pembahasan dengan Mentor mengikuti progress pengerjaan skripsi</div>
                    </div>


                </div>

                <script></script>


            </div>
        </section>
        {{-- </section> --}}

        <style>
            #pricing {

                background-image: url('assets/img/bg/bso-background.png');
                background-color: #09326f;
                background-size: cover;
                height: 130vh;
                background-repeat: no-repeat;
                background-position: center;
                margin-bottom: 100px;
                /* Add other styles as needed */
            }
        </style>


        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing" style=" margin-top:-260px; margin-bottom: -150px; background-color:#09326f;">

            <div class="container" style="margin-top:200px;" data-aos="fade-up">
                <div style="width: 100%; text-align: center;">
                    <div style="width: 150px; height: 35px; padding: 10px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; margin: 0 auto;">
                        <div style="width: 424px; text-align: center; color: white; font-size: 15px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">
                            PAKET HEMAT</div>
                    </div>
                </div>


                <div>
                    <!-- <h3 class="bsa" style="color:white;">Bimbingan Skripsi Online (BSO)</h3> -->
                    <h3 style="color:white; font-size: 30px; text-align:center; margin-top:15px;">Bimbingan Skripsi
                        Online</h3>
                    <h4 style="margin-bottom: 50px; text-align: center; color:white; font-size:15px; font-weight:200;">
                        Memiliki lima jenis paket hemat
                        dengan rincian dan biaya sebagai berikut:</h4>
                </div>

                <div id="packageCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px; margin-left:50px;">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    {{--Silver --}}
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                PAKET SILVER</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    250.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>1
                                                    Bulan</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan intensif
                                                        pembuatan <br> judul
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan rumusan
                                                        masalah</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Penentuan dasar
                                                        <br> teori berdasarkan
                                                        variabel</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Waktu bimbingan
                                                        12x pertemuan</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Durasi bimbingan
                                                        minimal <br> 2 jam
                                                        maksimal 4 jam</span>
                                                </li>
                                            </ul>
                                            {{-- <div class="custom-btn-wrap" style="margin-top: -10%">
                                                <a id="custom-btn" class="custom-btn-buy" style="width: 80%; font-size: 12px; cursor: pointer;">Daftar Sekarang</a>
                                            </div> --}}
                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Silver' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>

                                            </div>

                                            {{-- <script>
                                                document.getElementById('custom-btn').addEventListener('click', function() {
                                                    // Menggunakan Laravel's Blade untuk mendapatkan status login
                                                    var isLoggedIn = @auth
                                                    true
                                                    @else
                                                    false
                                                    @endauth;

                                                    if (isLoggedIn) {
                                                        window.location.href = "pembelian/BSO%20Silver"; // Arahkan ke halaman pembelian jika sudah login
                                                    } else {
                                                        window.location.href = "/register"; // Arahkan ke halaman registrasi jika belum login
                                                    }
                                                });
                                            </script> --}}



                                        </div>
                                    </div>

                                    {{-- Gold --}}
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                PAKET GOLD</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    450.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>1
                                                    Bulan</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan intensif
                                                        pembuatan <br> bab
                                                        1-3</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan dalam
                                                        pembuatan outline</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan metode
                                                        penelitian</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Waktu bimbingan 24x
                                                        pertemuan</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Durasi bimbingan
                                                        minimal <br> 2 jam
                                                        maksimal 4 jam</span>
                                                </li>
                                            </ul>
                                            <div>

                                            </div>

                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Gold' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>

                                            </div>
                                        </div>
                                    </div>

                                    {{-- Platinum --}}
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                PLATINUM</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    410.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>2
                                                    Bulan</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan intensif
                                                        pembuatan <br> bab 4
                                                        sampai selesai</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan hasil dan
                                                        pembahasan <br>
                                                        penelitian</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan pembuatan
                                                        abstrak</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Waktu bimbingan 24x
                                                        pertemuan</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Durasi bimbingan
                                                        per pertemuan <br> minimal
                                                        2 jam maksimal 4 jam</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Platinum' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    {{-- DIAMOND --}}
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                DIAMOND</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    200.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>14
                                                    Hari</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan intensif pembuatan <br>
                                                        powerpoint proposal dan skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan presentasi proposal <br>dan
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan simulasi seminar <br> proposal
                                                        dan skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Konsultasi proposal dan skripsi <br> yang
                                                        telah dibuat</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Waktu bimbingan 7x pertemuan</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Durasi bimbingan per pertemuan <br> minimal
                                                        2 jam maksimal 4 jam</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Template powerpoint</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Sertifikat</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Diamond' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>

                                            </div>
                                        </div>
                                    </div>

                                    {{-- COMPLATE --}}
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                COMPLATE</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    1.010.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>3
                                                    Bulan</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan intensif
                                                        pembuatan <br> judul
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan intensif pembuatan <br> bab
                                                        1-3</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan intensif pembuatan <br> bab 4
                                                        sampai selesai</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan penyusunan ppt <br>proposal dan
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan presentasi proposal <br>dan
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan simulasi seminar <br>proposal dan
                                                        sidang skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Waktu bimbingan 30x pertemuan</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Complete' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- reguler -->
                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="custom-box" style="height: 380px; border-radius: 15px; width:280px;">
                                            <h4 class="custom-package" style="color: #FFF;
                                                font-family: Montserrat;
                                                font-size: 15px;
                                                font-style: normal;
                                                font-weight: 700;
                                                line-height: 125%; /* 40px */
                                                width:180px;
                                                height: 40px;
                                                margin-left: 28px;
                                                background: linear-gradient(0deg, #09326F 0%, #3E87F8 100%), #3E87F8;
                                                ">
                                                COMPLATE</h4>
                                            <div class="rupiah-display" style="position: relative;">
                                                <h4 style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                    <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                </h4>
                                                <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                    1.010.000</h4>
                                            </div>
                                            <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                <strong>3
                                                    Bulan</strong>
                                            </div>
                                            <hr style=" border: 2px solid #000; border-width: 1px;">
                                            <ul class="deskripsi" style="list-style: none;">
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan intensif
                                                        pembuatan <br> judul
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan intensif pembuatan <br> bab
                                                        1-3</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Bimbingan intensif pembuatan <br> bab 4
                                                        sampai selesai</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan penyusunan ppt <br>proposal dan
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan presentasi proposal <br>dan
                                                        skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px"> Bimbingan simulasi seminar <br>proposal dan
                                                        sidang skripsi</span>
                                                </li>
                                                <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                    <span class="checkmark" style="width: 18px; height:18px; ">&#10003;</span>
                                                    <span class="text-bso" style="font-size: 10px">Waktu bimbingan 30x pertemuan</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer text-center" style="border-radius: 25px; width:350px; height:100%; margin-left:-50px; position: relative;">
                                                <a href="{{ Auth::check() ?  'pembelian/BSO%20Complete' : '/register' }}" class="custom-btn-buy" style="margin-top:5px; width: 45%; font-size: 10px; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Daftar Sekarang</a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <style>
                        .carousel-control-prev,
                        .carousel-control-next {
                            width: 20%;
                            background: none;
                            border: none;
                            font-size: 2rem;
                            margin-left: -70px;
                            margin-right: -70px;
                            color: #fff;
                            outline: none;
                        }

                        .carousel-control-prev-icon,
                        .carousel-control-next-icon {
                            /* background-color: #17a2b8; */
                            background-color: blue;
                            border-radius: 50%;
                            margin-left: -52px;
                            margin-right: -53px;
                            padding: 15px;
                            color: #fff;
                        }

                        .carousel-control-prev:hover,
                        .carousel-control-next:hover {
                            /* background: rgba(23, 162, 184, 0.8); */
                        }
                    </style>
                    <!-- Navigation arrows -->
                    <a class="carousel-control-prev" href="#packageCarousel" role="button" data-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" style="margin-left: -100px; margin-top: 50px;" viewBox="0 0 35" fill="none">
                            <g filter="url(#filter0_b_229_15)">
                                <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="white" />
                            </g>
                            <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#packageCarousel" role="button" data-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35px" style="margin-left: 70px; margin-top: 50px;" viewBox="0 0 35" style="float: right;" fill="none">
                            <g filter="url(#filter0_b_229_15)">
                                <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                <path d="M28.3891 35.9506L36.7035 27.6738C37.3284 27.051 37.3284 25.9491 36.7035 25.3241L28.3891 17.0473C27.7399 16.4024 26.6909 16.4047 26.0461 17.0539C25.4012 17.7032 25.4012 18.7499 26.0505 19.3969L31.5205 24.8449H17.4866C16.5701 24.8449 15.8303 25.5869 15.8303 26.5012C15.8303 27.4154 16.5701 28.1574 17.4866 28.1574H31.5205L26.0505 33.6032C25.7259 33.9278 25.5647 34.3518 25.5647 34.778C25.5647 35.1998 25.7259 35.6238 26.0461 35.9462C26.6909 36.5932 27.7399 36.5954 28.3891 35.9506Z" fill="white" />
                            </g>
                            <path d="M28.3891 35.9506L36.7035 27.6738C37.3284 27.051 37.3284 25.9491 36.7035 25.3241L28.3891 17.0473C27.7399 16.4024 26.6909 16.4047 26.0461 17.0539C25.4012 17.7032 25.4012 18.7499 26.0505 19.3969L31.5205 24.8449H17.4866C16.5701 24.8449 15.8303 25.5869 15.8303 26.5012C15.8303 27.4154 16.5701 28.1574 17.4866 28.1574H31.5205L26.0505 33.6032C25.7259 33.9278 25.5647 34.3518 25.5647 34.778C25.5647 35.1998 25.7259 35.6238 26.0461 35.9462C26.6909 36.5932 27.7399 36.5954 28.3891 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                {{-- <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 550px; border-radius: 15px;">
                            <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET SILVER</h4>
                            <div class="rupiah-display">
                                <h4 style="color: #1E1E1E">Rp 250.000</h4>
                            </div>
                            <div class="custom-pricee"><strong>1 Bulan</strong></div>
                            <hr>
                            <ul>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan intensif pembuatan <br> judul skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan rumusan masalah</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Penentuan dasar <br> teori berdasarkan variabel</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Waktu bimbingan 12x pertemuan</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Durasi bimbingan minimal <br> 2 jam maksimal 4 jam.</span>
                                </li>

                            </ul>
                            <div class="custom-btn-wrap" style="margin-top:5%">
                                <a href="/pembelian/bso" class="custom-btn-buy">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 500px; border-radius: 15px;">
                            <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET GOLD</h4>
                            <div class="rupiah-display">
                                <h4 style="color: #1E1E1E">Rp 450.000</h4>
                            </div>
                            <div class="custom-pricee"><strong>2 Bulan</strong></div>
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
                            <div class="custom-btn-wrap" style="margin-top:20px">
                                <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 500px; border-radius: 15px;">
                            <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">PAKET PLATINUM</h4>
                            <div class="rupiah-display">
                                <h4 style="color: #1E1E1E">Rp 410.000</h4>
                            </div>
                            <div class="custom-pricee"><strong>2 Bulan</strong></div>
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
                            <div class="custom-btn-wrap" style="margin-top:20%">
                                <a href="/pembelian/bso" class="custom-btn-buy">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 500px; border-radius: 15px;">
                            <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">DIAMOND</h4>
                            <div class="rupiah-display">
                                <h4 style="color: #1E1E1E">Rp 200.000</h4>
                            </div>
                            <div class="custom-pricee"><strong>14 Hari</strong></div>
                            <hr>
                            <ul>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan intensif pembuatan <br> powerpoint proposal dan skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan presentasi proposal <br>dan skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan simulasi seminar <br> proposal dan skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Konsultasi proposal dan skripsi <br> yang telah dibuat</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Waktu bimbingan 7x pertemuan.</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Durasi bimbingan per pertemuan <br> minimal 2 jam maksimal 4 jam.</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Template powerpoint</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Sertifikat</span>
                                </li>
                            </ul>
                            <div class="custom-btn-wrap" style="margin-top:20%">
                                <a href="/pembelian/bso" class="custom-btn-buy">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-box" style="height: 500px; border-radius: 15px;">
                            <h4 class="custom-package" style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">COMPLETE</h4>
                            <div class="rupiah-display">
                                <h4 style="color: #1E1E1E">Rp 1.010.000</h4>
                            </div>
                            <div class="custom-pricee"><strong>3 Bulan</strong></div>
                            <hr>
                            <ul>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Bimbingan intensif pembuatan judul skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan intensif pembuatan <br> bab 1-3</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text"> Bimbingan intensif pembuatan <br> bab 4 sampai selesai</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Bimbingan penyusunan ppt <br>proposal dan skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Bimbingan presentasi proposal <br>dan skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Bimbingan simulasi seminar <br>proposal dan sidang skripsi</span>
                                </li>
                                <li class="left-aligned">
                                    <span class="checkmark">&#10003;</span>
                                    <span class="text">Waktu bimbingan 30x pertemuan</span>
                                </li>
                            </ul>
                            <div class="custom-btn-wrap" style="margin-top:20px">
                                <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>


                    <div class="arrow-buttons-wrapper" id="scrollContainer">
                        <span class="left-scroll-buttonbso" onclick="scrollLeft()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" style="margin-left: 5px; margin-top: 50px;" viewBox="0 0 35" fill="none">
                                <g filter="url(#filter0_b_229_15)">
                                    <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                    <!-- Mengubah path panah ke kiri -->
                                    <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="white" />
                                </g>
                                <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                            </svg>
                        </span>

                        <span class="right-scroll-buttonbso" onclick="scrollRight()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" style="margin-right: -30px; margin-top: 50px;" viewBox="0 0 35" style="float: right;" fill="none">
                                <g filter="url(#filter0_b_229_15)">
                                    <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                    <path d="M28.3891 35.9506L36.7035 27.6738C37.3284 27.051 37.3284 25.9491 36.7035 25.3241L28.3891 17.0473C27.7399 16.4024 26.6909 16.4047 26.0461 17.0539C25.4012 17.7032 25.4012 18.7499 26.0505 19.3969L31.5205 24.8449H17.4866C16.5701 24.8449 15.8303 25.5869 15.8303 26.5012C15.8303 27.4154 16.5701 28.1574 17.4866 28.1574H31.5205L26.0505 33.6032C25.7259 33.9278 25.5647 34.3518 25.5647 34.778C25.5647 35.1998 25.7259 35.6238 26.0461 35.9462C26.6909 36.5932 27.7399 36.5954 28.3891 35.9506Z" fill="white" />
                                </g>
                                <path d="M28.3891 35.9506L36.7035 27.6738C37.3284 27.051 37.3284 25.9491 36.7035 25.3241L28.3891 17.0473C27.7399 16.4024 26.6909 16.4047 26.0461 17.0539C25.4012 17.7032 25.4012 18.7499 26.0505 19.3969L31.5205 24.8449H17.4866C16.5701 24.8449 15.8303 25.5869 15.8303 26.5012C15.8303 27.4154 16.5701 28.1574 17.4866 28.1574H31.5205L26.0505 33.6032C25.7259 33.9278 25.5647 34.3518 25.5647 34.778C25.5647 35.1998 25.7259 35.6238 26.0461 35.9462C26.6909 36.5932 27.7399 36.5954 28.3891 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                                <defs>
                                    <filter id="filter0_b_229_15" x="-5" y="-5" width="63" height="63" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="2" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.5" />
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_229_15" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_229_15" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </span>
                    </div>

                    <script>
                        function scrollLeft() {
                            const scrollContainer = document.getElementById('scrollContainer');
                            scrollContainer.scrollBy({
                                left: -200,  // Adjust the value based on your content width
                                behavior: 'smooth'
                            });
                        }

                        function scrollRight() {
                            const scrollContainer = document.getElementById('scrollContainer');
                            scrollContainer.scrollBy({
                                left: 200,   // Adjust the value based on your content width
                                behavior: 'smooth'
                            });
                        }
                    </script>


                </div> --}}
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
                                                    dasar seputar proposal skripsi oleh Mentor untuk memudahkan proses
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
                                                    dasar seputar menganalisis penelitian skripsi oleh Mentor untuk
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


        <!-- <section id="paketmentorr" class="paketmentor" style="background-color: white; ">
            {{-- <h4 class="custom-packagee mt-4" style="color: #FFF; font-size:18;
                    font-family: Montserrat;">Bimbingan Skripsi Online (BSO)</h4> --}}
            {{-- <div class="custom-btn-wrap"style="margin-top:26%">
                        <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                    </div> --}}
        </section> -->


        <!-- <section id="paketmentor" class="paketmentor" style="background-color: #ffff; margin-top: -80px; ">
                                        <div class="paketmentorbg mb-5" style="margin-top: 300px;">
                                        <div style="width: 100%; text-align: center;">
                                            <div style="width: 300px; height: 40px; padding: 10px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; margin: 0 auto;">
                                                <div style="width: 424px; text-align: center; color: white; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">KONSULTASI REGULER</div>
                                            </div>
                                        </div>

                                          <h4  style="background-color: font-family: Manrope; text-align: center; font-size: 50px; margin-top: 20px; color: black;" >Konsultasi Reguler yang tersedia<br/>di Bimbingan Skripsi Online (BSO)</h4>
                        </section> -->

        <!-- okok -->
        <!-- <section id="paketmentor" class="paketmentor" style="background-color: #ffff; margin-top: -50px; ">
            <div class="paketmentorbg mb-5" style="margin-top: 300px;">
                <div style="margin-top: -340px; display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div style="width: 350px; padding: 2px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                        <div style="color: white; font-size: 15px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word;">
                            BIMBINGAN SKRIPSI ONLINE (BSO)</div>
                    </div>
                </div>
                <p style="margin-top: -280px; width: 100%; text-align: center; color: black; font-size: 35px; font-family: Montserrat; font-weight: 700;line-height: 1.2;">
                    Konsultasi Reguler yang tersedia<br />di Bimbingan Skripsi Online (BSO)</p>


                <div style="margin-top: 80px; margin-left: -50px; width: 100%; height: 100%; position: relative">
                    <div style="width: 100px;  left: 0px; top: 0px; position: absolute">
                        <div style="width: 30px; height: 30px; left: 30px; top: 8px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; background: #09326F; border-radius: 9999px">
                        </div>
                        <div style=" width: 100px; height: 100px; left: 190px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; background: #3E87F8; border-radius: 9999px">
                        </div>
                    </div>


                    <div style="margin-top: -68px; width:1606px; height: 55px; left: 103px; top: 13px; position: absolute">
                        <div style="width: 1214px; height: 45px; margin-left: -5px; left: 0px; top: 0px; position: absolute; background: rgba(143, 139, 139, 0.75); border-top-left-radius: 55px; border-top-right-radius: 55px; backdrop-filter: blur(130.68px)">
                        </div>
                        <div style="width: 22.65px; height: 22.65px; left: 50.71px; top: 14px; position: absolute; background: #FF0000; border-radius: 9999px">
                        </div>
                        <div style="width: 22.65px; height: 22.65px; left: 89.54px; top: 14px; position: absolute; background: #FFC700; border-radius: 9999px">
                        </div>
                        <div style="width: 22.65px; height: 22.65px; left: 128.36px; top: 14px; position: absolute; background: #00D930; border-radius: 9999px">
                        </div>
                    </div>
                </div>


                <style>
                    .nav-bso {
                        color: white;
                    }

                    .nav-bso.active {
                        background-color: rgb(255, 255, 255) !important;
                        color: blue;
                        border-radius: 50px !important;
                        line-height: 40px !important;
                        width: 300px;

                    }
                </style>
                <div class="card text-center ml-5 mr-5 " style="height: 300px; width: 1214px; border-radius: 0 0 25px 25px;margin-top: -10px;                ">
                    <div class="card-body" style="margin-top:-2px;border-radius: 0 0 0 25px; width: 400px; height: auto; padding-bottom: 0px;padding-top: 0px;background: linear-gradient(270deg, #09326F 54.47%, #3E87F8 119.9%);">

                        <div style="margin-top: 35px; width: 100%;    justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <button style=" border: none; background: transparent;  font-size: 18px !important; font-family: Montserrat; font-weight: 500; line-height: 40px; word-wrap: break-word" class="nav-bso  active" onclick="showPaket('paket1')"><b>REGULER SILVER</b></button>
                        </div>

                        <div style="margin-top: 10px; width: 100%;   border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <button style="border: none; background: transparent; border-radius: 50px; font-size: 18px !important; font-family: Montserrat; font-weight: 500; line-height: 40px; word-wrap: break-word;" class="nav-bso " onclick="showPaket('paket2')"><b>REGULER GOLD</b></button>
                        </div>

                        <div style="margin-top: 10px; width: 100%;   border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <button style="border: none; background: transparent; border-radius: 50px; font-size: 18px !important; font-family: Montserrat; font-weight: 500; line-height: 40px; word-wrap: break-word" class="nav-bso " onclick="showPaket('paket3')"><b>REGULER PLATINUM</b></button>
                        </div>

                        <div style="margin-top: 10px; width: 100%;   border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <button style="border: none; background: transparent; border-radius: 50px; font-size: 18px !important; font-family: Montserrat; font-weight: 500; line-height: 40px; word-wrap: break-word" class="nav-bso " onclick="showPaket('paket4')"><b>REGULER TITANIUM</b></button>
                        </div>
                        {{-- Silver --}}
                        <div id="paket1" class="paketbso card-body active" style="margin-top: -280px; text-align: left; ">
                            <div style="color: black; font-family: Montserrat; font-size: 20px; width:800px; margin-left: 380px; ">
                                Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan dalam pembuatan dan
                                penyusunan judul skripsi </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibantu dalam menemukan masalah untuk judul skripsi yang akan
                                    dibuat </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat konsultasi kepada Mentor objek permasalahan yang akan digunakan
                                    dalam perumusan judul skripsi </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat konsultasi opsi judul yang dimiliki dan membedahnya bersama
                                    Mentor
                                </div>
                            </div>
                        </div>

                        {{-- Gold --}}
                        <div id="paket2" class="paketbso card-body " style="margin-top: -280px; text-align: left; ">
                            <div style="color: black; font-family: Montserrat; font-size: 20px; width:800px; margin-left: 380px; ">
                                Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju seminar
                                proposal (sempro) atau bimbingan bab 1-3
                            </div>
                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibantu dalam memahami proses penyusunan proposal penelitian
                                    skripsi </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan diberikan berbagai materi dasar seputar proposal skripsi oleh
                                    Mentor untuk memudahkan proses penyusunan </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam
                                    merumuskan judul skripsi
                                </div>
                            </div>
                        </div>
                        {{-- Platinum --}}
                        <div id="paket3" class="paketbso card-body " style="margin-top: -280px; text-align: left; ">
                            <div style="color: black; font-family: Montserrat; font-size: 20px; width:800px; margin-left: 380px; ">
                                Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan menuju sidang skripsi
                                atau bimbingan bab 4 hingga selesai </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibantu dalam memahami proses penyusunan hasil dan pembahasan
                                    penelitian skripsi </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan diberikan berbagai materi dasar seputar menganalisis penelitian
                                    skripsi oleh Mentor untuk memudahkan proses penyusunan </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam
                                    merumuskan judul skripsi
                                </div>
                            </div>
                        </div>
                        {{-- Titanuium --}}
                        <div id="paket4" class="paketbso card-body " style="margin-top: -280px; text-align: left; ">
                            <div style="color: black; font-family: Montserrat; font-size: 20px; width:800px; margin-left: 380px; ">
                                Dikhususkan kepada Sobat Insans yang sedang membutuhkan bimbingan Simulasi Seminar
                                Proposal dan Sidang Skripsi </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibimbing dalam pembuatan dan cara mempresentasikan powerpoint
                                    seminar proposal dan sidang skripsi </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibimbing dalam simulasi seminar proposal dan sidang skripsi
                                </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam
                                    merumuskan judul skripsi
                                </div>
                            </div>
                        </div>
                        <div id="paket5" class="paketbso card-body " style="margin-top: -360px; text-align: left; ">
                            <div style="color: black; font-family: Montserrat; font-size: 20px; width:800px; margin-left: 380px; ">
                                Dikhususkan kepada Sobat Insans yang sedang membutuhkan konsultasi skripsi dalam
                                pembuatan dan penyusunan judul
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam
                                    merumuskan judul skripsi.
                                </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans akan dibantu dalam menemukan masalah untuk judul skripsi yang akan
                                    dibuat.
                                </div>
                            </div>

                            <div style="margin-left: 400px; display: flex; width:600%; margin-top:10px;">
                                <i class="fas fa-circle-check" style="color: #1b5cc5; font-size: 30px; margin-right: 10px;"></i>
                                <div style="font-family: Montserrat; color: black; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px; width: 700px;">
                                    Sobat Insans dapat membawa objek permasalahan dan Mentor akan membimbing dalam
                                    merumuskan judul skripsi.
                                </div>
                            </div>
                        </div>



                    </div>



                </div>
                <script>
                    var tombol = document.querySelectorAll('.nav-bso');
                    tombol.forEach(function(button) {
                        button.addEventListener('click', function() {
                            tombol.forEach(function(btn) {
                                btn.classList.remove('active');
                                btn.style.backgroundColor = 'nav-bso';
                                btn.style.color = 'nav-bso';
                                                        });
                            this.classList.add('active');
                            this.style.backgroundColor = 'border';
                            this.style.color = 'active';


                        });
                    });

                    function showPaket(paketId) {

                        var paketElements = document.getElementsByClassName('paketbso');
                        for (var i = 0; i < paketElements.length; i++) {
                            paketElements[i].classList.remove('active');
                        }


                        var selectedPaket = document.getElementById(paketId);
                        if (selectedPaket) {
                            selectedPaket.classList.add('active');
                        }
                    }
                </script>


                <script>

                </script>

            </div>
        </section> -->

        {{-- <section id="paketmentor" class="paketmentor" style="background-color: #ffff; margin-top: -330px; background: url(assets/img/bg/gelombang.png); background-size: cover; ">
            <div class="paketmentorbg mb-5" style="margin-top: 300px;">
                <div style="width: 100%; text-align: center;">
                    <div style="width: 300px; height: 40px; padding: 5px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; margin: 0 auto;">
                        <div style="width: 424px; text-align: center; color: white; font-size: 15px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">
                            KONSULTASI REGULER</div>
                    </div>
                </div>

                <h4 style=" font-family: Montserrat; text-align: center; font-size: 35px; margin-top: 10px; color:#000; font-weight:bold;">
                    Konsultasi Reguler</h4>
                <h4 style=" font-family: Montserrat; text-align: center; color:#000; font-size:20px">Memiliki delapan
                    jenis konsultasi
                    reguler dengan rincian dan biaya sebagai berikut:</h4>

                <div id="packageCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -35px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-md-4 g-3 ml-2 mr-2 mt-5 ">
                                <div class="col">
                                    <div class="card" style="border-radius: 25px; border: 5px solid #1b5cc5; height: 370px;">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                                        <br><span class="green-text" style="font-size: 18px !important;">Silver</span>
                                                            </th>
                                                            <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                                                <br><span class="blue-text" style="font-weight: 700 !important; font-size:20px !important; ">Rp.
                                                                    47k</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </h5>
                                            <p class="card-text">
                                            <table class="table table-no-border">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="text-align: center !important;">1
                                                            Sesi</th>
                                                        <th scope="col" style="text-align: center !important;">1
                                                            Jam Konsultasi</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <ul class="deskripsi" style="list-style: none;">
                                                <strong> Materi: </strong>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                                    Topik penelitian </li>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                                    Variabel penelitian </li>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                                    Objek penelitian </li>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                                    Judul penelitian </li>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                                    Rumusan masalah penelitian</li>
                                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                                    Dasar teori berdasarkan variabel yang digunakan</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="card-footer text-center" style="border-radius: 20px; height: 45px;">
                                            <a href="{{ Auth::check() ? '/pembelian/bso' : '/register' }}" class="btn btn-primary" style="border-radius: 10px; align-content: center; margin-top: -10px; font-size: 12px;">Daftar Sekarang</a>
        </div>
        </div>
        </div>
        <div class="col">
            <div class="card" style="border-radius: 25px; border: 5px solid #1b5cc5;height: 370px;">
                <div class="card-body">
                    <h5 class="card-title">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                <br><span class="green-text" style="font-size: 18px !important;">Gold</span>
                                    </th>
                                    <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                        <br><span class="blue-text" style="font-weight: 700 !important; font-size:20px !important; ">Rp.
                                            66k</span>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </h5>
                    <p class="card-text">
                    <table class="table table-no-border">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center !important;">1
                                    Sesi</th>
                                <th scope="col" style="text-align: center !important;">1
                                    Jam Konsultasi</th>
                            </tr>
                        </thead>
                    </table>
                    <ul class="deskripsi" style="list-style: none;">
                        <strong> Materi: </strong>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Latar belakang</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Identifikasi masalah </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                            Rumusan masalah </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Tujuan dan manfaat penelitian </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teori dasar</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Kerangka konseptual</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Tinjauan literatur</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Riset-riset terkait</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Kerangka konsep</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Hipotesis penelitian</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Metode penelitian</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Populasi dan sampel</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Variabel-variabel penelitia</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teknik pengumpulan data</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teknik analisis dat.</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teknik validasi data</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Prosedur penelitian</li>
                    </ul>
                    </p>
                </div>
                <div class="card-footer text-center" style="border-radius: 20px;height: 45px; ">
                    <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;margin-top: -10px; font-size:12px;">Daftar
                        Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="border-radius: 25px; border: 5px solid #1b5cc5;height: 370px;">
                <div class="card-body">
                    <h5 class="card-title">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                <br><span class="green-text" style="font-size: 18px !important;">Platinum</span>
                                    </th>
                                    <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                        <br><span class="blue-text" style="font-weight: 700 !important; font-size:20px !important; ">Rp.
                                            62k</span>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </h5>
                    <p class="card-text">
                    <table class="table table-no-border">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center !important;">1
                                    Sesi</th>
                                <th scope="col" style="text-align: center !important;">1
                                    Jam Konsultasi</th>
                            </tr>
                        </thead>
                    </table>
                    <ul class="deskripsi" style="list-style: none;">
                        <strong> Materi: </strong>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Input data</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Olah data </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                            Tabulasi data </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Interpretasi data </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Hasil dan pembahasan</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Menyusun transkrip wawancara</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Menyusun hasil wawancara</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Kesimpulan, keterbatasan, dan saran penelitia</li>
                    </ul>
                    </p>
                </div>
                <div class="card-footer text-center" style="border-radius: 20px;height: 45px; ">
                    <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;margin-top: -10px; font-size:12px;">Daftar
                        Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="border-radius: 25px; border: 5px solid #1b5cc5;height: 370px;">
                <div class="card-body">
                    <h5 class="card-title">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                <br><span class="green-text" style="font-size: 18px !important;">Titanium</span>
                                    </th>
                                    <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                        <br><span class="blue-text" style="font-weight: 700 !important; font-size:20px !important; ">Rp.
                                            57k</span>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </h5>
                    <p class="card-text">
                    <table class="table table-no-border">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center !important;">1
                                    Sesi</th>
                                <th scope="col" style="text-align: center !important;">1
                                    Jam Konsultasi</th>
                            </tr>
                        </thead>
                    </table>
                    <ul class="deskripsi" style="list-style: none;">
                        <strong> Materi: </strong>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Review proposal skripsi <br> bab 1-3</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Review skripsi full bab 1-5</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                            Review artikel jurnal </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teknis penulisan skripsi atau artikel jurnal yang masih keliru </li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Teknis penulisan skripsi atau artikel jurnal yang masih keliru</li>
                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                            Saran dan masukan terhadap file skripsi atau artikel jurnal</li>
                    </ul>
                    </p>
                </div>
                <div class="card-footer text-center" style="border-radius: 20px; height: 45px;">
                    <a href="{{ Auth::check() ? '/pembelian/bso' : '/register' }}" class="btn btn-primary" style="border-radius: 10px; align-content: center; margin-top: -10px; font-size: 12px;">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
            <div class="row row-cols-1 row-cols-md-4 g-3 ml-2 mr-2 mt-5 ">
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                        <br><span class="green-text" style="font-size: 18px !important;">Silver</span>
                                            </th>
                                            <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                                <br><span class="blue-text" style="font-weight: 700 !important; font-size:25px !important; ">Rp.
                                                    47K</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center !important;">1
                                            Sesi</th>
                                        <th scope="col" style="text-align: center !important;">4
                                            Jam Konsultasi</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Topik penelitian </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Variabel penelitian </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                    Objek penelitian </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Judul penelitian </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Rumusan masalah penelitian</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Dasar teori berdasarkan variabel yang digunakan</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                        <br><span class="green-text" style="font-size: 18px !important;">Gold</span>
                                            </th>
                                            <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                                <br><span class="blue-text" style="font-weight: 700 !important; font-size:25px !important; ">Rp.
                                                    66K</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center !important;">1
                                            Sesi</th>
                                        <th scope="col" style="text-align: center !important;">4
                                            Jam Konsultasi</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Latar belakang</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Identifikasi masalah </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                    Rumusan masalah </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Tujuan dan manfaat penelitian </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teori dasar</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Kerangka konseptual</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Tinjauan literatur</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Riset-riset terkait</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Kerangka konsep</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Hipotesis penelitian</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Metode penelitian</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Populasi dan sampel</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Variabel-variabel penelitia</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teknik pengumpulan data</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teknik analisis dat.</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teknik validasi data</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Prosedur penelitian</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 10px;">
                            <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                        <br><span class="green-text" style="font-size: 18px !important;">Platinum</span>
                                            </th>
                                            <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                                <br><span class="blue-text" style="font-weight: 700 !important; font-size:25px !important; ">Rp.
                                                    62K</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center !important;">1
                                            Sesi</th>
                                        <th scope="col" style="text-align: center !important;">4
                                            Jam Konsultasi</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Input data</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Olah data </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                    Tabulasi data </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Interpretasi data </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Hasil dan pembahasan</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Menyusun transkrip wawancara</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Menyusun hasil wawancara</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Kesimpulan, keterbatasan, dan saran penelitia</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: left;"><a style="font-weight: 700 !important; font-size:25px !important; ">REGULER<a>
                                                        <br><span class="green-text" style="font-size: 18px !important;">Titanium</span>
                                            </th>
                                            <th scope="col"> <span style="font-size: 18px !important;">Harga</span>
                                                <br><span class="blue-text" style="font-weight: 700 !important; font-size:25px !important; ">Rp.
                                                    57K</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center !important;">1
                                            Sesi</th>
                                        <th scope="col" style="text-align: center !important;">4
                                            Jam Konsultasi</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Review proposal skripsi <br> bab 1-3</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Review skripsi full bab 1-5</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                    Review artikel jurnal </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teknis penulisan skripsi atau artikel jurnal yang masih keliru </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Teknis penulisan skripsi atau artikel jurnal yang masih keliru</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Saran dan masukan terhadap file skripsi atau artikel jurnal</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="#" class="btn btn-primary" style="border-radius: 10px; align-content: center;">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> --}}



        <section id="testibaru" class="testibaru section-bg" style="margin-bottom:15px; margin-top:100px;">
            <div class="profile-container" style="position: absolute; ">
                <p style="margin-top:40px; color:#000; font-size:35px; margin-bottom:-1px;">Cerita Sobat Insans</p>
                <br>
                <!-- <p1>Selama Bergabung di Class Program</p1> -->
                <br>
                <!-- testi1 -->

                <br>
                <div class="profile-slider" style="    display: block; ">
                    <div class="profile">
                        <img class="pro" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style=" border: 7px solid #ffffff !important;width: 100px; margin-top:-30px;     margin-left: -40px;">
                        <div class="gabung" style=" margin-top:-50px;   margin-right: 100px;
                        ">
                            <div class="profile-info" style="height: 250px;">
                                <div style="text-align:center;  margin-top: 50px;">
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                </div>
                                <p style="margin-top:30px; margin-bottom: 50px; text-align:center; font-size:15px;">
                                    “Alhamdulillah
                                    saya sangat-sangat puas konsultasi di BSO Class Program. Arahan Mentor dan Kak Dewi
                                    membantu saya untuk menemukan solusi mengenai permasalahan skripsi. Kedepannya saya
                                    akan konsultasi kembali disini.”</p>

                                <h1 style="text-align:center; margin-top: -20px; font-size:15px;">Fitri Wahyuni Lubis
                                </h1>
                                <p style="text-align:center; margin-top: -20px; font-size:15px;">Sastra Indonesia -<a style="font-style: italic !important;"> Universitas Negeri Medan</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile-slider" style="    display: block; ">
                    <div class="profile">
                        <img class="pro" src="assets/img/team/team-1.jpg" alt="Gambar Profil" style=" border: 7px solid #ffffff !important;width: 100px; margin-top:-30px;     margin-left: -40px;">
                        <div class="gabung" style=" margin-top:-50px;   margin-right: 100px;">
                            <div class="profile-info" style="height: 250px;">
                                <div style="text-align:center;  margin-top: 50px;">
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                </div>
                                <p style="margin-top:30px; margin-bottom: 50px; text-align:center; font-size:15px;">“Ikut BSO ternyata
                                    sangat menginspirasi dan insightful. Mentor sangat responsif, memberikan panduan dan
                                    feedback konstruktif yang membantu saya untuk memahami pembuatan judul skripsi.
                                    Meskipun belajarnya online, tapi sangat happy dan enjoy”.</p>

                                <h1 style="text-align:center; margin-top: -20px; font-size:15px;">Adinda</h1>
                                <p style="text-align:center; margin-top: -20px; font-size:15px;">Pendidikan Bahasa Inggris -<a style="font-style: italic !important;"> Universitas Negeri Surabaya</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile-slider" style="    display: block; ">
                    <div class="profile">
                        <img class="pro" src="assets/img/team/team-4.jpg" alt="Gambar Profil" style=" border: 7px solid #ffffff !important;width: 100px; margin-top:-30px;     margin-left: -40px;">
                        <div class="gabung" style=" margin-top:-50px;   margin-right: 100px;">
                            <div class="profile-info" style="height: 250px;">
                                <div style="text-align:center;  margin-top: 50px;">
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                </div>
                                <p style="margin-top:30px; margin-bottom: 50px; text-align:center; font-size:15px;">“Saya merasa puas
                                    dan cocok dengan BSO Class Program. Kaka Mentornya baik dan tegas. Saya selalu
                                    dikoreksi positif secara baik oleh kaka Mentor. BSO bagus sekali dan recommended
                                    untuk Mahasiswa.”</p>

                                <h1 style="text-align:center; margin-top: -20px; font-size:15px;">Yola</h1>
                                <p style="text-align:center; margin-top: -20px; font-size:15px;">Pariwisata Bisnis - <a style="font-style: italic !important;">Universitas Brawijaya</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile-slider" style="    display: block; ">
                    <div class="profile">
                        <img class="pro" src="assets/img/team/team-2.jpg" alt="Gambar Profil" style=" border: 7px solid #ffffff !important;width: 100px; margin-top:-30px;     margin-left: -40px;">
                        <div class="gabung" style=" margin-top:-50px;   margin-right: 100px;">
                            <div class="profile-info" style="height: 250px;">
                                <div style="text-align:center;  margin-top: 50px;">
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                </div>
                                <p style="margin-top:30px; margin-bottom: 50px; text-align:center; font-size:15px;">“Halo Kak Dewi.
                                    Saya rutin ikut bimbingan, seminggu 3 kali. Dalam proses bimbingan, jujur saya
                                    sangat terbantu. Banyak hal yang saya tanyakan dan dapat terjawab oleh Mentor saya.”
                                </p>

                                <h1 style="text-align:center; margin-top: -20px; font-size:15px;">Hildan Ramdani</h1>
                                <p style="text-align:center; margin-top: -20px; font-size:15px;">Ilmu Komunikasi -<a style="font-style: italic !important;"> Universitas Garut</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile-slider" style="    display: block; ">
                    <div class="profile">
                        <img class="pro" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style=" border: 7px solid #ffffff !important;width: 100px; margin-top:-30px;     margin-left: -40px;">
                        <div class="gabung" style=" margin-top:-50px;   margin-right: 100px;">
                            <div class="profile-info" style="height: 250px;">
                                <div style="text-align:center;  margin-top: 50px;">
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                    <i class="fa-solid fa-star" style="color: #f1d209; font-size: 20px !important;"></i>
                                </div>
                                <p style="margin-top:30px; margin-bottom: 50px; text-align:center; font-size:15px;">“Saya puas dengan
                                    bimbingannya kak. Awalnya saya tidak mengerti tahapan skripsi, ketika mulai
                                    bimbingan, saya jadi mengerti hal-hal penting dan tahapan dalam pembuatan judul
                                    serta penentuan variabel. Terima kasih banyak.”</p>

                                <h1 style="text-align:center; margin-top: -20px; font-size:15px;">Azizah Nurul</h1>
                                <p style="text-align:center; margin-top: -20px; font-size:15px;">Pendidikan Tata Busana -<a style="font-style: italic !important;"> Universitas Negeri Malang</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="centered-content">
                <img src="assets/img/team/a.png" width="50px" height="auto" class="img-fluid" alt="">
            </div>
            <div class="profile-navigation">
                <button id="prevProfile">
                    {{-- << /button> --}}
                    <button id="nextProfile">></button>
            </div>
            </div>
        </section>



        <!-- <section id="testimonials" class="testimonials"style="margin-top: 20px ;margin-bottom:30px; background: #dae4f3;;background-size: cover; background-color:#dae4f3; ">
                        </section>  -->

        <section id="testimonials" class="testimonials" style="margin-top: -20px; margin-bottom:30px; background: url(assets/img/bg/bgmentor.png);background-size: cover;">

            <div class="section-title">
                <h3 style="margin-bottom: 0px; margin-top:-40px; color:#000; font-size:35px">Mentor Profesional</h3>
                <h3 style="color:#000; font-size:35px; margin-top:-10px;">Class Program</h3>

            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="centered-content">
                            <img src="assets/img/team/mentorbmj1.png" class="img-fluid" alt="" style="border: none !important;
                            outline: none !important;">
                            <img src="assets/img/team/mentorbmj2.png" class="img-fluid" alt="" style="border: none !important;
                            outline: none !important;">
                            <img src="assets/img/team/mentorbmj3.png" class="img-fluid" alt="" style="border: none !important;
                            outline: none !important;">
                            <img src="assets/img/team/mentorbmj4.png" class="img-fluid" alt="" style="border: none !important;
                            outline: none !important;">
                        </div>
                        {{-- <div class="centered-content">
                            <img src="assets/img/team/a.png" width="50px" height="auto" class="img-fluid" alt="" style="border: none !important;
                            outline: none !important;">
                        </div> --}}
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </section>

        <section id="konsultasi" class="konsultasi section-bg" style="font-family: 'Manrope', sans-serif;margin-top: -150px; ">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    {{-- <h2>Team</h2> --}}
                    <h3 style="color: #000"> Alur Bimbingan</h3>
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
                                        <img src="assets/img/bg/al11.png" class="img-fluid" style="width: 180px; margin-left:20px;" alt="">
                                    </div>
                                    <div class="member-infoo">
                                        <br>
                                        <p>Pilih paket bimbingan yang sesuai dengan kebutuhanmu</p><br>

                                    </div>
                                </div>
                            </div>


                            <!-- Anggota Tim 2 -->
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="konsultasi-content" style="padding-top: 20px">
                                    <h4>2. Lakukan Pendaftaran</h4>
                                    <div class="member-img">
                                        <div style="position: relative; display: flex; align-items: center;">
                                            <!-- Gambar pertama -->
                                            <img style="margin-left: -80px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                            <!-- Gambar kedua -->
                                            <img src="assets/img/bg/al2.png" class="img-fluid" style="width: 180px; margin-left:-20px;" alt="">
                                        </div>
                                        <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                        {{-- <img src="assets/img/bg/al2.png" class="img-fluid"  style="width: 180px; margin-left:20px;"
                                                alt=""> --}}
                                    </div>
                                    <div class="member-infoo">

                                        <br>
                                        {{-- <span>Product Manager</span> --}}
                                        <p>Mengisi formulir pendaftaran sesuai dengan data diri yang lengkap dan benar
                                        </p><br>
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
                                    <h4>3. Selesai Pembayaran</h4>
                                    <div class="member-img">
                                        <div style="position: relative; display: flex; align-items: center;">
                                            <!-- Gambar pertama -->
                                            <img style="margin-left: -50px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                            <!-- Gambar kedua -->
                                            <img src="assets/img/bg/al3.png" class="img-fluid" style="width: 255px; margin-left:-30px;  margin-top:5px; ">
                                        </div>
                                        <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                                        {{-- <img src="assets/img/bg/al3.png" class="img-fluid" style="width: 255px;"alt=""> --}}
                                    </div>
                                    <div class=" member-infoo">
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
                                    <h4>4. Mulai Bimbingan</h4>
                                    <div class="member-img">
                                        <div style="position: relative; display: flex; align-items: center;">
                                            <!-- Gambar pertama -->
                                            <img style="margin-left: -50px; width: 100px;" src="assets/img/bg/garis1.png" class="img-fluid" alt="">
                                            <!-- Gambar kedua -->
                                            <img src="assets/img/bg/al4.png" class="img-fluid" style="width: 230px; margin-left: -20px;" alt="">
                                        </div>
                                    </div>

                                    <div class="member-infoo">
                                        <br>
                                        {{-- <span>CTO</span> --}}
                                        <p>Kamu siap bimbingan bersama Mentor</p><br>
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
                    <div class="col-xl-8" style="margin-bottom: 50px;">
                        <div class="section-title" style="margin-bottom: 50px;">
                            <h3 style="margin-top:0px !important; font-size:35px;">Paling Sering Ditanyakan</h3>
                        </div>
                        {{-- <style>
                                .accordion-button {
                                    background-color: #3E87F8;
                                    color: #fff;
                                    border: none;
                                    text-align: left;
                                    padding: 20px;
                                    font-size: 18px;
                                    cursor: pointer;
                                    transition: background-color 0.3s;
                                    width: 100%;
                                    text-decoration: none;
                                    border-radius: 5px;
                                }

                                .accordion-button:hover {
                                    background-color: #2952a3;
                                }

                                .accordion-body {
                                    padding: 20px;
                                    background-color: #f8f9fa;
                                    border: 1px solid #dee2e6;
                                    border-top: none;
                                    border-radius: 0 0 5px 5px;
                                }

                                .accordion-item.active .accordion-button {
                                    background-color: #2952a3;
                                }
                            </style> --}}

                        {{-- <div class="accordion" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:5px;">
                                            01</div> <b>Apakah di Class Program bisa ganti Mentor?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                                    <div class="accordion-body"> Sobat Insans boleh menyampaikan keinginannya untuk
                                        dibimbing oleh Mentor perempuan atau laki-laki, namun ini bersifat kondisional
                                        selama pilihan Mentor masih tersedia</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; ">
                                            02</div> <b>Apakah bisa bimbingan malam hari?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-parent="#accordionFlushExample">
                                    <div class="accordion-body">Sobat Insans bisa mengambil bimbingan di malam hari,
                                        selama masih berada dalam batas waktu yang telah ditetapkan menurut ketentuan
                                        Class Program</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingthree">
                                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                                        <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:5px;">
                                            03</div><b>Bagaimana caranya untuk ambil paket lanjutan?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-parent="#accordionFlushExample">
                                    <div class="accordion-body">Jika tertarik mengambil paket lanjutan, Sobat Insans
                                        bisa melakukan konfirmasi dan menghubungi Customer Experience Class Program
                                        yaitu Kak Dewi (+62 821-4154-9373)</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                        <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:5px;">
                                            04</div><b>Siapa yang harus dihubungi jika menemui masalah saat
                                            bimbingan?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-parent="#accordionFlushExample">
                                    <div class="accordion-body">Sobat Insans bisa langsung menghubungi Kak Dewi selaku
                                        Customer Experience untuk menyampaikan segala jenis kendala. Kak Dewi selalu
                                        siap membantu, memastikan dan membuat Sobat Insans mendapatkan pengalaman
                                        terbaik</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                        <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; ">
                                            05</div>
                                            <b>Apakah harga paket bisa dicicil?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-parent="#accordionFlushExample">
                                    <div class="accordion-body">Class Program belum menyediakan metode pembayaran
                                        dengan sistem cicil untuk pilihan paket</div>
                                </div>
                            </div>
                            <div class="text-center" style="margin-top:50px;">
                                <a href="#pricing" class="btn btn-primary" style="border-radius: 10px; align-content: center;">Baca selengkapnya</a>
                            </div>
                        </div> --}}
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
                                    <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                        01</div><b style="    margin-left: -300px;
                                        ">Apakah
                                        boleh request mentor?</b>
                                    <div class="icon">+</div>
                                </div>
                                <div class="accordion-content">
                                    <p style="font-family: Montserrat; font-size:12px; margin-left:30px;"><strong style="color: #000">Sobat Insans</strong>
                                        boleh menyampaikan keinginannya untuk dibimbing oleh Mentor perempuan atau
                                        laki-laki, namun ini bersifat kondisional selama pilihan Mentor masih tersedia
                                    </p>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(2)">
                                    <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                        02</div><b style="    margin-left: -300px;">Bisa bimbingan di malam hari?</b>
                                    <div class="icon">+</div>
                                </div>
                                <div class="accordion-content">
                                    <p style="font-family: Montserrat; font-size:12px; margin-left:30px;"><strong style="color: #000">Sobat Insans</strong>
                                        bisa mengambil bimbingan di malam hari, selama masih berada dalam batas waktu
                                        yang telah ditetapkan menurut ketentuan <strong style="color: #000">Class Program</strong></p>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(3)">
                                    <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                        03</div><b style="    margin-left: -180px;
                                        ">Bagaimana
                                        caranya untuk ambil paket lanjutan?</b>
                                    <div class="icon">+</div>
                                </div>
                                <div class="accordion-content">
                                    <p style="font-family: Montserrat; font-size:12px; margin-left:30px;">Jika
                                        tertarik mengambil paket lanjutan, <strong style="color: #000">Sobat Insans</strong> bisa melakukan konfirmasi dan
                                        menghubungi Customer Experience <strong style="color: #000">Class Program</strong> yaitu Kak Dewi (+62 821-4154-9373)
                                    </p>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(4)">
                                    <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                        04</div><b style="    margin-left: -180px;
                                        ">Bagaimana
                                        caranya untuk ambil paket lanjutan?</b>
                                    <div class="icon">+</div>
                                </div>
                                <div class="accordion-content">
                                    <p style="font-family: Montserrat; font-size:12px; margin-left:30px;"><strong style="color: #000">Sobat Insans</strong>
                                        bisa langsung menghubungi Kak Dewi selaku Customer Experience untuk menyampaikan
                                        segala jenis kendala. Kak Dewi selalu siap membantu, memastikan dan membuat
                                        <strong style="color: #000">Sobat Insans</strong> mendapatkan pengalaman terbaik
                                    </p>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" onclick="toggleAccordion(5)">
                                    <div style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700;  letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                        05</div><b style="    margin-left: -300px;
                                        ">Apakah
                                        harga paket bisa dicicil?</b>

                                    <div class="icon">+</div>
                                </div>
                                <div class="accordion-content">
                                    <p style="font-family: Montserrat; font-size:12px; margin-left:30px;"><strong style="color: #000">Class Program</strong> belum menyediakan metode pembayaran dengan sistem cicil untuk pilihan
                                        paket</p>
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
                        {{-- <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var accordions = document.querySelectorAll('.accordion-button');

                                    accordions.forEach(function(accordion) {
                                        accordion.addEventListener('click', function() {
                                            this.parentNode.classList.toggle('active');
                                        });
                                    });
                                });
                            </script> --}}


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
                        Mendapatkan pelatihan dalam penyusunan dan pembuatan skripsi oleh Mentor yang ahli di bidangnya.
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
                        Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh Mentor yang ahli di bidangnya.
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
                        Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh Mentor yang ahli di bidangnya.
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
                        Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh Mentor yang ahli di bidangnya.
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
                    answer: "Class Program adalah platform belajar online perkuliahan dan persiapan karir dengan sistem kenaikan kelas pertama di indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh Mentor yang ahli di bidangnya."
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
                    answer: "MSobat Insan perlu melakukan registrasi terlebih dahulu. Lengkapi data diri, kemudian login menggunakan akun yang telah terdaftar. Setelah itu memilih program yang tersedia sesuai dengan kebutuhan sobat insan. Lalu lakukan pembayaran sesuai pesanan dan Sobat insan akan diarahkan ke Minma untuk mendapatkan Mentor. Setelah semua proses selesai, Sobat Insans siap untuk belajar di Class Program."
                },
                {
                    question: "Siapa Mentor yang ada di Class Program?.",
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
            </div>`;
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

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </main>

</body>

</html>
@endsection
