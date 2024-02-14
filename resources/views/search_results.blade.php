<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Include Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slenco:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>
@extends('layout.header')
@section('content')

<body>
    <!-- Modal -->
    <style>
        @keyframes cryAnimation {

            0%,
            100% {
                transform: translate(-10px, 0);
            }

            50% {
                transform: translate(10px, 10px);
            }
        }

        .animated-icon {
            animation: cryAnimation 2s infinite ease-in-out;
        }
    </style>

    <div class="modal-body" style="margin: 10px; margin-top:150px;">
        @if($results->isEmpty())

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-light">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="searchResultsModalLabel">Hasil Pencarian untuk '{{ $query }}'</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <i class="fas fa-sad-tear fa-5x text-primary mb-3 animated-icon"></i>
                        <p class="lead"><b>Tidak ada hasil ditemukan.</b></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script to trigger the modal on page load -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                myModal.show();
            });
        </script>


        @else
        <div class="row">
            @foreach($results as $result)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $result->judul }}</h5>
                        <!-- Display $result->isi without <p> tags -->
                        <p class="card-text">{!! $result->isi !!}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori: {{ $result->ket }}</li>
                        <!-- <li class="list-group-item">Dibuat pada: {{ $result->created_at->format('Y-m-d H:i:s') }}</li> -->
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>


    <script>
        // JavaScript to trigger the modal
        $('#searchResultsModal').modal('show');
    </script>
    <!-- end search -->

</body>

</html>
@endsection