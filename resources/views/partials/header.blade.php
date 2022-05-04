<header>
  <div class="header">
    <div class="my-container">
      <div id="logo-img">
        <img src="{{asset("images/dc-logo.png")}}" alt="dc logo img">
      </div>
      <nav>
        <ul>
          @foreach ($listNavbar as $item)  
            @if ($item["active"]==true)
              <li class="active"><a class="active" href="{{$item["url"]}}">{{$item["name"]}}</a></li>   
            @else 
              <li><a href="{{$item["url"]}}">{{$item["name"]}}</a></li>   
            @endif
          @endforeach
        </ul>
      </nav>
    </div>
  </div>
</header>