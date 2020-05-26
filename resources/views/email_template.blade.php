<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Web Pengaduan masyarakat adalah sebuah sistem untuk masyarakat menyampaikan aduan nya">
    <meta name="keywords" content="pengaduan masyarakat">
    <meta name="author" content="Tim hore">
    <title>Pengaduan Masyarakat</title>
    
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <style>
        body.mail__templates {
            background-image: url(../dekstop_mail.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .h4 {
            color: blue;
        }
    </style>
    <!-- END Custom CSS-->
  </head>
  <body class="mail__templates">

        <div class="row">
            <div class="container">
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Hi, {{ $name }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{ $email_body }}</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('undraw_done_a34v.svg') }}" widh="300">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>


</body>
</html>