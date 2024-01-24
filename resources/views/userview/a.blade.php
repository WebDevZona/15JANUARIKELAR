<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 text-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--style="width: 100%; max-width: 300px; height: auto;"-->
                        <img src="assets/img/template_zona_mahasiswa/jkt1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/template_zona_mahasiswa/jkt2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="text-center text-md-start p-2" style="margin-right:10px;">
                <h4 class="fw-bold" style="color: var(--font-theme-color); margin-left:10px; margin-top:20px;">OPEN RECRUITMENT<br> MITRA JKT</h4>
                <p class="" style="color: white;  margin-left:10px; margin-top:20px;">JKT kini hadir dengan membuka lowongan pekerjaan kepada Fresh Graduate untuk menjadi Mitra.</p>
                <!-- <div class="d-flex justify-content-center"> -->
                <button class="btn btn-primary rounded-pill " onclick="openModal('mentor-bso')" style=" margin-left:10px; margin-top:20px;">Selengkapnya</button>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>


<section class="mt-3 mb-3">
    <div class="container text-center" style="color:var(--font-theme-color);">
        <div class="container mt-1 mb-4 mb-lg-4">
            <!--start iklan-->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4249357919856235" crossorigin="anonymous"></script>
            <!-- Display ads horizontal -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4249357919856235" data-ad-slot="3580518718" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

            <!--end iklan-->
        </div>
    </div>
</section>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded15">
        <div class="modal-content" style="background-color:var(--bg-theme-color);">
            <div class="modal-header">
                <h5 class="modal-title " id="modal-title">Konten ini belum tersedia </h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" style="color: var(--font-theme-color);" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body" style="font-size: 12px;" id="modal-body"></div>
            <div class="modal-footer" id="modal-footer"></div>
        </div>
    </div>
</div>
<script>
    var myModal = new bootstrap.Modal(document.getElementById("exampleModal"), {});

    function openModal(stt) {
        myModal.show();
        var title = document.getElementById('modal-title');
        var body = document.getElementById('modal-body');
        var footer = document.getElementById('modal-footer');
        if (stt == 'mentor-bso') {
            title.innerHTML = `We're Hiring! Siapkan dirimu sebagai Tim Research Consultant Profesional bersama JKT ID.`;
            body.innerHTML = `

            <p>Selain menambah wawasan, kamu juga bisa mendapatkan penghasilan hingga jutaan rupiah. Fleksibel, di mana saja dan kapan saja.</p>
    <p>
        <ul>
           ✅️Teknik:
                <ul>
                    <li>Mesin</li>
                    <li>Industri</li>
                    <li>Listrik</li>
                    <li>Informatika</li>
                    <li>Sipil</li>
                    <li>Pertambangan</li>
                    <li>dan Teknik lainnya</li>
                </ul>

        </ul>
    </p>
            <p>Yuk gabung jadi Mentor Class Program sekarang!<br>
         <p>
        <ul>
            ✅️Administrasi Bisnis<br>
            ✅️Ilmu Komunikasi<br>
            ✅️Soshum<br>
            ✅️Ekonomi<br>
            ✅️Psikologi<br>
            ✅️Manajemen<br>
            ✅️Akuntansi<br>
            ✅️Kedokteran<br>
            ✅️Kesehatan<br>
            ✅️Farmasi<br>
            ✅️Dan Jurusan lainnya
        </ul>
    </p>
            </p>
            Kualifikasi:
- Minimal lulusan D4/S1 sesuai bidang di atas<br>
- Diutamakan S2 dan S3 untuk segala jurusan<br>
- Memiliki kemampuan menulis penelitian, riset dan karya ilmiah<br>
- Kemampuan publish jurnal (Poin Plus)<br>
- Jurusan Teknik Informatika diutamakan menguasai coding, pembuatan program/web dan Aplikasi<br>
- Memiliki kepribadian jujur, bertanggung jawab, dan komunikatif<br><br>

Benefit:<br>
-	Kerja by project<br>
-	Fleksibel dimana saja dan kapan saja<br>
-	Penghasilan yang menguntungkan hingga jutaan rupiah.<br><br>
            <p>Segera kirimkan berkas CV serta lamaran kerja terbaikmu melalui email jasakerjaintugasid@gmail.com atau <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZzF0kiRwg9D9Ns2y9SJrPuvFLGEIKxDjlGVoNRN3ZDujC3g/viewform" target="_blank" class="text-info">klik di sini</a></p>

            `;
            footer.style.display = 'none';
            // Set text color to white
            title.style.color = 'white';
            body.style.color = 'white';
            footer.style.color = 'white';
        } else {
            title.innerHTML = 'Loker belum tersedia.';
            body.style.display = 'none';
            footer.style.display = 'none';
        }
    };
</script>