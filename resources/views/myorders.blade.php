@extends('master')
@section("content")
<div class="container custom-product">
    <div class="col-sm-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
              <h4>My Orders ...</h4>
              @foreach ($orders as $item)
                <div class="row searched -item cart-list-divider">
                 <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-image" src="{{ $item->gallery }}" alt="Los Angeles">
                        </a>
                 </div>
                 <div class="col-sm-4">
                        <div class="">
                            <h3>Name : {{ $item->name}}</h3>
                            <h5>Delivery Status: {{ $item->status }}</h5>
                            <h5>Address : {{ $item->address }}</h5>
                            <h5>Payment Status : {{ $item->payment_status }}</h5>
                            <h5>Payment Method : {{ $item->payment_method }}</h5>
                            {{-- <p>{{ $item['description'] }}</p> --}}
                        </div>
                 </div>
                </div>
              @endforeach
          </div>
    </div>
</div>
@endsection
