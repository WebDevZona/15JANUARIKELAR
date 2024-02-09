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
    <link href="assets/img/logo/logo2.png" rel="shortcut icon">

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

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">




</head>

@extends('layout.header')
@section('content')


<body>
    <style>
        .cardd {
            margin-top: 25px;
            margin-bottom: 25px;
            width: 60rem;
            /* margin-left: -330px; */
            background: white;
            position: center;
            align-self: center;

            border-radius: 1.5rem;
            box-shadow: 3px 3px 6px #3498db;
            display: flex;
            flex-direction: row;

        }

        .leftside {
            background: linear-gradient(135deg, #3498db 0%, #1f618d 100%);
            width: 25rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .product {
            object-fit: cover;
            width: 50em;
            height: 20em;
            background: linear-gradient(135deg, #3498db 0%, #1f618d 100%);
        }

        .rightside {
            background-color: #ffffff;
            width: 35rem;
            border-bottom-right-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
            padding: 1rem 2rem 3rem 3rem;
        }

        p {
            display: block;
            font-size: 1.1rem;
            font-weight: 400;
            margin: .8rem 0;
        }

        .inputbox {
            color: #030303;
            width: 100%;
            padding: 0.5rem;
            border: none;
            border-bottom: 1.5px solid #ccc;
            margin-bottom: 1rem;
            border-radius: 0.3rem;
            font-family: 'Roboto', sans-serif;
            color: #615a5a;
            font-size: 1.1rem;
            font-weight: 500;
            outline: none;
        }

        .expcvv {
            display: flex;
            justify-content: space-between;
            padding-top: 0.6rem;
        }

        .expcvv_text {
            padding-right: 1rem;
        }

        .expcvv_text2 {
            padding: 0 1rem;
        }

        .button {
            background: linear-gradient(135deg, #3498db 0%, #1f618d 100%);
            padding: 15px;
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: 400;
            font-size: 1.2rem;
            margin-top: 10px;
            width: 100%;
            letter-spacing: .11rem;
            outline: none;
        }


        .button:hover {
            transform: scale(1.05) translateY(-3px);
            box-shadow: 3px 3px 6px #38373785;
        }

        @media only screen and (max-width: 1000px) {
            .card {
                flex-direction: column;
                width: auto;

            }

            /* .leftside {
                width: 100%;
                border-top-right-radius: 0;
                border-bottom-left-radius: 0;
                border-top-right-radius: 0;
                border-radius: 0;
            } */

            /* .rightside {
                width: auto;
                border-bottom-left-radius: 1.5rem;
                padding: 0.5rem 3rem 3rem 2rem;
                border-radius: 0;
            } */
        }
    </style>
    <div class="mainscreen" style="margin-top: 100px;">
        <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
        <div class="card">
            <div class="cardd">
                <div class="leftside">
                    <img src="/assets/img/bg/yt2.png" class="product" alt="Shoes" />
                </div>
                <div class="rightside">
                    <div class="package">
                        <div class="package-details" style="margin-top: 50px;">
                            <h3> Paket: {{ $Produk->nama_produk }}</h3>

                            {{-- <p>Waktu: 75 Menit</p>
                        <p>Metode: Via Voice Call/Chat</p> --}}

                            {!! $id_pesdik_login->isi !!}</li>
                            <!-- <p>untuk mendapatkan potongan 50%,gunakan kupon-></p>
                            <p>hanya berlaku untuk pembelian kelas/ transaksi</p> -->
                            {{-- <li>✔ Tes Minat Karier</li>
                            ✔ PDF Interpretasi Hasil Tes</li>
                            ✔ Lembar Kerja (Worksheet) yang didesain khusus untuk membantu permasalahanmu</li> --}}

                            {{-- <p>*pilih  </p> --}}
                        </div>
                        <div class="price">
                            <p>
                                @if(isset($Produk) && is_object($Produk))
                                <del style=" color: #999;">Rp{{ $Produk->harga1 }}</del>
                            <div style=" font-size: 22px; color: #000; font-weight: bold;">Rp{{ $Produk->harga }}</div>
                            @else
                            <!-- Handle case where $Produk is not set or not an object -->
                            <span style="color: red;">Error: Invalid Product Data</span>
                            @endif
                            </p>
                            @if(isset($id_pesdik_login) && is_object($id_pesdik_login))
                            <a id="paket-link" href="{{ route('pembayaran', [
                                        'id_produk' => $id_pesdik_login->id_produk,
                                        'id' => auth()->id(),
                                        'nama_voucher' => isset($response->voucher) ? $response->voucher->nama : ''
                                    ]) }}">
                                <button type="submit" class="button">CheckOut</button>
                            </a>
                            @else
                            <!-- Handle case where $id_pesdik_login is not set or not an object -->
                            <span style="color: red;">Error: Invalid id_pesdik_login Data</span>
                            <a href="#" onclick="showLoginPopup()"><button class="select-button">PILIH PAKET</button></a>
                            @endif
                        </div>
                    </div><br>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <p></p>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
