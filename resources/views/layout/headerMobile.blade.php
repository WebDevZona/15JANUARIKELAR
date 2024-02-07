<!-- Header Section -->
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
        </a>
        <div id="header" class="d-flex align-items-center" style="margin-top: -5px;">
            <div class="container d-flex align-items-center justify-content-between">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/" class="nav-link scrollto">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link scrollto">
                                <span>Produk</span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul>
                                <li><a href="nonaktif" class="nav-link scrollto">Kelas Tugas Kuliah (KTK)</a></li>
                                <li><a href="bimbangan-mata-kuliah-jurusan" class="nav-link scrollto">Bimbingan Mata Kuliah Jurusan (BMJ)</a></li>
                                <li><a href="bimbingan-skripsi-online" class="nav-link scrollto">Bimbingan Skripsi Online (BSO)</a></li>
                                <li><a href="kelas-persiapan-karir" class="nav-link scrollto">Kelas Persiapan Karir (KPK)</a></li>
                            </ul>
                        </li>
                        <!-- Tambahkan Menu Lainnya -->
                        <li class="dropdown">
                            <a href="#" class="nav-link scrollto">
                                <span>Workshop</span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul>
                                <li><a href="nonaktif" class="nav-link scrollto">KTI</a></li>
                                <li><a href="skripsi" class="nav-link scrollto">Skripsi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link scrollto">
                                <span>Creative Class</span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul>
                                <li><a href="nonaktif" class="nav-link scrollto">Kelas Adobe Photoshop</a></li>
                            </ul>
                        </li>
                        <li><a href="#konsultasi" class="nav-link scrollto">Alur bimbingan</a></li>
                        <li><a href="#testimonials" class="nav-link scrollto">Mentor</a></li>
                        <li><a href="#testibaru" class="nav-link scrollto">Testimoni</a></li>
                        <li><a href="#faq" class="nav-link scrollto">FAQ</a></li>
                        <li><a href="/login" class="nav-link scrollto">Masuk</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                    <div class="close-nav"></div>
                </nav>
            </div>
        </div>
    </div>
</nav>

<!-- Marquee Section -->
<header id="marquee-container">
    <div class="stop">
        <div class="ok">
            <div class="stopp"><b>TESTIMONI </b></div>
        </div>
    </div>
    <marquee id="marquee">
        <ul>
            <li>Magdalena Melisa: Dengan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen pembimbing jadi ngalir gitu aja banyak ide muncul.</li>

        </ul>
    </marquee>
</header>

<style>
    body {
        padding-top: 10px;
        /* Sesuaikan dengan ukuran yang diinginkan */
    }

    #header {
        margin-top: 0;
        /* Hapus atau atur ke nilai positif jika diperlukan */
    }

    .navbar {
        /* Gaya untuk tampilan desktop */
    }



    .nav-open ul {
        display: block;
    }

    .mobile-nav-toggle {
        /* Gaya untuk ikon burger di tampilan mobile */
    }

    .close-nav {
        /* Gaya untuk tombol silang */
        display: none;
        /* Sembunyikan tombol silang secara default */
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
    }
</style>

<script>
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

        // Tambahkan event listener untuk menutup navbar
        const closeNavButton = document.querySelector('.close-nav');
        closeNavButton.addEventListener('click', function() {
            closeNav();
        });

        function closeNav() {
            // Tambahkan logika untuk menutup navbar sesuai kebutuhan Anda
            // Misalnya, jika Anda menggunakan class 'nav-open', maka:
            document.getElementById('navbar').classList.remove('nav-open');
        }

        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        mobileNavToggle.addEventListener('click', function() {
            toggleMobileNav();
        });

        function toggleMobileNav() {
            // Tambahkan logika untuk membuka dan menutup navbar sesuai kebutuhan Anda
            // Misalnya, jika Anda menggunakan class 'nav-open', maka:
            document.getElementById('navbar').classList.toggle('nav-open');
        }
    });
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ...
        // (Script yang sudah ada sebelumnya)

        // Tambahkan script untuk menutup navbar
        const closeNavButton = document.querySelector('.close-nav');
        closeNavButton.addEventListener('click', function() {
            closeNav();
        });

        function closeNav() {
            navbar.classList.remove('nav-open');
        }

        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        mobileNavToggle.addEventListener('click', function() {
            toggleMobileNav();
        });

        function toggleMobileNav() {
            navbar.classList.toggle('nav-open');
            closeNavButton.style.display = 'block'; // Tampilkan tombol silang
        }
    });
</script>

<script>
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

@include('layout.footerMobile')