@extends('layouts.layout')

@section('content')
<main id="info-page">
  <div class="container">
    {{-- <span id="current-series">inserire img card</span> --}}
    
    <div>
      <h4>{{$cards[0]['title']}}</h4>
      <p>{{$cards[0]['description']}}</p>
    </div>
    <div>ciao</div>
</div>
</main>
@endsection