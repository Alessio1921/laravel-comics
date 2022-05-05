@extends('layouts.home')
@section('main-content')  
  <div class="content">
    <div class="main-top">
      <div class="my-container">
        <div class="info">current series</div>
        <div class="container-card">
          @foreach ($comics as $index=>$comic)
          <a href="{{route('product',['index' => $index])}}">
            <div class="card">
              <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
              <p>{{$comic["series"]}}</p>
            </div>
          </a>
          @endforeach
        </div>
        <button>Load More</button>  
      </div>
    </div>
    <div class="main-bottom">
      <div class="my-container">
        @foreach ($listMain as $item)  
          <div class="item">
            <img src="{{$item["img"]}}" alt="">
            <p>{{$item["name"]}}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
