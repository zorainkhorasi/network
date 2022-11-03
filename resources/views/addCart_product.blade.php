@extends('cart.mainlayout')

@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">


            <div class="row">

            </div>
            <div class="container">
            <div class="row">

                @foreach($products as $product)

                    <div class="col-xs-18 col-sm-6 col-md-3">

                        <div class="thumbnail">
                            <div class="product-img">
                            <img src="{{ $product->image }}" alt="" class="img-fluid"> </div>

                            <div class="caption">

                                <h4>{{ $product->name }}</h4>

                                <p>{{ $product->description }}</p>

                                <p><strong>Price: </strong> {{ $product->price }}$</p>

                                <p class="btn-holder"><a href="{{ route('addcart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>
            </div>

        </div>
    </div>
</div>

@endsection
