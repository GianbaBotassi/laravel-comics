@extends('layouts.layout')

@section('content')
<main>
  <div class="container">
    <span id="current-series">CURRENT SERIES</span>
    <div id="product-container">
      @foreach ($cards as $card)
      <a class="card" href="#">
        <img src="{{$card['thumb']}}" alt="">
        <h6>{{$card['series']}}</h6>
      @endforeach
      </a>
    </div>
    <div id="load-more">
        <span>LOAD MORE</span>
    </div>
</div>
</main>
@endsection