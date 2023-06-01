<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Shop bán hàng laravel</title>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +0968 639 347</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> binhth.21it@vku.udn.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<!-- <div class="logo pull-left">
							<a href="index.html"><img src="{{('public/frontend/images/logo.png')}}" alt="" /></a>
						</div> -->
						<div class="btn-group pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div> -->

							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i>Tài Khoản</a></li>
								<li><a href="#"><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
								
							   <?php  
							   use Illuminate\Support\Facades\Session;  
							   $customer_id=Session::get('customer_id');
								if($customer_id != NULL){

							   ?>
                                <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>Đăng xuất</a></li>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
								<?php
								}else{

								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
								<?php 
								}
								?>

								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="#">Sản Phẩm<i class="fa fa-angle-down"></i></a>
								
									<ul role="menu" class="sub-menu">
										<li><a href="{{URL::to('/danh-muc-san-pham/')}}">Products</a></li>

									</ul>
								</li>
								<li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>

								</li>
								<li><a href="404.html">Giỏ Hàng</a></li>
								<li><a href="contact-us.html">Liên Hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
							{{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Tìm Kiếm sản phẩm" />
							<input type="submit" name="search_items" class="btn btn-warning" value="Tìm kiếm">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->

	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>SUN</span>-SHOP</h1>
									<h2>Cửa hàng đa dạng sản phẩm</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Mua Ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/anh4.jfif')}}" class="girl img-responsive" alt="" />
									<!-- <img src="{{('public/frontend/images/home/pricing.png')}}" class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/anh2.jfif')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/anh125.jfif')}}" class="girl img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 style="color: black;">Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian">
							@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div>
						<!--/category-products-->
						<div class="brands_products">
							<h2 style="color: black;">Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!--/brands_products-->

						<!-- <div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
								<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> -->
						<!--/price-range-->

						<!-- <div class="shipping text-center">
							
							<img src="{{('public/frontend/images/shipping.jpg')}}" alt="" />
						</div> -->
						<!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch Vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ Giúp Online</a></li>
								<li><a href="#">Liên Hệ</a></li>
								<li><a href="#">Tình Trạng Đặt Hàng</a></li>
								<li><a href="#">Thay Đổi Địa Điểm</a></li>
								<li><a href="#">Câu Hỏi Thường Gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Cửa Hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Đồng hồ nam</a></li>
								<li><a href="#">Đồng hồ nữ</a></li>
								<li><a href="#">Thương hiệu nổi tiếng</a></li>
								<li><a href="#">Thẻ Quà Tặng</a></li>
								<li><a href="#">Đồng hồ chính hãng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính Sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều Khoản Sử Dụng</a></li>
								<li><a href="#">Chính Sách Bảo Mật</a></li>
								<li><a href="#">Chính Sách Hoàn Lại Tiền</a></li>
								<li><a href="#">Hệ Thống Thanh Toán</a></li>
								<li><a href="#">Hệ Thống Vé</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới Thiệu</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Nghề Nghiệp</a></li>
								<li><a href="#">Vị Trí Cửa Hàng</a></li>
								<li><a href="#">Chương Trình Liên Kết</a></li>
								<li><a href="#">Bản Quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Giới Thiệu Về Đồng Hồ</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Điền email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left"></p>
					<!-- <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p> -->
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->
	<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $(".add-to-cart").click(function(){
            var id = $(this).data('id_product');
            var cart_product_id =$('.cart_product_id_'+ id).val();
            var cart_product_name =$('.cart_product_name_'+ id).val();
            var cart_product_image =$('.cart_product_image_'+ id).val();
            var cart_product_price =$('.cart_product_price_'+ id).val();
            var cart_product_qty =$('.cart_product_qty_'+ id).val();
            var _token =  $('input[name="_token"]').val();

            $.ajax({
                url: "{{route('cart.add')}}",
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                success:function(data){
                    swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                }
                });
            });
        });
    </script>
</body>

</html>