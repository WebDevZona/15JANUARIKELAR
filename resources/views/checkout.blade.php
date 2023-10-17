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
   <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
    <style>
       /* Gaya untuk header, footer, dan body */
/* Gaya untuk header, footer, dan body */
/* Gaya untuk header, footer, dan body */
.hallobeli {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Gaya untuk container checkout */
.checkout-container {
    max-width: 800px;
    width: 100%;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* Gaya untuk header checkout */
.checkout-header {
    background-color: #170197;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.checkout-header h1 {
    margin: 0;
    padding: 0;
    font-size: 24px;
}

/* Gaya untuk body checkout */
.checkout-body {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

/* Gaya untuk rincian produk */
.product-summary {
    flex: 1;
    padding: 10px;
}

.product-summary h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.product-item {
    display: flex;
    margin-bottom: 20px;
}

.product-item img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 20px;
}

.product-details h3 {
    font-size: 18px;
    margin: 0;
    color: #333;
}

.product-details p {
    margin: 5px 0;
    color: #777;
}

/* Gaya untuk informasi pembeli */
.customer-info {
    flex: 1;
    padding: 10px;
}

.customer-info h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    display: block;
}

input[type="text"],
input[type="email"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #170197;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

/* Gaya tambahan sesuai kebutuhan */

/* Gaya tambahan sesuai kebutuhan */

    </style>
    <title></title>
</head>
@extends('layout.header')
@section('content')
<body>
    <div class="pesanan-checkout">
        <div class="order-header">
            <h3>Detail Pesanan</h3>
        </div>
        <div class="order-details">
            <div class="item">
                <span id="namaProduk">Program: </span>
                <span id="paket">Paket: </span>
                <span id="harga">Harga: $0.00</span>
                <span id="discount"></span>
                <span id="totalHarga">Total Harga: $0.00</span>
            </div>
        </div>
    </div>
    <script>
        // Mendapatkan parameter dari URL
        var urlParams = new URLSearchParams(window.location.search);
        var namaProduk = urlParams.get("namaProduk");
        var paket = urlParams.get("paket");
        var harga = urlParams.get("harga");
        var discount = urlParams.get("discount");
    
        // Menampilkan data pesanan dalam elemen-elemen HTML
        document.getElementById("namaProduk").textContent = "Program: " + namaProduk;
        document.getElementById("paket").textContent = "Paket: " + paket;
        document.getElementById("harga").textContent = "Harga: $" + parseFloat(harga).toFixed(2);
    
        if (discount) {
            document.getElementById("discount").textContent = "Discount: " + discount + "%";
            var totalHarga = parseFloat(harga) - (parseFloat(harga) * (parseFloat(discount) / 100));
            document.getElementById("totalHarga").textContent = "Total Harga: $" + totalHarga.toFixed(2);
        } else {
            document.getElementById("discount").style.display = "none";
            document.getElementById("totalHarga").textContent = "Total Harga: $" + parseFloat(harga).toFixed(2);
        }
    </script>
</body>
</html>

@endsection