
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
    <header class="container-header-1 d-flex-a-center">
      <ul>
        <li class="menu"><i class="fa-solid fa-bars"></i><span>Menu</span></li>
      </ul>
      <a href="/"
        ><img src="logo-black.png" alt="" style="width: 81px"
      /></a>
      <ul>
      @if(Session::has('user'))
      <li><a href="/myorders">Orders</a></li>
      <li><a href="/cartlist">cart({{$total}})</a></li>
        <li><<a href="/logout">Logout</a></li>
        @else
          <li><a href="/admin">admin</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
        @endif
      </ul>
    </header>
    <header class="container-header-2">
      <form action="/search" >
        <label for=""><i class="fa-solid fa-magnifying-glass"></i></label>
        <input type="text" name="query" placeholder="Search" />
        <button type="submit">Search</button>
      </form>

      <ul>
        <li>
          <a href="#" class="btn-filters"
            ><span>Filters</span><i class="fa-solid fa-filter"></i
          ></a>
        </li>
      </ul>
    </header>
    <nav class="container-menu nav-z-index-off">
      <div class="nav-menu">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Gift</a></li>
          <li><a href="">New</a></li>
          <li><a href="">Bags</a></li>
          <li><a href="">Women</a></li>
          <li><a href="">Men</a></li>
          <li><a href="">Watches</a></li>
          <li><a href="">Art of Living</a></li>
          <li><a href="">Service</a></li>
        </ul>
      </div>
      <div class="remove-btn-menu"></div>
    </nav>
    <nav class="container-filters nav-z-index-off">
      <div class="nav-filters">
        <div>
          <b>SHOW FILTERS</b>
          <div class="remove-btn-filter"><i class="fa-solid fa-x"></i></div>
        </div>
        
        
      </div>
    </nav>

