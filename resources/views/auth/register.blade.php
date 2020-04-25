@extends('layouts.layout')

  @section('content')
    <h4 class="text-center">Register</h4>
    <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" placeholder="Masukkan NIK anda">

                    @error('NIK')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat') }}" placeholder="Masukkan Alamat Lengkap">

                    @error('Alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>No telephone</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" placeholder="Nomor telephone aktif">

                    @error('telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email aktif">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" value="{{ old('password') }}" placeholder="Masukkan Password lagi">
                </div>
            </div>
        </div>
        <p>sudah punya akun? masuk <a href=" {{ route('login') }} ">disini</a> </p>
        <button class="btn btn-primary btn-md btn-block" type="submit">REGISTER</button>
  </form>
  @endsection