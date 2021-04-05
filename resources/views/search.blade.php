@extends('master')
@section("content")
<div class="container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
              <h4>Search Results ...</h4>
              @foreach ($products as $item)
                <div class="trending-item">
                  <a href="detail/{{ $item['id'] }}">
                  <img class="trending-image" src="{{ $item['gallery'] }}" alt="Los Angeles">
                  <div class="">
                      <h3>{{ $item['name'] }}</h3>
                      <h5>{{ $item['description'] }}</h5>
                      {{-- <p>{{ $item['description'] }}</p> --}}
                  </div>
                  </a>
                </div>
              @endforeach
          </div>
    </div>
</div>
@endsection
