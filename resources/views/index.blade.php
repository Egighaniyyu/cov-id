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
  <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Quicksand:wght@700&display=swap" rel="stylesheet">

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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link body-text" href="#">Beranda</a>
              <a class="nav-link body-text" href="{{route('provinsi')}}">Data Provinsi</a>
              <a class="nav-link body-text" href="{{route('rs_rujukan')}}">Data RS Rujukan</a>
              <a class="nav-link body-text" href="{{route('sumber')}}">Sumber Data</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>

  {{-- jumbotron --}}
  <section id="jumbo">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-sm-12 jmb-text">
          <h1>Ayo! Cegah <span class="text-blue">Covid-19</span> Dengan Mematuhi <span class="text-blue">Protokol
              Kesehatan</span></h1>
          <p class="body-text">Lindungi diri anda dan keluarga anda dari covid-19 dengan disiplin 3M</p>
          <a class="btn btn-solid body-text" href="{{route('provinsi')}}">Lihat Data Provinsi</a>
          <a class="btn btn-outline body-text" href="{{route('rs_rujukan')}}">Lihat RS Rujukan</a>
        </div>
        <div class="col-lg-5 col-sm-12">
          <img src="img/jmb1.png" alt="jumbo" class="img-jumbo">
        </div>
      </div>
    </div>
  </section>

  {{-- data indonesia --}}
  <section id="data-indo">
    <div class="container">
      <div class="title">
        <h3>Covid-19</h3>
      </div>
      <div class="big-title">
        <h1>Data Indonesia</h1>
      </div>
      <div class="row">
        <div class="col case-penambahan-positif">
          <p class="body-text">Penambahan Kasus Positif</p>
          <h3 class="data-text">{{number_format($dataIndo['update']['penambahan']['jumlah_positif'],0,"",".")}}</h3>
        </div>
        <div class="col case-positif">
          <p class="body-text">Total Positif</p>
          <h3 class="data-text">{{number_format($dataIndo['update']['total']['jumlah_positif'],0,"",".")}}</h3>
        </div>
        <div class="col case-sembuh">
          <p class="body-text">Total Sembuh</p>
          <h3 class="data-text">{{number_format($dataIndo['update']['total']['jumlah_sembuh'],0,"",".")}}</h3>
        </div>
        <div class="col case-meninggal">
          <p class="body-text">Total Meninggal</p>
          <h3 class="data-text">{{number_format($dataIndo['update']['total']['jumlah_meninggal'],0,"",".")}}</h3>
        </div>
      </div>
      <p class="body-text up-text">Update terakhir : <span
          class="update-text">{{$dataIndo['update']['penambahan']['created']}}</span></p>
    </div>
  </section>

  {{-- virus corona --}}
  <section id="sec-corona">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <img src="img/img-cov.png" alt="covid" class="img-covid">
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="title">
            <h3>Apa itu</h3>
          </div>
          <div class="big-title">
            <h1>Virus Corona</h1>
          </div>
          <p class="body-text">
            Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini
            hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi
            pernapasan berat, seperti infeksi paru-paru (pneumonia).

            Dari sekian banyak varian mutasi virus corona, varian delta lebih mudah menular sebesar 60 persen
            dibandingkan varian alfa. Hal ini dikarenakan beberapa mutasi pada protein yang memungkinkan virus mampu
            menembus dan menginfeksi sel sehat. Hingga saat ini, varian delta sudah menyebar di sekitar 80 negara dunia,
            termasuk Indonesia.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- gejala --}}
  <section id="gejala">
    <div class="container">
      <div class="title">
        <h3>Covid-19</h3>
      </div>
      <div class="big-title">
        <h1>Gejala Umum</h1>
      </div>
      <div class="row">
        <div class="col card-gejala">
          <img src="img/sakitkepala.png" alt="sakit kepala">
          <div class="title">
            <h3>Sakit kepala</h3>
          </div>
        </div>
        <div class="col card-gejala">
          <img src="img/sakittenggorokan.png" alt="sakit tenggorokan">
          <div class="title ">
            <h3 class="">Sakit Tenggorokan</h3>
          </div>
        </div>
        <div class="col card-gejala">
          <img src="img/demam.png" alt="demam">
          <div class="title">
            <h3>Demam Tinggi</h3>
          </div>
        </div>
        <div class="col card-gejala">
          <img src="img/batuk.png" alt="batuk">
          <div class="title">
            <h3>Batuk Kering</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- pencegahan --}}
  <section id="pencegahan">
    <div class="container">
      <div class="title">
        <h3>Covid-19</h3>
      </div>
      <div class="big-title">
        <h1>Pencegahan</h1>
      </div>
      <div class="d-flex flex-column flex-lg-row flex-rev">
        <div>
          <img src="img/masker.png" alt="masker" class="img-pencegahan">
        </div>
        <div>
          <table>
            <tr>
              <td>
                <div class="number"><span>01</span></div>
              </td>
              <td>
                <h1 class="title-pencegahan">Pakai Masker</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td class="w-90">
                <p class="body-text text-pencegahan">Masker menjadi salah satu alat pelindung diri yang tak boleh kita
                  lepaskan saat
                  berada di luar rumah. Masker digunakan untuk mencegah penularan virus corona. Ada beberapa tipe masker
                  yang bisa digunakan yakni masker sekali pakai atau masker bedah, masker kain dua lapis hingga masker
                  N95.

                  Pastikan masker setiap hari diganti. Dan jangan menurunkan masker di dagu karena ini akan membuat
                  masker bisa saja terkena paparan bakteri atau virus.</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="d-flex flex-column flex-lg-row flex-rev">
        <div>
          <table>
            <tr>
              <td>
                <div class="number"><span>02</span></div>
              </td>
              <td>
                <h1 class="title-pencegahan">Mencuci Tangan</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td class="w-90">
                <p class="body-text text-pencegahan">Mencuci tangan dengan benar adalah cara paling sederhana namun
                  efektif untuk mencegah penyebaran virus 2019-nCoV. Cucilah tangan dengan air mengalir dan sabun,
                  setidaknya selama 20 detik. Pastikan seluruh bagian tangan tercuci hingga bersih, termasuk punggung
                  tangan, pergelangan tangan, sela-sela jari, dan kuku. Setelah itu, keringkan tangan menggunakan tisu,
                  handuk bersih, atau mesin pengering tangan.</p>
              </td>
            </tr>
          </table>
        </div>
        <div>
          <img src="img/cucitangan.png" alt="cuci tangan" class="img-pencegahan">
        </div>
      </div>
      <div class="d-flex flex-column flex-lg-row flex-rev">
        <div>
          <img src="img/jagajarak.png" alt="jaga jarak" class="img-pencegahan">
        </div>
        <div>
          <table>
            <tr>
              <td>
                <div class="number"><span>03</span></div>
              </td>
              <td>
                <h1 class="title-pencegahan">Jaga Jarak</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td class="w-90">
                <p class="body-text text-pencegahan">Social distancing atau menjaga jarak aman tetap harus dilakukan.
                  Jaga jarak yang disarankan adalah setidaknya 1 meter antara kamu dan orang lain.

                  Social distancing dilakukan agar ketika seseorang batuk atau bersin, mereka menyemprotkan tetesan
                  cairan kecil melalui hidung atau mulut yang mungkin mengandung virus. Jadi jika terlalu dekat, bisa
                  saja kamu menghirup tetesan air ataupun virus yang ada dalam air liur orang tersebut.</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  {{-- quote --}}
  <section id="quote">
    <div class="container bg-quote">
      <div class="row">
        <div class="col-sm-12 col-lg-6 ">
          <h1 class="big-title text-white">“ Aku Pakai Masker Supaya Virusnya Kalah “</h1>
        </div>
        <div class="col-sm-12 col-lg-6">
          <img src="img/shield.png" alt="shield" class="img-quote">
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
                  <a href="{{route('provinsi')}}" class="nav-footer text-white body-text">Data Provinsi</a>
                </div>
                <div class="col">
                  <a href="{{route('rs_rujukan')}}" class="nav-footer text-white body-text">Data RS Rujukan</a>
                  <a href="{{route('sumber')}}" class="nav-footer text-white body-text">Sumber Data</a>
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
            <p class="body-text text-white">Made With <span class="color-love"><i class="fas fa-heart"></i></span> By
              <span><a href="#" class="link-egi body-text text-white">egighaniyyu</a></span></p>
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