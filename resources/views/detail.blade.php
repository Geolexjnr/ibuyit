@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <!--product image-->
        <div class="col-sm-6">
            <img class="product-image" src="{{$product['gallery']}}" alt="">
        </div>

        <div class="col-sm-6">

            <button class="btn btn-primary"><a class="button-text" href="/">Back</a></button>
            <h2>{{$product['name']}}</h2>
            <h4> Price: K{{$product['price']}}</h4>
            <h5> Details: {{$product['description']}}</h5>
            <h5> Category: {{$product['category']}}</h5>
            <br><br>
            <button class="btn btn-primary">Add to Cart</button>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection