<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <style>
                .search-button {
                    /* Gaya tombol lainnya */
                    cursor: pointer;
                    /* Menambahkan efek kursor tangan saat diarahkan ke tombol */
                    transition: background-color 0.3s ease;
                    /* Efek transisi untuk perubahan warna latar belakang */
                }

                .search-button:hover {
                    background-color: black;
                    /* Warna latar belakang saat kursor diarahkan ke tombol */
                }
            </style>

            <div class="masbro">
                <a href="/index"><img src="{{ asset('assets/img/logo/logo1.png') }}" class="logo" alt="Deskripsi Gambar"></a>
            </div>
            <!-- header.blade.php -->
            <!-- header.blade.php -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById("searchInput");
                    const searchResults = document.getElementById("searchResults");

                    // Fungsi untuk melakukan pencarian di dalam hero section
                    function searchInHeroSection() {
                        const searchTerm = searchInput.value.toLowerCase();
                        const heroSection = document.getElementById("hero");
                        const heroOffset = heroSection.offsetTop + heroSection.offsetHeight;

                        // Membersihkan hasil pencarian sebelumnya
                        searchResults.innerHTML = "";

                        let hasResults = false;

                        const text = heroSection.textContent.toLowerCase();
                        if (text.includes(searchTerm)) {
                            const clone = heroSection.cloneNode(true);
                            searchResults.appendChild(clone);
                            hasResults = true;
                        }

                        if (!hasResults) {
                            // Tambahkan logika untuk menampilkan pesan "tidak ada hasil" jika diperlukan
                        }

                        // Gulir ke bawah section content
                        window.scrollTo({
                            top: heroOffset,
                            behavior: 'smooth'
                        });
                    }

                    // Fungsi untuk melakukan pencarian di seluruh konten
                    function search() {
                        const searchTerm = searchInput.value.toLowerCase();
                        const contentSections = document.querySelectorAll("[data-section='index']");
                        const firstSection = contentSections[0];
                        const firstSectionOffset = firstSection.offsetTop;

                        // Membersihkan hasil pencarian sebelumnya
                        searchResults.innerHTML = "";

                        let hasResults = false;

                        contentSections.forEach(section => {
                            const text = section.textContent.toLowerCase();
                            if (text.includes(searchTerm)) {
                                const clone = section.cloneNode(true);
                                searchResults.appendChild(clone);
                                hasResults = true;
                            }
                        });

                        if (!hasResults) {
                            searchInHeroSection();
                        }

                        // Gulir ke bawah section content jika tidak ada hasil di section index
                        if (!hasResults) {
                            window.scrollTo({
                                top: firstSectionOffset,
                                behavior: 'smooth'
                            });
                        }
                    }

                    // Menjalankan fungsi pencarian setiap kali nilai input berubah
                    searchInput.addEventListener("input", search);

                    // Check if there's a query parameter in the URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const queryFromURL = urlParams.get('query');
                    if (queryFromURL) {
                        // Set the search input value to the query parameter
                        searchInput.value = decodeURIComponent(queryFromURL);
                        // Perform search on page load
                        search();
                    }

                    // jQuery code to handle form submission
                    $('#searchForm').submit(function(event) {
                        event.preventDefault();

                        // Get the value from the input field
                        var query = $('#searchInput').val();

                        // Update the URL with the new query parameter
                        history.pushState(null, null, '/index?query=' + encodeURIComponent(query));

                        // Perform search
                        search();
                    });
                });
            </script>


            <form class="search-form" action="/search" method="get">
                <input class="search-input" type="text" id="query" name="query" placeholder="Apa yang sedang kamu cari?">
                <button class="search-button" type="submit">CARI</button>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const searchForm = document.getElementById('searchForm');
                    const searchInput = document.getElementById('query');

                    searchForm.addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent the default form submission

                        const query = searchInput.value.trim();

                        if (query !== '') {
                            // Redirect to the search endpoint with the query parameter
                            window.location.href = `/search?query=${query}`;
                        }
                    });
                });
            </script>


            <!-- Your header content goes here -->
            {{-- <a href="/tentang" class=""><i style="padding:10px;">Tentang</i>|</a>
            <a href="#" class="facebook"><i style="padding:10px;">FAQ</i> |</a>
            <a href="https://www.youtube.com/channel/UCjpX70gVQp0iUfHjrDxFhqQ" target='_blank'><i class="bi bi-youtube"style="padding:10px;"></i></a>
            <a href="https://www.instagram.com/classprogram.id/" target='_blank'><i class="bi bi-instagram"style="padding:10px;"></i></a>
            <a href="https://www.tiktok.com/@classprogram" target='_blank'><i class="bi bi-tiktok"style="padding:10px;"></i></i></a>
            <a href="mailto:classprogram.id@gmail.com" target='_blank'><i class="bi bi-envelope"style="padding:10px;"></i></i></a> --}}
        </div>
        <div class="social-links d-none d-md-flex align-items-center" style="color: blue;">
            @auth
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- <a class="dropdown-toggle " href="javascript:void(0)" data-toggle="dropdown">
                            <i class="fas fa-user mr-2"></i> &nbsp;<span>{{ auth()->user()->name }}</span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>
                        </a> -->

                <a type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#09326f;">
                    <!--<i class="fas fa-user mr-2"></i> &nbsp;<span>{{auth()->user()->name}}</span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>-->
                    <i class="fas fa-user mr-2"></i> &nbsp;<span>{{ str_limit(auth()->user()->name, 11, '...') }}
                    </span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>


                </a>


                <!-- Add this style tag to your existing styles -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px; z-index: 1000;">
                    <div class="modal-dialog" style="color: #09326f;">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel"><i class="nav-icon fas fa-user my-1 btn-sm-1"></i>
                                        &nbsp;Profil Pengguna</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><label for="nama">Nama </label></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <h6><label for="nama"> : {{auth()->user()->name}}</label></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><label for="nama">Email </label></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <h6><label for="nama"> : {{auth()->user()->email}}</label></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-3">
                                                    <h6><label for="nama">Keluar </label></h6>
                                                </div> -->
                                        <div class="col-md-12">
                                            <h6>
                                                <label for="nama">
                                                    <a href="#" style="width: 100px; color: #09326f; margin-left:-1px; margin-top:-20px;" onclick="showLogoutConfirmation()">
                                                        <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                                                    </a>
                                                </label>
                                            </h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">TUTUP</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Konfirmasi Keluar -->
                <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasiModalLabel" aria-hidden="true" style="margin-top:100px;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Keluar</h5>

                            </div>
                            <div class="modal-body text-center">
                                <i class="bi bi-escape" style="font-size: 50px; margin-bottom: 10px;"></i>
                                <p>Apakah Anda yakin ingin keluar dari sistem?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="/logout" class="btn btn-danger" style="height: 38px; display: flex; align-items: center; justify-content: center;">
                                    Keluar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Memuat jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- Memuat Bootstrap JavaScript -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

                <script>
                    function showLogoutConfirmation() {
                        // Menutup model utama
                        $('#exampleModal').modal('hide');

                        // Menampilkan model konfirmasi keluar
                        $('#konfirmasiModal').modal('show');
                    }
                </script>

            </ul>
            <!-- Button trigger modal -->
            <button class="bi bi-bell-fill" data-bs-toggle="modal" data-bs-target="#notif" style="color: #09326f; margin-left:30px; font-size:21px; margin-top:15px; background-color:#fff; border-inline: none; border-block:none; position: relative;">
                <!-- Ikon lonceng notifikasi -->
                <span class="iconify" data-icon="bi:bell-fill" style="margin-right: 5px;"></span>

                <!-- Nomor checkout -->
                <span class="checkout-number" style="position: absolute; top: -5px; right: -5px; background-color: red; color: white; border-radius: 50%; padding: 3px 6px; font-size: 12px;">
                    3 <!-- Gantilah angka ini dengan nomer checkout aktual -->
                </span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="notif" aria-labelledby="notif" style="margin-top:100px;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="notif">Paket yang Anda Pilih</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card" style="height: 100px;">
                                {{-- <img src="path/to/image1.jpg" class="card-img-top" alt="Card Image 1"> --}}
                                <div class="card-body">
                                    <h5 class="card-title" style="margin-top: -10px; margin-bottom:0 !important;">Bimbingan Skripsi Online</h5>
                                    <p class="card-text" style="font-size:12px;margin-bottom: 10px; ">Jangan nyicil</p>
                                    <button type="button" class="btn btn-primary" style="font-size:10px">Bayar sekarang</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="login-button">
                    <div class="login-btn" style="margin-bottom:12px;margin-left:10px;"><a href="/login">Masuk</a></div>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</section>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <img src="assets/img/logo/logo1.png"class="img-fluid" alt=""> -->

        {{-- <a href="index.php" ><img src="/public/assets/img/logo/logo1.png"class="logo" alt="Deskripsi Gambar"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/index" style="margin-right:30px">Home</a></li>
                <li class="dropdown"><a style="cursor: pointer;"><span>Produk</span> <i class="bi bi-chevron-down nav-link scrollto active" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="nonaktif">Kelas Tugas Kuliah (KTK)</a></li>
                        <li><a class="nav-link scrollto" href="bimbangan-mata-kuliah-jurusan">Bimbingan Mata Kuliah Jurusan (BMJ)</a></li>
                        <li><a class="nav-link scrollto" href="bimbingan-skripsi-online">Bimbingan Skripsi Online (BSO)</a></li>
                        <li><a class="nav-link scrollto" href="nonaktif">Kelas Persiapan Karir (KPK)</a></li>
                        <!-- href="kelas-persiapan-karir" -->
                    </ul>
                </li>
                <li class="dropdown"><a style="cursor: pointer;"><span>Workshop</span> <i class="bi bi-chevron-down nav-link scrollto active" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="nonaktif">KTI</a></li>
                        <li><a class="nav-link scrollto" href="skripsi">Skripsi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a style="cursor: pointer;"><span>Creative Class</span> <i class="bi bi-chevron-down nav-link scrollto active" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="nonaktif">Kelas Adobe Photoshop</a></li>
                    </ul>
                </li>
                {{-- <li class="dropdown"><a style="cursor: pointer;"><span>Lainnya</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                <ul style="border-radius: 15px;">
                  <li><a class="nav-link scrollto" href="/tentang">Tentang Kami</a></li>
                  <li><a class="nav-link scrollto" href="/kontak">Kontak</a></li>
                  <li><a class="nav-link scrollto" href="#">FAQ</a></li>
                </ul>
              </li>               --}}

                <!-- <li><a class="nav-link scrollto" href="nonaktif" style="margin-right:30px">Artikel</a></li> -->
                <li><a class="nav-link scrollto" href="#konsultasi" style="margin-right:30px">Alur bimbingan</a></li>

                <li><a class="nav-link scrollto" href="#testimonials" style="margin-right:30px">Mentor</a></li>
                <li><a class="nav-link scrollto" href="#testibaru" style="margin-right:30px">Testimoni</a></li>
                <li><a class="nav-link scrollto" href="#faq" style="margin-right:30px">FAQ</a></li>
                {{-- <li><a class="nav-link scrollto" href="/"style="margin-right:30px">Artikel</a></li> --}}
                {{-- <div class="search-container">
                    <button id="search-button" class="search-icon">
                      <img src="{{ asset('assets/img/logo/cari.png') }}" alt="Search">
                </button>
                <button id="close-button" class="close-icon">
                    <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Close">
                </button>
                <div id="search-dropdown" class="search-dropdown">
                    <div class="search-bar">
                        <input type="text" id="search-input" placeholder="Cari...">
                        <button id="search-submit" class="search-submit">
                            <img src="{{ asset('assets/img/logo/cari.png') }}" alt="Search" style="width: 20px;">
                        </button>
                    </div> --}}
                    <!--<ul id="search-results" class="search-results">
                            Hasil pencarian akan ditampilkan di sini
                        </ul>-->
                </div>
    </div>
    </li>

    {{-- <li>
                  <div class="cart-container">
                    <button id="cart-button" class="cart-icon">
                        <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="keranjang">
    </button>
    <div id="cart-dropdown" class="cart-dropdown">
        <ul id="cart-items" class="cart-items">
            <li class="cart-item">
                <div class="item-details">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
                    </div>
                    <div class="item-info">
                        <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                        <p class="item-price"><span>1X </span>$10</p>
                    </div>
                    <button class="remove-item-button">
                        <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
                    </button>
                </div>
            </li>
            <li class="cart-item">
                <div class="item-details">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
                    </div>
                    <div class="item-info">
                        <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                        <p class="item-price"><span>1X </span>$10</p>
                    </div>
                    <button class="remove-item-button">
                        <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
                    </button>
                </div>
            </li>
            <li class="cart-item">
                <div class="item-details">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
                    </div>
                    <div class="item-info">
                        <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                        <p class="item-price"><span>1X </span>$10</p>
                    </div>
                    <button class="remove-item-button">
                        <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
                    </button>
                </div>
            </li>
        </ul>
        <hr>
        <button id="checkout-button" class="checkout-button" style="margin-bottom:15px">Checkout</button>
    </div>
    </div>
    </li> --}}


    <!--<ul style="border-radius: 2px;">
                <li><a class="nav-link scrollto" href="/tentang">Login</a></li>
                  <li><a class="nav-link scrollto" href="/kontak">logout</a></li>
                </ul>      -->
    </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    {{-- <div class="content">
        </div> --}}

</header>
<header id="marquee-container">
    <div class="stop">
        <div class="ok">
            <div class="stopp"><b>TESTIMONI </b></div>
        </div>
    </div>
    <marquee id="marquee">
        <ul>
            <li>Magdalena Melisa: Dengan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen pembimbing jadi ngalir gitu aja banyak ide muncul.</li>
            <li>Adinda Cahayani Supriyanto: Saya sangat berterima kasih pada BSO karena sudah menyediakan program bimbingan skripsi online yang berkualitas dan juga ramah dikantong.</li>
            <li>Napa Lestari: Dengan mengikuti BSO skripsi saya selesai lebih cepat.</li>
            <li>Hanifah Alya Mu'adzah: Mentornya baik-baik dan kalau jelasin materi rinci, bukan hanya mentor namun adminnya juga the best.</li>
            <li>Puji: Menambah ilmu baru, wawasan, santai, disiplin, manajemen waktu baik.</li>
        </ul>
    </marquee>

</header>

<style>
    /* Gaya tambahan untuk elemen hasil pencarian */
    #searchResults {
        position: absolute;
        top: 80px;
        /* Sesuaikan dengan tinggi elemen #topbar dan elemen header Anda */
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        /* Lebih tinggi dari z-index elemen #header */
        display: none;
        /* Sembunyikan secara default */
    }

    #searchResults.active {
        display: block;
        /* Tampilkan ketika memiliki kelas "active" */
    }

    #topbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .modal-backdrop {
        z-index: 500;
        /* Ensure a higher z-index than the modal */
    }

    .modal {
        z-index: 1000;
        /* Ensure a higher z-index than the modal backdrop */
    }

    #header {
        position: fixed;
        top: 60px;
        /* Adjust this value based on the height of your #topbar */
        z-index: 1000;
        width: 100%;
    }

    #marquee-container {
        position: fixed;
        top: 120px;
        width: 100%;
        z-index: 2;
    }
</style>
</div>

<script>
    // Untuk Menampilkan Button kembali
    function viewKembali() {
        var button = document.getElementById("kembali");

        if (button.style.display === "none") {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    }
    // end Untuk Menampilkan Button kembali

    // Untuk Menampilkan Button Bayar
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("pilih[]");
        // Get the output text
        var text = document.getElementById("bayar");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
    // end Untuk Menampilkan Button Bayar

    $(function() {
        $("#tabelSuratmasuk").DataTable();
        $("#tabelSuratkeluar").DataTable();
        $("#tabelAgendaMasuk").DataTable();
        $("#tabelAgendaKeluar").DataTable();
        $("#tabelTagihan").DataTable();
        $("#tabelKlasifikasi").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
        $("#tabelTagihanInvoice1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#tabelTagihanInvoice2").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });

        $("#agenda").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#agenda2").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#notOrdering").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
    });

    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    });

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //   const searchIcon = document.getElementById('search-button');
    //   const closeIcon = document.getElementById('close-button');
    //   const searchDropdown = document.getElementById('search-dropdown');
    //   const searchInput = document.getElementById('search-input');
    //   const searchSubmit = document.getElementById('search-submit');
    //   const searchResults = document.getElementById('search-results');

    //   searchIcon.addEventListener('click', function() {
    //       toggleSearch();
    //   });

    //   closeIcon.addEventListener('click', function() {
    //       toggleSearch();
    //   });

    //   function toggleSearch() {
    //       if (searchDropdown.style.display === 'block') {
    //           searchDropdown.style.opacity = '0';
    //           searchDropdown.style.transform = 'translateY(-10px)';
    //           closeIcon.style.display = 'none';
    //           searchIcon.style.display = 'block';
    //           setTimeout(function() {
    //               searchDropdown.style.display = 'none';
    //           }, 300);
    //       } else {
    //           searchDropdown.style.display = 'block';
    //           closeIcon.style.display = 'block';
    //           searchIcon.style.display = 'none';
    //           setTimeout(function() {
    //               searchDropdown.style.opacity = '1';
    //               searchDropdown.style.transform = 'translateY(0)';
    //               searchInput.focus();
    //           }, 10);
    //       }
    //   }

    //   searchSubmit.addEventListener('click', function() {
    //       // Lakukan pencarian atau tindakan lainnya di sini
    //   });

    //   document.addEventListener('click', function(event) {
    //       if (!searchDropdown.contains(event.target) && !searchIcon.contains(event.target)) {
    //           searchDropdown.style.opacity = '0';
    //           searchDropdown.style.transform = 'translateY(-10px)';
    //           closeIcon.style.display = 'none';
    //           searchIcon.style.display = 'block';
    //           setTimeout(function() {
    //               searchDropdown.style.display = 'none';
    //           }, 300);
    //       }
    //   });
    // });



    document.addEventListener('DOMContentLoaded', function() {
        const cartItems = document.getElementById('cart-items');
        const cartButton = document.getElementById('cart-button');
        const cartDropdown = document.getElementById('cart-dropdown');

        cartButton.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseleave', function(event) {
            if (!cartButton.contains(event.relatedTarget)) {
                closeCart();
            }
        });

        function openCart() {
            cartDropdown.style.display = 'block';
            setTimeout(function() {
                cartDropdown.style.opacity = '1';
                cartDropdown.style.transform = 'translateY(0)';
            }, 10);
        }

        function closeCart() {
            cartDropdown.style.opacity = '0';
            cartDropdown.style.transform = 'translateY(10px)';
            setTimeout(function() {
                cartDropdown.style.display = 'none';
            }, 300);
        }
        cartButton.addEventListener('click', function() {
            toggleCart();
        });

        function toggleCart() {
            if (cartDropdown.style.display === 'block') {
                cartDropdown.style.opacity = '0';
                cartDropdown.style.transform = 'translateY(10px)';
                setTimeout(function() {
                    cartDropdown.style.display = 'none';
                }, 300);
            } else {
                cartDropdown.style.display = 'block';
                setTimeout(function() {
                    cartDropdown.style.opacity = '1';
                    cartDropdown.style.transform = 'translateY(0)';
                }, 10);
            }
        }

        function addItemToCart(itemName) {
            const newItem = document.createElement('div');
            newItem.textContent = itemName;
            newItem.className = 'cart-item'; // Menambahkan kelas CSS
            cartItems.appendChild(newItem); // Menambahkan item di akhir daftar
        }

        // Contoh penggunaan
        const addButton = document.getElementById('add-to-cart-button');
        addButton.addEventListener('click', function() {
            const itemName = prompt('Masukkan nama item:');
            if (itemName) {
                addItemToCart(itemName);
            }
        });
    });




    var marquee = document.getElementById("marquee");
    var marqueeContainer = document.getElementById("marquee-container");

    function resetMarqueePosition() {
        marquee.style.transform = "translateX(100%)";
        setTimeout(function() {
            var transitionDuration = "10s"; // Ganti dengan durasi yang diinginkan (misalnya, "30s" untuk 30 detik)
            marquee.style.transition = "transform " + transitionDuration;
            marquee.style.transform = "translateX(0)";
            void marquee.offsetWidth; // Trigger reflow
            marquee.style.transition = "transform " + transitionDuration; // Remove the transition
        }, 1);
    }


    function handleScroll() {
        var header = document.getElementById("header");
        var headerHeight = header.offsetHeight;

        if (window.scrollY > headerHeight) {
            marqueeContainer.style.position = "fixed";
            marqueeContainer.style.top = "-20px";
        } else {
            marqueeContainer.style.position = "relative";
            marqueeContainer.style.top = "";
        }
    }

    // Panggil resetMarqueePosition() saat halaman dimuat
    window.addEventListener("load", resetMarqueePosition);

    // Panggil handleScroll() saat halaman dimuat (untuk menyesuaikan tampilan awal)
    window.addEventListener("load", handleScroll);

    // Panggil resetMarqueePosition() saat marquee selesai berjalan
    marquee.addEventListener("animationiteration", resetMarqueePosition);

    // Tambahkan event listener untuk memantau scroll
    window.addEventListener("scroll", handleScroll);
</script>


<main>
    @yield('content')
</main>

@include('layout.footer')