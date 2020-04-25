@extends('layouts.layout')

  @section('content')
    <h4 class="text-center">Login</h4>
    <form method="POST" action="{{ route('login') }}">
    @csrf

        <div class="form-group">
            <label>EMAIL</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
        </div>

        <div class="form-group">
            <label>PASSWORD</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
        </div>

        <P>anda tidak memiliki akun? daftar <a href=" {{ route('register') }} ">disini</a> </P>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-primary btn-md btn-block" type="submit">LOGIN</button>
            </div>
            <div class="col-md-8">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>

    </form>
  @endsection