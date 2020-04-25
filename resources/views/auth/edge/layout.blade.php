<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Indonesia berbagi</title>

  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('this.css') }}">

</head>
<body class="background-login">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="container">
        <div class="col-md-12">
  
          <div class="row mart-18">

            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  @!section('content')
                </div>
              </div>
            </div>

            <div class="col-md-6 pl-5 ml-6">
              <img class="mobile-style" src=" {{ asset('undraw_sign_in_e6hj.svg') }} " width="400">
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>

<!-- General JS Scripts -->
<script src="{{ script('assets/modules/jquery.min.js') }}"></script>
<script src="{{ script('assets/modules/popper.js') }}"></script>
<script src="{{ script('assets/modules/tooltip.js') }}"></script>
<script src="{{ script('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ script('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ script('assets/modules/moment.min.js') }}"></script>
<script src="{{ script('assets/js/stisla.js') }}"></script>
<script src="{{ script('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ script('assets/js/scripts.js') }}"></script>
<script src="{{ script('assets/js/custom.js') }}"></script>



</body>
</html>