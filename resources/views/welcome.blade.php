<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('welcome_template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome_template/js/aos.css') }}">
    <script defer src=" {{ asset('welcome_template/fontawesome-5/js/all.min.js') }}"></script>
    <title>our page</title>
    
</head>
<body>
  <div class="frame">

  

<!-- navigation bar -->
<input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
    <div class="sidebar">
      <header>our page</header>
      <ul>
        <li><a href="#landing" class="page-scroll"><i class="far fa-newspaper" style="color: #fff;"></i>&nbsp;Home</a></li>
        <li><a href="#about" class="page-scroll"><i class="fas fa-tools" style="color: #fff;"></i>&nbsp;Feature</a></li>
        <li><a href="#maksud" class="page-scroll"><i class="fas fa-chart-pie" style="color: #fff;"></i>&nbsp; purpose</a></li>
        <li><a href="#progressbar" class="page-scroll"><i class="fas fa-chart-pie" style="color: #fff;"></i>&nbsp;Progress</a></li>
        <!-- link sini -->
      </ul>
    </div>

 <!-- navigation bar  -->


<!-- dashboard -->
<section class="landing" id="landing">
  <div class="backgradient rellax" data-rellax-speed="2" style="transform: rotate(-24deg);">
    </div>

  <div class="row">
    <div class="col-sm-6">
      <br><br>
      <h1 style="text-transform: capitalize; color: white;">pengaduan masyarakat</h1>
      <h1 style=" color: white;">Indonesia</h1>
      <hr><br><br>
      <p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum harum nemo atque similique culpa voluptates provident, error, neque consequuntur nisi  asperiores recusandae at earum!</p>
      <br>
      <div class="button">
        <a href="{{ route('login') }}" class="btn">Masuk</a>
        <a href="{{ route('register') }}" class="btn">Daftar</a>
      </div>
    </div>
    
    <div class="col-sm-6">
      
      <img style="float: right; margin-top: -7%; margin-right: 7%;" src="{{ asset('welcome_template/gambar/TEAM HORE.png') }}" width="100px" height="95px" alt="logo">
        <img class="rellax" data-rellax-speed="-2" src="{{ asset('welcome_template/gambar/bott.png') }}" width="680px" height="540px" alt="gambar">
 
      </div>
  </div>
    
</section>
<!-- batas dashboard -->



<!-- section about gitu -->
<section class="about" id="about">  
<h1 data-aos="fade-left" class="text-center">what we have</h1>
<hr>


<!-- batas card -->


  <div class="row">
    <div class="col-sm-4">
      <div data-aos="flip-left" class="container">

  <div class="card text-center">
    <div class="face face1">
      <div class="content">
        <img src="{{ asset('welcome_template/gambar/chatgr.png') }}" width="130px" height="100px" alt="chat">
        <h3>contact</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p>Contact kami untuk mendapat info lebih lanjut mengenai program bantuan kami, dan cari contact sesama user   </p>
        <a href="#">check up</a>
      </div>
    </div>
  </div>
            </div>
</div> <!-- tutup kolom   --> 
        
 


<div class="col-sm-4">
  <div data-aos="flip-down" class="container">

  <div class="card text-center">
    <div class="face face1">
      <div class="content">
        <img src="{{ asset('welcome_template/gambar/tangangr.png') }}" width="130px" height="100px" alt="tngn">
        <h3>support</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p>Kami bersedia menjawab keluhan bentuk apapun untuk membantu dan menyalurkan kebutuhan masyarakat kepada pemerintah </p>
        <a href="#">read more</a>
      </div>
    </div>
  </div>


        </div>
</div>       <!-- tutup kolom -->


  <div class="col-sm-4">
    <div data-aos="flip-right" class="container">

  <div class="card text-center">
    <div class="face face1">
      <div class="content">
        <img src="{{ asset('welcome_template/gambar/helpgr.png') }}" width="90px" height="90px" alt="service">
        <h3>service</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p>Hubungi staff admin untuk layanan lebih lanjut mengenai program ini, laporkan apabila ada masalah tentang akun dan lainnya </p>
        <a href="#">read more</a>
      </div>
    </div>
  </div>

            </div> <!--     tutup container -->
   </div>       <!-- tutup kolom -->
  </div>  <!-- tutup row -->

<!-- </div> -->
<!-- tutup container card -->
</section>
<br>

<!-- bagian maksud -->
<section class="maksud" id="maksud">
<div class="row">
  <div class="col-sm-6">
      <div class="kiri">
        <img data-aos="zoom-out-right" src="{{ asset('welcome_template/gambar/gibah.png') }}" width="500px" height="600px" alt="gambar">
      </div>
  </div>

  <div class="col-sm-6">
    <div class="kanan">
      <h2 data-aos="flip-down">Tujuan kami</h2><br><br>
      <hr style="border-top: 3px solid black; width: 50%;">
      <p data-aos="fade-down">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni tempore enim optio maxime, itaque aliquid voluptatum. Rerum, fuga, iste libero rem nisi earum doloremque cupiditate laborum dignissimos, necessitatibus quia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam maxime hic, modi animi sapiente ipsum id illum </p>
      <hr style="border-top: 3px solid black; width: 50%;">
    </div>
  </div>
</div>
  
  
  
  
   
  
  
</section>
<!-- tutup bagian maksud -->


<!-- section baru -->
<section class="progressbar pt-4" id="progressbar">
    <h1 data-aos="zoom-in-left" class="text-center">pengaduan terbaru</h1>
    <div class="container">
        @foreach($pengaduan as $pengadu)
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; height: 26rem;">
                        <img src=" {{ $pengadu->gambar }} " class="card-img-top" height="220">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $pengadu->judul }} </h5>
                            <p class="card-text">status: <i>{{ $pengadu->status }}</i> </p>
                            <a href="Detail-pengaduan/{{ $pengadu->url }}" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- buka footer -->
<div class="footer">
  <div class="row">
    <div class="col-md-6">
      <h3>&copy; Copyright by :</h3>
      <hr style="color: red;"><br>
      <ol style="list-style-type: none;">
        <li>Team Hore</li>
        <li>Ilyas Rifaldi</li>
        <li>Reza Feryl</li>
        <li>Lutfi Alamsyah</li>
      </ol>
    </div>
    <div class="col-md-6">
      <h3>kontak darurat</h3>
      <hr><br>
      <ol style="list-style-type: none;">
        <li><i class="fab fa-whatsapp" style="color: palegreen; width: 30px; height: 30px;"></i> 087834131000</li>
        <li><i class="fab fa-instagram" style="color: orangered; width: 30px; height: 30px;"></i> Team_Hore</li>
        <li><i class="fab fa-youtube" style="color: red; width: 30px; height: 30px;"></i> Team Hore</li>
      </ol>
    </div>
  
  </div>

<!-- tutup footer -->
</div>


      <script src=" {{ asset('welcome_template/js/jquery-3.3.1.slim.min.js') }}"></script>
      <script src=" {{ asset('welcome_template/js/rellax.min.js') }}"></script>
      <script src=" {{ asset('welcome_template/js/jquery.easypiechart.js') }}"></script>
      <script src=" {{ asset('welcome_template/js/aos.js') }}"></script>
      <script src=" {{ asset('welcome_template/js/script.js') }}"></script>
     
      
</body>
</html>