@extends('layouts.home')
@section('main-content')
  <div class="single-content">
    <div class="main-top">
      <div class="my-container">
        <div class="info">
          <img src="{{$comic["thumb"]}}" alt="" >
        </div>
      </div>
    </div>
    <div class="main-center">
      <div class="my-container">
        <div class="main-left">
          <h2 class="upper">{{$comic["title"]}}</h2>
          <div class="availability">
            <div class="left">
              <div>
                <p>U.S. Price: <span>{{$comic["price"]}}</span></p> 
                <p class="upper">Available</p>
              </div>
            </div>  
            <div class="right">
              <span>Check Availability <i class="fas fa-caret-down"></i> </span>
            </div>
          </div>
          <p class="description">{{$comic["description"]}}</p>
        </div>
        <div class="main-right">
          <p class="upper">Advertisement</p>
          <img src="{{asset("/images/adv.jpg")}}" alt="">
        </div>
      </div>
    </div>
    <div class="main-bottom">
      <div class="my-container">
        <div class="left">
          <h2>Talent</h2>
          <div class="description">
            <div class="title"> Art by:</div>
            <div class="content">
              @foreach ($comic["artists"] as $artist)
                {{$artist}}
              @endforeach
            </div>
          </div>
          <div class="description">
            <div class="title"> Art by:</div>
            <div class="content">
              @foreach ($comic["writers"] as $writer)
                {{$writer}}
              @endforeach
            </div>
          </div>
        </div>
        <div class="right">
          <h2>Specs</h2>
          <div class="description">
            <div class="title"> Series:</div>
            <div class="content">
              {{$comic["series"]}}
            </div>
          </div>
          <div class="description">
            <div class="title"> U.S. Price:</div>
            <div class="content">
              {{$comic["price"]}}
            </div>
          </div>
          <div class="description">
            <div class="title"> On Sale Date:</div>
            <div class="content">
              {{$comic["sale_date"]}}
            </div>
          </div>
        </div>
      </div>
      <div class="pre-footer">
        <div class="my-container">
          @foreach ($listMain as $item)  
            <div class="item">
              <p class="upper">{{$item["name"]}}</p>
              <img src="{{$item["img"]}}" alt="">
            </div>
          @endforeach
        </div>
      </div>
      </div>
  </div> 
@endsection