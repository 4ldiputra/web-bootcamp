@extends('layouts.main')

@section('container')
<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    <!-- link css -->
    <link rel="stylesheet" href="style.css"/>
    
     
    <title>Website Ftj</title>
  </head>
  <body>

<!-- search -->
<div class="container mt-5">
<form class="d-flex " role="search">
        <input class="form-control me-2 border border-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
<!-- akhir search -->


        <div id="carouselExampleAutoplaying" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/BANNER1.png') }}" class="d-block w-100 rounded-2" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/BANNER2.png') }}" class="d-block w-100 rounded-2" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/BANNER3.png') }}" class="d-block w-100 rounded-2" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


<!-- grafis -->
<div class="container">
  <div class="card mt-5 border border-2" style="max-width: 70rem;">
    <div class="row">
      <div class="col-md-4 ms-md-5">
        <img src="img/grafis.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-4 offset-md-2 mt-5">
        <h2 class="ms-2">Gabung Bersama Kami untuk Merayakan Hidup Sehat!</h2>
        <p class="ms-2">Bersama Kita, Setiap Hari Adalah Kesempatan untuk Meningkatkan Kesehatan</p>
        <button type="button" class="btn btn-primary ms-2 mb-3"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
          Lihat Lainnya
        </button>
      </div>
    </div>
  </div>
</div>



<!-- Akhir grafis -->

<!-- card -->
<div class="container mt-5">
  <h2>Rekomendasi</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/card1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tips Mudah untuk Meningkatkan Kualitas Tidur Anda</h5>
        <p class="card-text">Tidur berkualitas sangat penting bagi kesehatan secara keseluruhan. Artikel ini memberikan tips sederhana yang dapat membantu Anda tidur lebih nyenyak, seperti <a class="link-offset-2 link-underline link-underline-opacity-0" href="#">baca selengkapnya...</a></p>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/card2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kesehatan Mental di Era Digital: Menjaga Keseimbangan Penggunaan Teknologi</h5>
        <p class="card-text">Peningkatan penggunaan teknologi dapat berdampak pada kesehatan mental, termasuk gejala kecemasan dan depresi. Artikel ini <a class="link-offset-2 link-underline link-underline-opacity-0" href="#"> baca selengkapnya...</a></p>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/card3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pentingnya Kesehatan Mata: Tips Merawat Mata di Era Digita</h5>
        <p class="card-text">Peningkatan paparan layar di era digital dapat berdampak pada kesehatan mata. Artikel ini memberikan tips tentang cara merawat mata, seperti istirahat yang cukup, <a class="link-offset-2 link-underline link-underline-opacity-0" href="#">baca selengkapnya...</a></p>
      </div>
      
    </div>
  </div>
</div>
</div>

<!-- akhir card -->

<!-- berita terkini -->
<div class="container mt-5">
  <h2>Berita Terkini</h2>
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini1.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Ciri-ciri Hipertensi, Penyakit Darah Tinggi yang Bisa Menyerang Usia Muda</h5>
          <p class="card-text">Hipertensi atau tekanan darah tinggi hanya bisa terjadi pada orang usia lanjut. Padahal, kondisi ini juga sangat rentan dialami oleh kelompok usia muda...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini2.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Bangun Tidur Sering Sakit Kepala, Bagaimana Mengobatinya?</h5>
          <p class="card-text">Pusing dapat disebabkan oleh gangguan saraf otak maupun di luar saraf. Penyebab dari saraf otak dapat berupa infeksi otak, tumor otak, cedera otak, atau stroke. Sedangkan penyebab di luar saraf otak adalah penyebab terbanyak, antara lain...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini3.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Kabar Tak Enak buat Alumni COVID, Riset Sebut Efeknya Bisa Muncul Dalam 2 Tahun.</h5>
          <p class="card-text">Lagi-lagi kabar kurang menyenangkan perihal gejala COVID-19 berkepanjangan atau disebut sebagai 'Long COVID'. Kali ini sebuah penelitian menemukan...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini4.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Risiko Kesehatan Akibat Polusi Udara dan Langkah Perlindungan yang Dapat Diambil</h5>
          <p class="card-text">Tingginya tingkat polusi udara dikaitkan dengan risiko kesehatan serius, termasuk gangguan pernapasan dan penyakit jantung. Artikel ini memberikan informasi...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini5.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Dampak Kesehatan Jangka Panjang dari Kekurangan Vitamin D</h5>
          <p class="card-text">Kekurangan vitamin D dapat memiliki dampak serius pada kesehatan jangka panjang, termasuk risiko tulang rapuh dan masalah sistem kekebalan. Artikel ini menjelaskan pentingnya mendapatkan cukup vitamin D dan cara-cara...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini6.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Berbagai Manfaat Meditasi Terhadap Kesehatan Anda</h5>
          <p class="card-text">Meditasi telah terbukti memiliki sejumlah manfaat bagi kesehatan, termasuk mengurangi stres, meningkatkan konsentrasi, dan menenangkan pikiran. Artikel ini menjelaskan jenis-jenis meditasi dan cara memulai praktik meditasi...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini7.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Pentingnya Detoksifikasi Tubuh: Mitos dan Fakta</h5>
          <p class="card-text">Detoksifikasi tubuh telah menjadi topik populer, tetapi ada banyak miskonsepsi tentang apa sebenarnya detoksifikasi dan bagaimana melakukannya dengan benar. Artikel ini mengklarifikasi mitos dan memberikan...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini8.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Makanan Super Penyokong Sistem Kekebalan Tubuh: Apa Saja Mereka?</h5>
          <p class="card-text">Ahli gizi mengidentifikasi beberapa makanan "super" yang dapat mendukung sistem kekebalan tubuh, termasuk buah-buahan beri, sayuran hijau tua, dan kacang-kacangan. Artikel ini membahas manfaat dan cara memasukkan...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini9.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Studi Baru Mengungkap Manfaat Olahraga Ringan bagi Kesehatan Mental</h5>
          <p class="card-text">Penelitian terbaru menunjukkan bahwa berolahraga ringan secara teratur dapat memiliki dampak positif pada kesehatan mental, membantu mengurangi stres...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="card border border-2 mb-4">
    <div class="row g-0">
      <div class="col-md-2 ms-md-5">
        <img src="img/beritaterkini10.png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">Gaya Hidup Sehat dan Penurunan Risiko Penyakit Jantung</h5>
          <p class="card-text">Mengadopsi gaya hidup sehat, seperti makan pola makan seimbang dan berolahraga teratur, dapat mengurangi risiko penyakit jantung. Artikel ini memberikan informasi tentang hubungan antara gaya hidup dan kesehatan...</p>
          <p class="card-text fw-light">Rabu 23 Agustus 2023 oleh Intan</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- akhir berita terkini -->

<!-- pagination -->
<div class="container">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
<!-- AKhir pagination -->

<!-- footer -->
<footer class="bg-primary text-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5 class="mb-3">Alamat Kami</h5>
        <p>Jalan Contoh No. 123, Kota Contoh, Negara Contoh</p>
      </div>
      <div class="col-md-6">
        <h5 class="mb-3">Kontak Kami</h5>
        <p>Email: info@example.com</p>
        <p>Telepon: +1234567890</p>
      </div>
    </div>
    <hr>
    <p class="text-center mt-3">&copy; 2023 Nama Website. All Rights Reserved.</p>
  </div>
</footer>
<!-- AKhir Footer -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection