<main>
    @yield('footer')
</main>

<footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->
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
    </style>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                 <!-- Left Section with Logo and Text -->
                 <div class="col-2" >
                    <a href="index.php"><img src="{{ asset('assets/img/logo/logo3.png') }}" style="width:100%" alt=""></a>
                </div>

                <div class="col-lg-4 col-md-3">
                    <div class="text-container" >
                        <p>Bimbingan Belajar Online Perkuliahan dan Persiapan Karir dengan Sistem Kenaikan Kelas Pertama di Indonesia.</p>
                    </div>
                </div>

               <!-- Right Section with Social Media Links -->
                
               <div class="col-lg-4 col-md-3 ml-auto">
                <div class="social-links" style="text-align: right;">
                    <a href="https://www.youtube.com/channel/UCjpX70gVQp0iUfHjrDxFhqQ" class="youtube rounded-circle" style=" padding: 10px;"><i class="bx bxl-youtube"></i></a>
                    <a href="https://www.tiktok.com/@classprogram" class="tiktok rounded-circle" style=" padding: 10px;"><i class="bx bxl-tiktok"></i></a>
                    <a href="https://www.instagram.com/classprogram.id/" class="instagram rounded-circle" style=" padding: 10px;"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
                <img src="assets/img/bg/footergaris.png" height="200px;" alt="Background Image" class="garis1" style=" stroke: #003EB5;
        position: absolute; 
               width: 1100px;
               margin-inline-start: -130px;
               margin-top: 260px;
               left:0;
               height: 400px;
               display: block;
              ">
            </div>
        </div>


        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <!-- Background Image -->

                <!-- Program Links -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a href="#"><b>Alamat :</b> Jalan Bandara <br> <br>
                                Palmerah IV No. D-11B,<br> <br> Cemorokandang,<br> <br> Kedungkandang, Kota Malang, <br>
                                <br> Jawa Timur <br> </a></li>
                        <li><a href="#"><b>Email : </b>classprogram.id@gmail.com
                                <br></a></li>
                        <li><a href="#"> <b>Whatsapp : </b> 0812-3436-1959 <br></a>
                        </li>
                        <li><a href="#"> <b>Partnership : </b> <br> </a></li>
                        <li><a href="#"> classprogram. id@gmailcom <br> <br> </a>
                        </li>

                    </ul>
                </div>

                <!-- Classprogram Address -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Program Kelas</h4>
                    <ul>
                        <li><a href="#">Kelas Tugas Kuliah (KTK) </a></li>
                        <li> <a href="#">Bimbingan Mata Kuliah Jurusan </a></li>
                        <li> <a href="#"> (BMJ) <br> </a></li>
                        <li> <a href="#"> Bimbingan Skripsi Online (BSO)</a></li>
                        <li> <a href="#">Kelas Persiapan Karir (KPK) </a></li>
                        <li> <a href="#">Creative Class <br> </a></li>
                        <li><a href="#"><b>Workshop : </b> <br></a></li>
                        <li><a href="#">Skripsi<br></a></li>
                        <li><a href="#"> Karya Tulis Ilmiah (KTI) <br></a></li>
                        {{-- <li>
                    <a href="https://maps.app.goo.gl/Qx8hR99kDTW1mEQx7"  target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11.5 5c0 2.49-4.5 8.5-4.5 8.5S2.5 7.49 2.5 5a4.5 4.5 0 0 1 9 0Z" />
                                <circle cx="7" cy="5" r="1.5" />
                            </g>
                        </svg>
                        Jalan Bandara Palmerah IV No. D-11B,<br>
                        Cemorokandang, Kedungkandang<br>
                        Kota Malang, Jawa Timur
                    </a>
                </li> --}}
                        <!-- ... (lanjutan elemen li) -->
                    </ul>
                </div>

                <!-- Workshop Links -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Daftar Sekarang</h4>
                    <ul>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="#">Masuk</a></li>
                        <img src="{{ asset('assets/img/bg/hp.png') }}" alt="Workshop Image">
                    </ul>
                </div>

                <!-- Download App Section -->
                <div class="col-lg-3 col-md-3 footer-links">
                    {{-- <h4>Download aplikasinya</h4> --}}

                </div>
            </div>
        </div>


        <div class="container">
            <hr style="   border: none;
  height: 2px; /* Default height */
  background-color: white; margin-bottom: -300;">
        </div>
        <div class="container py-4">
            <div class="copyright">
                <strong><span></span></strong>Copyright © 2020-2023 Class Program

            </div>
            {{-- <div class="credits">
                <a href="/disclaimer">Syarat & Ketentuan</a>
                <!-- Kontak link -->
                <a href="/kontak">Kebijakan Privasi</a>
                <!-- Tentang link -->
                <a href="/tentang">Hubungi kami</a>
                <!-- Terms and Condition link -->
                <a href="/terms-and-condition">Indonesia</a>
            </div> --}}
        </div>
    </div>
    <!-- <div style="position:fixed;left:20px;bottom:20px;">
      <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo">
      <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
      <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
    </div> -->
    <!-- <button id="whatsapp-button">Hubungi Kami melalui WhatsApp</button> -->
    <!--<div id="whatsapp-button" onclick="togglePopup();">
      <img src="assets/img/logo/wa3.png" alt="WhatsApp" />
    </div>-->
    {{-- <div id="whatsapp-button" onclick="togglePopupp();">
      <img src="{{ asset('assets/img/logo/wa3.png') }}" alt="WhatsApp" />
    </div>
    <div id="message-popup" onclick="preventPopupClose(event);">
        <div id="popup-header">
            <h3>Class Program</h3>
            <button id="close-popup-button" onclick="closePopup();">×</button>
        </div>
        <div class="message-container">
            <div class="message">Selamat datang di Class Program. Jika ada yang ingin di tanyakan, silakan hubungi Minma di sini</div>
            <!-- <div class="user-message">Baik, terima kasih!</div> -->
        </div>
        <button id="send-message-button" onclick="sendMessage();">
            <img id="send-icon" src="assets/img/logo/kirim.png" alt="Kirim Pesan" />
            Kirim Pesan
        </button>
    </div> --}}

    <div id="whatsapp-button" onclick="openWhatsApp()">
        <img src="{{ asset('assets/img/bg/cs.png') }}" alt="WhatsApp" />
        <span id="whatsapp-text">Ada Pertanyaan? <br> Hubungi Minma</span>
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
        // var popupActive = false;

        // function togglePopupp() {
        //   var whatsappButton = document.getElementById('whatsapp-button');
        //   var messagePopup = document.getElementById('message-popup');
        //   popupActive = !popupActive;

        //   if (popupActive) {
        //     whatsappButton.classList.add('active');
        //     messagePopup.style.display = 'block';
        //   } else {
        //     whatsappButton.classList.remove('active');
        //     messagePopup.style.display = 'none';
        //   }
        // }

        // function closePopup() {
        //   var whatsappButton = document.getElementById('whatsapp-button');
        //   var messagePopup = document.getElementById('message-popup');
        //   popupActive = false;
        //   whatsappButton.classList.remove('active');
        //   messagePopup.style.display = 'none';
        // }

        // function preventPopupClose(event) {
        //   event.stopPropagation();
        // }

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
        const months = [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];
        const currentDate = new Date();
        const currentMonth = months[currentDate.getMonth()];
        const currentDay = currentDate.getDate();
        const popupMessages = [{
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Yohanes Hernandes</strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },

            {
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Dimas wildan </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Fandi </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Aldi </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Putra </strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
            },
            {
                date: currentDay,
                month: currentMonth,
                text: "have registered<br><strong>Zahra</strong> <br>Mendaftar di Paket Emerald Bimbingan Mata Kuliah",
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
    </script>
</footer>
