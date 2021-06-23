
<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}
?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      <li><a href="#">Orders</a></li>
      <li><a href="#">Cart({{$total}})</a></li>
      @if(Session::has('user')){
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">logout</a></li>
        </ul>
      </li>
      }
      @else
      <li><a href="login">Login</a></li>
      @endif
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="query">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
  