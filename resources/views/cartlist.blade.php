@extends('master')
@section("content")
<div class="container custom-product">
    <div class="col-sm-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
              <h4>Search Results ...</h4>
              <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
              @foreach ($products as $item)
                <div class="row searched -item cart-list-divider">
                 <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-image" src="{{ $item->gallery }}" alt="Los Angeles">
                        </a>
                 </div>
                 <div class="col-sm-4">
                        <div class="">
                            <h3>{{ $item->name}}</h3>
                            <h5>{{ $item->description }}</h5>
                            {{-- <p>{{ $item['description'] }}</p> --}}
                        </div>
                 </div>
                 <div class="col-sm-3">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                 </div>
                </div>
              @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    </div>
</div>
@endsection
