<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/download.png')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/style.css')}}">
    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>


<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">

    <div class="container">
    <div class="d-flex flex-grow-1">
        
        <a href="/" class="navbar-brand"><img src="images/shop.png" height="50"></a>
        <form class="mr-2 my-auto w-75 d-inline-block search-form order-lg-1 order-md-1 order-sm-2" action="brandshop.html">
         

           <input class="search-text" name="keyword" type="text" id="search-keyword" placeholder="Enter Shop" monkey="1">
           <button class="search-button" type="submit"><span><i class="fa fa-search"></i></span></button>
        </form>

    </div>
    
    <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
        
                <a href="cart.html"><i class="fas fa-shopping-cart fa-2x order-lg-2 order-md-2 order-sm-1"></i></a>
          
        
        <a class="nav-link" href="#"><img src="images/app.png" height="50"></a>
           
    </div>
    </div>
</nav>

<div class="container">
        @yield('content')  
</div>


 <!--  <div class="container">
    <div class="row">
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
   2     <div class="mt-5">
        </div>
        <div class="card-body">
          <h5 class="card-title mt-3 text-center">Deals and Spical </h5>
        </div>
      <div class="text-center mt-2">
          <a href="#" class="btn btn-dark mt-5 " >Read More</a>
        
      </div>
      </div>

        <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <a href="shopdetail.html"><img src="images/shirt_1.jpg" class="img-fluid" alt="..."></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>

      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>

      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>

      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>

    </div>
  </div> -->

<!--   <div class="container my-3">
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center" >RECOMMEND ITEMS</h3>
      </div>
      <div class="col-md-7 mr-1">
        <hr>
  
      </div>
    </div>
  </div> -->

      
 <!--  <div class="container my-3">
    <div class="row">
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>

      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
        <div class="">
          <img src="images/shirt_1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
          <p class="card-text">Price:2000</p>
          <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          
        </div>
      </div>


    </div>
  </div>  --> 

  <div class="container-fluid bg-dark p-5 mt-5">
  <div class="row">
    <div class="offset-md-4 col-md-4">
      <h3 class="text-white">Subscribe Here:</h3>
    </div>

  </div>
  <div class="row">
    <div class="offset-md-4 col-md-5">
      <input type="text" class="form-control" placeholder="Email.....">
    </div>
    <div class="col-md-2">
      <a href="#" class="btn btn-dark form-control">Subcribe</a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row bg-dark p-3">
    <div class="offset-md-4 col-md-4 text-center">
      <h4 class="text-white">All right reserved by: </h4>
    </div>
  </div>
</div>

</body>
</html>
