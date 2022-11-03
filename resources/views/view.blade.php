@extends('admin.mainlayout')

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Products</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Product Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price </th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $product as $products)


                                    <tr>
                                        <td>{{$products->name}}</td>
                                        <td>{{$products->price}}</td>
                                        <td>{{$products->description}}</td>
                                        <td>{{$products->created_at}}</td>
                                        <td><a href="{{route('product.edit',$products->id)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            {{-- <form action="{{ route('product.destroy', $products->id)}}" method="DELETE">
                                                @csrf
                                                @method()
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form> --}}

                                            <a href="{{route('product.show',$products->id)}}" class="btn btn-danger">Delete</a>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price </th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>


@endsection
