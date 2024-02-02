<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-rsfs3we9NBt+JIEkKuuaA2vFDGXahHIysWzy9kn6+koYOtsLoX2s16+a1kDPs1o9b8X6lCOpzATmtK7XQVG+tpw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

            <!-- ======= Hero Section ======= -->
            {{-- Header atas --}}
            {{-- ok1 --}}
            <!-- <section id="about" class="heada" style="background: url(assets/img/bg/utama2.png);background-size: cover; ">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h3 style="color:black;">Bimbingan Mata Kuliah Jurusan (BMJ)</h3>
                        <p style="color:black; margin-top:-2px;">Home > Bimbingan Mata Kuliah Jurusan (BMJ)</p>
                    </div>
                </div>
            </section> -->

            <section id="hero" class="d-flex align-items-center"
                style="background: url(assets/img/bg/bmj.png); background-size: cover; margin-top: -18px; position: relative;">

                <img style="height: 580px; margin-top: -30px; position: absolute; left:10px;  top: 0;"
                    src="assets/img/bg/bmjriska.png" alt="" />

                <div class="container" data-aos="zoom-out" data-aos-delay="100"
                    style="margin-top: -50px; margin-bottom: 130px;">
                    <div style="width: 100%; display: flex; justify-content: center; margin-top: 50px;">
                        <div
                            style="margin-left: 15px; width: 250px; height: 100%; padding: 6.40px; background: #3E87F8; box-shadow: 6.400178909301758px 6.400178909301758px 12.800357818603516px rgba(0, 0, 0, 0.15); border-radius: 32px; justify-content: center; align-items: center; gap: 6.40px; display: inline-flex; margin: 0 auto;">
                            <div
                                style="color: white; font-size: 20.48px; font-family: Montserrat; font-weight: 700; line-height: 25.60px; word-wrap: break-word">
                                CLASS PROGRAM</div>
                        </div>
                    </div>

                    <div
                        style="width: 100%; text-align: center; color: #09326F; font-size: 60px; font-family: Montserrat; font-weight: 800; line-height: 60px; word-wrap: break-word; margin-top: 20px; margin-left: 20px;">
                        Bimbingan Mata<br />Kuliah Jurusan (BMJ)</div>

                    <div
                        style="width: 600px; margin-left: 50px; height: 100%; margin-top: px; text-align: center; color: #202020; font-size: 20px; font-family: Montserrat; font-weight: 500; line-height: 20px; word-wrap: break-word; margin: 0 auto;">
                    </div>
                    <p
                        style="margin-left: 65px; margin-top: 5px; text-align: center; color: #202020; font-size: 19px; font-family: Montserrat; font-weight: 500;  ">
                        Bimbingan Mata kuliah Jurusan (BMJ) Class Program <br> disediakan secara khusus untuk membantu
                        mahasiswa <br> dalam memahami materi-materi mata kuliah yang ada <br> di jurusan dengan sistem
                        mentoring/pendampingan.
                    </p>

                </div>
                <div id="counts" class="counts" style="margin-left: 115px; margin-top:450px;  z-index: 2 !important;">
                    <div class="container">
                        <div class="count-boxes">
                            <div class="count-box">
                                <div class="left-content">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="width:50px; margin-top: 30px;" src="assets/img/bg/bmjschedule.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="right-content" style="margin-left:0px">
                                    {{-- <p style="margin-left:0px">Peers to network and learn with</p> --}}
                                    <p style="margin-left: 0px; color: #000; font-family: Manrope;"><b>Waktu bimbingan 24
                                            kali pertemuan</b></p>

                                </div>
                            </div>

                            <div class="count-separator" style="margin-top: 15px;"></div> <!-- Garis vertikal -->
                            <div class="count-box">
                                <div class="left-content">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="width:78px; margin-top: 30px;" src="assets/img/bg/durasibimbingan.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="right-content" style="margin-left:1px">
                                    {{-- <p >Mentor Class Program</p> --}}
                                    <p style="margin-left:0px; color: #000; font-family: Manrope;"><b>Durasi bimbingan <br>
                                            2 hingga 4 jam</b></p>
                                </div>
                            </div>

                            <div class="count-separator" style="margin-left:20px; margin-top: 15px;"></div>
                            <div class="count-box">
                                <div class="left-content">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="width:100px; margin-top: 30px;"
                                            src="assets/img/bg/prosesbimbingan.png" alt="">
                                    </div>
                                </div>
                                <div class="right-content" style="margin-left:-1px">
                                    <p style="margin-left:0px;margin-right:10px;  color: #000; font-family: Manrope;">
                                        <b>Proses bimbingan hingga 2 bulan</b></p>
                                </div>
                            </div>

                            <div class="count-separator" style="margin-top: 15px;"></div>
                            <div class="count-box">
                                <div class="left-content">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="width:78px; margin-top: 30px;" src="assets/img/bg/jadwalbimbingan.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="right-content" style="margin-left:-1px">
                                    <p style="margin-left:0px;margin-right:10px; color: #000; font-family: Manrope;">
                                        <b>Jadwal bimbingan 3 kali dalam seminggu</b></p>
                                </div>
                            </div>
                            <div class="count-separator" style="margin-top: 15px;"></div>
                            <div class="count-box">
                                <div class="left-content">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="width:50px; margin-top: 30px;" src="assets/img/bg/bmjgraduation.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="right-content" style="margin-left:-1px">
                                    <p style="margin-left:0px;margin-right:10px; color: #000; font-family: Manrope;">
                                        <b>Bimbingan sampai <br> 6 mata kuliah</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <img style="height: 600px; margin-top: -50px; margin-left: 00px; position: absolute; right: 0; top: 0;"
                    src="assets/img/bg/bmjandika.png" alt="">
            </section>

            {{-- ok3 --}}
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between" style=" margin-top: -80px;">
                        <div class="row justify-content-center">
                            <div class="section-title">
                                <!-- <h2>About</h2> -->
                                <span class="gariss">
                                    <h3
                                        style="color: black; margin-top: 70px; text-align: center; font-size: 45px; font-family: Montserrat;">
                                        Keunggulan Bimbingan <br> Mata Kuliah Jurusan</h3>
                                </span>
                            </div>
                            <style>
                                /* CSS untuk card */
                                .card {
                                    width: 18%;
                                    /* Adjust the width to fit 5 cards in a row */
                                    height: 305px;
                                    background: linear-gradient(180deg, white 0%, #F1F4F8 100%);
                                    box-shadow: 5px 15px 35px rgba(0, 0, 0, 0.10);
                                    border-radius: 20px;
                                    border: 2px #DFDFDF solid;
                                    display: inline-block;
                                    /* Membuat card tampil berdampingan */
                                    margin-right: 20px;
                                    /* Menambahkan margin antar card */
                                    margin-bottom: 20px;
                                    /* Menambahkan margin bawah */
                                }

                                .card img {
                                    margin-top: 30px;
                                    margin-bottom: 30px;
                                    width: 80px;
                                    height: 80px;
                                }

                                .verification-icon {
                                    width: 35px;
                                    height: 35px;
                                }
                            </style>

                            <div style="margin-top:30px;">
                                <!-- Card 1 -->
                                <div class="card">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img src="assets/img/bg/bmjcourse.png" alt="">
                                    </div>
                                    <div
                                        style="width: 100%; height: 100%; color: black; font-size: 15px; font-family: Montserrat; font-weight: 550; line-height: 20px; word-wrap: break-word; padding: 10px;">
                                        Pendampingan oleh Mentor profesional secara privat, online dan intensif
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="margin-top:-330px; width:35px; height:35px;"
                                            src="assets/img/bg/veryikasi.png" alt="">
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="card">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img src="assets/img/bg/bmjschedule.png" alt="">
                                    </div>
                                    <div
                                        style="width: 100%; height: 100%; color: black; font-size: 15px; font-family: Montserrat; font-weight: 550; line-height: 20px; word-wrap: break-word; padding: 10px;">
                                        Jadwal bimbingan fleksibel, sesuai kesepakatan Sobat Insans dan Mentor
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="margin-top:-330px; width:35px; height:35px;"
                                            src="assets/img/bg/veryikasi.png" alt="">
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="card">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img src="assets/img/bg/bmjles.png" alt="">
                                    </div>
                                    <div
                                        style="width: 100%; height: 100%; color: black; font-size: 15px; font-family: Montserrat; font-weight: 550; line-height: 20px; word-wrap: break-word; padding: 10px;">
                                        Bimbingan dilakukan secara online untuk memudahkan proses bimbingan
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="margin-top:-330px; width:35px; height:35px;"
                                            src="assets/img/bg/veryikasi.png" alt="">
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div class="card">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img src="assets/img/bg/bmjgraduation.png" alt="">
                                    </div>
                                    <div
                                        style="width: 100%; height: 100%; color: black; font-size: 15px; font-family: Montserrat; font-weight: 550; line-height: 20px; word-wrap: break-word; padding: 10px;">
                                        Terbuka untuk semua jurusan mulai dari semester 1 sampai 6
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="margin-top:-330px; width:35px; height:35px;"
                                            src="assets/img/bg/veryikasi.png" alt="">
                                    </div>
                                </div>

                                <!-- Card 5 -->
                                <div class="card">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img src="assets/img/bg/bmjkomunikasi.png" alt="">
                                    </div>
                                    <div
                                        style="width: 100%; height: 100%; color: black; font-size: 15px; font-family: Montserrat; font-weight: 550; line-height: 20px; word-wrap: break-word; padding: 10px;">
                                        Dapat konsultasi konsentrasi jurusan langsung bersama Mentor profesional
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <img style="margin-top:-330px; width:35px; height:35px;"
                                            src="assets/img/bg/veryikasi.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="about" style="margin-top: -800px; margin-bottom: 250px;">
                <div class="container" data-aos="fade-up">
                    <div
                        style="margin-left: 35px;width: 95%; height: 100%; margin-bottom:800px; position: relative; opacity: 0.85">
                        <img style="margin-left: 35px; width: 95%; height: auto; position: absolute; mix-blend-mode: multiply; top: 0; left: 0;"
                            src="assets/img/bg/bmjbg.png" alt="">
                    </div>

                    <div class="row align-items-center justify-content-between"
                        style="margin-top: -80px; position: relative;">
                        <div class="col-lg-6 text-center">
                            <style>
                                .row {
                                    /* display: flex;
                                    align-items: center; */
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
                            <video width="260" height="460" controls
                                style="margin-top: 30px; margin-left: 10px; border-radius: 2%; box-shadow: 0px 0px 15px rgba(0, 0, 255, 0.2); "
                                id="myVideo">
                                <source src="assets/video/1.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">

                            <div class="section-title">
                                <span class="a">
                                    <h3
                                        style="margin-top: 25px; margin-left: -100px; text-align: left; font-size: 40px; color: #ffff; font-family: Montserrat;">
                                        Nanti di BMJ bakal <br> ngapain aja sih?</h3>
                                </span>
                                <div style="width: 100%; margin-left: -100px; height: 100%; position: relative">
                                    <div
                                        style="width: 500px; margin-top:20px; left: 20px; margin-left: 40px; top: 0px; color: white; font-size: 16px; font-family: Montserrat; font-weight: 600; line-height: 30px; text-align: left;">
                                        Sobat Insans akan mendapatkan pemahaman mendalam terkait mata kuliah yang dipilih.
                                    </div>

                                    <img style="width: 27px; height: 27px; left: 0px; top: 1px; position: absolute"
                                        src="assets/img/bg/ceklistbmj.png" />
                                </div>
                                <!-- 2 -->
                                <div style="width: 100%; margin-left: -100px; height: 100%; position: relative">
                                    <div
                                        style="width: 500px; margin-top:20px; left: 20px; margin-left: 40px; top: 0px; color: white; font-size: 16px;font-family: Montserrat; font-weight: 600; line-height: 30px; text-align: left;">
                                        Sobat Insans bisa mengkonsultasikan kendala-kendalanya terkait mata kuliah yang
                                        sedang ditempuh.
                                    </div>

                                    <img style="width: 27px; height: 27px; left: 0px; top: 1px; position: absolute"
                                        src="assets/img/bg/ceklistbmj.png" />
                                </div>
                                <!-- 3 -->
                                <div style="width: 100%; margin-left: -100px; height: 100%; position: relative">
                                    <div
                                        style="width: 500px; margin-top:20px; left: 20px; margin-left: 40px; top: 0px; color: white; font-size: 16px;font-family: Montserrat; font-weight: 600; line-height: 30px; text-align: left;">
                                        Sobat Insans akan mendapatkan kisi-kisi UAS untuk latihan.
                                    </div>

                                    <img style="width: 27px; height: 27px; left: 0px; top: 1px; position: absolute"
                                        src="assets/img/bg/ceklistbmj.png" />
                                </div>
                                <!-- 4 -->
                                <div style="width: 100%; margin-left: -100px; height: 100%; position: relative">
                                    <div
                                        style="width: 500px; margin-top:20px; left: 20px; margin-left: 40px; top: 0px; color: white; font-size: 16px;font-family: Montserrat; font-weight: 600; line-height: 30px; text-align: left;">
                                        Sobat Insans akan mendapatkan motivasi dan arahan seputar dunia perkuliahan.
                                    </div>

                                    <img style="width: 27px; height: 27px; left: 0px; top: 1px; position: absolute"
                                        src="assets/img/bg/ceklistbmj.png" />
                                </div>
                                <!-- 5 -->
                                <div style="width: 100%; margin-left: -100px; height: 100%; position: relative">
                                    <div
                                        style="width: 500px; margin-top:20px; left: 20px; margin-left: 40px; top: 0px; color: white; font-size: 16px;font-family: Montserrat; font-weight: 600; line-height: 30px; text-align: left;">
                                        Sobat Insans bisa konsultasi terkait konsentrasi <br> jurusan dan Praktek Kerja
                                        Lapangan.
                                    </div>

                                    <img style="width: 27px; height: 27px; left: 0px; top: 1px; position: absolute"
                                        src="assets/img/bg/ceklistbmj.png" />
                                </div>
                            </div>
                            <!-- Repeat the content-box structure for other points -->

                        </div>
                    </div>
                </div>
            </section>


            <section id="hero2" class="d-flex align-items-center" style="margin-top:-260px; margin-butoon:30px;">
                <div class="container" data-aos="zoom-out" data-aos-delay="100">
                    <div class="juduldua">
                        <h3 style="letter-spacing: 1px; !important">
                            <br>
                            <br>
                            <span
                                style="color: #3E87F8; font-family: Montserrat; font-weight: 800;
                            line-height: 125%; font-size:60px;">2564+</span>
                            <br>
                            Mahasiswa <br> Lulus Bersama <br> Kami
                            <!-- <a href="#" class="custom-btn-buy">Daftar Sekarang</a> -->
                            <div
                                style="width: 80%; height: 100%; display: flex; justify-content: center; margin-top: -52px; margin-left:120px;">
                                <div
                                    style="margin-left:-70px; width: 170px; height: 100%; padding: 6.40px; background: #3E87F8; box-shadow: 6.400178909301758px 6.400178909301758px 12.800357818603516px rgba(0, 0, 0, 0.15); border-radius: 32px; justify-content: center; align-items: center; gap: 6.40px; display: inline-flex;">
                                    <div
                                        style="color: white; font-size: 20.48px; font-family: Montserrat; font-weight: 700; line-height: 25.60px; word-wrap: break-word">
                                        <a href="/login"
                                            style="color: #fff; letter-spacing: 0.1px; font-size:10px;">Pesan Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row" style="margin-bottom:120px; ">
                                <div class="col" style="margin-top:-50px;">
                                    <div style="width: 100%; height: 100%; position: relative">
                                        <div
                                            style="width: 150px; height: 100px; padding: 27.25px; left: 0px; top: 29.40px; position: absolute; background: white; box-shadow: 0px 8.51637077331543px 42.58185577392578px rgba(0, 0, 0, 0.15); border-radius: 21.29px; border: 0.85px rgba(25, 24, 37, 0.10) solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 13.63px; display: inline-flex">
                                            <div
                                                style="letter-spacing: 0.1px; color: #3E87F8; font-size: 25px; font-family: Montserrat; font-weight: 700; line-height: 35.77px; word-wrap: break-word">
                                                20+</div>
                                            <div
                                                style="letter-spacing: 0.1px; color: #191825; font-size: 15px; font-family: Montserrat; font-weight: 600; line-height: 24.53px; word-wrap: break-word;    margin-top: -20px;">
                                                Jurusan</div>
                                        </div>
                                        <div
                                            style="width: 45px; height: 45px; padding: 16.96px; left: 132px; top: 10px; position: absolute; background: #3E87F8; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.03); border-radius: 52.99px">
                                        </div>
                                        <img style="width: 20px; height: 20px; left: 140px; top: 24px; position: absolute"
                                            src="assets/img/bg/bmjbook.png" />
                                    </div>
                                </div>

                                <div class="col" style="margin-top:-50px;">
                                    <div style="width: 100%; height: 100%; position: relative">
                                        <div
                                            style="width: 150px; height: 100px; padding: 27.25px; left: 0px; top: 29.40px; position: absolute; background: white; box-shadow: 0px 8.51637077331543px 42.58185577392578px rgba(0, 0, 0, 0.15); border-radius: 21.29px; border: 0.85px rgba(25, 24, 37, 0.10) solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 13.63px; display: inline-flex">
                                            <div
                                                style="letter-spacing: 0.1px; color: #3E87F8; font-size: 25px; font-family: Montserrat; font-weight: 700; line-height: 35.77px; word-wrap: break-word">
                                                37+</div>
                                            <div
                                                style="letter-spacing: 0.1px; color: #191825; font-size: 15px; font-family: Montserrat; font-weight: 600; line-height: 24.53px; word-wrap: break-word;    margin-top: -20px;">
                                                Mentor</div>
                                        </div>
                                        <div
                                            style="width: 45px; height: 45px; padding: 16.96px; left: 125px; top: 10px; position: absolute; background: #3E87F8; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.03); border-radius: 52.99px">
                                        </div>
                                        <img style="width: 18px; height: 22px; left: 133px; top: 24px; position: absolute"
                                            src="assets/img/bg/bmjuser.png" />
                                    </div>
                                </div>
                            </div>
                        </h3>
                        <img style="margin-top: 150px; width: 300% !important;" src="assets/img/bg/bmjkukuh.png"
                            alt="">
                    </div>
                </div>
            </section>

            <section id="aboutbmj" style="margin-top:-100px; margin-bottom:-250px;">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between" style=" margin-top: -80px;">

                        <div class="section-title">
                            <!-- <h2>About</h2> -->
                            <span class="gariss">
                                <h3
                                    style="color: black; margin-top: 50px; text-align: center; font-size: 35px; padding-bottom: 15px; font-family:Montserrat; ">
                                    Kenali Paket yang Tersedia<br />di Bimbingan Mata Kuliah Jurusan</h3>
                            </span>
                        </div>


                        <div class="container" data-aos="fade-up">
                            <div style=" width: 95%; height: 100%; margin-bottom:800px; position: relative; opacity: 0.85">
                                <img style="margin-left: 55px; width: 95%; height: 410px; position: absolute; mix-blend-mode: multiply; top: 0; left: 0;"
                                    src="assets/img/bg/bmjbg3.png" alt="">
                            </div>

                            <div id="cardbmj" class="cardbmj">
                                <div class="row align-items-center justify-content-between"
                                    style="margin-top: -800px; margin-bottom: 180px;  position: relative;">

                                    <div
                                        style="text-align: center; margin-top: 25px; margin-left: 400px; margin-right: auto;">
                                        <style>
                                            .nav-item button {
                                                border-bottom: 2px solid rgb(245, 239, 239);
                                                /* Remove the default button border */
                                                color: rgb(255, 255, 255);
                                                /* Set the default text color */
                                            }

                                            /* .nav-item button:after {
                                                color: white;

                                            } */

                                            .nav-item:active {
                                                /* background-color: white; */
                                                /* Warna latar belakang saat tombol diklik */
                                                color: white;

                                            }


                                            .nav-item.active button {
                                                border-bottom: 2px solid white;
                                                /* Add a bottom border to the active button */
                                                color: white;
                                                /* Set the text color for the active button */
                                            }
                                        </style>

                                        <ul class="nav nav-pills card-header-pills" id="buttonGroup">
                                            <li class="nav-item" style="margin-left: -100px; margin-right: 80px;">
                                                <button class="nav-link color-white border-radius"
                                                    onclick="TampilKonten('kontenbmj1')"><b>PAKET BRONZE</b></button>
                                            </li>
                                            <li class="nav-item" style="margin-right: 80px;">
                                                <button class="nav-link color-white2 border-radius"
                                                    onclick="TampilKonten('kontenbmj2')" data-target="all"><b>PAKET
                                                        EMERALD</b></button>
                                            </li>
                                            <li class="nav-item" style="margin-right: -100px;">
                                                <button class="nav-link color-white2 border-radius"
                                                    onclick="TampilKonten('kontenbmj3')" data-target="ktk"><b>PAKET
                                                        DIAMOND</b></button>
                                            </li>
                                        </ul>


                                        <!-- <script>
                                            function switchButton(button) {
                                                var buttons = document.querySelectorAll('.nav-item button');
                                                buttons.forEach(function(btn) {
                                                    btn.parentElement.classList.remove('active');
                                                });

                                                button.parentElement.classList.add('active');
                                            }
                                        </script> -->
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
                                                        btn.style.borderRadius = '';
                                                    });
                                                    this.classList.add('bg-blue', 'active');
                                                    this.style.backgroundColor = 'white'; // Setel latar belakang menjadi putih
                                                    this.style.color = 'blue'; // Setel warna teks menjadi biru
                                                    this.style.borderRadius = '20px';
                                                });
                                            });

                                            // Fungsi untuk menampilkan konten sesuai dengan tombol yang diklik
                                            function showContent(contentId) {
                                                // Logika untuk menampilkan konten
                                            }
                                        </script>

                                    </div>

                                    <div id="kontenbmj1" class="kontenbmj aktif">
                                        <img style="margin-bottom:50px; margin-top:-20px;  float: left; width: 280px;   margin-left: 120px;   height: auto;"
                                            src="assets/img/bg/bronze.png" alt="">
                                        <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 450px; margin-top: 30px; color: white; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Program bimbingan yang dikhususkan untuk mahasiswa <br>semester 1-2 dengan mata
                                            kuliah umum sampai khusus <br> sesuai jurusan dan konsultasi konsentrasi jurusan
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top:-28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                                style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Sertifikat resmi dari Class Program </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                                style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Terdapat praktik dalam setiap bimbingan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                                style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Soal Kuis dan kisi-kisi materi untuk bahan UAS </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                                style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Konsultasi bersama Mentor terkait konsentrasi jurusan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                                style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Review materi dari Mentor </div>
                                        </div>





                                    </div>
                                    <!-- </div> -->


                                    <!-- 2 -->
                                    <div id="kontenbmj2" class="kontenbmj ">
                                        <img style="margin-bottom: 250px; margin-top:24px;   float: left; width: 280px;   margin-left: 120px;   height: auto;"
                                            src="assets/img/bg/paketemerald.png" alt="">
                                        <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 450px; margin-top: 30px; color: white; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Program bimbingan yang dikhususkan untuk mahasiswa <br> semester 3-4 dengan mata
                                            kuliah umum sampai khusus <br> sesuai jurusan dan konsultasi konsentrasi jurusan
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Sertifikat resmi dari Class Program </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Terdapat praktik dalam setiap bimbingan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Soal Kuis dan kisi-kisi materi untuk bahan UAS </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Konsultasi bersama Mentor terkait konsentrasi jurusan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Review materi dari Mentor </div>
                                        </div>

                                    </div>
                                    <!-- 3 -->
                                    <div id="kontenbmj3" class="kontenbmj ">
                                        <img style="margin-bottom:50px; margin-top:24px;  float: left; width: 280px;   margin-left: 120px;   height: auto;"
                                            src="assets/img/bg/salwabmj-preview.png" alt="">
                                        <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 450px; margin-top: 30px; color: white; font-size: 18px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                            Program bimbingan yang dikhususkan untuk mahasiswa <br>semester 5-6 dengan mata
                                            kuliah umum, mata kuliah <br> penjurusan, serta konsultasi terkait PKL. </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Sertifikat resmi dari Class Program </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Terdapat praktik dalam setiap bimbingan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                                style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Soal Kuis dan kisi-kisi materi untuk bahan UAS </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                            style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Konsultasi bersama Mentor terkait konsentrasi jurusan </div>
                                        </div>

                                        <div class="buttoncircle" style="display: flex; align-items: center;">
                                            <i class="bi bi-check2-circle"
                                            style=" margin-left: 50px; color: #fff; margin-top: -28px; margin-right: 10px; font-size:20px;"></i>
                                            <div
                                            style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 10px; color: white; font-size: 15px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                                                Review materi dari Mentor </div>
                                        </div>

                                    </div>

                                    <!-- js -->
                                    <script>
                                        function TampilKonten(kontenId) {
                                            // Mengambil semua elemen konten
                                            var allContents = document.querySelectorAll('.kontenbmj');

                                            // Menyembunyikan semua konten
                                            allContents.forEach(function(element) {
                                                element.classList.remove('aktif');
                                            });

                                            // Menampilkan konten yang sesuai dengan ID yang diklik
                                            document.getElementById(kontenId).classList.add('aktif');
                                        }
                                    </script>







                                </div>


                            </div>
                        </div>
            </section>

            <!-- <section id="pakethematbmj" class="pakethematbmj" style="background-image: url(assets/img/bg/bmjbg3.png);">
                <h3 style="text-align: center; color: #000;
                    margin-bottom: 50px;
                    font-family: Montserrat;
                    font-size: 35px;
                    font-style: normal;
                    margin-top: -50px;
                    font-weight: 700;
                    line-height: 125%; /* 100px */">
                    Kenali Paket yang Tersedia<br />di Bimbingan Mata Kuliah Jurusan
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
                                <button style="border-radius: 50px" class="nav-link color-white border-radius bg-blue" onclick="showContent('content1')"><b>PAKET SILVER</b></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link color-white2 border-radius" onclick="showContent('content2')" data-target="all"><b>PAKET GOLD</b></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link color-white2 border-radius" onclick="showContent('content3')" ><b>PAKET PLATINUM</b></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link color-white2 border-radius" onclick="showContent('content4')"><b>PAKET DIAMOND</b></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link color-white2 border-radius" onclick="showContent('content5')"><b>PAKET COMPLETE</b></button>
                            </li>
                        </ul>

                    </div>


                    <div id="content1" class="content active">
                        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png" alt="">
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

                    <div id="content2" class="content">
                        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png" alt="">
                        <div style="font-family: Montserrat; text-align: left; margin-left: 500px; margin-top: 50px; color: black; font-size: 28px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang <br>sedang membutuhkan bimbingan menuju <br>seminar proposal (sempro) atau bimbingan bab 1-3.
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam memahami proses penyusunan proposal penelitian skripsi.                        </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan diberikan berbagai materi dasar seputar proposal skripsi oleh mentor untuk memudahkan proses penyusunan.                        </div>
                        </div>


                    </div>

                    <div id="content3" class="content ">
                        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png" alt="">
                        <div style="font-family: Montserrat; text-align: left; margin-left: 500px; margin-top: 50px; color: black; font-size: 28px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang <br>sedang membutuhkan bimbingan menuju <br>sidang skripsi atau bimbingan bab 4 hingga selesai.
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam memahami proses penyusunan hasil dan pembahasan penelitian skripsi.                        </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan diberikan berbagai materi dasar seputar menganalisis penelitian skripsi oleh mentor untuk memudahkan proses penyusunan.                        </div>
                        </div>


                    </div>

                    <div id="content4" class="content ">
                        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png" alt="">
                        <div style="font-family: Montserrat; text-align: left; margin-left: 500px; margin-top: 50px; color: black; font-size: 28px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang <br>sedang membutuhkan bimbingan Simulasi <br>Seminar Proposal dan Sidang Skripsi.
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibimbing dalam pembuatan dan cara mempresentasikan powerpoint seminar proposal dan sidang skripsi.                        </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibimbing dalam simulasi seminar proposal dan sidang skripsi.                        </div>
                        </div>


                    </div>


                    <div id="content5" class="content ">
                        <img class="ml-5" style="margin-bottom: 20px; float: left; width: 400px; margin-left: 100px; height: auto;" src="assets/img/bg/kotakk.png" alt="">
                        <div style="font-family: Montserrat; text-align: left; margin-left: 500px; margin-top: 50px; color: black; font-size: 28px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                        Dikhususkan kepada Sobat Insans yang <br>sedang membutuhkan bimbingan skripsi<br> secara menyeluruh mulai dari pembuatan dan <br>penyusunan judul hingga sidang skripsi.
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans akan dibantu dalam merumuskan judul skripsi, memahami penyusunan proposal penelitian skripsi, pembahasan hasil penelitian skripsi, dan dibimbing dalam persiapan seminar proposal dan sidang skripsi.                        </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-circle-check" style=" margin-left: 50px; color: #1b5cc5; margin-top: -15px; margin-right: 10px; font-size:30px;"></i>
                            <div style="font-family: Montserrat; text-align: left; margin-left: 10px; margin-top: 20px; color: black; font-size: 20px; font-weight: 400; line-height: 1.5; letter-spacing: -1px;">
                            Sobat Insans dapat request pembahasan dengan Mentor mengikuti progress pengerjaan skripsi.                        </div>
                        </div>


                    </div>

                    <script>
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


                </div>
            </section> -->

            <style>
                 #pricing {
                
                background-image: url('assets/img/bg/bmj-background.png');
                background-color: #09326f;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                margin-bottom: 100px;
                /* Add other styles as needed */
            }
            </style>
           
            <section id="pricing" class="pricing" style="background-color:#09326f;  margin-bottom: 100px;">

                <div class="container" data-aos="fade-up">
                    <div style="width: 100%; text-align: center;     margin-top: -30px;
                    ">
                        <div
                            style="width: 100px; height: 30px; padding: 10px; background: #3E87F8; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; margin: 0 auto;">
                            <div
                                style="width: 500px; text-align: center; color: white; font-size: 18px; font-family: Montserrat; font-weight: 700; line-height: 40px; word-wrap: break-word">
                                PAKET</div>
                        </div>
                    </div>
                    <div class="section-title judul">
                        <h3 style="color:white; font-family:Montserrat;text-transform: capitalize;font-size: 35px !important;">Bimbingan Mata Kuliah Jurusan</h3>
                        <h4 style="margin-bottom: 80px; color:white; font-family:Montserrat !important; font-size:18px; font-weight:100;">Memiliki tiga
                            jenis paket dengan rincian dan biaya sebagai berikut:</h4>
                    </div>

                    <div id="packageCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -40px">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="custom-box"
                                                style="height: 380px; border-radius: 15px; width:280px;">
                                                <h4 class="custom-package"
                                                    style="color: #FFF;
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
                                                    PAKET BRONZE</h4>
                                                <div class="rupiah-display" style="position: relative;">
                                                    <h4
                                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                        <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                    </h4>
                                                    <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                        400.000</h4>
                                                </div>
                                                <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                    <strong>1
                                                        Bulan</strong>
                                                </div>
                                                <hr style=" border: 2px solid #000; border-width: 1px;">
                                                <ul class="deskripsi" style="max-height: 150px; overflow-y: auto; ">
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px"> Untuk mahasiswa semester 1 dan 2</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px"> 6 Mata Kuliah (umum dan khusus)</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Konsultasi konsentrasi jurusan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Waktu bimbingan 12 kali<br> pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Jadwal bimbingan 1 minggu,<br> 3x pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Durasi pertemuan minimal 2<br> jam dan maksimal 4 jam</span>
                                                    </li>
                                                </ul>
                                                <div class="custom-btn-wrap" style="margin-top: -10%">
                                                    <a href="{{ Auth::check() ? '/pembelian/bso' : '/register' }}" class="custom-btn-buy" style="width: 80%; font-size: 12px">Daftar Sekarang</a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Gold --}}
                                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="custom-box"
                                                style="height: 380px; border-radius: 15px; width:280px;">
                                                <h4 class="custom-package"
                                                    style="color: #FFF;
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
                                                    PAKET EMERALD</h4>
                                                <div class="rupiah-display" style="position: relative;">
                                                    <h4
                                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                        <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                    </h4>
                                                    <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                        565.000</h4>
                                                </div>
                                                <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                    <strong>1
                                                        Bulan</strong>
                                                </div>
                                                <hr style=" border: 2px solid #000; border-width: 1px;">
                                                <ul class="deskripsi" style="max-height: 150px; overflow-y: auto; ">
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Untuk mahasiswa semester 3 dan 4</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">6 Mata Kuliah (umum dan khusus)</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Konsultasi konsentrasi jurusan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Waktu bimbingan 24 kali<br> pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px"> Jadwal bimbingan 1 minggu,<br> 3x pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px"> Durasi pertemuan minimal 2 jam dan<br> maksimal 4 jam</span>
                                                    </li>
                                                </ul>
                                                <div class="custom-btn-wrap" style="margin-top: -10%">
                                                    <a href="{{ Auth::check() ? '/pembelian/bso' : '/register' }}" class="custom-btn-buy" style="width: 80%; font-size: 12px">Daftar Sekarang</a>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Platinum --}}
                                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="custom-box"
                                                style="height: 380px; border-radius: 15px; width:280px;">
                                                <h4 class="custom-package"
                                                    style="color: #FFF;
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
                                                    PAKET DIAMOND</h4>
                                                <div class="rupiah-display" style="position: relative;">
                                                    <h4
                                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                                        <strong class="rp" style="margin-left: 30px;">Rp</strong>
                                                    </h4>
                                                    <h4 style="color: #1E1E1E;margin-left:60px; margin-bottom:-10px">
                                                        650.000</h4>
                                                </div>
                                                <div class="custom-pricee" style="margin-right:14px; margin-top:-10px;">
                                                    <strong>2
                                                        Bulan</strong>
                                                </div>
                                                <hr style=" border: 2px solid #000; border-width: 1px;">
                                                <ul class="deskripsi" style="max-height: 150px; overflow-y: auto; ">
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Untuk mahasiswa semester 5 dan 6</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px"> 6 Mata Kuliah (umum dan khusus)</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Konsultasi konsentrasi jurusan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Waktu bimbingan 24 kali<br> pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Jadwal bimbingan 1 minggu, <br>3x pertemuan</span>
                                                    </li>
                                                    <li class="left-aligned" style="margin-bottom: 10px !important; ">
                                                        <span class="checkmark"
                                                            style="width: 18px; height:18px; ">&#10003;</span>
                                                        <span class="text-bso" style="font-size: 10px">Durasi pertemuan minimal 2 jam dan<br> maksimal 4 jam</span>
                                                    </li>
                                                </ul>
                                                <div class="custom-btn-wrap" style="margin-top: -10%">
                                                    <a href="{{ Auth::check() ? '/pembelian/bso' : '/register' }}" class="custom-btn-buy" style="width: 80%; font-size: 12px">Daftar Sekarang</a>
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
                        </div>

                    </div>
                    {{-- <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box" style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package"
                                    style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 600;                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">
                                    PAKET BRONZE</h4>
                                <div class="rupiah-display" style="position: relative;">
                                    <h4
                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                        <strong class="rp" style="margin-left: 10px;">Rp</strong></h4>
                                    <h4><strong>400.000</strong></h4>
                                </div>
                                <div class="custom-pricee" style="margin-right: 120px;"><strong>1 Bulan</strong></div>
                                <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Untuk mahasiswa semester 1 dan 2</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> 6 Mata Kuliah (umum dan khusus)</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Konsultasi konsentrasi jurusan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Waktu bimbingan 12 kali pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Jadwal bimbingan 1 minggu,<br> 3x pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Durasi pertemuan minimal 2 jam dan<br> maksimal 4 jam</span>

                                    </li>

                                </ul>
                                <div class="custom-btn-wrap" style="margin-top:-10%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box" style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package"
                                    style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">
                                    PAKET EMERALD</h4>
                                <div class="rupiah-display" style="position: relative;">
                                    <h4
                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                        <strong class="rp" style="margin-left: 10px;">Rp</strong></h4>
                                    <h4><strong>565.000</strong></h4>
                                </div>
                                <div class="custom-pricee" style="margin-right: 120px;"><strong>2 Bulan</strong></div>
                                <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Untuk mahasiswa semester 3 dan 4</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> 6 Mata Kuliah (umum dan khusus)</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Konsultasi konsentrasi jurusan </span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Waktu bimbingan 24 kali pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Jadwal bimbingan 1 minggu,<br> 3x pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Durasi pertemuan minimal 2 jam dan<br> maksimal 4 jam</span>
                                    </li>
                                </ul>
                                <div class="custom-btn-wrap" style="margin-top:-10%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-box" style="height: 540px; border-radius: 15px;">
                                <h4 class="custom-package"
                                    style="color: #FFF;
                                font-family: Montserrat;
                                font-size: 18px;
                                font-style: normal;
                                font-weight: 700;
                                line-height: 125%; /* 40px */
                                letter-spacing: -1.6px;">
                                    PAKET DIAMOND</h4>
                                <div class="rupiah-display" style="position: relative;">
                                    <h4
                                        style="position: absolute; top: 0; left: 0; color: #1E1E1E; margin-right: 24px; font-size: 20px;">
                                        <strong class="rp" style="margin-left: 10px;">Rp</strong></h4>
                                    <h4><strong>650.000</strong></h4>
                                </div>
                                <div class="custom-pricee" style="margin-right: 120px;"><strong>2 Bulan</strong></div>
                                <hr>
                                <ul>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Untuk mahasiswa semester 5 dan 6</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> 6 Mata Kuliah (umum dan khusus)</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text"> Konsultasi konsentrasi jurusan </span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Waktu bimbingan 24 kali pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Jadwal bimbingan 1 minggu, <br>3x pertemuan</span>
                                    </li>
                                    <li class="left-aligned">
                                        <span class="checkmark">&#10003;</span>
                                        <span class="text">Durasi pertemuan minimal 2 jam dan<br> maksimal 4 jam</span>
                                    </li>

                                </ul>
                                <div class="custom-btn-wrap" style="margin-top:-10%">
                                    <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>


            <!-- ======= Sobat Insans ======= -->
            <section id="about"
                style="background: url(assets/img/bg/bso1.png);
                background-size: cover;
                background-position: center; margin-top: -100px;">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between"
                        style="margin-left: -140px; margin-top: -80px;">
                        <div class="col-lg-6 text-centerr">
                            <div style="width: 100%; height: 100%; position: relative">
                                <div style="width: 50px; margin-left: 180px; left: 0px; top: -150px; position: absolute">
                                    <div
                                        style="width: 75px; height: 75px; left: px; top: 0px; position: absolute; background: #09326F; border-radius: 9999px">
                                    </div>
                                    <div
                                        style="width: 65px; height: 65px; left: 7.66px; top: 0px; position: absolute; text-align: center; color: white; font-size: 105.11px; font-family: Montserrat; font-weight: 700; line-height: 131.38px; word-wrap: break-word">
                                        “</div>
                                </div>
                                <div
                                    style="text-align: left; width: 500px; left: px; margin-top: 50px; top: -110px; margin-left: 180px; position: absolute; color: black; font-size: 50px; font-family: Montserrat; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                    Cerita Sobat<br />Insans</div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            {{-- text --}}
                            <img src="assets/img/bg/bmjsobat1.png" class="img-fluid" alt="">
                        </div>
                    </div>
            </section>
            <!-- End About Section -->



            <section id="testimonials" class="testimonials" style="margin-top: -100px ;margin-bottom:px;">

                {{-- <div class="section-title">
                <h3 style="margin-top: 150px;">Mentor Profesional</h3>
                <h4 style="margin-top: 100px;">Bimbingan Mata Kuliah Jurusan</h4>

            </div> --}}
                <div class="section-title" style="margin-top: 100px; color:#000;">
                    <h3 style=" font-size: 45px;  margin-top:-40px  !important; font-family:Montserrat !important; font-weight:700 !important;">Mantor Profesional</h3>
                    <h4 style=" margin-top:-10px !important; font-family:Montserrat!important; font-size: 45px;  ">Bimbingan Mata Kuliah Jurusan</h4>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="centered-content">
                                <img src="assets/img/team/mentorbmj1.png" class="img-fluid" alt=""
                                    style="border: none !important;
                            outline: none !important;">
                                <img src="assets/img/team/mentorbmj2.png" class="img-fluid" alt=""
                                    style="border: none !important;
                            outline: none !important;">
                                <img src="assets/img/team/mentorbmj3.png" class="img-fluid" alt=""
                                    style="border: none !important;
                            outline: none !important;">
                                <img src="assets/img/team/mentorbmj4.png" class="img-fluid" alt=""
                                    style="border: none !important;
                            outline: none !important;">
                            </div>
                            <!--  <div class="centered-content">
                        <img src="assets/img/team/a.png" width="50px" height="auto" class="img-fluid" alt="">
                    </div> -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                </div>
            </section>




            <section id="testimonials" class="testimonials"
                style=" margin-top: -50px; background: url(assets/img/bg/bgalur.png); background-size: cover; position: relative; text-align: center;">
                <div class="section-title" style="margin-top: px; color:#000;">
                    <h3 style=" font-size: 45px;  margin-top:-50px  !important;">Alur Bimbingan</h3>
                </div>
                <img src="assets/img/bg/alurbimbingan.png"
                    style="max-width: 35%;  height: auto; display: inline-block; margin-top: 50px;" class="img-fluid"
                    alt="">
            </section>




            <!-- ======= FAQ ======= -->
            <section id="about"
                style="background: url(assets/img/bg/bagroundbmj.png);
                background-size: cover;
                background-position: center; margin-top: -100px;">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center justify-content-between"
                        style="margin-left: -140px; margin-top: -80px;">
                        <div class="col-lg-6 text-centerr">
                            <div style="width: 100%; height: 100%; position: relative; text-align:left;font-family: Montserrat !important;">

                                <div
                                    style=" width: 500px; left: 50px; margin-top: 50px; top: -220px; position: absolute; color: white; font-size: 50px; font-family: Montserrat; font-weight: 700; line-height: 80.50px;">
                                    Paling Sering </div>
                                <div
                                    style=" width: 500px; left: 50px; margin-top: 100px; top: -210px; position: absolute; color: white; font-size: 50px; font-family: Montserrat; font-weight: 700; line-height: 80.50px;">
                                    Ditanyakan </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">

                            <!-- bismilah -->
                            <div class="accordion" id="accordionFlushExample" style="margin-top: 150px;">
                                <div class="accordion" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-toggle="collapse" data-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <div
                                                    style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                                    01</div> <b>Apakah boleh ambil bimbingan tapi tidak sampai 6 mata
                                                    kuliah?</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                                            <div class="accordion-body" style="text-align: left">Sobat Insans boleh
                                                memilih mata kuliah apa saja sesuai semester yang sedang Sobat Insans
                                                tempuh. Sobat Insans bisa bimbingan maksimal 6 mata kuliah, baik dari mata
                                                kuliah umum ataupun mata kuliah khusus.
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-toggle="collapse" data-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    <div
                                                        style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                                        02</div> <b>Apakah boleh request Mentor?</b>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo" data-parent="#accordionFlushExample">
                                                <div class="accordion-body" style="text-align: left">Sobat Insans boleh
                                                    menyampaikan keinginannya untuk dibimbing oleh Mentor perempuan atau
                                                    laki-laki, namun ini bersifat kondisional selama pilihan Mentor masih
                                                    tersedia.</div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingthree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-toggle="collapse" data-target="#flush-collapsethree"
                                                    aria-expanded="false" aria-controls="flush-collapsethree">
                                                    <div
                                                        style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                                        03</div><b>Bagaimana caranya untuk ambil paket lanjutan?</b>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsethree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingthree" data-parent="#accordionFlushExample">
                                                <div class="accordion-body" style="text-align: left">Jika tertarik
                                                    mengambil paket lanjutan, Sobat Insans bisa melakukan konfirmasi dan
                                                    menghubungi Kak Dewi (+62 821-4154-9373).</div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingfour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-toggle="collapse" data-target="#flush-collapsefour"
                                                    aria-expanded="false" aria-controls="flush-collapsefour">
                                                    <div
                                                        style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                                        04</div><b>Siapa yang harus dihubungi jika menemui masalah saat
                                                        bimbingan?</b>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingfour" data-parent="#accordionFlushExample">
                                                <div class="accordion-body" style="text-align: left">Sobat Insans bisa
                                                    langsung menghubungi Kak Dewi selaku Customer Experience untuk
                                                    menyampaikan segala jenis kendala. Kak Dewi selalu siap membantu,
                                                    memastikan dan membuat Sobat Insans mendapatkan pengalaman terbaik.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingfive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-toggle="collapse" data-target="#flush-collapsefive"
                                                    aria-expanded="false" aria-controls="flush-collapsefive">
                                                    <div
                                                        style="color: #3E87F8; font-size: 20px; font-family: Montserrat; font-weight: 700; line-height: 57.60px; letter-spacing: 0.25px; word-wrap: break-word; margin-right:10px;">
                                                        05</div><b>Apakah harga paket bisa dicicil?</b>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingfive" data-parent="#accordionFlushExample">
                                                <div class="accordion-body" style="text-align: left">Class Program belum
                                                    menyediakan metode pembayaran dengan sistem cicil untuk pilihan paket.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
            </section>
            <!-- End About Section -->
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
