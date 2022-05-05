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
              <li class="{{ Route::currentRouteName() == $item['name'] ? 'active' : ''}}">
                <a class="{{ Route::currentRouteName() == $item['name'] ? 'active' : ''}}" href="{{route($item["name"])}}">{{$item["name"]}}</a>
              </li>   
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