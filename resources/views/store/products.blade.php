@extends('store.layout')
   
@section('content')
    
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="storage/images/{{ $product->product_image}}" alt="">
                <div class="caption">
                    <h4>{{ $product->product_name }}</h4>
                    <p>{{ $product->product_description }}</p>
                    <p><strong>Price: </strong> ${{ $product->product_price }}</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->product_id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection