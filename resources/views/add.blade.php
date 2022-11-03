@extends('admin.mainlayout')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Add Products </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Add Yours</h5>
                        <div class="card-body">
                            <form id="validationform"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" name= "name" placeholder="Enter Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="integer" required="" name="price"  placeholder="Enter Price" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Description </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <textarea required="" name="description" placeholder="Enter Description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="formFile" class="col-12 col-sm-3 col-form-label text-sm-right">Image</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <input name="image" class="form-control" type="file"  id="formFile">
                                    </div>
                                  </div>
                                <div class="form-group row text-right">
                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

    </div>

@endsection
