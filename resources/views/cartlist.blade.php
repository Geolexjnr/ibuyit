@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">



        <div class="trending-wrapper">

            <h4>Products in Cart</h4>
            <a href="buynow" class="btn btn-success">Buy Now</a><br><br>
            @foreach($products as $item)

            <div class=" row searched-item cart-list-divider">
                <br><br><br>
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">

                    </a>
                </div>

                <div class="col-sm-4">

                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>

                </div>

                <div class="col-sm-3">
                    <a href="/removefromcart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a>
                </div>

            </div>

            @endforeach
            <a href="buynow" class="btn btn-success">Buy Now</a>

        </div>


        

    </div>
</div>
</div>
@endsection