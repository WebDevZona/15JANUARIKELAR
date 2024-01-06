<!-- col-lg-6 col-md-6 mt-5 mt-md-0 -->
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



    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('assets/img/bg/Halamanlogin.png');
            background-size: cover;
            min-height: 100vh;

            margin: 0;
            padding: 0;
        }

        .login-container {

            padding: 40px;
            max-height: 100vh;
            overflow: hidden;
            /* text-align: center; */
            border-radius: 10px;
        }

        .forgot-password {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        .input-label {
            font-size: 16px;
            margin-top: 10px;
            /* margin-bottom: 30px; */
            text-align: left;
            color: #555;
            /* margin-right:12%; */
            margin-left: 11%;
        }

        .form-group {
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
            font-family: Garamond, serif;
        }

        .form-group button {
            width: 50%;
            /* Adjust the width as needed */
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            /* Apply border radius 50px */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            margin-bottom: 0;
            /* Remove margin-bottom */
        }

        .form-group button:hover {
            background-color: blue;
        }

        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;

        }


        .message {
            font-size: 16px;
            width: 70%;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .success-message {
            background-color: #4CAF50;
            color: #ffffff;
        }

        .error-message {
            background-color: #ff0000;
            color: #ffffff;
        }

        .back-to-home {
            position: absolute;
            margin-top: 50%;
            right: 40%;
        }



        .input-icon {
            position: relative;
            margin-left: 0;
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
            background-color: green;
            padding: 10px 20px;
            border-radius: 50px;
            text-align: center;
        }

        .back-to-home a {
            text-decoration: none;
            /* Menghapus garis bawah tautan */
            color: white;
            /* Warna teks */
            font-weight: bold;
            margin-top: -10px;
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


    <div class="login-container col-lg-6 col-md-12">
        <div class="message-container" style=" text-align: center;">
            @if(session('sukses'))
            <div class="message success-message">
                <i class="fas fa-check"></i> {{ session('sukses') }}
            </div>
            @endif
            @if(session('error'))
            <div class="message error-message">
                <i class="fas fa-info"></i> {{ session('error') }}
            </div>
            @endif
        </div>

        <div>
            <style>
                /* CSS untuk mengatur tata letak dan posisi */
                body {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                    margin-bottom: 100px;
                    margin: 0;
                }

                div {
                    text-align: center;
                }

                img {
                    width: 300px;
                }

                .input-container {
                    display: flex;
                    align-items: center;
                }

                /* CSS untuk mengatur ikon */
                .input-icon__icon {
                    margin-right: 8px;
                    /* Jarak antara ikon dan label */
                }
            </style>
            <img style="margin-top: -20px;" width="300px;" src="assets/img/logo/logo1.png" alt="">
        </div>
        <div class="card" style="margin-top: 40px; margin-botton:30px;  border-radius: 25px; ">
            <h4 class="forgot-password" style="margin-top: 20px;">Lupa Password?</h4>
            <div class="input-label">Masukkan email yang terdaftar di akunmu</div>
            <form action="{{ route('proses-kirim-email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-icon">
                        <span class="input-icon__icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <label for="username" style="font-size:13px; display: inline-block; margin-left: 5px;">Email:</label>

                    </div>
                    <div class="input-icon">
                        <input type="email" id="email" name="email" class="form_login" placeholder="Email" required email oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan benar !')" oninput="setCustomValidity('')">

                    </div>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit">Kirim</button>
                </div>
                <div class="form-group" style="text-align: center;">
                    <a href="login" style="margin-top:-10px; color:blue;"> <i class="fa fa-arrow-left"></i> Masuk akun</i></i></a>
                </div>
            </form>

            <!-- <div class="back-to-home">
            </div> -->
        </div>


</body>


</html>
