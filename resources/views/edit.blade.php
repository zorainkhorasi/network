@extends('admin.mainlayout')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Products </h2>

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Add Yours</h5>
                        <div class="card-body">
                            <form id="validationform"  action="{{route('product.update',$find->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" name= "name" value="{{$find->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="integer" required="" name="price" value="{{$find->price}}"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Description </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="textarea" required="" name="description" value="{{$find->description}}" class="form-control">
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
