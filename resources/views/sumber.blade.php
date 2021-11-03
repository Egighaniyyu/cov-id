<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- my font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/40b65501ed.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>

<body>

    {{-- navbar --}}
    <section id="navbar">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent user-select-none">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">cov.id</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link body-text" href="{{route('index')}}">Beranda</a>
                            <a class="nav-link body-text" href="{{route('provinsi')}}">Data Provinsi</a>
                            <a class="nav-link body-text" href="{{route('rs_rujukan')}}">Data RS Rujukan</a>
                            <a class="nav-link body-text" href="{{route('sumber')}}">Sumber Data</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section id="sumber_data">
        <div class="big-title text-center">
            <h1>Sumber Data</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/home.png" alt="stay home" class="img-sumber">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="title-rs mt-4">
                        <h3>Indonesia Covid-19 Update API dari Pemerintah Indonesia</h3>
                    </div>
                    <p class="body-text">
                        https://data.covid19.go.id/public/api/update.json
                    </p>
                    <div class="title-rs mt-2">
                        <h3>Indonesia Covid-19 Update per provinsi API dari Pemerintah Indonesia</h3>
                    </div>
                    <p class="body-text">
                        https://data.covid19.go.id/public/api/prov.json
                    </p>
                    <div class="title-rs mt-2">
                        <h3>Data RS Rujukan Covid-19 API dari Ariya Hidayat</h3>
                    </div>
                    <p class="body-text">
                        https://dekontaminasi.com/api/id/covid19/hospitals
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <section id="footer">
        <div class="bg-footer">
            <div class="container">
                <div class="row mb-footer">
                    <div class="col-sm-12 col-lg-4">
                        <div class="logo-footer">cov.id</div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="title">
                            <h3 class="text-white">Links</h3>
                            <div class="row links">
                                <div class="col">
                                    <a href="{{route('index')}}" class="nav-footer text-white body-text">Beranda</a>
                                    <a href="{{route('provinsi')}}" class="nav-footer text-white body-text">Data
                                        Provinsi</a>
                                </div>
                                <div class="col">
                                    <a href="{{route('rs_rujukan')}}" class="nav-footer text-white body-text">Data RS
                                        Rujukan</a>
                                    <a href="{{route('sumber')}}" class="nav-footer text-white body-text">Sumber
                                        Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-btm">
                    <div class="col-sm-12 col-lg-6 set-text">
                        <p class="body-text text-white ">@2021 | All Rights Reserved</p>
                    </div>
                    <div class="col-sm-12 col-lg-6 mr-auto link-text">
                        <p class="body-text text-white">Made With <span class="color-love"><i
                                    class="fas fa-heart"></i></span> By
                            <span><a href="#" class="link-egi body-text text-white">egighaniyyu</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>