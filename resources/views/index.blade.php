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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>

@extends('layout.header')

@section('content')

<body>

    <script>
        // Mengambil elemen audio
        var audio = document.getElementById("myAudio");

        // Mengatur volume audio menjadi 20%
        audio.volume = 0.2;

        // Mengikat peristiwa "loadedmetadata" untuk memutar audio saat siap
        audio.addEventListener("loadedmetadata", function() {
            audio.play();
        });
    </script>



    <!-- ======= index1 hero ======= -->
    <section id="hero" class="d-flex align-items-center" style="background: url(assets/img/bg/dekstop2.png);background-size: cover; margin-top: 100px;">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="judulawal">
                <a href="#about" class="btn-get-awaaal awaaal" style="font-family:'Manrope';"><strong>Bersama Class
                        Program</strong> </a>
            </div>
            <div class="judulkedua" style="font-family:'Manrope';">
                <h3>Semua Bisa</h3>
                <h3>Lulus Kuliah</h3>
                <p style="letter-spacing:1px; font-family: Manrope; margin-top:15px;">Bimbingan belajar online
                    perkuliahan
                    dan persiapan <br> karir dengan
                    sistem kenaikan kelas pertama <br> di Indonesia yang menyediakan berbagai
                    macam <br> program kelas serta akan dibimbing langsung oleh <br> mentor yang ahli di bidangnya.</p>
            </div>
            <div class="d-flex" style="margin-top: -15px;">
                <a href="register" class="btn-get-started scrollto"><strong>Daftar Sekarang</strong> </a>
            </div>

            <div id="counts" class="counts">
                <div class="container">
                    <div class="count-boxes">
                        <div class="count-box">
                            <div class="left-content">
                                <span style="font-family: Manrope;"><b>2979</b></span><span class="plus" style="font-size: 25px;margin-top: 23.5px;position:absolute;margin-left:1px; font-family: Manrope; ">+</span>
                            </div>
                            <div class="right-content" style="margin-left:0px">
                                {{-- <p style="margin-left:0px">Peers to network and learn with</p> --}}
                                <p style="margin-left: 0px; color: #000; font-family: Manrope;"><b style="font-family: Manrope;">Sobat Insans yang Mendaftar</b></p>

                            </div>
                        </div>

                        <div class="count-separator"></div> <!-- Garis vertikal -->
                        <div class="count-box">
                            <div class="left-content">
                                <span style="font-family: Manrope;"><b>125</b></span><span style="font-family: Manrope; font-size: 25px;margin-top: 23.5px;position:absolute;margin-left:1px ">+</span>
                            </div>
                            <div class="right-content" style="margin-left:1px">
                                {{-- <p >Mentor Class Program</p> --}}
                                <p style="margin-left:0px; color: #000; font-family: Manrope;"><b>Mentor Class
                                        Program</b></p>
                            </div>
                        </div>

                        <div class="count-separator" style="margin-left:20px"></div>
                        <div class="count-box">
                            <div class="left-content">
                                <span style="font-family: Manrope; "><b>27</b></span><span style="font-family: Manrope; font-size: 25px;margin-top: 23.5px;position:absolute;margin-left:1px ">+</span>
                            </div>
                            <div class="right-content" style="margin-left:-1px">
                                <p style="margin-left:0px;margin-right:10px;  color: #000; font-family: Manrope;">
                                    <b>Kampus terdaftar bersama kami</b>
                                </p>
                            </div>
                        </div>

                        <div class="count-separator"></div>
                        <div class="count-box">
                            <div class="left-content">
                                <span style="font-family: Manrope;"><b>23</b></span><span style="font-family: Manrope; font-size: 25px;margin-top: 23.5px;position:absolute;margin-left:1px ">+</span>
                            </div>
                            <div class="right-content" style="margin-left:-1px">
                                <p style="margin-left:0px;margin-right:10px; color: #000; font-family: Manrope;">
                                    <b>Jurusan terdaftar bersama kami</b>
                                </p>
                            </div>
                        </div>
                        <div class="count-separator"></div>
                        <div class="count-box">
                            <div class="left-content">
                                <span style="font-family: Manrope;"><b>23</b></span><span style="font-family: Manrope; font-size: 25px;margin-top: 23.5px;position:absolute;margin-left:1px ">+</span>
                            </div>
                            <div class="right-content" style="margin-left:-1px">
                                <p style="margin-left:0px;margin-right:10px; color: #000; font-family: Manrope;">
                                    <b>Total program <br> yang tersedia</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="" style="margin-bottom:100px;"></div>
        </div>
    </section>
    <!-- End hero  -->

    <!-- ======= index2 featured-services ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up" style="">
            <div class="section-title judul">
            </div>
            <div class="row justify-content-center">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="background: url(assets/img/bg/bg4.png);background-size: cover;">
                    <div class="labels" style="margin-left:-20px">
                        <span class="icon">
                            <img src="assets/img/bg/ico4.png" alt="Deskripsi Gambar" style="margin-top:-5px; width:30px;position:absolute;margin-left:-10px">
                        </span>

                        <span class="label-text" style="color: #FFF;
                                font-family: Manrope;
                                font-size: 13px;
                                font-style: normal;
                                font-weight: 800;
                                line-height: normal;
                                letter-spacing:2px;
                                line-height: normal; white-space: normal;word-wrap: break-word;margin-left:18px;margin-top:-10px;margin-right:10px">
                            Sistem Bimbingan</span>
                    </div>
                    <h4 class="title">
                        <p style="color: #1E1E1E;font-family: Manrope;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                            Class Program</p>
                        <p href="" style="color: #1E1E1E;
                                      font-family: Manrope;
                                      font-size: 16px;
                                      font-style: normal;
                                      font-weight: 700;
                                      line-height: normal;
                                      margin-top:-13px">
                            Bimbingan online dan privat secara intensif</p>
                    </h4>
                    <div class="icon">
                    </div>
                    <img src="assets/img/bg/gmb4.png" alt="Deskripsi Gambar" width="180px;" style=" margin-top: -130px;">
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="background: url(assets/img/bg/bg3.png);background-size: cover;">
                    <div class="label" style="line-height:22px; margin-top:10px; text-align:left; padding-left:11px; padding-right:11px;">
                        <span class="icon">
                            <img src="assets/img/bg/ke2.png" alt="Deskripsi Gambar" style="margin-top: -5px; width:20px; margin-right:5px; margin-left:0px;  display:inline;">
                        </span>
                        <span class="label-text" style="color: #FFF;
                                font-family: Manrope;
                                font-size: 11px;
                                text-align:center;
                                font-style: normal;
                                font-weight: 800;
                                line-height: normal;
                                letter-spacing:1.5px;
                                position:relative;
                                bottom:2px;
                                line-height: normal; white-space: normal;word-wrap: break-word;">Jumlah
                            Pertemuan</span>
                    </div>
                    <h4 class="title">
                        <p style="color: #1E1E1E;font-family: Manrope;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                            Class Program</p>
                        <p href="" style="color: #1E1E1E;
                                        font-family: Manrope;
                                        font-size: 16px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: normal;
                                        margin-top:-13px">
                            Mendapat kesempatan<br>30 kali pertemuan</p>
                    </h4>
                    <div class="icon">
                    </div>
                    <img src="assets/img/bg/gmb2.png" alt="Deskripsi Gambar" width="200px;" style=" margin-top: -10px;">
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="background: url(assets/img/bg/bg2.png);background-size: cover;">
                    <div class="label" style="line-height:19px; margin-top:10px">
                        <span class="icon">
                            <img src="assets/img/bg/ico3.png" alt="Deskripsi Gambar" style="margin-top:-3px;width:15px;margin-right:5px;  display:inline;">
                        </span>
                        <span class="label-text" style="font-family:'Manrope'; white-space: normal;word-wrap: break-word;
                                font-size: 11px; position:relative; bottom:1px;   letter-spacing:2px;">Durasi
                            Bimbingan</span>
                        {{-- Mendapat 24 pertemuan --}}
                    </div>
                    <h4 class="title">
                        <p style="color: #1E1E1E;font-family: Manrope;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                            Class Program</p>
                        <p href="" style="color: #1E1E1E;
                                        font-family: Manrope;
                                        font-size: 16px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: normal;
                                        margin-top:-13px">
                            Durasi bimbingan hingga 4 jam</p>
                    </h4>
                    <div class="icon">
                    </div>
                    <img src="assets/img/bg/card3.png" alt="Deskripsi Gambar" width="145px" style="margin-top: -45px; ">
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="background: url(assets/img/bg/bg1.png);background-size: cover;">
                    <div class="label" style="line-height:19px; margin-top:10px">
                        <span class="icon">
                            <img src="assets/img/bg/ico1.png" alt="Deskripsi Gambar" style="margin-top:-0px;width: 19px;margin-right:5px;  display:inline;">
                        </span>
                        <span class="label-text" style="font-family:'Manrope'; white-space: normal;word-wrap: break-word;
                                font-size: 11px;   letter-spacing:1px; position:relative; bottom:1px; ">Fasilitas Bimbingan</span>
                    </div>

                    <h4 class="title">
                        <p style="color: #1E1E1E;font-family: Manrope;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                            Class Program</p>
                        <p style="color: #1E1E1E;
                                        font-family: Manrope;
                                        font-size: 16px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: normal;
                                        margin-top:-13px">
                            Mendapat berbagai fasilitas menarik</p>
                    </h4>
                    <div class="icon">
                    </div>
                    <img src="assets/img/bg/gmb1.png" alt="Deskripsi Gambar" width="100px" style="margin-top: -10px; ">
                    {{-- <img src="assets/img/bg/gmb1.png"
                            alt="Deskripsi Gambar"style=" margin-top: -140px; margin-left:-10px;"> --}}
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="500" style="background: url(assets/img/bg/bg5.png);background-size: cover;">
                    <div class="label" style="line-height:19px; margin-top:10px">
                        <span class="icon">
                            <img src="assets/img/bg/akhir.png" alt="Deskripsi Gambar" style="margin-top:-0px;width:17px;margin-right:5px; display:inline;">
                        </span>
                        <span class="label-text" style="font-family:'Manrope'; white-space: normal;word-wrap: break-word;
                            font-size: 11px;   letter-spacing:2px; position:relative; bottom:1px;">Harga
                            Bimbingan
                        </span>
                    </div>
                    <h4 class="title">
                        <p style="color: #1E1E1E;font-family: Manrope;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                            Class Program</p>
                        <p href="" style="color: #1E1E1E;
                                        font-family: Manrope;
                                        font-size: 16px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: normal;
                                        margin-top:-13px">
                            Harga sesuai kantong Mahasiswa</p>
                    </h4>
                    <div class="icon">
                    </div>
                    <img src="assets/img/bg/gmbf.png" alt="Deskripsi Gambar" width="190px" style="margin-top: -5px; ">
                </div>
            </div>
        </div>
    </section>
    <!-- End featured-services -->

    <!-- ======= index3 popup ======= -->
    <section id="popup" class="popup" style="padding:30px 0 80px 0;">
        <div class="button-container mb-4" style="margin-top:0px;">
            <span style="float: left; margin-left: 6%;"><img src="assets/img/logo/bintang.png" alt="bintang" style="width: 30px;margin-top:0px;margin-right:5px"></span>
            <h1 class="custom-text" style=" font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; margin-left: 5px; margin-right:10px;">
                Paket
                populer untuk </h1>
            <button type="button" class="custom-button" data-toggle="modal" data-target="#tulis" aria-hidden="true" style="font-family: Arial, sans-serif; margin-top: 12px;">Mahasiswa <i class="fa-solid fa-chevron-down"></i></button>
        </div>
        <div class="modal fade" id="tulis" tabindex="-1" role="dialog" aria-labelledby="tulisTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="background: url(assets/img/bg/frame16.png);background-size: cover;">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: #000">Selamat datang di Class Program!</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="margin-top: -50px; ">
                        <p style="color: #10387; font-weight: 500;">Ingin bimbingan mata kuliah untuk semester berapa?
                        </p>
                        <!-- <p>Ingin cari produk untuk semester berapa?</p> -->
                    </div>


                    <div class="modal-body">
                        <div class="btn-group">
                            <button onclick="window.location.href='bimbangan-mata-kuliah-jurusan#pricing'" type="button" class="btn btn-primary" style="border-radius: 50px;">Satu dan
                                Dua</button>
                            <button onclick="window.location.href='bimbangan-mata-kuliah-jurusan#pricing'" type="button" class="btn btn-primary" style="border-radius: 50px;">Tiga dan
                                Empat</button>
                            <button onclick="window.location.href='bimbangan-mata-kuliah-jurusan#pricing'" type="button" class="btn btn-primary" style="border-radius: 50px;">Lima dan
                                Enam</button>
                            <!-- Tambahkan tombol-tombol produk lainnya sesuai kebutuhan -->
                        </div>
                        <!-- <hr> Garis pemisah -->
                        <br>
                        <p style="color: #103873 !important; font-weight:500 !important;">Pilihan paket hemat bimbingan skripsi online</p>
                        <div class="btn-group" style="">
                            <button onclick="window.location.href='bimbingan-skripsi-online#pricing'" type="button" class="btn btn-list" style="background: #3E87F8; border-radius: 25px;"><span class="icon">
                                    <img src="assets/img/bg/bookmark.png" alt="Deskripsi Gambar" style="width: 75px;position:center; margin-top: 10px;">
                                </span>
                                <div style="margin-top: 13px;">Pembuatan <br>judul skripsi</div>
                            </button>
                            <button onclick="window.location.href='bimbingan-skripsi-online#pricing'" type="button" class="btn btn-list" style="background: #6770E9; border-radius: 25px;"><span class="icon">
                                    <img src="assets/img/bg/edit.png" alt="Deskripsi Gambar" style="width:75px;position:center;  margin-top: 11px;">
                                </span>
                                <div style="margin-top: 12px;">Penyusunan
                                    <br> bab 1-bab 3
                                </div>
                            </button>
                            <button onclick="window.location.href='bimbingan-skripsi-online#pricing'" type="button" class="btn btn-list" style="background: #41BAAC; border-radius: 25px;"><span class="icon">
                                    <img src="assets/img/bg/notes.png" alt="Deskripsi Gambar" style="width:75px;position:center; margin-top: 15px;"></span>
                                <div style="margin-top: 10px;">Penyusunan
                                    <br> bab 4-bab 5
                                </div>
                            </button>
                            <button onclick="window.location.href='bimbingan-skripsi-online#pricing'" type="button" class="btn btn-list" style="background: #F7965A; border-radius: 25px;"><span class="icon">
                                    <img src="assets/img/bg/group.png" alt="Deskripsi Gambar" style="width: 75px;position:center; margin-top: 18px;">
                                </span>
                                <div style="margin-top: 8px;">Persiapan sempro <br> atau sidang skripsi</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End popup -->

    <!-- ======= index4 paketmentor ======= -->
    <section id="paketmentor" class="paketmentor mb-5" style="background-color: #f0f0f0; margin-top:-80px; margin-bottom: 0px; ">
        <div class="paketmentorbg mb-5">
            <h2 class="judul-tengah" style="margin-top:0px; color:black; font-family: Montserrat;">Program Unggulan Class Program
            </h2>
            <div class="row row-cols-1 row-cols-md-4 g-4 ml-2 mr-2 mt-5 " style="margin: -50px;    margin-top: -10px!important;">
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;box-shadow: 6.436px 9.01px 23.17px 0px rgba(0, 0, 0, 0.14), 24.457px 36.042px 42.478px 0px rgba(0, 0, 0, 0.12), 54.062px 79.807px 57.924px 0px rgba(0, 0, 0, 0.07), 95.253px 142.879px 68.222px 0px rgba(0, 0, 0, 0.02), 149.315px 222.686px 74.658px 0px rgba(0, 0, 0, 0.00);">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border-top: none; border-bottom: none; text-align: left;font-size: 18px !important;">Complete
                                                <br><span class="green-text">(BSO)</span>
                                            </th>
                                            <th scope="col" style="border-top: none; border-bottom: none; font-size: 18px !important;">Harga
                                                <br><span class="blue-text" style="font-size: 18px !important;">Rp 1.010.000</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col">3 Bulan</th>
                                        <th scope="col" style="text-align: center;">30 Pertemuan</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;margin-left: -22px;"></i>
                                    Bimbingan intensif pembuatan judul skripsi</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Variabel
                                    Bimbingan intensif pembuatan Bab 1-3</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Objek
                                    Bimbingan intensif pembuatan Bab 4 sampai selesai </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Judul
                                    Bimbingan intensif pembuatan power point proposal dan skripsi </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Rumusan
                                    Bimbingan presentasi proposal dan skripsi</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Dasar teori
                                    Bimbingan simulasi seminar proposal dan sidang skripsi</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Dasar teori
                                    Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 jam</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="{{ Auth::check() ? '/pembelian/BSO%20Complete' : '/register' }}" class="btn btn-primary" style="border-radius: 25px; align-content: center;"><strong style="font-weight: 400 !important; margin-top:-2px;">Daftar Sekarang</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;box-shadow: 6.436px 9.01px 23.17px 0px rgba(0, 0, 0, 0.14), 24.457px 36.042px 42.478px 0px rgba(0, 0, 0, 0.12), 54.062px 79.807px 57.924px 0px rgba(0, 0, 0, 0.07), 95.253px 142.879px 68.222px 0px rgba(0, 0, 0, 0.02), 149.315px 222.686px 74.658px 0px rgba(0, 0, 0, 0.00);">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border-top: none; border-bottom: none; text-align: left; font-size: 18px !important;">Gold
                                                <br><span class="green-text">(BSO)</span>
                                            </th>
                                            <th scope="col" style="border-top: none; border-bottom: none; font-size: 18px !important;">Harga
                                                <br><span class="blue-text" style="font-size: 18px !important;">Rp 499.000</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col">2 Bulan</th>
                                        <th scope="col" style="text-align: center;">24 Pertemuan</th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Latar
                                    Bimbingan intensif pembuatan bab 1-3</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Identifikasi
                                    Bimbingan dalam pembuatan outline</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Rumusan
                                    Bimbingan metode penelitian</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Tujuan dan
                                    Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 jam </li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="{{ Auth::check() ? '/pembelian/BSO%20Gold' : '/register' }}" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;box-shadow: 6.436px 9.01px 23.17px 0px rgba(0, 0, 0, 0.14), 24.457px 36.042px 42.478px 0px rgba(0, 0, 0, 0.12), 54.062px 79.807px 57.924px 0px rgba(0, 0, 0, 0.07), 95.253px 142.879px 68.222px 0px rgba(0, 0, 0, 0.02), 149.315px 222.686px 74.658px 0px rgba(0, 0, 0, 0.00);">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border-top: none; border-bottom: none;text-align: left; font-size: 18px !important;">Diamond
                                                <br><span class="green-text">(BMJ)</span>
                                            </th>
                                            <th scope="col" style="border-top: none; border-bottom: none; font-size: 18px !important;">Harga
                                                <br><span class="blue-text" style="font-size: 18px !important;">Rp 650.000</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col">2 Bulan </th>
                                        <th scope="col" style="text-align: center;">24 Pertemuan </th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Mahasiswa semester 5 dan 6
                                </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Mata Kuliah Umum
                                </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Mata Kuliah Khusus
                                </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Bimbingan sampai 6 Mata Kuliah
                                </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Konsultasi PKL atau magang
                                </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 jam</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="{{ Auth::check() ? '/pembelian/BMJ%20Diamond' : '/register' }}" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border-radius: 25px; border: 5px solid #1b5cc5;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border-top: none; border-bottom: none;text-align: left; font-size: 18px !important;">Emerald
                                                <br><span class="green-text">(BMJ)</span>
                                            </th>
                                            <th scope="col" style="border-top: none; border-bottom: none; font-size: 18px !important;">Harga
                                                <br><span class="blue-text" style="font-size: 18px !important;">Rp 565.000</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </h5>
                            <p class="card-text">
                            <table class="table table-no-border">
                                <thead>
                                    <tr>
                                        <th scope="col">2 Bulan </th>
                                        <th scope="col" style="text-align: center;">24 Pertemuan </th>
                                    </tr>
                                </thead>
                            </table>
                            <ul class="deskripsi" style="list-style: none;">
                                {{-- <i class="fa-solid fa-check"></i> --}}
                                <strong> Materi: </strong>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i>
                                    Mahasiswa semester 3 dan 4</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Skripsi
                                    Mata Kuliah Umum</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i>
                                    Mata Kuliah Khusus </li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknis
                                    Bimbingan sampai 6 Mata Kuliah</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknis
                                    Konsultasi konsentrasi jurusan</li>
                                <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Saran dan
                                    Durasi bimbingan per pertemuan minimal 2 jam maksimal 4 jam</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 25px;">
                            <a href="{{ Auth::check() ? '/pembelian/BMJ%20Emerald' : '/register' }}" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End paketmentor -->

    <!-- ======= index5 pricing ======= -->
    <section id="pricing" class="pricing" style="margin-top: -25px; margin-bottom: 50px">
        <div class="container" data-aos="fade-up">
            <div class="row" style="margin-top: -80px;">
                <div class="pricingan col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <!-- <h3>Bimbingan Mata Kuliah Jurusan (BMJ)</h3> -->
                        <h4><img src="assets/img/bg/program1.png" class="img-fluid" alt="" style="margin-bottom: -50px; margin-top:-10px;"></h4>
                        <ul>
                            <li><strong style="">Bimbingan Skripsi Online (BSO)</strong></li>
                            <li style="color:black; margin-top:-10px; ">Bimbingan Skripsi Online (BSO) Class Program
                                disediakan secara
                                khusus untuk membantu Sobat Insans dalam memahami cara penyusunan dan pengerjaan skripsi
                                dengan sistem mentoring atau pendampingan secara intensif dan privat.
                            </li>
                        </ul>
                        <div class="btn-wrap" style="margin-top: -30px;">
                            <a href="bimbingan-skripsi-online" class="btn-buy">Lihat Detail</a>
                        </div>
                        <br>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online#pricing" class="btn-buyy" href="#pakethematbso">Pilih
                                Paket</a>
                        </div>
                    </div>
                </div>


                <div class="pricingan col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <!-- <h3>Bimbingan Mata Kuliah Jurusan (BMJ)</h3> -->
                        <h4><img src="assets/img/bg/program2.png" class="img-fluid" alt="" style="margin-bottom: -50px; margin-top:-10px;"></h4>
                        <ul>
                            <li><strong style="">Bimbingan Mata Kuliah Jurusan (BMJ)</strong></li>
                            <li style="color:black; margin-top:-10px;">Bimbingan Mata Kuliah Jurusan (BMJ) Class
                                Program disediakan
                                secara
                                khusus untuk membantu Sobat Insans dalam memahami materi
                                mata kuliah jurusan dengan sistem mentoring atau pendampingan secara intensif dan
                                privat.
                            </li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online" class="btn-buy">Lihat Detail</a>
                        </div>
                        <br>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online#pricing" class="btn-buyy">Pilih Paket</a>
                        </div>
                    </div>
                </div>

                <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <!-- <h3>Bimbingan Skripsi Online <br> (BSO)</h3> -->
                        <h4><img src="assets/img/bg/program3.png" class="img-fluid" alt="" style="margin-bottom: -50px; margin-top:-10px;"></h4>
                        <ul>
                            <li><strong style=""> Kelas Tugas Kuliah (KTK)</strong></li>
                            <li style="color:black;">Kelas Tugas Kuliah (KTK) Class Program disediakan secara khusus
                                untuk
                                membantu Sobat Insans dalam langkah-langkah
                                penyusunan tugas kuliah dengan sistem mentoring/ pendampingan secara intens dan kenaikan
                                kelas.</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online" class="btn-buy">Lihat Detail</a>
                        </div>
                        <br>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online#pricing" class="btn-buyy">Pilih Paket</a>
                        </div>
                    </div>
                </div>

                <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <!-- <h3>Bimbingan Skripsi Online <br> (BSO)</h3> -->
                        <h4><img src="assets/img/bg/program4.png" class="img-fluid" alt="" style="margin-bottom: -50px; margin-top:-10px;"></h4>
                        <ul>
                            <li><strong style="">Kelas Persiapan Karir (KPK)</strong></li>
                            <li style="color:black;">Kelas Persiapan Karir (KPK) Class Program disediakan secara khusus
                                untuk
                                membantu Sobat
                                Insans dalam mengasah soft skill dan hard skill untuk terjun ke dunia kerja.</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online" class="btn-buy">Lihat Detail</a>
                        </div>
                        <br>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online#pricing" class="btn-buyy">Pilih Paket</a>
                        </div>
                    </div>
                </div>

                <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <!-- <h3>Bimbingan Skripsi Online <br> (BSO)</h3> -->
                        <h4><img src="assets/img/bg/program5.png" class="img-fluid" alt="" style="margin-bottom: -50px; margin-top:-10px;"></h4>
                        <ul>
                            <li><strong style="">Creative Class</strong></li>
                            <br>
                            <li style="color:black;">Creative Class adalah program yang disediakan secara khusus untuk
                                membantu Sobat Insans dalam
                                melatih kemampuan design grafis dengan sistem kenaikan kelas.</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online" class="btn-buy">Lihat Detail</a>
                        </div>
                        <br>
                        <div class="btn-wrap">
                            <a href="bimbingan-skripsi-online#pricing" class="btn-buyy">Pilih Paket</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->


    <!-- ======= index6 youtube ======= -->
    <section id="youtube" class="youtube" style="margin-top: -155px;">
        <div class="section-title judul">
            <h3 style="margin-top:-10px;">Coba GRATIS <br> Kelas Tugas Kuliah (KTK) sekarang juga! <span style=""><img src="assets/img/logo/bintang.png" alt="bintang" style="width: 30px;margin-top:-10px;margin-right:5px"></span></h3>
        </div>
        <img src="assets/img/bg/yt2.png" alt="Left Image" class="left-image">
        <img src="assets/img/bg/yt3.png" alt="Right Image" class="right-image">
        <div class="container" data-aos="fade-up" style="margin-top: 30px;">
            <div class="row skills-content">
                <div class="col-md-7 mx-auto">
                    <!-- Left image -->
                    <div class="video-container" style="margin-top: -15px;">
                        <div class="video-container2">
                            <div class="video-wrapper">
                                <iframe width="2000" height="315" style="margin-top:2px; width: 94%; margin-right: -10px; border-radius: 25px;" src="https://www.youtube.com/embed/puKINTRTDZk?si=3ZqaSjYv1Yl6XsnG" title="YouTube video player" frameborder="0" allow="accelerometer;
                                     autoplay; clipboard-write; encrypted-media; gyroscope;
                                      picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-description" style="margin-top: -80px!important;">
                            <p>Dapatkan Materi Menarik Lainnya</p>
                            <a href="nonaktif" class="join-button">Daftar Sekarang</a>
                        </div>
                    </div>
                    <!-- Right image -->
                </div>
            </div>
        </div>
    </section>
    <!-- End youtube -->

    <!-- ======= index7 berita->menu ======= -->
    <div class="" style="margin-bottom:20px;margin-top:5px;background-color:white;"></div>
    <section id="berita" class="berita container" style="margin-top:-35px;">
        <section id="menu" class="menu">
            <div class="container" style="margin-top: 0px; margin-left:3px;">
                <div class="content" id="content1">
                    <div class="row blok">
                        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                            <h3 style="color: #2A2A2A;
                                font-family: Manrope;
                                font-size: 50px;
                                margin-top:20px;
                                font-style: normal;
                                font-weight: 800;
                                /* line-spacing: 2px; */
                                line-height: 100%; /* 82.685px */
                                letter-spacing:1px;
                                /* Add drop shadow properties */
                                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                                text-align: left;">
                                WORKSHOP CLASS PROGRAM</h3>
                            <!-- style="border-radius: 25px; border: 5px solid #1b5cc5;" -->
                            <div class="content-selector" style="border-radius: 50px; border: 2.5px solid #000; width: 220px; height: 60px;">
                                <button id="content1Btn" class="btn btn-primary active" style="margin-top: 5px; margin-left:-2px;"><b>Skripsi</b></button>
                                <button id="content2Btn" style="margin-top: 5px; margin-right:-2px;" class="btn btn-primary"><b>KTI</b></button>
                            </div>
                            <p style="font-size: 18px; text-align: left; margin-top:10px;">
                                Workshop yang bertujuan untuk mendalami materi penyusunan skripsi dengan
                                sistematika yang baik <br> dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
                            </p>
                            <ul>
                                <li style="font-size: 15px; text-align: left;">
                                    <span class="circle active">
                                        <span class="check">
                                            <img src="assets/img/bg/centang.png" alt="Check Mark">
                                        </span>
                                    </span>
                                    Mendapatkan pelatihan dalam penyusunan dan pembuatan skripsi oleh Mentor yang ahli di
                                    bidangnya
                                </li>
                                <li style="font-size: 15px; text-align: left;">
                                    <span class="circle">
                                        <span class="check">
                                            <img src="assets/img/bg/centang.png" alt="Check Mark">
                                        </span>
                                    </span>
                                    Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan
                                    e-sertifikat
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-get-started scrolltolo" style="margin-top:15px;margin-bottom:15px; background-color:#0C63D5;">
                                    <a href="skripsi" style="color: white;">Lihat Selengkapnya</a>
                                </button>
                            </div>
                        </div>

                        <div class="gambareo col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100" style="margin-top: 10px;">
                            <br> <br>
                            <img src="assets/img/bg/friska13.png" class="img-fluid" alt="" style="width: 100%;  margin-bottom: 0px;">
                        </div>
                    </div>
                </div>

                <div class="content" id="content2">
                    <div class="row blok">
                        <div class="col-lg-6 pt-4 pt-lg-0 contentbolo d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                            <h3 style="color: #2A2A2A;
                            font-family: Manrope;
                            font-size: 50px;
                            margin-top:20px;
                            font-style: normal;
                            font-weight: 800;
                            /* line-spacing: 2px; */
                            line-height: 100%; /* 82.685px */
                            letter-spacing:1px;
                             /* Add drop shadow properties */
                             text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                             text-align: left;">
                                WORKSHOP CLASS PROGRAM</h3>
                            <div class="content-selector" style="border-radius: 50px; border: 2.5px solid #000; width: 220px; height: 60px;">
                                <button id="content3Btn" class="btn btn-primary active" style="margin-top: 5px; margin-left:-2px;"><b>Skripsi</b></button>
                                <button id="content4Btn" class="btn btn-primary" style="margin-top: 5px; margin-right:-2px;"><b>KTI</b></button>
                            </div>
                            <p style="font-size: 18px; text-align: left; margin-top:10px;">
                                Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan Karya Tulis Ilmiah
                                (KTI) dengan baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
                            </p>

                            <ul>
                                <li style="font-size: 15px; text-align: left;">
                                    <span class="circle">
                                        <span class="check">
                                            <img src="assets/img/bg/centang.png" alt="Check Mark">
                                        </span>
                                    </span>
                                    Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh
                                    Mentor yang ahli di bidangnya
                                </li>
                                <li style="font-size: 15px; text-align: left;">
                                    <span class="circle">
                                        <span class="check">
                                            <img src="assets/img/bg/centang.png" alt="Check Mark">
                                        </span>
                                    </span>
                                    Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan
                                    e-sertifikat
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-get-started scrolltolo" style="margin-top:15px;margin-bottom:15px;background-color:#0C63D5;">
                                    <a href="kti" style="color: white;">Lihat Selengkapnya</a>
                                </button>
                            </div>
                        </div>
                        <div class="gambareo col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100" style="margin-top: 10px;">
                            <br> <br>
                            <img src="assets/img/bg/friska12.png" class="img-fluid" alt="" style="width: 100%;margin-bottom:auto; ">
                        </div>
                    </div>
                </div>
            </div>

            <script src="script.js"></script>
        </section>
    </section>
    <!-- End berita->menu -->

    <!-- ======= index8 berita ======= -->
    <section id="berita" class="berita container" style="margin-top:-35px">
        <div class="content_area">
            <style>
                .video-link {
                    display: block;
                    position: relative;
                    overflow: hidden;
                    transition: transform 0.3s ease-in-out;
                }

                .video-link:hover {
                    transform: scale(1.1);
                    /* Efek zoom */
                }

                .thumbnail {
                    width: 100%;
                    height: auto;
                    transition: transform 0.3s ease-in-out;
                }
             
            </style>
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <h4 style="margin-bottom: 20px; font-size:16px">Rekomendasi video untukmu</h4>
                    <div class="single_left_coloum_wrapper" id="scrollableColumn">
                        <div class="scrollable_left_coloum">
                            @if ($berita->isNotEmpty())
                            @foreach ($youtube->sortByDesc('created_at')->take(10) as $penegnbalikcuk)
                            <a href="{{ $penegnbalikcuk->tampilan }}" target="_blank">
                                <div class="single_left_coloum" target="_blank" style="    margin-right: -40px;">
                                    <a href="{{ $penegnbalikcuk->tampilan }}" target="_blank" class="video-link">
                                        <img src="{{ asset('foto_upload/' . $penegnbalikcuk->foto) }}" alt="Youtube Thumbnail" class="thumbnail" style="width: 80%;" />
                                        <svg class="play-icon" style="top: 50% !important; left:40%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <image href="assets/img/bg/play-youtube.png" width="24" height="24" opacity="0.80" />
                                        </svg>
                                    </a>
                                    <p style="color: black; font-size: 12px !important; width:80% !important;text-align: left;">Video: <span style="color: black; font-size: 12px !important;">{{ str_limit($penegnbalikcuk->judul, 30, '. . .') }}</span>
                                    </p>
                                    <p id="duration_{{ $penegnbalikcuk->id }}" style="color: black; font-size: 12px !important;"></p>
                                </div>
                            </a>

                            <script>
                                // Fetch and display YouTube video duration
                                function fetchVideoDuration(videoId, elementId) {
                                    var apiKey = 'AIzaSyA51N396Cy-PFqNBYqnbnfSu2ax9eGS-P0';
                                    var apiUrl = 'https://www.googleapis.com/youtube/v3/videos';

                                    // Make a request to YouTube Data API
                                    fetch(apiUrl + '?id=' + videoId + '&key=' + apiKey + '&part=contentDetails')
                                        .then(response => response.json())
                                        .then(data => {
                                            // Parse the ISO 8601 duration format and display it
                                            var duration = parseISO8601Duration(data.items[0].contentDetails.duration);
                                            document.getElementById(elementId).innerText = 'Duration: ' + duration;
                                        })
                                        .catch(error => console.error('Error fetching video duration:', error));
                                }

                                // Function to parse ISO 8601 duration format
                                function parseISO8601Duration(duration) {
                                    var match = duration.match(/PT(\d+H)?(\d+M)?(\d+S)?/);

                                    var hours = (parseInt(match[1]) || 0);
                                    var minutes = (parseInt(match[2]) || 0);
                                    var seconds = (parseInt(match[3]) || 0);

                                    return (hours > 0 ? hours + 'h ' : '') + (minutes > 0 ? minutes + 'm ' : '') + (seconds > 0 ? seconds + 's' :
                                        '');
                                }

                                // Call the fetchVideoDuration function for each video
                                fetchVideoDuration('{{ $penegnbalikcuk->youtube_video_id }}', 'duration_{{ $penegnbalikcuk->id }}');
                            </script>
                            @endforeach
                            @endif
                        </div>

                    </div>
                    <span class="left-scroll-button" onclick="customScrollLeft()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" style="margin-left: 5px; margin-top: 20px;" viewBox="0 0 35" fill="none">
                            <g filter="url(#filter0_b_229_15)">
                                <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                <!-- Mengubah path panah ke kiri -->
                                <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="white" />
                            </g>
                            <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                        </svg>
                    </span>


                    <span class="right-scroll-button" onclick="scrollRight()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35px" style="margin-right: -40px; margin-top: 20px;" viewBox="0 0 35" style="float: right;" fill="none">
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
                    <hr style="border: 2px solid black;  margin-top: -20px;">

                    <style>
                        .single_left_coloum {
                            position: relative;
                            overflow: hidden;
                            border-radius: 8px;
                            margin-bottom: 15px;
                            transition: transform 0.3s ease-in-out;
                        }



                        .play-iconn {
                            position: absolute;
                            top: 10%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            width: 50px;
                            /* Adjust the size of the play icon */
                            height: 50px;
                            /* Adjust the size of the play icon */
                            fill: #ffffff;
                            /* Adjust the color of the play icon */
                            transition: opacity 0.3s ease-in-out;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                            border-radius: 20%;


                        }

                        .play-iconn:hover {
                            fill: red !important;
                        }

                        .single_left_coloum:hover {
                            transform: scale(1.1);
                        }

                        .single_left_coloum:hover .play-iconn {
                            color: #000000;
                        }
                    </style>

                    <h4 style="margin-bottom: 20px; font-size:16px">Tips Menarik</h4>
                    <div class="single_left_coloum_wrapper" id="scrollableColumn1">
                        @if ($berita->isNotEmpty())
                        @foreach ($data->sortByDesc('created_at')->take(10) as $video)
                        <a href="{{ $video->tampilan }}" style="text-decoration: none; color: black;">
                            <div class="single_left_coloum" style="    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7); /* Bayangan dengan warna biru lebih gelap */
                                        ">
                                <img src="{{ asset('foto_upload/' . $video->foto) }}" alt="Video Thumbnail" style="width: 100% !important; height:300px !important;" />
                                <svg class="play-iconn" style="top: 50% !important;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </a>
                        @endforeach
                        @endif
                        <!-- Add more content here -->
                    </div>

                    <span class="left-scroll-button1" onclick="scrollLeft1()" style="margin-top: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" style="margin-left: 15px;" viewBox="0 0 40" fill="none">
                            <g filter="url(#filter0_b_229_15)">
                                <path opacity="0.4" d="M17.4812 48.5835H35.5189C43.3342 48.5835 48.5834 43.5573 48.5834 36.0733V16.927C48.5834 9.443 43.3342 4.41683 35.5189 4.41683H17.4812C9.66817 4.41683 4.41675 9.44521 4.41675 16.9292L4.41675 36.0733C4.41675 43.5573 9.66817 48.5835 17.4812 48.5835Z" fill="black" />
                                <!-- Mengubah path panah ke kiri -->
                                <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="white" />
                            </g>
                            <path d="M21.6113 35.9506L13.2969 27.6738C12.672 27.051 12.672 25.9491 13.2969 25.3241L21.6113 17.0473C22.2605 16.4024 23.3095 16.4047 23.9543 17.0539C24.5992 17.7032 24.5992 18.7499 23.9499 19.3969L18.4799 24.8449H32.5138C33.4303 24.8449 34.1701 25.5869 34.1701 26.5012C34.1701 27.4154 33.4303 28.1574 32.5138 28.1574H18.4799L23.9499 33.6032C24.2745 33.9278 24.4357 34.3518 24.4357 34.778C24.4357 35.1998 24.2745 35.6238 23.9543 35.9462C23.3095 36.5932 22.2605 36.5954 21.6113 35.9506Z" fill="none" stroke="white" stroke-width="3" />
                        </svg>
                    </span>
                    <span class="right-scroll-button1" onclick="scrollRight1()" style="margin-top: 20px;">
                        <!-- Add right-scroll icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" style="margin-right: -30px;" viewBox="0 0 40" fill="none">
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
                    {{-- </div> --}}
                </div>


                <style>
                    .content_wrapper {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .left_content {
                        /* width: calc(100% - 210px); */
                        /* Lebar total dikurangi lebar gambar dan margin */
                        box-sizing: border-box;
                        /* Untuk memastikan padding dan border tidak memperlebar elemen */
                        /* margin-right: 20px; */
                        /* Sesuaikan dengan margin yang diinginkan */
                    }

                    .right_content img {
                        width: 130px;
                        /* Sesuaikan lebar gambar sesuai kebutuhan */
                        height: auto;
                        /* margin-right: 10px; */
                        /* Sesuaikan margin kanan gambar */
                    }

                    .content_wrapper p {
                        word-wrap: break-word;
                        /* Pastikan kalimat panjang tidak hilang */
                    }

                    .article-popular {
                        font-size: 18px !important;
                        margin-top: -25px;
                        font-family: "Manrope" !important;
                        margin-left: -1px !important;
                    }

                    .right_content {

                        transition: transform 0.3s ease-in-out;
                    }

                    .right_content:hover {
                        transform: scale(1.1);
                        /* Efek zoom saat kursor di atas */
                    }
                </style>
                <div class="right_coloum floatright mt-4" style="margin-top: 10px;">
                    <h4 class="article-popular" style="font-size: 16px !important;">Artikel Populer</h4>
                    <div class="single_cat_right_content" style="">
                        @if ($berita->isNotEmpty())
                        @foreach ($berita->sortByDesc('created_at')->take(5) as $item)
                        <div class="content_wrapper">
                            <div class="left_content" style="margin-bottom: 10px !important;">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="23" viewBox="0 0 18 23" fill="none" style="float: left; margin-right: 5px; width: 12px; height: 16px;">
                                        <path d="M17 22L9 16.1667L1 22V3.33333C1 2.71449 1.24082 2.121 1.66947 1.68342C2.09812 1.24583 2.67951 1 3.28571 1H14.7143C15.3205 1 15.9019 1.24583 16.3305 1.68342C16.7592 2.121 17 2.71449 17 3.33333V22Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <a href="{{ asset($item->tampilan) }}" style="text-decoration: none; color: inherit; font-size:14px !important;">
                                        {{ $item->sumber }}
                                    </a>
                                </h3>

                                <p style="    margin-top: -5px; line-height: 0.1 !important;">
                                    <strong style="color: #f3b6b6; font-family: Manrope; font-style: normal; font-weight: 700; line-height: normal;">
                                        <a href="{{ asset($item->tampilan) }}" style="text-decoration: none; color: black; font-size:12px !important;  ">Video
                                            :
                                            {{ str_limit($item->judul, 36, '...') }}
                                        </a>
                                    </strong>
                                </p>

                                <p class="single_cat_right_content_meta" style="color: #696969; font-family: Manrope; font-style: normal; line-height: normal; font-size:8px !important;">
                                    {{ $item->waktu }}
                                </p>
                            </div>
                            <div class="right_content" style="  border-radius: 10px;   box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7); margin-top:-20px;
                                        ">
                                <img src="{{ asset('foto_upload/' . $item->foto) }}" style=" border-radius: 10px;  " alt="Youtube Thumbnail" />
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>


            </div>
    </section>
    <!-- End berita-->


    <section id="testimonials" class="testimonials" style="margin-top: -100px;  margin-bottom:px;  background: url(assets/img/bg/bgmentor.png);background-size: cover;">
        <div class="section-title">
            <h3 style="margin-top: 10px; font-size:35px !important; color:#000; font-family: Montserrat !important;">Mentor Profesional <br> Class Program
            </h3>
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

    <style>
        #testibaru {
            position: relative;
            z-index: 1;
        }

        #background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .testibaru .pyoutube {
            position: relative;
            width: 80%;
        }

        .yutup {
            background: url('assets/img/bg/yutup.png');
            /* Replace 'your-image-url.jpg' with the actual URL of your image */
            background-size: cover;
            /* Adjust this property based on your needs */
            width: 80%;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            transition: transform 0.5s ease;
            /* min-height: 280px; */
            color: #fff;
            font-family: Manrope;
            font-size: 38px;
            font-style: normal;
            font-weight: 800;
            line-height: normal;
            justify-content: center;
            margin-left: 100px;
            margin-top: 300px;


        }

        .yutup:hover {
            transform: scale(1.1);
            /* Efek zoom pada hover */
        }
        
        .gabung:hover{
            transform: scale(1.1);
 
        }
    </style>



    <section id="testibaru" class="testibaru section-bg" style="margin-bottom:-110px;">
        <div id="background-image">
            <img src="assets/img/bg/bg_biru_setengah.png" alt="" style="height: 40vh; width: 100%; object-fit: cover;    margin-top: 150px;
                ">
        </div>
        <div class="pyoutube" style="margin-top: -600px; ">
            <br>
            <center>
                <div class="">
                    <div class="gabung" style="background: url(assets/img/bg/yutup.png); background-size: cover; position: relative; width: 100%; height: 260px; margin-top: 350px; border-radius: 25px; text-align: center;">

                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="info" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    
                            <h1 style="margin-top: -50px; margin-bottom: 50px; color: #FFF; font-family: Poppins; font-size: 32px; font-style: normal; font-weight: 700; line-height: 65px;">
                                Lebih Dekat dengan Class Program
                            </h1>
                    
                            <style>
                                .btnyt:hover .yt {
                                    background-color: blue;
                                }
                    
                                .bxl-youtube:hover {
                                    color: blue !important;
                                }
                            </style>
                    
                            <a href="https://www.youtube.com/@classprogram" target="_blank" class="btnyt">
                                <div style="display: inline-block; position: relative;">
                                    <div class="yt">
                                        <div style="width: 80px; height: 80px; border-radius: 50%; background-color: white; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);">
                                        </div>
                                        <i style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%); color: red; font-size: 50px;" class="bx bxl-youtube"></i>
                                    </div>
                                </div>
                            </a>
                    
                        </div>
                    </div>
                     
                </div>
            </center>
        </div>
    </section>


    <section id="galeri" class="galeri" style="margin-top: -150px; margin-bottom:-50px;">
        <div class="section-title " style=" font-family: 'Roboto', sans-serif;
                                    text-transform: uppercase;
                                    font-size: 48px;
                                    position: relative;
                                    letter-spacing: 2px;
                                    padding-bottom: 10px;
                                    text-shadow: 1px 2px 2px rgba(0, 0, 0, 0.1);">
            <!-- <h2>About</h2> -->
            <div class="left-align" style=" text-align: left;">
                <h3 style="font-size:40px; color:#000; font-weight: 900;color:black; margin-left: 150px; font-family: 'Manrope'; margin-top:30px; ">
                    <b>Janji Mentor untuk <br> Sobat Insans</b>
                </h3>
                <!-- Isi konten lainnya dapat ditambahkan di sini -->
            </div>
        </div>

        <div class="galeri-container">
            <div class="image-container">
                {{-- <div class="thought-bubble">
                    <div class="arrow-down"></div>
                    <p id="thought-bubble-text">Thought bubble content</p>
                </div> --}}
                <img src="assets/img/clients/cl1.png" alt="Gambar 1" id="gambar" class="gambar-ukuran-tetap">
            </div>
            <div class="caption-container" style="margin-left:-100px; border-radius: 25px;  margin-top:-20px; font-family: 'Manrope', sans-serif; background: url(assets/img/bg/amplop.png);background-size: cover;  box-shadow: 0 4px 8px rgba(0, 0, 0, 1);">
                <ul>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(0)">Menjadi pendengar setiamu</div>
                    </li>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(1)">Mendampingi kamu berproses</div>
                    </li>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(2)">Mengerti keluh kesahmu</div>
                    </li>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(3)">Menjaga privasi</div>
                    </li>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(4)">Memotivasi kamu untuk lebih bahagia
                        </div>
                    </li>
                    <li>
                        <div class="caption caption-1" onclick="changeImage(5)"> Memudahkanmu di waktu sulit</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <style>
        .content-switcher {
            position: absolute;
            left: 50%;
            margin-top: 80px;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;

        }

        .icon {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .non {
            background-color: #3498db;
            /* Warna biru muda untuk ikon tidak aktif */
        }

        .aktif {
            background-color: #1f3a68;
            /* Warna biru tua untuk ikon aktif */
        }
    </style>

    <section id="testibaru" class="testibaru section-bg">
        <div class="profile-container">
            <p style="margin-left: 10px; font-size:40px;">Cerita Sobat Insans</p>
            <p1 style="margin-left: 10px;">Yuk Menjadi Bagian dari Sobat Insans </p1>
            <br>
            <div class="profile-slider" style="margin-left: 10px; height:35% !important;">
                <div id="profile1" class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-2.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px">Yohanes Hernandes SYohan</h1>
                            <p style="font-size: 15px;">" Dengan adanya Mentor, hal-hal yang tidak tersampaikan ke
                                dosen pembimbing jadi ngalir
                                gitu aja banyak ide muncul."</p>
                        </div>
                    </div>
                </div>

                <div id="profile2" class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-1.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px;">ELouis Patric</h1>
                            <p style="font-size: 15px;">" Gan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen
                                pembimbing jadi ngalir
                                gitu aja banyak ide muncul."
                            </p>
                        </div>
                        <!-- Tambahkan elemen tambahan di sini -->
                    </div>
                </div>

                <div id="profile3" class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px;">Adinda Cahayani Supriyanto</h1>
                            <p style="font-size: 15px;">" Saya sangat berterima kasih pada BSO karena sudah menyediakan
                                program bimbingan
                                skripsi online yang berkualitas dan juga ramah dikantong."</p>
                        </div>
                    </div>
                </div>

                <!-- lanjutan -->
                <div class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px;">Yola</h1>
                            <p style="font-size: 15px;">"Saya merasa puas dan cocok dengan BSO Class Program. Kaka
                                Mentornya baik dan tegas. Saya selalu dikoreksi positif secara baik oleh kaka Mentor. BSO bagus sekali dan recommended
                                untuk Mahasiswa."</p>
                        </div>
                    </div>
                </div>
                <div class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px;">Hildan Ramdani</h1>
                            <p style="font-size: 15px;">"Halo Kak Dewi. Saya rutin ikut bimbingan, seminggu 3 kali.
                                Dalam proses bimbingan, jujur saya sangat terbantu. Banyak hal yang saya tanyakan dan dapat terjawab oleh Mentor saya."</p>
                        </div>
                    </div>
                </div>
                <div class="profile" style="margin-right: 0% !important">
                    <div class="gabung">
                        <img class="profile-image" src="assets/img/team/team-3.jpg" alt="Gambar Profil" style="width: 80px !important; height:auto; margin-top:70px;">
                        <!-- Ganti dengan path gambar profil Anda -->
                        <div class="profile-info">
                            <h1 style="font-size:20px; margin-top:50px;">Azizah Nurul</h1>
                            <p style="font-size: 15px;">"Saya puas dengan bimbingannya kak. Awalnya saya tidak
                                mengerti tahapan skripsi, ketika mulai bimbingan, saya jadi mengerti hal-hal penting dan tahapan dalam pembuatan judul
                                serta penentuan . . ."</p>
                        </div>
                    </div>
                </div>
                <div class="content-switcher">
                    <div class="content-switcher" style="margin-top: px !importnat;">
                        <div class="icon non"></div>
                        <div class="icon aktif"></div>
                        <div class="icon non"></div>
                    </div>
                </div>
            </div>

            <div class="profile-navigation">
                <button id="prevProfile">
                    {{-- << /button> --}}
                    <button id="nextProfile">></button>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Ambil elemen-elemen ikon
                var icons = document.querySelectorAll(".content-switcher .icon");

                // Ambil elemen-elemen profil
                var profiles = document.querySelectorAll(".profile");

                // Tambahkan event listener untuk setiap ikon
                icons.forEach(function(icon, index) {
                    icon.addEventListener("click", function() {
                        // Hapus kelas aktif dari semua ikon
                        icons.forEach(function(i) {
                            i.classList.remove("active");
                        });

                        // Tambahkan kelas aktif ke ikon yang diklik
                        icon.classList.add("active");

                        // Sembunyikan semua profil
                        profiles.forEach(function(profile) {
                            profile.style.display = "none";
                        });

                        // Tampilkan profil yang sesuai dengan ikon yang diklik
                        profiles[index].style.display = "block";
                    });
                });
            });
        </script>

    </section>

    <section id="konsultasi" class="konsultasi section-bg" style="font-family: 'Manrope', sans-serif; margin-top: -90px; margin-bottom: 50px; background: url(assets/img/bg/alurin.png); background-size: cover;">
        <style>
            .member-info h4,
            .member-info p {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
                /* Atur sesuai kebutuhan */
                margin-top: 1px;
                /* Atur sesuai kebutuhan */
            }
        </style>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 style="text-align: center; margin-top: -20px;">Alur Bimbingan</h3>
                <br>
                <div class="team-slider">
                    <div class="row" id="team-members">
                        <!-- Anggota Tim 1 -->
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200" style="margin-left:-10px !important;">
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <img src="assets/img/bg/cuate.png" class="img-fluid" style="width: 90%; margin-top:36px;" alt="">
                                </div>
                                <div class="member-info" style="margin-top:10px; text-align: center;">
                                    <h4 style="margin-bottom: -10px; margin-top:50px;">1. Pilih Program Bimbingan </h4>
                                    <p style="width: 100%; margin-top:1px;line-height: 1.5;">Memilih paket bimbingan yang sesuai dengan kebutuhanmu</p>
                                </div>
                            </div>
                        </div>

                        <!-- Anggota Tim 2 -->
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <img src="assets/img/bg/bro.png" class="img-fluid" style="width: 90%; margin-top:36px;" alt="">
                                </div>
                                <div class="member-info" style="text-align: center;">
                                    <h4 style="margin-bottom: -10px;">2. Lakukan Pendaftaran </h4>
                                    <p style="width: 100%; margin-top:1px; line-height: 1.5;">Mengisi dan melengkapi data diri secara lengkap dan benar</p>
                                </div>
                            </div>
                        </div>

                        <!-- Anggota Tim 3 -->
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <img src="assets/img/bg/cuatei.png" class="img-fluid" style="width: 100%; margin-top:36px;" alt="">
                                </div>
                                <div class="member-info" style="text-align: center;">
                                    <h4 style="margin-bottom: -10px; margin-top:80px;">3. Selesaikan Pembayaran</h4>
                                    <p style="width: 100%; margin-top:1px;line-height: 1.5;">Mengirim bukti pembayaran dan konfirmasi kepada Minma </p>
                                </div>
                            </div>
                        </div>

                        <!-- Anggota Tim 4 -->
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300" style="margin-left:10px !important;">
                            <div class="konsultasi-content">
                                <div class="member-img">
                                    <img src="assets/img/bg/rafiki.png" class="img-fluid" style="width: 100%;" alt="">
                                </div>
                                <div class="member-info" style="text-align: center;">
                                    <h4 style="margin-bottom: -10px; margin-top:100px;">4. Mulai Bimbingan </h4>
                                    <p style="width: 100%; margin-top:1px;line-height: 1.5;">Kamu siap bimbingan bersama Mentor Class Program </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ======= Frequently Asked Questions Section ======= -->


    <section id="faq" class="faq section-bg">
        <div class=" background-faq">
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-xl-7" style="    margin-bottom: -10px;
                ">
                    <div class="section-title">
                        <h3 style="font-size: 30px; margin-top:-20px; margin-left:-190px; margin-bottom:-30px;">Paling Sering Ditanyakan
                        </h3>
                    </div>
                    <div id="accordion" class="myaccordion" style="">
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <p style="color: #000;">Apa yang dimaksud dengan Sobat Insans?</p>
                                        <span class="fa-stack fa-sm">
                                            <i class="fas fa-circle fa-stack-2x" style="color: rgb(9,50,111) !important;"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p><b>Sobat Insans</b> adalah panggilan bagi calon peserta/peserta yang akan dan sedang
                                        mengikuti pembelajaran di <b>Class Program</b>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p style="color: #000;">Siapa saja yang bisa belajar di Class Program?</p>
                                        <span class="fa-stack fa-2x">
                                            <i class="fas fa-circle fa-stack-2x" style="color: rgb(9,50,111) !important;"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p><b>Class Program</b> terbuka untuk para mahasiswa yang ingin belajar lebih mendalam
                                        mengenai mata kuliah jurusannya dan bimbingan skripsi mulai dari pembuatan judul
                                        sampai simulasi sidang skripsi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p style="color: #000;">Siapa Mentor yang ada di Class Program?</p>
                                        <span class="fa-stack fa-2x">
                                            <i class="fas fa-circle fa-stack-2x" style="color: rgb(9,50,111) !important;"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Mentor di <b>Class Program</b> berasal dari lulusan-lulusan top kampus yang
                                        berpengalaman dan ahli di bidangnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);">
                            <div class="card-header" id="heading4">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <p style="color: #000;">Bagaimana jadwal bimbingan di Class Program?</p>
                                        <span class="fa-stack fa-2x">
                                            <i class="fas fa-circle fa-stack-2x" style="color: rgb(9,50,111) !important;"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sistem belajar <b>Class Program</b> menggunakan sistem pendampingan yang sepenuhnya
                                        dilaksanakan secara online dengan metode Live teaching dan group sharing. Proses
                                        belajar turut dilengkapi berbagai fasilitas pendukung pembelajaran seperti flash
                                        card, video Pembelajaran, dan lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);">
                            <div class="card-header" id="heading5">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        <p style="color: #000;">Apakah di Class Program bisa ganti Mentor?</p>
                                        <span class="fa-stack fa-2x">
                                            <i class="fas fa-circle fa-stack-2x" style="color: rgb(9,50,111) !important;"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    <p><b>Sobat Insans</b> diperbolehkan mengajukan pergantian Mentor apabila terdapat kendala
                                        dan masih ada Mentor yang tersedia.</p>
                                </div>
                            </div>
                        </div>
                        <!--          <a href="#pricing" style="width: 100%; height: auto; position: relative; display: inline-block; text-decoration: none;">
                                                    <div style="margin-left:10px; width: 200px; height: 50px; left: 0px; top: 0px; position: absolute; background: #0849B2;  rgba(0, 0, 0, 0.20); border-radius: 20.32px"></div>
                                                    <div style="left: 30.48px; margin-top:-5px; top: 13.21px; position: absolute; color: white; font-size: 20px; font-family: Raleway; font-weight: 700; word-wrap: break-word">Baca selengkapnya</div>
                                                </a> -->
                    </div>
                </div>
                <div class="col-xl-5" style=" posison: absolute;">
                    <div class="image-container" style="margin-top: -550px; posison: relative;">
                        <img src="assets/img/bg/faq3gbr.png" alt="Deskripsi gambar" class="img-fluid-bos" style=" margin-top: -550px;  width: 400px; height: auto;">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <style>
        #gambarkampus .container img:hover {
            transform: translateY(-20px);
            /* Sesuaikan nilai untuk efek memantul ke atas */
        }

        @keyframes marqueeLeft {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes marqueeRight {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }
    </style>
    <section id="gambarkampus" class="gambarkampus" style="margin-top:-80px;">
        <div class="section-title">
            <h3 style="font-size: 30px;">Kami Telah Membimbing</h3>
            <h3 style="font-size: 30px; margin-top:-5px; margin-bottom:5px;"> Mahasiswa dari Berbagai Kampus</h3>
        </div>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <img src="assets/img/kampus/ui.png" alt="Gambar 1" class="image">
                <img src="assets/img/kampus/um.png" alt="Gambar 2" class="image">
                <img src="assets/img/kampus/unnes.png" alt="Gambar 3" class="image">
                <img src="assets/img/kampus/uny.png" alt="Gambar 4" class="image">
            </div>
            <div class="row">
                <img src="assets/img/kampus/unj.png" alt="Gambar 7" class="image">
                <img src="assets/img/kampus/ub.png" alt="Gambar 8" class="image">
                <img src="assets/img/kampus/ugm.png" alt="Gambar 5" class="image">
                <img src="assets/img/kampus/itb.png" alt="Gambar 6" class="image">
            </div>
            <div class="row">
                <img src="assets/img/kampus/uns.png" alt="Gambar 10" class="image">
                <img src="assets/img/kampus/ut.png" alt="Gambar 11" class="image">
                <img src="assets/img/kampus/unm.png" alt="Gambar 12" class="image">
                <img src="assets/img/kampus/unesa.png" alt="Gambar 9" class="image">
            </div>
            <div class="row">
                <img src="assets/img/kampus/pajajaran.png" alt="Gambar 10" class="image">
                <img src="assets/img/kampus/undip.png" alt="Gambar 11" class="image">
                <img src="assets/img/kampus/unsri.png" alt="Gambar 12" class="image">
                <img src="assets/img/kampus/akhir.png" alt="Gambar 9" class="image">
            </div>
        </div>
    </section>

    {{-- <div id="preloader"></div> --}}
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
    <script>
        const thoughtBubbleText = document.getElementById("thought-bubble-text");
        const imageElement = document.getElementById("gambar");
        const captionElements = document.getElementsByClassName("caption-1");

        const captions = [
            "Menjadi pendengar setiamu",
            "Mendampingi kamu berproses",
            "Mengerti keluh kesahmu",
            "Menjaga Privasi",
            "Memotivasi kamu untuk lebih bahagia",
            "Memudahkanmu di waktu sulit",
        ];

        const images = [
            "assets/img/clients/cl1.png",
            "assets/img/clients/cl2.png",
            "assets/img/clients/cl3.png",
            "assets/img/clients/cl4.png",
            "assets/img/clients/cl5.png",
            "assets/img/clients/cl6.png",
        ];

        const imagesElements = document.getElementsByClassName('gambar-ukuran-tetap');

        for (let i = 0; i < imagesElements.length; i++) {
            imagesElements[i].style.width = '200px';
            imagesElements[i].style.height = '170px';
            imagesElements[i].style.marginTop = '10px';
        }



        const imageTexts = [
            "Lega banget bisa curhatin masalah skripsiku.",
            "Tidak merasa sendiri saat terbebani revisi",
            "Jarang orang mengerti masalah mahasiswa akhir. Padahal mereka tidak tahu bagaimana sulitnya mengerjakan skripsi",
            "Aku yang pemalu dan introvert sering takut bercerita atau membagikan masalah tapi di sini aku merasa aman",
            "Sebelumnya suka murung karena sulit nemuin judul, tapi ternyata aku bisa lebih cepat sidang skripsinya",
            "Sudah nggak pernah bingung ngerjain skripsi, karena semua kesulitanku dibantuin",
        ];



        let currentImageIndex = 0;

        function changeImage(index) {
            if (currentImageIndex !== index) {
                imageElement.classList.add("fadeOut");
                setTimeout(() => {
                    currentImageIndex = index;
                    imageElement.src = images[index];
                    thoughtBubbleText.textContent = imageTexts[index];
                    imageElement.classList.remove("fadeOut");
                    imageElement.classList.add("fadeIn");
                    updateCaptionStyle();
                }, 500);
                updateCaptionStyle();
            }
        }

        for (let i = 0; i < captionElements.length; i++) {
            captionElements[i].addEventListener("click", function() {
                changeImage(i);
            });
        }

        function updateCaptionStyle() {
            for (let i = 0; i < captionElements.length; i++) {
                if (i === currentImageIndex) {
                    captionElements[i].classList.add("caption-bold");
                } else {
                    captionElements[i].classList.remove("caption-bold");
                }
            }
            setTimeout(() => {
                imageElement.classList.remove("fadeIn");
            }, 500);
        }

        // Inisialisasi gambar dan teks pertama
        changeImage(0);

        // Fungsi untuk mengganti gambar dan teks secara otomatis setiap 5 detik
        function autoChangeImage() {
            const nextIndex = (currentImageIndex + 1) % images.length;
            changeImage(nextIndex);
        }

        setInterval(autoChangeImage, 5000);





        const content1Btn = document.getElementById('content1Btn');
        const content2Btn = document.getElementById('content2Btn');
        const content3Btn = document.getElementById('content3Btn');
        const content4Btn = document.getElementById('content4Btn');
        const content1 = document.getElementById('content1');
        const content2 = document.getElementById('content2');

        // Initialize the active state on page load
        let activeButton = content1Btn;

        function showContent(index) {
            if (index === 0) {
                content1.style.display = 'block';
                content2.style.display = 'none';
            } else if (index === 1) {
                content1.style.display = 'none';
                content2.style.display = 'block';
            }

            // Remove "active" class from the previously active button
            activeButton.classList.remove('active');

            // Determine the active button based on the index
            if (index === 0) {
                content1Btn.classList.add('active');
                activeButton = content1Btn;
            } else if (index === 1) {
                content4Btn.classList.add('active');
                activeButton = content4Btn;
            }
        }

        content1Btn.addEventListener('click', () => {
            showContent(0);
        });

        content2Btn.addEventListener('click', () => {
            showContent(1);
        });

        content3Btn.addEventListener('click', () => {
            showContent(0);
            activeButton = content3Btn; // Update activeButton when content3Btn is clicked
        });

        content4Btn.addEventListener('click', () => {
            showContent(1);
            activeButton = content4Btn; // Update activeButton when content4Btn is clicked
        });

        // Initialize active state when the page loads
        showContent(0);






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
                answer: "Kelas Tugas Kuliah (KTK) diperuntukkan bagi sobat yang memerlukan bimbingan seputar tugas umum perkuliahan dengan sistem kenaikan kelas. Paket basic cocok untuk sobat yang ingin memahami tugas seputar penyusunan makalah, footnote dan endnote, jurnal, esai hingga materi karya tulis ilmiah yang umumnya ditemui pada semester 1-4. Sedangkan paket excellent diperuntukkan bagi sobat yang ingin memahami materi seputar metodologi penelitian dan skripsi yang umumnya ditemui pada semester 5 keatas. Bimbingan Mata Kuliah Jurusan (BMJ) cocok untuk sobat yang ingin mendalami materi mata kuliah yang ada di jurusan masing-masing dengan sistem pendampingan. Paket Bronze untuk semester 1-2, Paket emerald untuk semester 3-4 dan paket diamond untuk semester 5-6.Bimbingan Skripsi Online (BSO) diperuntukkan bagi sobat yang sedang menyusun tugas akhir atau skripsi dengan sistem Mentoring. Paket Silver membimbing dalam pembuatan judul skripsi, paket gold membimbing dalam pembuatan proposal skripsi, paket platinum membimbing hasil dan pembahasan skripsi, dan paket diamond membimbing simulasi sempro atau sidang skripsi.Kelas Persiapan Karir (KPK) diperuntukkan bagi sobat yang ingin mengasah soft skill dan hard skill untuk terjun di dunia kerja."
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
            faqList.innerHTML = '';

            const maxFAQsToShow = displayAll ? faqData.length : 5;

            faqData.slice(0, maxFAQsToShow).forEach((faq, index) => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
            <div data-bs-toggle="collapse" class="collapsed question" data-bs-target="#faq${index + 1}">${faq.question}</div>
            <div id="faq${index + 1}" class="collapse" data-bs-parent="#faq-list">
                <p>${faq.answer}</p>
            </div>
        `;
                faqList.appendChild(listItem);
            });

            // Menyembunyikan tombol "Baca Selengkapnya" jika semua FAQ ditampilkan
            showMoreBtn.style.display = faqData.length <= 5 ? 'none' : 'block';

            if (displayAll) {
                showMoreBtn.textContent = 'Tampilkan Lebih Sedikit';
            } else {
                showMoreBtn.textContent = 'Baca Selengkapnya';
            }
        }

        showMoreBtn.addEventListener('click', () => {
            displayAll = !displayAll;
            displayFAQ();
        });

        // Memuat FAQ awal saat halaman dimuat
        displayFAQ();
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

        // var scrollableColumn1 = document.querySelector('#scrollableColumn1');
        // var scrollAmount = 201; // Sesuaikan dengan lebar elemen single_left_coloum

        // function scrollLeft() {
        //     scrollableColumn1.scrollLeft -= scrollAmount;
        // }

        // function scrollRight1() {
        //     scrollableColumn1.scrollLeft += scrollAmount;
        // }

        // var scrollableColumn = document.querySelector('#scrollableColumn');
        // var scrollAmount = 201; // Sesuaikan dengan lebar elemen single_left_coloum

        // function scrollLeft(scrollableElement, scrollAmount) {
        //     scrollableElement.scrollLeft -= scrollAmount;
        // }

        // function scrollRight() {
        //     scrollableColumn.scrollLeft += scrollAmount;

        //     if (scrollableColumn.scrollLeft >= scrollableColumn.scrollWidth - scrollableColumn.clientWidth) {
        //         // Konten mencapai akhir, kembali ke awal
        //         scrollableColumn.scrollTo({
        //             left: 0,
        //             behavior: 'smooth'
        //         });
        //     }
        // }


        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target)
                .prev()
                .find("i:last-child")
                .toggleClass("fa-minus fa-plus");
        })
    </script>
    <script>
        function customScrollLeft() {
            // Assuming you have a container with the ID 'contentContainer'
            var scrollableColumn = document.getElementById('scrollableColumn');
            scrollableColumn.scrollLeft -= 100; // Adjust the value based on your needs
        }

        function scrollLeft() {
            document.getElementById('scrollableColumn').scrollLeft -= 100;
        }

        function scrollRight() {
            document.getElementById('scrollableColumn').scrollLeft += 100;
        }

        function scrollLeft1() {
            document.getElementById('scrollableColumn1').scrollLeft -= 200;
        }

        function scrollRight1() {
            document.getElementById('scrollableColumn1').scrollLeft += 200;
        }
    </script>

    {{-- Animasi angka --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script> --}}
</body>

</html>
@endsection
