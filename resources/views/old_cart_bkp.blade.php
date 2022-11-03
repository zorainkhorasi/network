<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Concept - Bootstrap 4 Admin Dashboard Template </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

           @foreach ($products as $product)
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="product-thumbnail">
                                <div class="product-img-head">
                                    <div class="product-img">
                                        <img src="{{ $product->image }}" alt="" class="img-fluid"></div>
                                    <div class="ribbons"></div>
                                    <div class="ribbons-text">New</div>
                                    <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-content-head">
                                        <h3 class="product-title">{{$product->name}}</h3>
                                        <div class="product-rating d-inline-block">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <div class="product-price">{{$product->price}} </div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="{{ route('addcart', $product->id) }}" class="btn btn-primary" >Add to Cart</a>
                                        {{-- <p class="btn-holder"><a href="{{ route('addcart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>

        </div>
    </div>
</div>
