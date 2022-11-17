<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('dashboard')}}">Infinty Bill</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">



                        <li class="nav-item dropdown nav-user">

                            {{-- <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/avatar-1.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div> --}}
                                <br>
                                <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>


            <div class="container">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <br>
                            <h2 class="pageheader-title">Products </h2>

                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 col-12 main-section">

                        <div class="dropdown">

                            <button type="button" class="btn btn-info" data-toggle="dropdown">

                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                            </button>

                            <div class="dropdown-menu">

                                <div class="row total-header-section">

                                    <div class="col-lg-6 col-sm-6 col-6">

                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                                    </div>

                                    @php $total = 0 @endphp

                                    @foreach((array) session('cart') as $id => $details)

                                        @php $total += $details['price'] * $details['quantity'] @endphp

                                    @endforeach

                                    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">

                                        <p>Total: <span class="text-info">$ {{ $total }}</span></p>

                                    </div>

                                </div>

                                @if(session('cart'))

                                    @foreach(session('cart') as $id => $details)

                                        <div class="row cart-detail">

                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">

                                                <img src="{{ $details['image'] }}" />

                                            </div>

                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">

                                                <p>{{ $details['name'] }}</p>

                                                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>

                                            </div>

                                        </div>

                                    @endforeach

                                @endif

                                <div class="row">

                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">

                                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <br/>

            <div class="container">



                @if(session('success'))

                    <div class="alert alert-success">

                      {{ session('success') }}

                    </div>

                @endif





            </div>



        </div>

        @yield('scripts')


</div>

    </div>




        <!-- ============================================================== -->
        <!-- end navbar -->
