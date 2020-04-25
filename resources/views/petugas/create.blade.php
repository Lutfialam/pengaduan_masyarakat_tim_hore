@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>tambah data</h3>
    @endsection
    
    @section('content')

            <form action=" {{ route('petugas.store') }} " method="post">
            @csrf
                <div class="form-group row">
                    <label for="nama_petugas" class="col-md-4 col-form-label text-md-right">{{ __('nama petugas') }}</label>

                    <div class="col-md-6">
                        <input id="nama_petugas" type="text" class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" value="{{ old('nama_petugas') }}" required autocomplete="nama_petugas" autofocus>

                        @error('nama_petugas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __(' password ') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('no telephone') }}</label>

                    <div class="col-md-6">
                        <input id="telp" type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp" autofocus>

                        @error('telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" name="level">
                            <option>-- Pilih Level user --</option>
                            <option value="admin" > Admin </option>
                            <option value="petugas" > petugas </option>
                        </select>

                        @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah data</button>

            </form>

    @endsection('content')