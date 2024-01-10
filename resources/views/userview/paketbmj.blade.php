<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Your existing styles and scripts -->
    <link href="../../../../assets/img/logo/logo2.png" rel="icon">
    <link href="../../../../assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slenco:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='../../../../https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

</head>
<style>
    /* Styling for the scrollbar container */
    .scrollable-container {
        max-height: 180px;
        /* Set your desired height */
        overflow-y: auto;

    }

    /* Styling for the scrollbar track */
    .scrollable-container::-webkit-scrollbar {
        width: 8px;
        /* Set the width of the scrollbar */
    }
</style>
<!-- CSS OPSI2 -->
<!-- <style>
    /* Styling for the scrollbar container */
.scrollable-container {
    max-height: 180px; /* Set your desired height */
    overflow-y: auto; /* Enable vertical scroll */
    overflow-x: hidden; /* Disable horizontal scroll */
    white-space: nowrap; /* Prevent text wrapping */
}

/* Styling for the scrollbar track */
.scrollable-container::-webkit-scrollbar {
    width: 8px; /* Set the width of the scrollbar */
}

/* Styling for the scrollbar thumb (the draggable part) */
.scrollable-container::-webkit-scrollbar-thumb {
    background-color: #1b5cc5; /* Set the color of the thumb */
    border-radius: 4px; /* Set the border-radius for a rounded thumb */
}

/* Styling for the scrollbar buttons */
.scrollable-container::-webkit-scrollbar-button {
    display: none; /* Hide the scrollbar buttons */
}

/* Add any additional styling as needed */
.deskripsi {
    /* Adjust styling of your list items */
    padding: 10px; /* Add padding for better spacing */
}

/* Style adjustments for list items */
.deskripsi li {
    align-items: flex-start;
    margin-left: -22px;
}

/* Styling for the checkmark icon */
.deskripsi li i {
    color: #1b5cc5;
    margin-top: 5px;
}

</style> -->

<body>
    @extends('layouts.master')
    @section('content')
    <section class="content card" style="padding: 10px 10px 20px 20px; margin-top: 30px; overflow-x: auto;">
        <div class="box">
            @if(session('sukses'))
            <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
                <h5><i class="fas fa-check"></i> Sukses :</h5>
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('warning'))
            <div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
                <h5><i class="fas fa-info"></i> Informasi :</h5>
                {{session('warning')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if ($errors->any())
            <div class="callout callout-danger alert alert-danger alert-dismissible fade show">
                <h5><i class="fas fa-exclamation-triangle"></i> Peringatan :</h5>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <h4><i class="nav-icon fas fa-child my-0 btn-sm-1"></i> BMJ Paket Hemat</h3>
                        <hr>
                </div>
            </div>


            <section>

            <div class="row row-cols-1 row-cols-md-3 g-3 ml-2 mr-2">
                    <style>
                        /* Main table styling */
                        .table-container {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        /* Header row styling */
                        .table-container thead th {
                            text-align: left;
                            padding: 10px;
                        }

                        /* Data row styling */
                        .table-container tbody td {
                            padding: 8px;
                            border-top: 1px solid #ddd;
                            /* Optional: Add border between rows */
                        }

                        /* Additional styling for specific columns */
                        .table-container tbody th {
                            width: 120px;
                            /* Adjust the width of the first column if needed */
                        }

                        /* Styling for the price span */
                        .blue-text {
                            color: #1b5cc5;
                            font-weight: bold;
                        }

                        /* Adjustments for card text */
                        .card-text {
                            margin-top: 10px;
                        }

                        /* Remove default margin for the card title */
                        .card-body h5 {
                            margin-bottom: 0;
                        }

                        th.column-header {
                            vertical-align: top;
                            padding-bottom: 20px;
                        }

                        span.header-text {
                            margin-left: 40px;
                        }

                        span.blue-text {
                            color: #1b5cc5;
                            font-weight: bold;
                        }
                    </style>
                    <div class="col" style="margin-top: 20px;">
                        <div class="card h-100" style="border-radius: 25px;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope="col">Reguler
                                                    <br><span class="green-text">Silver</span>
                                                </th>
                                                <th scope="col">
                                                    <span style="margin-left: 20px;">Harga</span>
                                                    <br>
                                                    <span class="blue-text" style="margin-left: 20px;">Rp 47.000</span>
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
                                <div class="scrollable-container">
                                    <ul class="deskripsi" style="list-style: none;">
                                        {{-- <i class="fa-solid fa-check"></i> --}}
                                        <strong> Materi: </strong>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;margin-left: -22px;"></i> Topik penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Variabel penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Objek penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Judul penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Rumusan masalah penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Dasar teori berdasarkan variabel yang digunakan.</li>
                                    </ul>
                                </div>
                                </p>
                            </div>
                            <div class="card-footer text-center" style="border-radius: 25px;">
                                <a href="/pembelian/regulersilver" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>


                    <div class="col" style="margin-top: 20px;">
                        <div class="card h-100" style="border-radius: 25px;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope="col">Reguler
                                                    <br><span class="green-text">Gold</span>
                                                </th>
                                                <th scope="col">
                                                    <span style="margin-left: 20px;">Harga</span>
                                                    <br>
                                                    <span class="blue-text" style="margin-left: 20px;">Rp 66.000</span>
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
                                <div class="scrollable-container">
                                    <ul class="deskripsi" style="list-style: none;">
                                        {{-- <i class="fa-solid fa-check"></i> --}}
                                        <strong> Materi: </strong>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Latar belakang.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Identifikasi masalah. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Rumusan masalah. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Tujuan dan manfaat penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teori dasar.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Kerangka konseptual.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Tinjauan literatur.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Riset-riset terkait.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Kerangka konsep.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Hipotesis penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Metode penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Populasi dan sampel.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Variabel-variabel penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik pengumpulan data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik analisis data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik validasi data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Prosedur penelitian.</li>
                                    </ul>
                                </div>
                                </p>
                            </div>
                            <div class="card-footer text-center" style="border-radius: 25px;">
                                <a href="/pembelian/regulersilver" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 20px;">
                        <div class="card h-100" style="border-radius: 25px;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope="col">Reguler
                                                    <br><span class="green-text">Gold</span>
                                                </th>
                                                <th scope="col">
                                                    <span style="margin-left: 20px;">Harga</span>
                                                    <br>
                                                    <span class="blue-text" style="margin-left: 20px;">Rp 66.000</span>
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
                                <div class="scrollable-container">
                                    <ul class="deskripsi" style="list-style: none;">
                                        {{-- <i class="fa-solid fa-check"></i> --}}
                                        <strong> Materi: </strong>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Latar belakang.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Identifikasi masalah. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px; "></i> Rumusan masalah. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Tujuan dan manfaat penelitian. </li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teori dasar.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Kerangka konseptual.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Tinjauan literatur.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Riset-riset terkait.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Kerangka konsep.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Hipotesis penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Metode penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Populasi dan sampel.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Variabel-variabel penelitian.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik pengumpulan data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik analisis data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Teknik validasi data.</li>
                                        <li style="align-items:flex-start;"><i class="fa-solid fa-circle-check" style="color: #1b5cc5; margin-top:5px; margin-left: -22px;"></i> Prosedur penelitian.</li>
                                    </ul>
                                </div>
                                </p>
                            </div>
                            <div class="card-footer text-center" style="border-radius: 25px;">
                                <a href="/pembelian/regulersilver" class="btn btn-primary" style="border-radius: 25px; align-content: center;">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>


                </div>

            </section>

        </div>

        </div>
    </section>

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
            "assets/img/clients/client-1.png",
            "assets/img/clients/client-2.png",
            "assets/img/clients/client-3.png",
            "assets/img/clients/client-4.png",
            "assets/img/clients/client-5.png",
            "assets/img/clients/client-6.png",
        ];

        const imagesElements = document.getElementsByClassName('gambar-ukuran-tetap');

        for (let i = 0; i < imagesElements.length; i++) {
            imagesElements[i].style.width = '300px';
            imagesElements[i].style.height = '200px';
            imagesElements[i].style.marginTop = '50px';
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
        function scrollLeft() {
            document.getElementById('scrollableColumn').scrollLeft -= 200;
        }

        function scrollRight() {
            document.getElementById('scrollableColumn').scrollLeft += 200;
        }

        function scrollLeft1() {
            document.getElementById('scrollableColumn1').scrollLeft -= 200;
        }

        function scrollRight1() {
            document.getElementById('scrollableColumn1').scrollLeft += 200;
        }
    </script>

    {{-- Animasi angka --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
@endsection
