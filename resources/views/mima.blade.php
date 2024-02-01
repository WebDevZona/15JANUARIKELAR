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
    <section id="hero" class="d-flex align-items-center" style="background: url(assets/img/bg/Minma.png); background-size: cover; margin-top: -30px; margin-left: -10px; margin-right: 0.1px; height: 100vh;">
        <style>
            .wa {
                color: #fff;
            }
        </style>
        <div class="wa" style="text-align: center; width: 100%; margin-top:-100px; color:FFF;">
            <div style="margin-left: 30%; margin-top: -70px; margin-bottom: -450px; transform: translateX(-50%);">
                <p class="mt-4" style="font-size: 30px; margin-bottom: 0px; color:FFF;"><b>Silahkan Konfirmasi</b> <br> Pembayaran Melalui Minma </p>
                <a href="javascript:void(0);" onclick="openWhatsApp()" style="text-decoration: none; margin-top:30px;">
                    <div style="width: 300px; padding: 10px; margin-top:30px; background: #FFF; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 50px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div style="letter-spacing: 1px; width: 500px; color: blue; font-size: 20px; font-family: Montserrat; font-weight: 600; line-height: 37.50px; word-wrap: break-word">
                            Pesan Sekarang
                            <img style="width: 50px;" src="assets/img/logo/wa2.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <script>
            function openWhatsApp() {
                var message =
                    "Hallo Minma. Saya mau tanya-tanya nih mengenai Program Kelas di Class Program."; // Pesan yang ingin Anda kirim
                var phoneNumber = "6281234361959"; // Nomor WhatsApp yang dituju (tanpa tanda '+')

                // Membuat URL untuk mengarahkan pengguna ke halaman WhatsApp
                var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

                window.open(whatsappURL, "_blank");
            }
        </script>
    </section>

    <!-- <div class="row ml-5 mr-5 mt-5 mb-5">
        <div class="col-sm-6">
            <div class="">
                <div class="card-body">
                    <img src="assets/img/bg/uploadp.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="col-sm-6">buktipembayaran.png
            <div class="">
                <div class="card-body">
                    <img src="assets/img/bg/bcaaa.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>
@endsection