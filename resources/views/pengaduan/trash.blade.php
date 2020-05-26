@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Trash</h3>
    @endsection
    @section('content')

    @if(Session::has('success'))
        <script>
            $('.success', function() {
                swal('', " {{ Session('success') }} ", 'success', {
                    buttons: false,
                    timer: 3000,
                });
            });
        </script>
        <div class="success"></div>
    @endif
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>tanggal</th>
                        <th>Judul aduan</th>
                        <th>Gambar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $pengadua => $pengadu)
                    <tr>
                        <th scope="row">{{ $pengadua + $pengaduan->firstitem() }}</th>
                        <td> {{ $pengadu->users->name }} </td>
                        <td> {{ $pengadu->created_at }} </td>
                        <td> {{ $pengadu->url }} </td>
                        <td><img class="img-thumbnail" src="{{ asset($pengadu->gambar) }}" width="100"></td>
                        <td>
                            <form action="{{ route('pengaduan.kill', $pengadu->id) }}" method="post">
                                @csrf 
                                @method('delete')
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href=" {{ route('pengaduan.restore', $pengadu->id) }} " class="btn btn-primary">Restore</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-danger buttons">delete</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-md-10">
                {{ $pengaduan->links() }}
                </div>
            </div>          
        </div>

    @endsection