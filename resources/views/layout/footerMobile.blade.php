<main>
    @yield('footer')
</main>


<footer id="footer">
    <style>
        .tombol_contact_us {
            position: fixed;
            right: 10px;
            bottom: 44px;
        }

        .tombol_contact_us img {
            height: 44px;
            width: auto;
        }

        .link-container {
            position: relative;
            width: 450px;
            margin-left: 800px;
            margin-top: -380px;
            overflow: hidden;
        }

        .link-container a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: black;
        }

        .link-container img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Left Section with Logo and Text -->
                <div class="col-2">
                    <a href="index.php"><img src="{{ asset('assets/img/logo/logo3.png') }}" style="width:90px !important; margin-left:-150px!important; margin-top:5px !important;" alt=""></a>
                </div>

                <div class="col-lg-4 col-md-3">
                    <div class="text-container">
                        <p>Bimbingan Belajar Online Perkuliahan dan Persiapan Karir dengan Sistem Kenaikan Kelas Pertama
                            di Indonesia.</p>
                    </div>
                </div>

                <!-- Right Section with Social Media Links -->


                <img src="assets/img/bg/footergaris.png" alt="Background Image" class="garis1" style=" stroke: #003EB5;
        position: absolute;
               width: 1100px;
               margin-inline-start: -130px;
               margin-top: -30px;
               left:-10px;
               height: 400px;
               display: block;
              ">
            </div>
        </div>

        <div class="social-links" style=" margin-left:140px;">
            <a href="https://www.youtube.com/channel/UCjpX70gVQp0iUfHjrDxFhqQ" class="youtube rounded-circle" style="padding: px;">
                <i class="bx bxl-youtube" style="font-size: 30px;"></i>
            </a>
            <a href="https://www.tiktok.com/@classprogram" class="tiktok rounded-circle" style="">
                <i class="bx bxl-tiktok" style=" color:black; font-size: 28px;"></i>
            </a>
            <a href="https://www.instagram.com/classprogram.id/" class="instagram rounded-circle" style="">
                <i class="bx bxl-instagram" style="font-size: 30px; background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80); background-clip: text; -webkit-background-clip: text;   color: transparent;"></i>
            </a>
        </div>


        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <!-- Background Image -->

                <!-- Program Links -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4 style="margin-button: -50px !important;">Hubungi Kami</h4>
                    <ul>
                        <li><a href="#"><b>Alamat:</b> Jalan Bandara
                                Palmerah IV No. D-11B, <br> <br> Cemorokandang, Kedungkandang, Kota Malang, <br> <br>
                                Jawa Timur <br> </a></li>
                        <li><a href="#"><b>Email: </b>classprogram.id@gmail.com
                                <br></a></li>
                        <li><a href="#"> <b>Whatsapp: </b> 0812-3436-1959 <br></a>
                        </li>
                        <li><a href="#"> <b>Partnership: </b>classprogram.id@gmailcom<br> </a></li>
                        <li><a href="#"> <br> <br> </a>
                        </li>

                    </ul>
                </div>

                <!-- Classprogram Address -->
                <div class="col-lg-4 col-md-3 footer-links" style="margin-bottom: 30px!important;">
                    <h4>Program Kelas</h4>
                    <ul>
                        <li><a href="#">Kelas Tugas Kuliah (KTK) </a></li>
                        <li> <a href="#">Bimbingan Mata Kuliah Jurusan (BMJ) </a></li>
                        <li> <a href="#"> Bimbingan Skripsi Online (BSO)</a></li>
                        <li> <a href="#">Kelas Persiapan Karir (KPK) </a></li>
                        <li> <a href="#">Creative Class <br> </a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Workshop</h4>
                    <ul>
                        <li><a href="#">Skripsi<br></a></li>
                        <li><a href="#"> Karya Tulis Ilmiah (KTI) <br></a></li>
                    </ul>
                    <br>
                    <h4>Daftar Sekarang</h4>
                    <ul>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="#">Masuk</a></li>
                    </ul>

                </div>

                {{-- <div class="link-container">
                    <a href="https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ=="
                        style="text-decoration: none; color: black;">
                        <img src="{{ asset('assets/img/bg/hp.png') }}" alt="Workshop Image">
                </a>
            </div> --}}



            <!-- <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Daftar Sekarang</h4>
                    <ul>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="#">Masuk</a></li>
                        <img src="{{ asset('assets/img/bg/hp.png') }}" alt="Workshop Image">
                    </ul>
                </div> -->

            <!-- Download App Section -->
            <div class="col-lg-2     col-md-3 footer-links">
                {{-- <h4>Download aplikasinya</h4> --}}

            </div>
        </div>

        <div class="container">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                <h4>Workshop</h4>
                    <ul>
                        <li><a href="#">Skripsi<br></a></li>
                        <li><a href="#"> Karya Tulis Ilmiah (KTI) <br></a></li>
                    </ul>
                    <br>
                    <h4>Daftar Sekarang</h4>
                    <ul>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="#">Masuk</a></li>
                    </ul>
              </div>
              <div class="col">
                <h4>Program Kelas</h4>
                    <ul>
                        <li><a href="#">Kelas Tugas Kuliah (KTK) </a></li>
                        <li> <a href="#">Bimbingan Mata Kuliah Jurusan (BMJ) </a></li>
                        <li> <a href="#"> Bimbingan Skripsi Online (BSO)</a></li>
                        <li> <a href="#">Kelas Persiapan Karir (KPK) </a></li>
                        <li> <a href="#">Creative Class <br> </a></li>

                    </ul>
              </div>
            </div>
          </div>
    </div>


    <div class="container" style="">
        <hr style="   border: none;
                height: 2px; /* Default height */
                background-color: white; ">
    </div>
    <div class="container py-4">
        <div class="copyright">
            <strong><span></span></strong>Copyright © 2020-2023 Class Program

        </div>

    </div>

    </div>

    <div id="whatsapp-button" onclick="openWhatsApp()">
        <img src="{{ asset('assets/img/bg/cs.png') }}" alt="WhatsApp" />
        <span id="whatsapp-text">Ada Pertanyaan? <br> Hubungi Kak Dewi</span>
    </div>

    <div class="popup-bro" id="popup-bro">
        <p>
            <strong style="color: black;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        margin:bottom 50px">Selamat
                Sobat Insans Telah Mendaftar</strong>
        </p>
        <div class="month-box" id="month-box">
            <p id="popup-month">Oct</p>
            <div class="date-box" id="date-box">
                <p id="popup-date">21</p>
            </div>
        </div>
        <div class="row">
            <row>
                <div class="popup-text" id="popup-text">
                    <p><strong>Nama:</strong> Vabindra Bimasvara</p>
                    <p>Paket: Silver</p>
                    <p>5 menit yang lalu</p>
                </div>
        </div>
    </div>
    <script src="script.js"></script>

    <script>
        function openWhatsApp() {
            var message =
                "Hallo Minma. Saya mau tanya-tanya nih mengenai Program Kelas di Class Program."; // Pesan yang ingin Anda kirim
            var phoneNumber = "6282141549373"; // Nomor WhatsApp yang dituju (tanpa tanda '+')

            // Membuat URL untuk mengarahkan pengguna ke halaman WhatsApp
            var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

            window.open(whatsappURL, "_blank");
        }
    </script>
    {{-- <script>
        const months = [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];
        const currentDate = new Date();
        const currentMonth = months[currentDate.getMonth()];
        const currentDay = currentDate.getDate();
        const popupMessages = [{
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Yohanes Hernandes</strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },

            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Dimas wildan </strong> <br>Mendaftar di Konsultasi Reguler Platinum",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Fandi </strong> <br>Mendaftar di Paket Hemat Bimbingan Skripsi Online",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Aldi </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Putra </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Zahra</strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "Sobat Insan<br><strong>Fadil</strong> <br>Mendaftar di Paket Emerald Bimbingan Skripsi Online",
            },
        ];

        const popupbro = document.getElementById('popup-bro');
        const popupDate = document.getElementById('popup-date');
        const popupMonth = document.getElementById('popup-month');
        const popupText = document.getElementById('popup-text');

        let currentIndex = 0;

        function showPopup() {
            const message = popupMessages[currentIndex];
            popupDate.textContent = message.date;
            popupMonth.textContent = message.month;
            popupText.innerHTML = message.text;
            popupbro.style.display = 'block';

            currentIndex = (currentIndex + 1) % popupMessages.length;
        } // Ensure that the initial call is outside of the function definition
        showPopup();

        // Set interval to showPopup every 5 seconds
        setInterval(showPopup, 9000);
    </script> --}}
    {{-- Animasi angka --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</footer>