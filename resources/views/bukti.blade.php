<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/logo2.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo/logo2.png') }}" rel="assets/img/logo/logo2.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    

    <!-- Include Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slenco:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
    <!-- di dalam file bukti.blade.php -->


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


        .card {
            margin-left: 20px;
            margin-right: 20px;
            width: 100rem;
            height: 47rem;
            margin-top: -50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 20px 0px 20px 0px;
            border-top: 10px solid #1b5cc5;
            border-bottom: 5px solid #1b5cc5;
            padding: 20px;
        }

        .payment-image {
            width: 100%;
            height: auto;
        }

        /* Add this CSS for the grid layout */
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-sm-6 {
            flex: 0 0 48%;
            /* Adjust the width based on your needs */
            margin-bottom: 20px;
        }

        /* TEST */


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
    <section class="d-flex align-items-center" style="margin-top: 100px;">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title" style=" margin-top:px; color: var(--Midnight-Blue-950, #09326F); font-weight: 800; text-align: center;">Unggah Bukti Pembayaran</h1>
                <h3 style="text-align: center; font-size:18px;"> Silakan lakukan pembayaran untuk paket <span class="product-name">{{ $products->first()->nama_produk }}</span>
                    dengan total harga <span class="total-price">{{ $harga }}, </span>
                    ke nomor rekening di bawah ini. Mohon mencantumkan Transaction ID saat melakukan transaksi.</h3>

                <div class="col-sm-12">
                    <div class="card-body" style="border-top: 2px dashed #1b5cc5; border-bottom: 2px dashed #1b5cc5;">
                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-hover" style="width: 300px;  margin-top:15px; font-size: 12px; color: #000; font-family: Roboto;">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; font-weight: bold;">
                                                <b>
                                                    Recipient
                                                </b>
                                            </td>
                                            <td style="text-align: left;"><b>Agil Ma'mun Muhammad</b></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-weight: bold;">
                                                <b>
                                                    Bank Destination
                                                </b>
                                            </td>
                                            <td style="text-align: left;"><b>BCA</b></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-weight: bold;">
                                                <b>
                                                    Account Number</h6>
                                                </b>
                                            </td>
                                            <td id="accountNumber" style="text-align: left;"><b>3151268267</b>
                                                <i style="margin-left:35px;" class=" far fa-copy" onclick="copyToClipboard('accountNumber', 'Text Copied!')"></i>
                                            </td>
                                            <style>
                                                #copyButton {
                                                    background-color: #4CAF50;
                                                    color: white;
                                                    padding: 10px 15px;
                                                    border: none;
                                                    border-radius: 5px;
                                                    cursor: pointer;
                                                    transition: background-color 0.3s;
                                                    margin-left: 30px;
                                                }

                                                #copyButton:hover {
                                                    background-color: #45a049;
                                                }
                                            </style>


                                            <script>
                                                function copyToClipboard(elementId, successMessage) {
                                                    var textElement = document.getElementById(elementId);
                                                    var text = textElement.innerText;

                                                    // Check if the element has already been copied
                                                    if (!textElement.hasAttribute('data-copied')) {
                                                        navigator.clipboard.writeText(text)
                                                            .then(() => {
                                                                console.log('Copied to clipboard:', text);

                                                                // Display a success message
                                                                if (successMessage) {
                                                                    textElement.innerHTML += ' (Copied)';
                                                                    // Create a new element to show success message
                                                                    var successDiv = document.createElement('div');
                                                                    successDiv.className = 'success-message';
                                                                    successDiv.textContent = successMessage;

                                                                    // Append the success message element to the body
                                                                    document.body.appendChild(successDiv);

                                                                    // Set attribute to mark as copied
                                                                    textElement.setAttribute('data-copied', 'true');

                                                                    // Remove the success message after a delay (e.g., 2 seconds)
                                                                    setTimeout(function() {
                                                                        document.body.removeChild(successDiv);
                                                                    }, 2000);
                                                                }
                                                            })
                                                            .catch((err) => console.error('Unable to copy text', err));
                                                    } else {
                                                        // Display a message if the element has already been copied
                                                        alert('Kamu sudah melakukan copy!');
                                                    }
                                                }
                                            </script>

                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-weight: bold;">
                                                <b>
                                                    Transaction ID
                                                </b>
                                            </td>
                                            <td id="idTransaksi" style="text-align: left;"><b>

                                                    {{ $token_transaksi }}
                                                    <i style="margin-left:35px;" class=" far fa-copy" onclick="copyToClipboard('idTransaksi', 'Text Copied!')"></i>

                                                </b></td>
                                            <style>
                                                #copyButton {
                                                    background-color: #4CAF50;
                                                    color: white;
                                                    padding: 10px 15px;
                                                    border: none;
                                                    border-radius: 5px;
                                                    cursor: pointer;
                                                    transition: background-color 0.3s;
                                                }

                                                #copyButton:hover {
                                                    background-color: #45a049;
                                                }
                                            </style>

                                            <script>
                                                function copyToClipboard(elementId, successMessage) {
                                                    var textElement = document.getElementById(elementId);
                                                    var text = textElement.innerText;

                                                    // Check if the element has already been copied
                                                    if (!textElement.hasAttribute('data-copied')) {
                                                        navigator.clipboard.writeText(text)
                                                            .then(() => {
                                                                console.log('Copied to clipboard:', text);

                                                                // Display a success message
                                                                if (successMessage) {
                                                                    textElement.innerHTML += ' (Copied)';
                                                                    // Create a new element to show success message
                                                                    var successDiv = document.createElement('div');
                                                                    successDiv.className = 'success-message';
                                                                    successDiv.textContent = successMessage;

                                                                    // Append the success message element to the body
                                                                    document.body.appendChild(successDiv);

                                                                    // Set attribute to mark as copied
                                                                    textElement.setAttribute('data-copied', 'true');

                                                                    // Remove the success message after a delay (e.g., 2 seconds)
                                                                    setTimeout(function() {
                                                                        document.body.removeChild(successDiv);
                                                                    }, 2000);
                                                                }
                                                            })
                                                            .catch((err) => console.error('Unable to copy text', err));
                                                    } else {
                                                        // Display a message if the element has already been copied
                                                        alert('Kamu sudah melakukan copy!');
                                                    }
                                                }
                                            </script>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <img style="width: 180px; height: 180px; margin-left:50px; margin-top:20px;" src="{{ asset('assets/img/bg/abuki.png') }}" alt="Abuki Background">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- upload -->
            <form class="row g-3" method="POST" action="{{ route('submit.bukti') }}" enctype="multipart/form-data">
                @csrf
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
                            <img src="{{ asset('assets/img/logo/Upload.png') }}" style="width: 80px;" alt="">
                            <h5 class="card-title">Upload </h5>
                            <div class="input-group" style="margin-top: -2px;">
                                <input type="file" class="form-control" name="foto" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <br>
                            <p style="margin-top: -8px;" class="card-text">Supported formats: JPEG, PNG, JPG</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top:10px; width: 100%;">
                        Upload Bukti
                    </button>
            </form>
        </div>
        <!-- di dalam file bukti.blade.php -->
        </div>
        <img src="{{ asset('assets/img/bg/piyeh.png') }}" style="width: 50%; margin-right: -30px; margin-top: -5%;" alt="Payment Image" class="payment-image">
    </section>

</body>

</html>
@endsection