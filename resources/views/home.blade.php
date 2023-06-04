@extends('layouts.home')

@section('content')
      <!-- Page Loader Start
        =========================================-->
        <div class="preloader">
            <div id="loader-wrap" class="loader-wrap">
                <div class="cssload-loader">
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                </div>
            </div>
        </div>
    <!-- Page Loader End
    =========================================-->
    <!-- Color Settings
	=========================================-->
	<div class="color-panel">
		<div class="on-panel color-black"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>
		<div class="panel-box">
			<span class="panel-title">Theme Colors</span>
			<ul class="color-box">
				<li class="default" data-name="default" data-path="css/color.css"></li>
				<li class="color-2" data-name="color-2" data-path="css/colors/color-2.css"></li>
				<li class="color-3" data-name="color-3" data-path="css/colors/color-3.css"></li>
				<li class="color-4" data-name="color-4" data-path="css/colors/color-4.css"></li>
				<li class="color-5" data-name="color-5" data-path="css/colors/color-5.css"></li>
				<li class="color-6" data-name="color-6" data-path="css/colors/color-6.css"></li>
				<li class="color-7" data-name="color-7" data-path="css/colors/color-7.css"></li>
				<li class="color-8" data-name="color-8" data-path="css/colors/color-8.css"></li>
				<li class="color-9" data-name="color-9" data-path="css/colors/color-9.css"></li>
				<li class="color-10" data-name="color-10" data-path="css/colors/color-10.css"></li>
			</ul>
		</div>
	</div>
	<!-- End Color Settings
	======================================-->
	<!-- Resarvation Form Start
	======================================-->
	<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
		      	<div class="modal-header border-0">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      	<div class="mobal-body">
		      		<div class="col-md-12 col-lg-12">
						<h2 class="main-title my-3 text-uppercase text-center color-primary">reservation from</h2>
						<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
					</div>
					<div class="col-md-12 col-lg-12">
					  <form class="reservation-form" id="reservation-form" action="reservation.php" method="post">
						<div class="row">
							<div class="col-md-6 col-lg-6">
							  <h3 class="color-black">Treatment Details</h3>
							  <div class="row">
							  	<div class="col-md-12 col-lg-12">

									<div class="form-group">
										<label>Date of Arrival</label>
									  	<div class="input-group date" id="datetimepicker4" data-target-input="nearest">
									  		<div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
						                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
						                    </div>
						                    <input type="text" class="form-control datetimepicker-input" name="date" data-target="#datetimepicker4"/>
						                </div>
									</div>
							  	</div>
								<div class="form-group col-md-12 col-lg-12">
								  	<label>Preferred Time</label>
								  	<div class="input-group date" id="datetimepicker3" data-target-input="nearest">
								  		<div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
					                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
					                    </div>
					                    <input type="text" class="form-control datetimepicker-input" name="time" data-target="#datetimepicker3"/>
				                	</div>
								</div>
								<div id="guest" class="form-group col-md-12 col-lg-12">
								  <label>No Of Guest</label>
								  <select name="guest">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								  </select>
								</div>
								<div  id="treatment" class="form-group col-md-12 col-lg-12">
								  <label>Type Of Treatment</label>
								  <select name="treatment">
									<option>Full Body Massage</option>
									<option>spa treatment</option>
									<option>skin care treatment</option>
									<option>beauty</option>
									<option>nail treatment</option>
									<option>Hair Treatment</option>
								  </select>
								</div>
								<div class="col-md-12 col-lg-12">
								  <strong class="color-black">Or You May Contact This Number : +981 123 456 789</strong>
								</div>
							  </div>
							</div>
							<div class="col-md-6 col-lg-6">
							  <h3 class="color-black">Guest Details</h3>
							  <div class="row">
								<div class="form-group col-md-12 col-lg-12">
								  <label>name</label>
								  <input class="form-control no-border" id="name" type="text" name="name" placeholder="Enter Your Name"/>
								</div>
								<div class="form-group col-md-12 col-lg-12">
								  <label>email</label>
								  <input class="form-control" id="email" type="text" name="email" placeholder="Enter Your Email"/>
								</div>
								<div class="form-group col-md-12 col-lg-12">
								  <label>Phone</label>
								  <input class="form-control" id="phone" type="text" name="phone" placeholder="Enter Your Phone Number"/>
								</div>
								<div class="form-group col-md-12 col-lg-12">
								  <label>Address</label>
								  <input class="form-control" id="address" type="text" name="address" placeholder="Enter Your Address"/>
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input class="btn btn-black" id="request" type="submit" value="Send"/>
								  
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="error-handel">
										<div id="success">Your email sent Successfully, Thank you.</div>
										<div id="error"> Error occurred while sending email. Please try again later.</div>
									</div>
								</div>
							  </div>
							</div>
						  </div>
						</form>
					</div>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!-- Resarvation Form End
	======================================-->
	<!-- Header Start
	======================================-->
	<header id="header" class="nav-on-top">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light w-100"> 
					<a class="navbar-brand p_0" href="#top"><img src="{{ asset('home_style/images/logo/logo.png') }}" alt="logo"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						  <li class="nav-item"><a class="nav-link active" href="#top">Home<span class="sr-only">(current)</span></a></li>
						  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
						  <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
						  <li class="nav-item"><a class="nav-link" href="#our-gallery">Gallery</a></li>
						  <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
						  <li class="nav-item"><a class="nav-link" href="#price">Price</a></li>	
						  <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>	
						  <li class="nav-item"><a class="nav-link" href="#client">Client</a></li>	
						  <li class="nav-item"><a class="nav-link" href="#map-contact">Contact</a></li>
						  <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-calendar" aria-hidden="true"></i></a></li>	
						</ul>
					</div>		
				</nav>
			</div>
		</div>
	</header>
	<!-- Header End 
	==========================================-->
	<!-- Slider Start 
	==========================================-->
	<div id="slider" style="width:100%;height:100vh;">	
		<!-- Slide 1-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
			<img style="width:100%; height:100%;" src="{{ asset('home_style/images/slider/01.jpg') }}" class="ls-bg" alt="slider image" />
			<div style="width:100%; height:100%; background:rgba(0, 0, 0, 0.35); top:50%; left:50%;" class="ls-l" data-ls="durationout:400; parallaxlevel:0; position:fixed;"></div>
			<p style="font-weight:900; text-align:center; width:100%; text-transform: uppercase; font-family:'Raleway', sans-serif; font-size:50px; line-height:60px; color:#ffffff; top:330px; left:50%;" class="ls-l" data-ls="offsetyin:40; delayin:150; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">We feel Your <span class="color-primary">Body Requirments</span></p>	

			<p style="font-weight:300; text-align:center; width:850px; letter-spacing: 2px; font-family:'Raleway', sans-serif; font-size:18px; line-height:30px; color:#ffffff; top:400px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:300; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">Thing moved Dry were divided likeness fly multiply sea cattle man creature. Them lights. Created, dominion replenish seed night also.</p>
			
			<div style="text-align:center; padding:15px 40px; transition: 0.5s; background-size:200% auto; line-height: 24px; font-family:'Raleway', sans-serif; font-size:16px; color:#2a2a2a; border-radius:0px; top:485px; left:50%;" class="ls-l btn btn-gradient" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-300; durationout:400; parallax:true; parallaxlevel:1;">Read More</div>
		</div>


		<!-- Slide 2-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:latest-works; kenburnszoom:out; kenburnsrotate:0; kenburnsscale:1.1; parallaxtype:3d; parallaxevent:scroll; parallaxdurationmove:500; parallaxrotate:4;">
			<img style="width:100%; height:100%;" src="{{ asset('home_style/images/slider/02.jpg') }}" class="ls-bg" alt="slider image" />
			<div style="width:100%; height:100%; background:rgba(0, 0, 0, 0.35); top:0%; left:0%;" class="ls-l" data-ls="durationout:400; parallaxlevel:0; position:fixed;"></div>
			<p style="font-weight:900; text-align:center; width:100%; text-transform: uppercase; font-family:'Raleway', sans-serif; font-size:50px; line-height:60px; color:#ffffff; top:330px; left:50%;" class="ls-l" data-ls="offsetyin:40; delayin:150; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">Creative team to make <span class="color-primary"> you Special</span></p>		
			<p style="font-weight:300; text-align:center; width:850px; letter-spacing: 2px; font-family:'Raleway', sans-serif; font-size:18px; line-height:30px; color:#ffffff; top:400px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:300; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">Thing moved Dry were divided likeness fly multiply sea cattle man creature. Them lights. Created, dominion replenish seed night also.</p>
			<div style="text-align:center; padding:15px 40px; transition: 0.5s; background-size:200% auto; line-height: 24px; font-family:'Raleway', sans-serif; font-size:16px; color:#2a2a2a; border-radius:0px; top:485px; left:50%;" class="ls-l btn btn-gradient" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-300; durationout:400; parallax:true; parallaxlevel:1;">Read More</div>
		</div>


		<!-- Slide 3-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;">
			<img style="width:100%; height:100%;" src="{{ asset('home_style/images/slider/03.jpg') }}" class="ls-bg" alt="slider image" />		
			<div style="width:100%; height:100%; background:rgba(0, 0, 0, 0.35); top:0%; left:0%;" class="ls-l" data-ls="durationout:400; parallaxlevel:0; position:fixed;"></div>
			<p style="font-weight:900; text-align:center; width:100%; text-transform: uppercase; font-family:'Raleway', sans-serif; font-size:50px; line-height:60px; color:#ffffff; top:330px; left:50%;" class="ls-l" data-ls="offsetyin:40; delayin:150; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">We Keep Your Body <span class="color-primary">Soft and Smooth</span></p>		
			<p style="font-weight:300; text-align:center; width:850px; letter-spacing: 2px; font-family:'Raleway', sans-serif; font-size:18px; line-height:30px; color:#ffffff; top:400px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:300; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">Thing moved Dry were divided likeness fly multiply sea cattle man creature. Them lights. Created, dominion replenish seed night also.</p>
			<div style="text-align:center; padding:15px 40px; transition: 0.5s; background-size:200% auto; line-height: 24px; font-family:'Raleway', sans-serif; font-size:16px; color:#2a2a2a; border-radius:0px; top:485px; left:50%;" class="ls-l btn btn-gradient" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-300; durationout:400; parallax:true; parallaxlevel:1;">Read More</div>
		</div>
	</div>
	<!-- Slider End 
	==========================================-->
	<!-- About Section Start
	==========================================-->
	<section id="about" class="py-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary wow animated slideInUp">welcome to beautyqueen</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black wow animated slideInUp">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-lg-6">
					<img src="{{ asset('home_style/images/about/woman-large.png') }}" alt="image not found">
				</div>
				<div class="col-md-7 col-lg-6">
					<div class="text-area">
						<p class="mb-5"><span class="color-black">“ Above land them light was midst said saw saying under, deep bearing. Winged under dominion lesser first heaven tree every creepeth second, make they're firmament, unto given in bring fowl.”</span></p>
				  		<p class="mb-5">Gathered bring likeness brought be fruitful upon. Own in air over multiply void spirit. Fly waters sixth over our form. Yielding was there a. Fish from fourth him appear. Isn't beast in living years, rule their day green gathering grass, days likeness under lesser. Darkness winged male winged. Yielding fruitful. Face you're, first winged air blessed let our can't heaven. A made. Rule give won't all sixth that from heaven seas days herb. Days grass. Wherein greater fruitful one, seas divide Midst form tree i which form night, lights forth god itself fish and over let first moving abundantly gathered.</p>
				  		<a class="btn btn-black mr-3" href="#">read more</a>
				  		<a class="btn btn-gradient" href="#resarvation_from" data-toggle="modal" data-target="#myModal">Resarvation</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End 
	===========================================-->
	<!-- Service Section Start
	===========================================-->
	<section id="services" class="bg-gray py-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">our services</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-4">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/1.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-massage"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 99</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">Full Body Massage</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-4">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/2.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-massage-spa-body-treatment"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 85</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">spa treatment</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-4">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/3.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-spa-facial-treatment-with-mask-and-massages"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 69</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">skin care treatment</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-5">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/4.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-spa-face-mask-treatment-for-woman"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 55</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">beauty</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-5">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/5.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-pets-hair-salon-tools-kit"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 30</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">nail treatment</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-widget mb-5">
						<div class="service-image overflow-hidden">
							<img src="{{asset('home_style/images/services/6.jpg')}}" alt="bodymassage">
						</div>
						<div class="service-iconprice">
							<div class="ser-icon bg-gradient icon-font-30 color-white">
							  <i class="flaticon-scissors-and-comb"></i>
							</div>
							<div class="ser-price bg-gradient color-white">
							  <span>$ 40</span>
							</div>
						</div>
						<div class="text-box py-4 px-3">
							<h4 class="inner-title text-center text-capitalize color-black">Hair Treatment</h4>
				  			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section End
	===========================================-->
	<!-- Gallery Section Start
	===========================================-->
	<section id="our-gallery" class="full-row py-80 pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">our gallery</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="portfolio" id="tab-panel"> 
              	<!--Filter-->
				<div class="row">
					<div class="col-md-12">
						<div class="filters w-100 text-center mb-4">
							<ul class="filter-tabs mx-auto d-inline-block">
								<li class="active filter" data-role="button" data-filter="all">All</li>
								<li class="filter" data-role="button" data-filter=".spa">spa</li>
								<li class="filter" data-role="button" data-filter=".nail">nail</li>
								<li class="filter" data-role="button" data-filter=".hair">hair</li>
								<li class="filter" data-role="button" data-filter=".beauty">beauty</li>
								<li class="filter" data-role="button" data-filter=".skin">skin care</li>
							</ul>
						</div>
					</div>
				</div>	
              
			  <div class="filter-list clearfix">
				<div class="image-gallery">
					<div class="row">
					  <div class="column mix mix_all spa hair mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/1.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/1.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all nail beauty skin mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/2.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/2.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all spa beauty skin mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/3.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/3.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all nail spa skin mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/4.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/4.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all beauty nail hair spa mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/5.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/5.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all hair span nail mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/6.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/6.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all nail hair skin mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/7.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/7.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="column mix mix_all spa hair skin mb_30 col-md-3 col-lg-3">
							<!--Default Portfolio Item-->
							<div class="row">
								<div class="default-portfolio-item">
									<a href="{{asset('home_style/images/gallery/8.jpg')}}" data-fancybox="gallery">
										<img src="{{asset('home_style/images/gallery/8.jpg')}}" alt="image" />
										<div class="overlay-box">
											<span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>		
          </div>
		</div>
	</section>
	<!-- Gallery Section End
	===========================================-->
	<!-- Our Team Start
	===========================================-->
	<section id="team" class="bg-gray py-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">our team</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
			<!-- Team member 1 -->
			  <div class="col-md-6 col-lg-3">
				<div class="team-widget bg-white mb-4">
				  <div class="team-image">
					<img src="{{ asset('home_style/images/team/1.jpg') }}" alt="Team image 1">
					<div class="teamimg-overlay"></div>
					<div class="member-data">
					  <h4>Victor Sandra</h4>
					  <span>Sap Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="member-profile">
					<div class="member-data">
					  <h4 class="color-black">Victor Sandra</h4>
					  <span>Sap Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
					<div class="member-content">
					  <p>Appear yielding creeping good our creepeth whose his first. Over second thing abundantly. Be cattle creeping, of given let meat can't. Have first a us living bring. The void green.</p>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- Team member 2 -->
			  <div class="col-md-6 col-lg-3">
				<div class="team-widget bg-white mb-4">
				  <div class="team-image">
					<img src="{{ asset('home_style/images/team/2.jpg') }}" alt="Team image 2">
					<div class="teamimg-overlay"></div>
					<div class="member-data">
					  <h4>Victor Sandra</h4>
					  <span>Sap Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="member-profile">
					<div class="member-data">
					  <h4 class="color-black">Victor Sandra</h4>
					  <span>Sap Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
					<div class="member-content">
					  <p>Appear yielding creeping good our creepeth whose his first. Over second thing abundantly. Be cattle creeping, of given let meat can't. Have first a us living bring. The void green.</p>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- Team member 3 -->
			  <div class="col-md-6 col-lg-3">
				<div class="team-widget bg-white mb-4">
				  <div class="team-image">
					<img src="{{ asset('home_style/images/team/3.jpg') }}" alt="Team image 3">
					<div class="teamimg-overlay"></div>
					<div class="member-data">
					  <h4>Asha zimba</h4>
					  <span>Body Massage</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="member-profile">
					<div class="member-data">
					  <h4 class="color-black">raul mancera</h4>
					  <span>Beauty Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
					<div class="member-content">
					  <p>Appear yielding creeping good our creepeth whose his first. Over second thing abundantly. Be cattle creeping, of given let meat can't. Have first a us living bring. The void green.</p>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- Team member 4 -->
			  <div class="col-md-6 col-lg-3">
				<div class="team-widget bg-white mb-4">
				  <div class="team-image">
					<img src="{{ asset('home_style/images/team/4.jpg') }}" alt="Team image 4">
					<div class="teamimg-overlay"></div>
					<div class="member-data">
					  <h4>anna osinkina</h4>
					  <span>hair treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="member-profile">
					<div class="member-data">
					  <h4 class="color-black">Victor Sandra</h4>
					  <span>Sap Treatment</span>
					  <div class="socal-icon mt-4">
						<ul>
						  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					  </div>
					</div>
					<div class="member-content">
					  <p>Appear yielding creeping good our creepeth whose his first. Over second thing abundantly. Be cattle creeping, of given let meat can't. Have first a us living bring. The void green.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</section>
	<!-- Our Team End
	===========================================-->
	<!-- Join us Section Start
	===========================================-->
	<div id="join-us" class="py-80 overlay-black background-1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					<div class="color-white">
						<h2 class="color-primary text-uppercase mb-4">Join Us Now And Get <span class="color-white">50% Off</span> Your Next Booking ! </h2>
			  			<p>Doesn't said was man creepeth he divide. Land good called. Gathering upon female. Shall saw god. Were fruitful face. Isn't. Gathered firmament you grass bring. Likeness meat divide you're was.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="join-btn float-right">
						<a class="btn btn-gradient" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">Resarvation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Join us Section End 
	============================================-->
	<!-- Price Section Start
	============================================-->
	<section id="price" class="py-80 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">our price</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
				<!-- Price Table 1 -->
			  	<div class="col-md-6 col-lg-3">
					<div class="price-table mb-4">
					  <div class="pricing-img">
						<img src="{{ asset('home_style/images/price/1.jpg') }}" alt="Price Image 1">
					  </div>

					  <div class="price bg-gradient text-center py-2 color-black"><strong>$ 35</strong> <span>per <sub>month</sub></span></div>
					  <div class="Price-category text-center text-capitalize bg-black color-white py-2"><h4 class="mb-0">Standard</h4></div>
					  <div class="price-list py-2 bg-white">
						<ul>
						  <li>Body Hand And Foot Massage</li>
						  <li>Nail Cutting And Styling</li>
						  <li class="text-secondary">Spa Therapy With Manicure</li>
						  <li class="text-secondary">Hair Coloring</li>
						  <li>Spa Therapy</li>
						  <li class="text-secondary">Oil Health Cure</li>
						</ul>
					  </div>
					  <a class="btn btn-gradient w-100" href="#">Signup Now</a>
					</div>
			  	</div>
			  	<!-- Price Table 2 -->
			  	<div class="col-md-6 col-lg-3">
					<div class="price-table mb-4">
					  <div class="pricing-img">
						<img src="{{ asset('home_style/images/price/2.jpg') }}" alt="Price Image 2">
					  </div>

					  <div class="price bg-gradient text-center py-2 color-black"><strong>$ 55</strong> <span>per <sub>month</sub></span></div>
					  <div class="Price-category text-center text-capitalize bg-black color-white py-2"><h4 class="mb-0">medium</h4></div>
					  <div class="price-list py-2 bg-white">
						<ul>
						  <li>Body Hand And Foot Massage</li>
						  <li>Nail Cutting And Styling</li>
						  <li>Spa Therapy With Manicure</li>
						  <li class="text-secondary">Hair Coloring</li>
						  <li>Spa Therapy</li>
						  <li class="text-secondary">Oil Health Cure</li>
						</ul>
					  </div>
					  <a class="btn btn-gradient w-100" href="#">Signup Now</a>
					</div>
			  	</div>
			  	<!-- Price Table 3 -->
			  	<div class="col-md-6 col-lg-3">
					<div class="price-table mb-4">
					  <div class="pricing-img">
						<img src="{{ asset('home_style/images/price/3.jpg') }}" alt="Price Image 3">
					  </div>

					  <div class="price bg-gradient text-center py-2 color-black"><strong>$ 70</strong> <span>per <sub>month</sub></span></div>
					  <div class="Price-category text-center text-capitalize bg-black color-white py-2"><h4 class="mb-0">premium</h4></div>
					  <div class="price-list py-2 bg-white">
						<ul>
						  <li>Body Hand And Foot Massage</li>
						  <li>Nail Cutting And Styling</li>
						  <li>Spa Therapy With Manicure</li>
						  <li>Hair Coloring</li>
						  <li>Spa Therapy</li>
						  <li class="text-secondary">Oil Health Cure</li>
						</ul>
					  </div>
					  <a class="btn btn-gradient w-100" href="#">Signup Now</a>
					</div>
			  	</div>
			  	<!-- Price Table 4 -->
			  	<div class="col-md-6 col-lg-3">
					<div class="price-table mb-4">
					  <div class="pricing-img">
						<img src="{{ asset('home_style/images/price/4.jpg') }}" alt="Price Image 4">
					  </div>

					  <div class="price bg-gradient text-center py-2 color-black"><strong>$ 95</strong> <span>per <sub>month</sub></span></div>
					  <div class="Price-category text-center text-capitalize bg-black color-white py-2"><h4 class="mb-0">ultimate</h4></div>
					  <div class="price-list py-2 bg-white">
						<ul>
						  <li>Body Hand And Foot Massage</li>
						  <li>Nail Cutting And Styling</li>
						  <li>Spa Therapy With Manicure</li>
						  <li>Hair Coloring</li>
						  <li>Spa Therapy</li>
						  <li>Oil Health Cure</li>
						</ul>
					  </div>
					  <a class="btn btn-gradient w-100" href="#">Signup Now</a>
					</div>
			  	</div>
			</div>
		</div>
	</section>
	<!-- Price Section End 
	============================================-->
	<!-- Video Section Start
	============================================-->
	<div class="background-2 py-80 overlay-black">
		<div class="container">
			<div class="row">
				 <div class="video text-center m-auto color-white">
					<h3 class="text-uppercase letter-space-1">Watch our video</h3>
					<a class="video-icon" href="https://vimeo.com/123709908">
					  <i class="flaticon-play-button"></i>
					</a> 
				  </div>
			</div>
		</div>
	</div>
	<!-- Video Section End
	============================================-->
	<!-- Blog Section Start
	============================================-->
	<section id="blog" class="py-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">our blog</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="blog-widget bg-white mb-4">
						<div class="blog-image overflow-hidden">
						  <img src="{{ asset('home_style/images/blog/1.jpg') }}" alt="Blog image 1">
						</div>
						<div class="blog-data p-4">
						  <span class="date bg-gradient py-2 px-5 d-inline-block color-black">10 June 19</span>
						  <a href="blog-details.html"><h5 class="blog-title">Primis metus rutrum metus porta tortor taciti. Semper tristique integer.</h5></a>
						  <div class="blog-info py-2">
							<span class="admin"><i class="fa fa-user"></i><a href="#">Admin</a></span>
							<span class="post-comment float-right"><i class="fa fa-comment"></i><a href="#">10 Comments</a></span>
						  </div>
						  <div class="textarea py-2">
							<p>Aliquet id lacinia ultricies odio, neque ipsum facilisis parturient. Erat tristique nonummy etiam, fusce est porttitor.</p>
						  </div>
						  <a href="blog-details.html" class="btn btn-gradient">read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-widget bg-white mb-4">
						<div class="blog-image overflow-hidden">
						  <img src="home_style/images/blog/2.jpg" alt="Blog image 2">
						</div>
						<div class="blog-data p-4">
						  <span class="date bg-gradient py-2 px-5 d-inline-block color-black">12 June 19</span>
						  <a href="blog-details.html"><h5 class="blog-title">Primis metus rutrum metus porta tortor taciti. Semper tristique integer.</h5></a>
						  <div class="blog-info py-2">
							<span class="admin"><i class="fa fa-user"></i><a href="#">Admin</a></span>
							<span class="post-comment float-right"><i class="fa fa-comment"></i><a href="#">12 Comments</a></span>
						  </div>
						  <div class="textarea py-2">
							<p>Aliquet id lacinia ultricies odio, neque ipsum facilisis parturient. Erat tristique nonummy etiam, fusce est porttitor.</p>
						  </div>
						  <a href="blog-details.html" class="btn btn-gradient">read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-widget bg-white mb-4">
						<div class="blog-image overflow-hidden">
						  <img src="home_style/images/blog/3.jpg" alt="Blog image 3">
						</div>
						<div class="blog-data p-4">
						  <span class="date bg-gradient py-2 px-5 d-inline-block color-black">15 June 19</span>
						  <a href="blog-details.html"><h5 class="blog-title">Primis metus rutrum metus porta tortor taciti. Semper tristique integer.</h5></a>
						  <div class="blog-info py-2">
							<span class="admin"><i class="fa fa-user"></i><a href="#">Admin</a></span>
							<span class="post-comment float-right"><i class="fa fa-comment"></i><a href="#">26 Comments</a></span>
						  </div>
						  <div class="textarea py-2">
							<p>Aliquet id lacinia ultricies odio, neque ipsum facilisis parturient. Erat tristique nonummy etiam, fusce est porttitor.</p>
						  </div>
						  <a href="blog-details.html" class="btn btn-gradient">read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section End
	===========================================-->
	<!-- Testimonial Section Start
	===========================================-->
	<section id="client" class="py-80 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">what our client say</h2>
					<span class="sub-title pb-5 w-50 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="testimonial-item owl-carousel">
						<div class="client">
							<div class="avater">
							  <img src="{{ asset('home_style/images/client/1.jpg') }}" alt="client image 1">
							</div>
							<h5 class="client_name pt-3 color-black">Natalia Ivanova</h5>
							<div class="star d-inline-block color-primary">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="textarea">
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
						<div class="client">
							<div class="avater">
							  <img src="{{ asset('home_style/images/client/2.jpg') }}" alt="client image 2">
							</div>
							<h5 class="client-name pt-3 color-black">Liubov Metodieva</h5>
							<div class="star d-inline-block color-primary">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="textarea">
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
						<div class="client">
							<div class="avater">
							  <img src="{{ asset('home_style/images/client/3.jpg') }}" alt="client image 3">
							</div>
							<h5 class="client-name pt-3 color-black">Hemishgr Mariey</h5>
							<div class="star d-inline-block color-primary">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="textarea">
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section End
	===========================================-->
	<!-- Map and Contact Form Section Start
	===========================================-->
	<section id="map-contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-6">					
					<div id="map" class="map-canvas row"></div>
				</div>
				<div class="col-md-6 col-lg-6 py-80">
				  	<h2 class="main-title mb-3 text-uppercase letter-space-1 text-center color-primary">contact us</h2>
					<span class="sub-title pb-5 w-80 m-auto text-center color-black">Third and made a saying stars two. Image stars. All let made subdue, stars fruit blessed were. Lights fowl fruitful.</span>

					<form class="contact-message" id="contact-form" action="email.php" method="post">
						<div class="col-md-12 col-lg-12">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<input class="form-control no-border" type="text" name="name" placeholder="Name"/>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<input class="form-control no-border" type="text" name="email" placeholder="Email*"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12">
							<div class="form-group">
								<input class="form-control no-border" id="subject" type="text" name="subject" placeholder="Subject*"/>
							</div>
						</div>
			  			<div class="col-md-12 col-lg-12">
			  				<div class="form-group">
			  					<textarea class="form-control no-border" id="message" rows="7" name="message" placeholder="Message*"></textarea>
			  				</div>
			  			</div>
			  			<div class="col-md-12 col-lg-12">
			  				<div class="form-group m-0">
			  					<input class="btn btn-black" id="send" type="submit" value="send"/>
			  				</div>
			  			</div>
				  		<div class="col-md-12 col-lg-12">
							<div class="error-handel">
								<div id="success">Your email sent Successfully, Thank you.</div>
								<div id="error"> Error occurred while sending email. Please try again later.</div>
							</div>
						</div>
					</form>
			  	</div>
			</div>
		</div>
	</section>
	<!-- Map and Contact Form Section End
	===========================================-->
	<!-- Contact Info Section Start
	===========================================-->
	<div class="py-5 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="contact-info">
					  <div class="bg-primary contact-icon"><i class="fa fa-map-marker"></i></div>
					  <div class="info">
						<h5 class="m-0 text-capitalize font-weight-bold color-black">Address :</h5>
						<p class="m-0">Melbourne, Victoria 3000 Australia.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="contact-info">
					  <div class="bg-primary contact-icon"><i class="fa fa-phone"></i></div>
					  <div class="info">
						<h5 class="m-0 text-capitalize font-weight-bold color-black">Phone Number :</h5>
						<p class="m-0">Phone : +910 123 456 900 789</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="contact-info">
					  <div class="bg-primary contact-icon"><i class="fa fa-envelope-o"></i></div>
					  <div class="info">
						<h5 class="m-0 text-capitalize font-weight-bold color-black">Email :</h5>
						<p class="m-0">contact@dimain.com</p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Info Section End 
	===========================================-->
	<!-- Footer Start 
	===========================================-->
	<footer class="bg-gradient py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="coppyright text-center">
						<span>Beautyqueen © 2019. Template Design by <a href="http://www.themetrading.com">themetrading.</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End
	===========================================-->
@endsection
