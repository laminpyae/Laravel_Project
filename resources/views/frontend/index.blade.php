    @extends('frontend.master')
    @section('content');

  <div class="row">
  <div class="col-md-3 col-lg-2 topcategory d-none d-md-block"> 
    <ul class="menu-category">
      @foreach($categories as $category)
      <li class="dropdown-submenu"><a href="#" class="droplink elc">{{$category->name}}<i class="fa fa-angle-right someicon"></i>
      </a>
      @if(count($category->subcategories)>0)
      <ul class="menu-category sub-menu">
        @foreach($category->subcategories as $subcategory)
        <li class=""><a href="{{route('shop', $subcategory->id)}}" class="droplink">{{$subcategory->name}}</a></li>
        @endforeach
      </ul>
      @endif
    </li>
    @endforeach
  </ul>
      </div>
      <div class="col-md-9 col-lg-10">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="tales d-block" src="images/download.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="tales d-block w-100" src="images/shop.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="tales d-block w-100" src="images/banner-1.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
      
      <div class="container my-3">
  <div class="row">
    <div class="col-md-4">
      <h3 class="text-center" >DISCOUNT ITEMS</h3>
    </div>
    <div class="col-md-7 mr-1">
      <hr>
      
    </div>
  </div>
      </div>
      
      <!-- Discount Items Lists -->
      @foreach($discountItems as $row)
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
  <div class="card">
    <a href="#"><img src="{{$row->photo}}" class="img-fluid" alt="..."></a>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$row->name}}</h5>
    <p class="card-text">{{$row->price}}</p>
    <div class="button_show"><a href="javascript:void(0)" class="addtocart btn btn-dark" data-id="{{$row->id}}" data-name="{{$row->name}}" data-codeno="{{$row->codeno}}" data-photo="{{$row->photo}}" data-price="{{$row->price}}" data-discount="{{$row->discount}}">Add to cart</a></div>   
  </div>
      </div>
      @endforeach
      
      <!-- Recommend Items List -->
      <div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <h3 class="text-center">RECOMMEND ITEMS</h3>
    </div>
    <div class="col-md-7 mr-1">
      <hr>
      
    </div>
  </div>
      </div>
      
      @foreach($recommendItems as $row)
      <div class="box col-md-4 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
  <div class="card">
    <a href="#"><img src="{{$row->photo}}" class="img-fluid" alt="..."></a>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$row->name}}</h5>
    <p class="card-text">{{$row->price}}</p>
    <div class="button_show"><a href="javascript:void(0)" class="addtocart btn btn-dark" data-id="{{$row->id}}" data-name="{{$row->name}}" data-codeno="{{$row->codeno}}" data-photo="{{$row->photo}}" data-price="{{$row->price}}" data-discount="{{$row->discount}}">Add to cart</a></div>   
  </div>
      </div>
      @endforeach


  @endsection
    </div>