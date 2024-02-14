<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-vi2eEQZjYqVQOvz3okDP72VMs5P4YuiFqAFO9fDShDAg0xwM4E1tC+t6WT50QOOl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



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
            /* margin-right: 10%;
            margin-left: 10%; */
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
            width: 60%;
            padding: 12px;
            background-color: #162d3a;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
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


        #next-button-step-1 {
            margin-left: 70px;
            border: none;
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        #next-button-step-1:hover {
            background-color: #0056b3;
        }

        #submit-button {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border: none;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        #submit-button:hover {
            background-color: #0056b3;
        }

        .input-label {
            display: flex;
            align-items: center;
            font-size: 14px;
            /* Adjust font size as needed */
            color: #495057;
            /* Adjust color as needed */
        }
    </style>
</head>

<body>

    <div class="back-to-home">
        <a href="/" style="color:white;"><i class="fa fa-arrow-left"> Kembali ke Homepage</i></i></a>
    </div>
    <!-- <div class=""> -->
    <div class="container" style="margin-top: 60px;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5><i class="fas fa-check"></i> Sukses :</h5>
                    {{session('sukses')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5><i class="fas fa-info"></i> Peringatan :</h5>
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card my-4">
                    <div class="card-body" style="margin-top: -20px;">
                        <h1 class="card-title" style="font-family:montserrat;
                            font-size: 2rem; color: #000; margin-top: 15px;"><strong>Daftar Akun <br> Class Program</strong></h1>
                        <h4 class="card-subtitle mb-3" style="font-size: 1.25rem; margin-bottom: 20px; margin-top: -10px; font-family:montserrat;
                            ">Sudah punya akun ?<br> <a href="login">Login yuk!</a></h4>

                        <form id="registration-form" method="POST" action="{{ route('registration.submit') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <label for="username" class="sr-only">Email:</label>
                                    <input type="email" name="email" class="form-control bg-light" id="email-step-1" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <label for="name" class="sr-only">Nama:</label>
                                    <input name="name" id="name" type="text" class="form-control bg-light" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></i></span>
                                    </div>
                                    <label for="password" class="sr-only">Password:</label>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Harap masukkan password !')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <center>
                                <div class="form-group text-center" style="margin-left: -68px;">
                                    <button type="button" id="next-button-step-1">
                                        Lanjut <i class="fa fa-arrow-right"> </i>
                                    </button>
                                </div>
                            </center>


                        </form>

                        <!-- form lanjutan -->
                        <div id="step-2" style="display: none;">
                            <form id="registration-form-2" method="POST" action="{{ route('registration.submit') }}" novalidate>
                                @csrf
                                <style>
                                    .floating-text {
                                        margin-top: -50px;
                                        position: absolute;
                                        margin-left: 50px;
                                        /* Ubah warna latar belakang sesuai kebutuhan */
                                        padding: 0 5px;
                                        /* Sesuaikan padding sesuai kebutuhan */
                                    }
                                </style>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <label for="ttl" class="sr-only">
                                            <i class="fas fa-calendar"></i> Tanggal Lahir:
                                        </label>
                                        <input name="ttl" type="date" class="form-control bg-light" id="ttl" pattern="\d{2}/\d{2}/\d{4}" placeholder="DD/MM/YYYY" />
                                    </div>
                                </div>
                                <p id="floating-text" class="floating-text">Tempat tanggal lahir</p>

                                <script>
                                    // Menyembunyikan atau menampilkan elemen floating-text berdasarkan pengisian input date
                                    document.getElementById('ttl').addEventListener('change', function() {
                                        var floatingText = document.getElementById('floating-text');
                                        floatingText.style.display = this.value ? 'none' : 'block';
                                    });
                                </script>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <label for="alamat" class="sr-only"> Alamat:</label>
                                        <input name="asal" id="asal" type="text" class="form-control bg-light" id="asal" placeholder="Alamat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-phone-alt"></i></span>
                                        </div>
                                        <label for="momer" class="sr-only">Nomor Hand Phone:</label>
                                        <input name="nomer" type="text" class="form-control bg-light" id="nomer" placeholder="Nomor Hand Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-venus-mars"></i></span>
                                        </div>
                                        <label for="momer" class="sr-only">Jenis Kelamin:</label>
                                        <select name="jeniskelamin" id="jeniskelamin" class="form-control bg-light">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                                        </div>
                                        <label for="momer" class="sr-only">Kampus:</label>
                                        <input name="kampus" id="kampus" type="text" class="form-control bg-light" id="kampus" placeholder="Kampus">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-book"></i></span>
                                        </div>
                                        <label for="momer" class="sr-only">Jurusan:</label>
                                        <input name="jurusan" id="jurusan" type="text" class="form-control bg-light" id="jurusan" placeholder="Jurusan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <label for="momer" class="sr-only">Semester:</label>
                                        <input name="semester" type="number" class="form-control bg-light" id="semester" placeholder="Semester">
                                    </div>
                                </div>
                                <input type="hidden" name="email" id="email-step-2">
                                <input type="hidden" name="password" id="password-step-2">
                                <input type="hidden" name="name" id="name-step-2">
                                {{-- <button type="button" id="prev-button-step-2">
                                    <
                                </button> --}}


                                <button type="submit" id="submit-button" class="icon-label">
                                    Daftar
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                        </div>

                        <div class="container mt-4" style="margin-top: -20px;">
                            <div class="hr-text">or</div>
                            <hr>
                        </div>
                        <div class="form-groupz text-center">
                            <button class="btn btn-light">
                                <span><img src="assets/img/logo/gogle.png" alt="Google Logo"></span>
                                <a href="{{ url('auth/google') }}">@csrf Masuk dengan Google</a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="">

        {{-- <div class="back-to-home">
            <a href="/" style="color:white;"><i class="fa fa-arrow-left"> Kembali ke Homepage</i></i></a>
        </div>
        <p></p>
        <center>
            <img style="width: 580px; margin-right: 90px; margin-left:-100px;" src="assets/img/bg/login.png" alt="">
        </center> --}}

        <div id="whatsapp-button" onclick="openWhatsApp()">
            <img style="width: 80px;" src="{{ asset('assets/img/bg/cs.png') }}" alt="WhatsApp" />
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan referensi elemen input nama
        const nameInput = document.getElementById('name');
        const asalInput = document.getElementById('asal');
        const kampusInput = document.getElementById('kampus');
        const jurusanInput = document.getElementById('jurusan');

        // Menambahkan event listener ke input nama
        nameInput.addEventListener('input', function(event) {
            // Memperbarui nilai input nama dengan huruf kapital
            nameInput.value = capitalizeFirstLetter(nameInput.value);
        });
        asalInput.addEventListener('input', function(event) {
            // Memperbarui nilai input nama dengan huruf kapital
            asalInput.value = capitalizeFirstLetter(asalInput.value);
        });
        kampusInput.addEventListener('input', function(event) {
            // Memperbarui nilai input nama dengan huruf kapital
            kampusInput.value = capitalizeFirstLetter(kampusInput.value);
        });
        jurusanInput.addEventListener('input', function(event) {
            // Memperbarui nilai input nama dengan huruf kapital
            jurusanInput.value = capitalizeFirstLetter(jurusanInput.value);
        });

        // Fungsi untuk membuat huruf pertama dari setiap kata menjadi huruf besar
        function capitalizeFirstLetter(text) {
            return text.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
        }
    });

    // Mendapatkan referensi elemen-elemen yang dibutuhkan
    const emailInputStep1 = document.getElementById('email-step-1');
    const password = document.getElementById('password');
    const nameInputStep1 = document.getElementById('name');
    const nextButtonStep1 = document.getElementById('next-button-step-1');
    const step2 = document.getElementById('step-2');
    const ttlInput = document.getElementById('ttl');
    const asalInput = document.getElementById('asal');
    const nomerInput = document.getElementById('nomer');
    const jeniskelaminInput = document.getElementById('jeniskelamin');
    // const semesterInput = document.getElementById('semester');
    const prevButtonStep2 = document.getElementById('prev-button-step-2');
    const nextButtonStep2 = document.getElementById('next-button-step-2');
    const step3 = document.getElementById('step-3');

    // Menambahkan event listener ke tombol selanjutnya pada langkah 1
    nextButtonStep1.addEventListener('click', () => {
        // Validasi email (Anda dapat menambahkan validasi lainnya di sini)
        if (emailInputStep1.checkValidity() &&
            password.checkValidity()
        ) {
            // Sembunyikan langkah 1 dan tampilkan langkah 2
            document.getElementById('registration-form').style.display = 'none';
            step2.style.display = 'block';
            // Transfer nilai email ke langkah berikutnya
            document.getElementById('email-step-2').value = emailInputStep1.value;
            document.getElementById('password-step-2').value = password.value;
            document.getElementById('name-step-2').value = nameInputStep1.value;
        } else {
            // Tampilkan pesan kesalahan jika email tidak valid
            alert('Email tidak valid. Mohon periksa kembali.');
        }
    });

    // Menambahkan event listener ke tombol selanjutnya pada langkah 2
    nextButtonStep2.addEventListener('click', () => {
        // Validasi semua bidang sebelum beralih ke langkah berikutnya
        if (
            nameInputStep1.checkValidity() &&
            ttlInput.checkValidity() &&
            asalInput.checkValidity() &&
            nomerInput.checkValidity() &&
            jeniskelaminInput.checkValidity()
        ) {
            // Semua bidang telah valid, lanjutkan ke langkah berikutnya
            step2.style.display = 'none';
            step3.style.display = 'block';
            // Transfer email input value ke langkah berikutnya
            document.getElementById('email-step-3').value = emailInputStep1.value;
            // Transfer nilai password input ke langkah berikutnya
            document.getElementById('password-step-3').value = password.value;
            document.getElementById('name-step-3').value = nameInputStep1.value;
        }
    });

    // Menambahkan event listener ke tombol kembali pada langkah 2
    prevButtonStep2.addEventListener('click', () => {
        // Sembunyikan langkah 2 dan tampilkan langkah 1
        step2.style.display = 'none';
        document.getElementById('registration-form').style.display = 'block';
    });

    // ... tambahkan event listener lainnya untuk langkah-langkah lainnya ...
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInputToggle = document.getElementById("password");
        const togglePasswordButton = document.getElementById("togglePassword");
        const passwordToggleIcon = document.getElementById("password-toggle-icon");

        togglePasswordButton.addEventListener("click", function() {
            const type = passwordInputToggle.getAttribute("type") === "password" ? "text" : "password";
            passwordInputToggle.setAttribute("type", type);

            // Change eye icon based on password visibility
            passwordToggleIcon.className = type === "password" ? "fas fa-eye" : "fas fa-eye-slash";
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.alert .close').on('click', function() {
            $(this).closest('.alert').fadeOut();
        });
    });
</script>

</html>