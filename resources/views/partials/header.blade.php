<header>
  <div class="header-top">
    <div class="my-container">
      <a href="#">DC POWER℠ VISA®</a>
      <a href="#">ADDITIONAL DC SITES <i class="fas fa-caret-down"></i> </a>
    </div>
  </div>
  <div class="header-bottom">
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
      <div class="input">
        <input type="text" placeholder="Search">
        <span>
          <i class="fas fa-search"></i>
        </span>
      </div>
    </div>
  </div>
</header>