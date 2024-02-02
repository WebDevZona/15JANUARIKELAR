<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            background-color: #f1f1f1;
            background-image: url('assets/img/bg/Halamanlogin.png');
            background-size: cover;
        }

        .login-container {
            /* background-color: #d0d0d0; */
            padding: 40px;
            max-height: 100vh;
            overflow: hidden;
        }

        .login-container h1 {
            font-family: "Times New Roman", Times, serif;
            margin-top: 7%;
            margin-bottom: 20px;
            color: #4A4847;
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
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
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

        .login-terbaru {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .form-groupsi {
            text-align: center;
        }

        .form-groupsi img {
            width: 30%;
            height: auto;
            margin: 15px;
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


        .custom-alert {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            border-radius: 8px;
            /* padding: 10px; */
            margin-top: -30px;
        }

        .custom-alert ul {
            list-style-type: disc;
            margin-left: 10px;
        }

        .custom-alert ul li {
            margin-bottom: 5px;
            color: #721c24;
        }

        .custom-alert h4 {
            font-weight: bold;
            margin-top: 0;
            color: #721c24;
        }

        .custom-alert .close {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 18px;
            color: #721c24;
            cursor: pointer;
        }


        .modal-content {
            border-radius: 10px;
            /* Tambahkan sudut bulat */
        }

        .modal-header {
            background-color: #f8d7da;
            /* Warna latar belakang header */
            color: #721c24;
            /* Warna teks header */
            border-bottom: none;
            /* Hapus border bawah header */
            border-radius: 10px 10px 0 0;
            /* Tambahkan sudut bulat hanya di bagian atas */
        }

        .modal-footer {
            border-top: none;
            /* Hapus border atas footer */
            border-radius: 0 0 10px 10px;
            /* Tambahkan sudut bulat hanya di bagian bawah */
        }

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
    </style>
</head>

<body>
    <div class="back-to-home">
        <a href="/" style="color:white;"><i class="fa fa-arrow-left"> Kembali ke Homepage</i></i></a>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <!-- Alert for Success -->
                @if(session('sukses'))
                <div class="card my-4">
                    <div class="card-body">
                        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
                            <h5><i class="fas fa-check"></i> Sukses :</h5>
                            {{ session('sukses') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Alert for Error -->
                @if(session('error'))
                <div class="card my-4">
                    <div class="card-body">
                        <div class="callout callout-danger alert alert-danger alert-dismissible fade show" role="alert">
                            <h5><i class="fas fa-info"></i> Peringatan :</h5>
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Error Modal -->
                <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="error-container">
                                    <h2 class="error-title">Pesan Error</h2>
                                    <div class="error-message">
                                        @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="card my-4">
                    <div class="card-body">
                        <form id="registration-form" method="POST" action="{{ route('registration.submit') }}">
                            <h1 class="card-title" style="font-size: 2rem; font-family:montserrat;
 color:#000; margin-top: 15px;"><strong> Daftar Akun <br> Class Program</strong></h1>
                            <h4 class="card-subtitle mb-3" style="font-family:montserrat;
 font-size: 25px; margin-top:-10px;">Sudah punya akun? <br> <a href="login">Masuk, yuk!</a></h4>
                            @csrf

                            <!-- Email Input -->
                            <div class="form-group">
                                <div class="input-icon" style="text-align: start;">
                                    <span class="input-icon__icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <label for="email" style="font-size:13px; display: inline-block; margin-left: 5px;">Email:</label>
                                </div>
                                <div class="input-icon">
                                    <input type="email" name="email" class="form-control bg-light" id="email-step-1" placeholder="Email" required oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan format yang benar !')" oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <!-- Name Input -->
                            <div class="form-group">
                                <div class="input-icon" style="text-align: start;">
                                    <span class="input-icon__icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <label for="name" style="font-size:13px; display: inline-block; margin-left: 5px;">Nama:</label>
                                </div>
                                <div class="input-icon">
                                    <input name="name" type="text" class="form-control bg-light" id="name" placeholder="Nama" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="form-group">
                                <div class="input-icon" style="text-align: start;">
                                    <span class="input-icon__icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <label for="password" style="font-size:13px; display: inline-block; margin-left: 5px;">Password:</label>
                                </div>
                                <div class="input-group">
                                    <input id="password" type="password" name="password" class="form_login" placeholder="Password" required oninvalid="this.setCustomValidity('Harap masukkan password !')" oninput="setCustomValidity('')">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button" id="togglePassword" style="background-color:#4169E1;  height:45px; margin-left:206px; margin-top: -45px;">
                                            <i class="fas fa-eye" id="password-toggle-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Next Button -->
                            <button type="button" id="next-button-step-1">
                                <span style="margin-right: 5px;"></span> <i class="fa fa-arrow-right"> Next </i>
                            </button>
                        </form>

                        <!-- Google Sign-In Button -->
                        <center style="margin-top: 10px;">
                            <div class="form-groupz">
                                <button type="submit">
                                    <span><img src="assets/img/logo/gogle.png"></span> Masuk dengan Google
                                </button>
                            </div>
                        </center>

                        <!-- Step 2: Name Input (Initially hidden) -->
                        <div id="step-2" style="display: none;">
                            <form id="registration-form-2" method="POST" action="{{ route('registration.submit') }}" novalidate>
                                @csrf
                                <div class="icon-label" style="margin-top: 40px; text-align: start;">
                                    <i class="fas fa-calendar"></i>
                                    Tanggal Lahir
                                    <input name="ttl" type="date" class="form-control bg-light" id="ttl" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Alamat
                                    <input name="asal" type="text" class="form-control bg-light" id="asal" placeholder="Alamat" required>
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-phone-alt"></i>
                                    Nomor HP
                                    <input name="nomer" type="text" class="form-control bg-light" id="nomer" placeholder="Nomor HP" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-venus-mars"></i>
                                    Jenis Kelamin
                                    <select name="jeniskelamin" id="jeniskelamin" class="form-control bg-light" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                        <option value="laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-university"></i>
                                    Kampus
                                    <input name="kampus" type="text" class="form-control bg-light" id="kampus" placeholder="Kampus" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-book"></i>
                                    Jurusan
                                    <input name="jurusan" type="text" class="form-control bg-light" id="jurusan" placeholder="jurusan" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>
                                <div class="icon-label" style="text-align: start;">
                                    <i class="fas fa-calendar-alt"></i>
                                    Semester
                                    <input name="semester" type="number" class="form-control bg-light" id="semester" placeholder="Semester" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                                </div>

                                <input type="hidden" name="email" id="email-step-2">
                                <input type="hidden" name="password" id="password-step-2">
                                <input type="hidden" name="name" id="name-step-2">
                                {{-- <button type="button" id="prev-button-step-2"></button> --}}
                                <button type="submit" id="submit-button" class="icon-label">
                                    <i class="fas fa-check"></i>
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3: Address Input (Initially hidden) -->
        <!-- <div class="login-terbaru col-lg-6 col-md-0">

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

    </div> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script>

        </script>
        <script>
            // Mendapatkan referensi elemen-elemen yang dibutuhkan
            const emailInputStep1 = document.getElementById('email-step-1');
            const password = document.getElementById('password');
            const nameInput = document.getElementById('name');
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
                    document.getElementById('name-step-2').value = nameInput.value;
                } else {
                    // Tampilkan pesan kesalahan jika email tidak valid
                    alert('Email tidak valid. Mohon periksa kembali.');
                }
            });

            // Menambahkan event listener ke tombol selanjutnya pada langkah 2
            nextButtonStep2.addEventListener('click', () => {
                // Validasi semua bidang sebelum beralih ke langkah berikutnya
                // nextButtonStep2.addEventListener('click', () => {
                // Validasi semua bidang sebelum beralih ke langkah berikutnya
                if (
                    nameInput.checkValidity() &&
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
                    document.getElementById('name-step-3').value = nameInput.value;
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
            // Menggunakan nama variabel yang berbeda untuk password input
            var passwordInputToggle = document.getElementById("password");
            var togglePasswordButton = document.getElementById("togglePassword");

            togglePasswordButton.addEventListener("click", function() {
                if (passwordInputToggle.type === "password") {
                    passwordInputToggle.type = "text";
                    togglePasswordButton.classList.add("show-password");
                } else {
                    passwordInputToggle.type = "password";
                    togglePasswordButton.classList.remove("show-password");
                }
            });
        </script>
</body>

</html>
