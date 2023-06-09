@extends('welcome')
@section('content')
<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center" style="color: black;">Sản phẩm mới nhất</h2>
						@foreach($all_product as $key => $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<form action="">
											@csrf
										<input type="hidden"value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
										<input type="hidden"value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
										<input type="hidden"value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
										<input type="hidden"value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
										<input type="hidden"value="1" class="cart_product_qty_{{$product->product_id}}">
										<img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" width="262.5" height="262.5" />
										<h2 style="color: red;">{{number_format($product->product_price).''.'đ'}}</h2>
										<p>{{$product->product_name}}</p>
										<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a> -->
										<button class="btn btn-default add-to-cart" type="button" data-id_product="{{$product->product_id}}" name="add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
										</form>
									</div>

								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Đánh giá</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<!--features_items-->
					<!--/recommended_items-->
@endsection
