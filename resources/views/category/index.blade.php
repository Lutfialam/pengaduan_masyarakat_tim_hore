@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Category</h3>
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
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $categor => $categ)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td> {{ $categ->name }} </td>
                        <td width="20%">
                            <div class="col-md-12">
                            
                                <form action=" {{ route('category.destroy', $categ->id) }} " method="post">
                                    @csrf 
                                    @method('delete')
                                    <div class="row">
                                    <div class="col-md-4">
                                        <a href=" {{ route('category.edit', $categ->id) }} " class="btn btn-warning" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pen"></i> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn  btn-danger buttons" data-toggle="tooltip" data-original-title="Delete"> <i class="icon-cross"></i> </button>
                                    </div>
                                    </div>
                                </form>
                            
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-md-10">
                    {{ $category->links() }}
                </div>
                <div class="col-md-2">
                    <a href=" {{ route('category.create') }}  " class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>


    @endsection('content')