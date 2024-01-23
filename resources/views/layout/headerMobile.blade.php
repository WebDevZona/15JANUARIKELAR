
<section id="topbar" class="d-flex align-items-center" >
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/" style="margin-right:30px">Home</a></li>
                    <li class="dropdown"><a style="cursor: pointer;"><span>Produk</span> <i class="bi bi-chevron-down nav-link scrollto active" style="margin-left:-10px;"></i></a>
                        <ul style="border-radius: 15px;">
                            <li><a class="nav-link scrollto" href="nonaktif">Kelas Tugas Kuliah (KTK)</a></li>
                            <li><a class="nav-link scrollto" href="bimbangan-mata-kuliah-jurusan">Bimbingan Mata Kuliah Jurusan (BMJ)</a></li>
                            <li><a class="nav-link scrollto" href="bimbingan-skripsi-online">Bimbingan Skripsi Online (BSO)</a></li>
                            <li><a class="nav-link scrollto" href="kelas-persiapan-karir">Kelas Persiapan Karir (KPK)</a></li>
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

                    <li><a class="nav-link scrollto" href="#konsultasi" style="margin-right:30px">Alur bimbingan</a></li>

                    <li><a class="nav-link scrollto" href="#testimonials" style="margin-right:30px">Mentor</a></li>
                    <li><a class="nav-link scrollto" href="#testibaru" style="margin-right:30px">Testimoni</a></li>
                    <li><a class="nav-link scrollto" href="#faq" style="margin-right:30px">FAQ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                <div class="close-nav"></div>
            </nav>
        </div>
    </header>
</section>
<style>
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

<main>
    @yield('content')
</main>

@include('layout.footerMobile')
