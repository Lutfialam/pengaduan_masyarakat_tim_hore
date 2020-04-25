@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Edit Data</h3>
    @endsection

    @section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach($category as $categ)
                    <form class="needs-validation" novalidate="" action=" {{ route('category.update', $categ->id) }} " method="post">
                    @csrf
                    @method('patch')
                        <div class="section-title">Category name</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value=" {{ $categ->name }} ">
                            <div class="invalid-feedback"> 
                                This column is required!
                            </div>
                        </div>
                        
                        <div class="text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
            
        </div>
        
    </div>
    
    @endsection