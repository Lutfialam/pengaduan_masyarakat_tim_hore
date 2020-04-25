@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Tambah Data</h3>
    @endsection

    @section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action=" {{ route('category.store') }} " method="post">
                    @csrf
                        <div class="section-title">Category name</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name">
                            <div class="invalid-feedback">
                                This column is required!
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
    
    @endsection