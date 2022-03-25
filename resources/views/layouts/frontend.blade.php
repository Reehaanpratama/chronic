<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Fashion Store</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62 898 742 8406</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> rehanre782@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Jl. Sawah Kurung</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<!-- LOGO -->
						<div class="col-md-3">
						    <div class="header-logo">
						        <a href="#" class="logo">
						            <img src="./frontend/img/anyar.png" alt="">
						        </a>
						    </div>
						</div>
						<!-- /LOGO -->

						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">


								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->

		<!-- /SECTION -->

		<!-- SECTION -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
                <h1>Welcome to Chronic Rock</h1>
                <h2>Original Merchandise Local Band and Keep Support Local</h2>
                <a href="#product" class="btn-get-started scrollto">Shop Now</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">


					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<!-- product -->
                                        @foreach($barang as $data)
										<div class="product">
											<div class="product-img">
												<img src="{{ asset("image/barang/".$data->cover) }}" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">T-shirt</p>
												<h3 class="product-name">{{ $data->nama_barang }} </></h3>
												<h4 class="product-price">Rp. {{ $data->harga }} </h4>

											</div>
											<div class="add-to-cart">
												<button  class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a href="{{url('pesan', $data->id)}}">masukan keranjang</a></button>
											</div>
										</div>
										<!-- /product -->
                                        @endforeach

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<!-- /section title -->

					<!-- Products tab & slick -->
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6372548345394!2d107.6092493146259!3d-6.933885994990217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e88499c17d07%3A0x6655281ad15580d!2sChronic%20Rock%20Merch!5e0!3m2!1sid!2sid!4v1647398710082!5m2!1sid!2sid" width="600" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>CHRONIC ROCK <strong>MERCHANDISE</strong></p>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.instagram.com/chronic_rock/?hl=id"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">

							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rehan Pratama
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
		<script src="{{ asset('frontend/js/nouislider.min.js')}}"></script>
		<script src="{{ asset('frontend/js/jquery.zoom.min.js')}}"></script>
		<script src="{{ asset('frontend/js/main.js')}}"></script>

	</body>
</html>
