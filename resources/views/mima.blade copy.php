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

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            /* Set your preferred background color */
        }

        .custom-backgroundsss {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Adjust the height as needed */
        }

        .maintenance-container {
            text-align: center;
            background-color: #007bff;
            /* Set your preferred background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }

        h1 {
            color: white;
            /* Set your preferred text color */
        }

        h3 {
            color: white;
            /* Set your preferred text color */
        }

        .btn-primary {
            background-color: #002042;
            /* Set your preferred button color */
            color: #ffffff;
            /* Set your preferred button text color */
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Set your preferred button hover color */
        }
    </style>
</head>
@extends('layout.header')
@section('content')

<body>
    <div class="custom-backgroundsss">
        <div class="maintenance-container">
            <h1 class="mt-4">Silahkan Konfirmasi Pembayan Kepada Minma</h1>
            <a href="javascript:void(0);" class="btn btn-primary mt-3" onclick="openWhatsApp()">Minma</a>

        </div>
    </div>
</body>

</html>
@endsection
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
