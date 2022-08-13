@extends('layouts.app')
@section('content')
<body>
<!-- top-header -->
<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Best laptops to meet your needs

                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>


                    <li class="text-center border-right text-white">
                        <a href="tel:+254798300001"class="text-white">
                            <i class="fas fa-phone mr-2"></i>Call Digimart</a>
                    </li>
                    @if (Auth::user())
                    <li class="text-center border-right text-white">
                        <a href="#"  class="text-white">
                            {{ auth::user()->email }} </a>
                    </li>
                    <li class="text-center text-white">
                        <a href="{{ route('logout') }}"  class="text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @else
                      <li class="text-center border-right text-white">
                        <a href="/login"  class="text-white">
                            <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                    </li>
                    <li class="text-center text-white">
                        <a href="/register"  class="text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
                    </li>
                    @endif

                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal(select-location) -->

<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->

<!-- //modal -->
<!-- //top-header -->

<!-- header-bottom-->
<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="/digimart" class="font-weight-bold font-italic">
                        <img src="{{ asset('images/logo2.png') }}" alt=" " class="img-fluid">Digimart
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="/search" method="get">
                            <input class="form-control mr-sm-2" name="search" placeholder="I am looking for.." aria-label="Search" required>
                            <button class="btn my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                           <b>CART</b> <a href="/cart"><span class="fas fa-cart-arrow-down">{{ count((array) session('cart')) }}</span></a>


                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/digimart">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laptops
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">Laptops,Core's</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="/alllaptops">All laptops</a>
                                            </li>
                                            <li>
                                                <a href="/corei7">Core i7</a>
                                            </li>
                                            <li>
                                                <a href="/corei5">Core i5</a>
                                            </li>
                                            <li>
                                                <a href="/corei3">Core i3</a>
                                            </li>
                                            <li>
                                                <a href="/celeron">intel celeron</a>
                                            </li>
                                            <li>
                                                <a href="/touch">Touch screen</a>
                                            </li>
                                            <li>
                                                <a href="/tablet">Tablets</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="dell">Dell</a>
                                            </li>
                                            <li>
                                                <a href="/hp">Hp</a>
                                            </li>
                                            <li>
                                                <a href="/macbook">Macbooks</a>
                                            </li>
                                            <li>
                                                <a href="/lenovo">Lenovo</a>
                                            </li>
                                            <li>
                                                <a href="/taifa">Taifa</a>
                                            </li>
                                            <li>
                                                <a href="/toshiba">Toshiba</a>
                                            </li>
                                            <li>
                                                <a href="/other">Other</a>
                                            </li>
                                            <li>
                                                <a href="/amd">Amd processors</a>
                                            </li>
                                            <li>
                                                <a href="/backlit">Backlit keyboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accessories
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">Pc games, Laptop bags, Memory-cards</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="/games">Pc games</a>
                                            </li>
                                            <li>
                                                <a href="/bags">laptop bags</a>
                                            </li>
                                            <li>
                                                <a href="/flower">Flower Cables</a>
                                            </li>
                                            <li>
                                                <a href="/bat">Batteries</a>
                                            </li>
                                            <li>
                                                <a href="/chargers">Ac Adapters</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="/stick">Stickers</a>
                                            </li>
                                            <li>
                                                <a href="/keyboard">Keyboard letters</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/recent">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
	<!-- banner-2 -->

	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/digimart">Home</a>
						<i>|</i>
					</li>
					<li>{{ $stocks->processor }} >> {{ $stocks->product_name }}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>roduct
				<span>D</span>etails</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="d-block w-100" src="{{ asset('images/'.json_decode($stocks->image1,true)) }}" alt="{{ $stocks->product_name }}">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/'.json_decode($stocks->image2,true)) }}" alt="{{ $stocks->product_name }}">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/'.json_decode($stocks->image3,true)) }}" alt="{{ $stocks->product_name }}">
							  </div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{ $stocks->product_name }}</h3>
					<p class="mb-3">
						<span class="item_price">ksh{{ $stocks->price }}</span>

						<label>Pay on Delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
							<li class="mb-3">
								Shipping Speed to Delivery.
							</li>

						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 Year</label>Manufacturer Warranty</p>
						<ul>
							<li class="mb-1">
								{{ $stocks->description }}
							</li>
							<li class="mb-1">
								{{ $stocks->speed }}
							</li>
							<li class="mb-1">
								{{ $stocks->processor }}
							</li>
							<li class="mb-1">
								{{ $stocks->brand }}
							</li>
							<li class="mb-1">
                                @php
                                $ratenumber=number_format($rating_value);
                               @endphp
                               @for ($i=1;$i<=$ratenumber;$i++)
                               <span><i class="fas fa-star checked" ></i></span>

                               @endfor

                               @for ($j=$ratenumber+1; $j<=5;$j++)
                               <i class="fas fa-star"></i>
                               @endfor
                               @if ($rating->count()>0)
                                   : by {{ $rating->count() }} Buyers.
                                   @else
                                   :No ratings
                               @endif
							</li>
						</ul>
						<p class="my-sm-4 my-3">

						</p>
                        <a href="/add-to-cart/{{ $stocks->id }}  " class="button btn"  >Add to Cart</a>
					</div>
                    <div id ="app" v-cloak>
                        <div class="read">



                                <button  @click="toggle" class=" read-moree btn"><a href="#" class="read-more btn">Rate Product </a></button>



                                            </div>

      <div v-if="isVisible" >
      <div class="center">
        <form action="/rate" method="GET">
          @csrf
          <input type="hidden" name="product_id" value="{{$stocks->id  }}">
        <div class="stars">
          <input type="radio" id="five" name="rate" value="5">
          <label for="five"></label>
          <input type="radio" id="four" name="rate" value="4">
          <label for="four"></label>
          <input type="radio" id="three" name="rate" value="3">
          <label for="three"></label>
          <input type="radio" id="two" name="rate" value="2">
          <label for="two"></label>
          <input type="radio" id="one" name="rate" value="1" checked>
          <label for="one"></label>
          <span class="result">
    </span>
        </div>
        <span><button class="button" value="submit"> post</button></span>
        <span><button @click="toggle" class="fal fa-times-octagon btn-danger "  >Exit</button></span>

      </form>
     </div>


    </div>
                    </div>

				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->

	<!-- middle section -->

            <div class="wrapper">
                <!-- first section -->
                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                    <h3 class="heading-tittle text-center font-italic">Similar Products</h3>
                    <div class="row">

                            @foreach ($similar as $stock )
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item text-center">
                                    <img  style="height:200px;width:200px; object-fit:contain;"src="{{ asset('images/'.json_decode($stock->image1,true)) }}" alt="laptop image">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="digimart/{{ $stock->id }}" class="link-product-add-cart"> View Item</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product text-center border-top mt-4">
                                    <h4 class="pt-1">
                                        <a href="digimart/{{ $stock->id }}">{{ $stock->product_name }}</a>
                                    </h4>
                                    <div class="info-product-price my-2">
                                        <span class="item_price">Ksh {{ $stock->price }}</span>

                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <a href="/add-to-cart/{{ $stock->id }}  " class="button btn"  >Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach



                    </div>
                </div>

	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Electronics :</h2>
				<p class="footer-main mb-4">
					If you're considering a new laptop, looking for a powerful desktop or shopping for a new cable, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on accesories, laptops, cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over ksh:1000</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li>
                                <a href="/alllaptops">All laptops</a>
                            </li>
                            <li>
                                <a href="/corei7">Core i7</a>
                            </li>
                            <li>
                                <a href="/corei5">Core i5</a>
                            </li>
                            <li>
                                <a href="/corei3">Core i3</a>
                            </li>
                            <li>
                                <a href="/celeron">intel celeron</a>
                            </li>

						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li>
                                <a href="/games">Pc games</a>
                            </li>
                            <li>
                                <a href="/bags">laptop bags</a>
                            </li>
                            <li>
                                <a href="/flower">Flower Cables</a>
                            </li>
                            <li>
                                <a href="/bat">Batteries</a>
                            </li>
                            <li>
                                <a href="/chargers">Ac Adapters</a>
                            </li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> fcc plaza shop 33 eldoret</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 0707403443 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> 0798300001</li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:lanyakip@gmail.com"> lanyakip@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:wangarisalome630@gmail.com"> wangarisalome630@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="/newsletter" method="GET">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://www.facebook.com/Digimart-laptops-and-computers-1332177503562680">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://api.whatsapp.com/send?phone=+254798300001">
											<i class="fab fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="https://www.facebook.com/Digimart-laptops-and-computers-1332177503562680">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Laptops & Tablets :</h5>
					<ul>
						<li class="m-sm-1">
                            <a href="/alllaptops"   class="border-right pr-2" >All laptops</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/corei7"   class="border-right pr-2" >Core i7</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/corei5"   class="border-right pr-2" >Core i5</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/corei3"   class="border-right pr-2" >Core i3</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/celeron"   class="border-right pr-2" >intel celeron</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/touch"   class="border-right pr-2" >Touch screen</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/tablet"   class="border-right pr-2" >Tablets</a>
                        </li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Computers :</h5>
					<ul>
                        <li class="m-sm-1">
                            <a href="dell" class="border-right pr-2" >Dell</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/hp" class="border-right pr-2" >Hp</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/macbook" class="border-right pr-2" >Macbooks</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/lenovo" class="border-right pr-2" >Lenovo</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/taifa" class="border-right pr-2" >Taifa</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/toshiba" class="border-right pr-2" >Toshiba</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/other" class="border-right pr-2" >Other</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/amd" class="border-right pr-2" >Amd processors</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/backlit" class="border-right pr-2" >Backlit keyboard</a>
                        </li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Games and Accessories  :</h5>
					<ul>
                        <li class="m-sm-1">
                            <a href="/games" class="border-right pr-2" >Pc games</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/bags" class="border-right pr-2" >laptop bags</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/flower" class="border-right pr-2" >Flower Cables</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/bat" class="border-right pr-2" >Batteries</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/chargers" class="border-right pr-2" >Ac Adapters</a>
                        </li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Stickers & Laptop Accessories :</h5>
					<ul>
                        <li class="m-sm-1">
                            <a href="/stick" class="border-right pr-2" >Stickers</a>
                        </li>
                        <li class="m-sm-1">
                            <a href="/keyboard" class="border-right pr-2" >Keyboard letters</a>
                        </li>

					</ul>
				</div>

				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2022 Digimart laptops. All rights reserved | Design by
				<a href="https://www.linkedin.com/in/caleb-kigen-894215210"> Caleb kigen.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->
@endsection
@section('scripts')
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //jquery -->

<!-- nav smooth scroll -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //popup modal (for location)-->

<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

    paypals.minicarts.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- imagezoom -->
<script src="js/imagezoom.js"></script>
<!-- //imagezoom -->

<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script src="js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="{{ asset('js/login.js')}}" ></script>
<!-- //for bootstrap working -->
<!-- //js-files -->
@endsection
