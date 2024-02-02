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
    <style>
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

    <div class="card ml-5 mt-5 mb-5" style=" width: 50rem; height: 50rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 20px 0px 20px 0px; border-top: 5px solid #1b5cc5; border-bottom: 5px solid #1b5cc5;">
        <div class="card-body">
            <h1 class="card-title" style="margin-top:10px; color: var(--Midnight-Blue-950, #09326F); font-weight: 800; text-align: center;">Unggah Bukti Pembayaran</h1>
            <div class="row" style="margin-top:60px;">
                <div class="col-sm-6">
                    <style>
                        .payment-instruction {
                            background-color: #f8f8f8;
                            padding: 15px;
                            border-radius: 8px;
                            margin-top: 10px;
                        }

                        .product-name {
                            font-weight: bold;
                            color: #009688;
                            /* warna menarik lainnya */
                        }

                        .total-price {
                            font-weight: bold;
                            color: #e91e63;
                            /* warna menarik lainnya */
                        }
                    </style>
                    <div class="">
                        <div class="card-body">
                            <h4 class="card-title" style="margin-top: 10px; color: var(--Midnight-Blue-950, #09326F); font-weight: 800; text-align: left;">
                                Hallo, {{ auth()->user()->name }}
                            </h4>
                            <div class="payment-instruction">
                                <h5>
                                    Silakan lakukan pembayaran untuk paket <span class="product-name">{{ $products->first()->nama_produk }}</span>
                                    dengan total harga <span class="total-price">{{ number_format($products->first()->harga) }}</span>
                                    ke nomor rekening di samping.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="">
                        <div class="card-body" style="border-top: 2px dashed #1b5cc5; border-bottom: 2px dashed #1b5cc5;">
                            <table class="table table-hover" style="font-size:14px; color: #000; font-family: Roboto;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-weight: bold;">
                                            <b>
                                                <h6>Recipient</h6>
                                            </b>
                                        </td>
                                        <td style="text-align: left;">
                                            <b>Arif Muhammad</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-weight: bold;">
                                            <b>
                                                <h6>Bank Destination</h6>
                                            </b>
                                        </td>
                                        <td style="text-align: left;"><b>BCA</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-weight: bold;">
                                            <b>
                                                <h6>Account Number</h6>
                                            </b>
                                        </td>
                                        <td style="text-align: left;"><b>8930462013</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-weight: bold;">
                                            <b>
                                                <h6>Transaction ID</h6>
                                            </b>
                                        </td>
                                        <td style="text-align: left;"><b>2435GASFD7523</b></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- upload -->
            <form class="row g-3" method="POST" action="{{ route('submit.bukti') }}" enctype="multipart/form-data">
                @csrf
                <div class="card text-center" style="margin-top: 50px; border-style: dashed;" ondragover="allowDrop(event)" ondrop="handleDrop(event)">
                    <style>
                        .form-control {}

                        .existing-content {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                        }
                    </style>



                    <div class="card-body">
                        <!-- Existing content container -->
                        <div class="card-container" ondragover="allowDrop(event)" ondrop="handleDrop(event)">
                            <div class="existing-content">
                                <img src="assets/img/logo/Upload.png" style="width: 100px;" alt="">
                                <h5 class="card-title">Upload </h5>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="foto" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                <br>
                                <p class="card-text">Supported formats: JPEG, PNG, JPG</p>
                            </div>
                        </div>
                    </div>

                    <script>
                        function allowDrop(event) {
                            event.preventDefault();
                        }

                        function handleDrop(event) {
                            event.preventDefault();

                            var files = event.dataTransfer.files;

                            // Handle the dropped files
                            handleFiles(files);
                        }

                        function handleFiles(files) {
                            // You need to implement your logic to handle the files
                            // For demonstration purposes, let's upload the file using AJAX

                            var formData = new FormData();
                            formData.append('file', files[0]);

                            // Perform AJAX upload
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', '/upload-endpoint', true);
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    console.log('File uploaded successfully');
                                } else {
                                    console.error('File upload failed');
                                }
                            };
                            xhr.send(formData);
                        }
                    </script>

                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Upload Buktipiyeh.png
                </button>
            </form>

        </div>
    </div>
</body>

</html>
@endsection
