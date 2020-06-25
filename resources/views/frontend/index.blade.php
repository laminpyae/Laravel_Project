@extends('frontend.master')
@section('content');
	
	<div class="row">
                <div class="col-md-3 col-lg-2 topcategory d-none d-md-block">
            
                    
                    <ul class="menu-category">
                        <li class="dropdown-submenu"><a href="#" class="droplink elc">Electronic Devices<i class="fa fa-angle-right someicon"></i>
                          </a>
                          
                            <ul class="menu-category sub-menu">
                              <li class=""><a href="#" class="droplink">Mobile</a></li>
                              <li><a href="#" class="droplink">Tablet</a></li>
                              <li><a href="#" class="droplink">Something else here</a></li>
                              <li><a href="#" class="droplink">Nav header</a></li>
                              <li><a href="#" class="droplink">Separated link</a></li>
                              <li><a href="#" class="droplink">One more separated link</a></li>
                            </ul>
                          
                          </li>
                        <li><a href="#"  class="droplink" >Electronic Accessories<i class="fa fa-angle-right someicon"></i></a>
                          
                            </li>
                        <li><a href="#" class="droplink">TV & Home Appliances<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#"class="droplink"> Health & Beauty<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Babies & Toys<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Groceries & Pets<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Home & Lifestyle<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Women's Fashion<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Men's Fashion<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Watches & Accessories<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Sports & Outdoor<i class="fa fa-angle-right someicon"></i></a></li>
                        <li><a href="#" class="droplink">Automotive & Motorbike<i class="fa fa-angle-right someicon"></i></a></li>
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
            </div>

@endsection