<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/img/bg/Halamanlogin.png');
            background-size: cover;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
        }

        .login-container {
            /* background-color: white; */
            /* border-radius: 10px; */
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); */
            /* height: 100% !important; */
            padding: 40px;

            /* width: 50%; */
            /* height: 100%;
            text-align: center; */
            /* text-align: center; */
            max-height: 100vh;
            /* Tambahkan baris ini */
            overflow: hidden;
        }

        .login-container h1 {
            font-family: "Times New Roman", Times, serif;
            margin-top: 7%;
            margin-bottom: 20px;
            /* margin-top: 5%; */
            color: #4A4847;
            /* padding:10%; */
            font-size: 30px;
            margin-right: 10%;
            margin-left: 10%;
        }

        .login-container h4 {
            font-family: Georgia, serif;
            margin-bottom: 30px;
            font-size: 17px;
            color: #696969;
            margin-right: 10%;
            margin-left: 10%;

        }

        .form-group {
            /* margin-bottom: 20px; */
            margin-right: 10%;
            margin-left: 10%;
            padding: 1%;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;


        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            font-family: Garamond, serif;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #162d3a;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;

        }

        .form-group button:hover {
            background-color: blue;
        }

        .form-groupz button {
            padding: 5px 20px;
            background-color: #DCDCDC;
            color: black;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 0px;
            margin-top: 10px;
        }

        .form-groupz img {
            width: 25px;
            height: auto;
            margin-right: 2px;
            margin-bottom: 5px;
        }

        .form-groupz button:hover {
            background-color: Gray;
        }


        /* .login-terbaru {
            background-color:red;

            padding: 40px;
             justify-content: center;
             align-items: center;

            text-align: center;
    max-height: 100vh;
   overflow: hidden;
        }
        .form-groupsi {

               width: 5px;
        }
        .form-groupsi img {
            justify-content: center;
             align-items: center;
            width: 100px;
            height: auto;
            margin-right: 2px;
            margin-bottom: 5px;
        } */
        .login-terbaru {
            /* height:; */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;

            /* background-color: white; */
            /* text-align: center;
            margin-top: 20px;  */
        }

        .form-groupsi {
            text-align: center;
        }

        .form-groupsi img {
            width: 30%;
            /* Sesuaikan ukuran gambar */
            height: auto;
            margin: 15px;
            /* Sesuaikan jarak antara gambar */
        }

        .clear {
            clear: both;
        }

        .back-to-home {
            position: absolute;
            top: 15px;
            right: 10px;
        }



        .input-icon {
            position: relative;
        }


        .dropdown-item {
            text-decoration: none;
            /* Menghapus garis bawah default pada tautan */
            color: #000;
            /* Warna teks saat tautan normal */
        }

        /* Gaya saat kursor berada di atas tautan */
        .dropdown-item:hover {
            background-color: transparent;
            /* Latar belakang saat kursor berada di atas tautan */
        }

        .back-to-home {
            background-color: #bfbfbf;
            /* Warna latar belakang */
            padding: 10px 20px;
            /* Padding untuk tata letak tombol */
            border-radius: 50px;
            /* Sudut bulat */
            text-align: center;
            /* Teks ditengahkan di dalam div */
        }

        .back-to-home a {
            text-decoration: none;
            /* Menghapus garis bawah tautan */
            color: white;
            /* Warna teks */
            font-weight: bold;
            /* Tebalkan teks */
        }

        .container {
            text-align: center;
        }

        hr {
            margin-top: -20px;
            margin-right: 10%;
            margin-left: 10%;
            border: 1px solid grey;
            margin-top: -10px;
        }

        .hr-text {

            display: inline-block;
            background-color: white;
            padding: 0 10px;
            /* Menambahkan padding untuk memberi jarak dari garis */
        }

        /* wa */
        #whatsapp-button {
            position: fixed;
            bottom: 0px;
            right: 20px;
            /* Mengganti left dengan right untuk menempatkan di sebelah kanan */
            z-index: 999;
            display: flex;
            align-items: center;
            border-radius: 5px;
            padding: 10px;
        }

        #whatsapp-button::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 50%;
            margin-right: 500px;
            display: inline-block;
            border-radius: 64px 37px 37px 64.5px;
            background: rgba(0, 0, 0, 0.479);
            backdrop-filter: blur(20.5px);
            z-index: -1;
        }

        #whatsapp-text {
            color: #ffffff;
            font-family: 'Poppins';
            font-size: 15px;
            font-style: normal;
            font-weight: 500;
            line-height: 26px;
            margin-left: 10px;
            position: relative;
        }

        #whatsapp-text.bordered::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid #25D366;
            border-radius: 5px;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>
</head>

<body>

    <!-- <div class=""> -->
    <div class="login-container col-lg-6 col-md-12">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session('error'))
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Peringatan :</h5>
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h1 style="font-size: 45px; color:#000; font-family:montserrat; margin-top: 15px;"><strong> Selamat Datang <br> di Class Program</strong></h1>

        <h4 style="font-size: 25px; margin-top:-10px; font-family:montserrat;">Belum punya akun? <a href="register">Daftar yuk!</a> </h4>


        <form action="postlogin" style="margin-top: -10px;" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-icon">
                    <span class="input-icon__icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <label for="username" style="font-size:13px; display: inline-block; margin-left: 5px;">Email:</label>

                </div>

                <div class="input-icon">
                    {{-- <input type="text" id="username" name="username" placeholder="Masukkan Email" required> --}}
                    <input type="email" name="email" class="form_login" placeholder="email" required email oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan benar !')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <span class="input-icon__icon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <label for="username" style="font-size:13px; display: inline-block; margin-left: 5px;">Password:</label>
                </div>
                <div class="input-icon">
                    {{-- <input type="password" id="password" name="password" placeholder="Masukkan password" required> --}}
                    <input id="password" type="password" name="password" class="form_login" placeholder="password" required oninvalid="this.setCustomValidity('Harap masukkan password !')" oninput="setCustomValidity('')">

                </div>
            </div>
            <a href="/forgot-password" class="dropdown-item" style="margin-left:380px; color: blue;">Lupa password ?</a>
            <center>
                <div class="form-group">
                    <button style="border-radius: 25px; " type="submit">Login</button>
                </div>
            </center>
            <p> </p>
            <br>
        </form>
        <div class="container" style="margin-top: -20px;">
            <div class="hr-text">or</div>
            <hr>
        </div>
        <!-- </div> -->
        <center>
            <div class="form-groupz">
                <button type="submit">
                    <span><img src="assets/img/logo/gogle.png"></span> <a href="{{ url('auth/google') }}"> @csrf Masuk dengan Google</a>
                </button>
            </div>
        </center>
    </div>


    <div class="login-terbaru col-lg-6 col-md-0">

        <div class="back-to-home">
            <a href="/" style="color:white;"><i class="fa fa-arrow-left"> Kembali ke Homepage</i></i></a>
        </div>
        <p></p>
        <center>
            <img style="width: 580px; margin-right: 90px; margin-left:-100px;" src="assets/img/bg/login.png" alt="">
        </center>

        <div id="whatsapp-button" onclick="openWhatsApp()">
            <img style="width: 100px;" src="{{ asset('assets/img/bg/cs.png') }}" alt="WhatsApp" />
            <span id="whatsapp-text">Ada Pertanyaan? <br> Hubungi Minma</span>
        </div>

    </div>
</body>
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

</html>
