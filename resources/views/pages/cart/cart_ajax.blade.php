@extends('welcome')
@section('content')
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="">Trang Chủ</a></li>
				<li class="">Giỏ Hàng</li>
			</ol>
		</div>
		@if(session()->has('message'))
		<div class="alert alert-success">
			{{session ()->get('message')}}
		</div>
		@elseif(session()->has('error'))
		<div class="alert alert-danger">
			{{session ()->get('error')}}
		</div>
		@endif
		<div style="width: 890px;" class="table-responsive cart_info">
			<form action="{{URL::to('/update-cart')}}" method="POST">
				@csrf
				<table style="width: 1000px; " class="table table-condensed">
					<thead >
						<tr style="background-color: yellowgreen;" class="cart_menu">
							<td style="width: 200px;" class="description">Tên Sản Phẩm<main></main>
							</td>
							<td style="width: 100px;" class="price">Giá</td>
							<td style="width: 10px;" class="quantity">Số Lượng</td>
							<td style="width: 20px;" class="total">Thành Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@if(Session::get('cart')==true)
						<?php
						$total = 0;
						?>
						@foreach(Session::get('cart') as $key =>$cart)
						<?php
						$subtotal =( $cart['product_price'] *$cart['product_qty']);
						$total += $subtotal;
						?>
						<tr>
							<td class="cart_product">
								<img src="{{asset('/public/uploads/product/'.$cart['product_image'])}}" style="width: 100px; height: 100px;" alt="{{$cart['product_name']}}">
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>{{$cart['product_name']}}</p>
							</td>
							<td class="cart_price">
								<p style="font-size: 17px;">{{number_format($cart['product_price'],0,',','.')}}đ</p> 
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity cart_quantity_input" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}" autocomplete="off" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p style="font-size: 20px;" class="cart_total_price">{{number_format($subtotal,0,',','.')}}đ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						 <tr>
							 <td><input style="background-color: yellowgreen;" type="submit" value="Cập Nhật Giỏ Hàng" name="update_qty" class="check_out btn btn-default btn-sm "></td> 
							<!-- <td ><a  style="background-color: yellowgreen;" class="btn btn-default check_out" href="{{URL::to('/del-all-product')}}">Xóa Tất Cả</a></td>
							<td>
								<li  style="width: 250px;">Tổng Tiền:<span>{{number_format($total,0,',','.')}}VNĐ</span></li>
								<li>Thuế: <span>$2</span></li>
								<li>Phí Vận Chuyển: <span>Free</span></li>
								<li>Phí giảm giá: <span>$61</span></li>
							</td>
						</tr> 
						 -->
						@else
						<tr>
							<td rowspan="5" >
								<?php
								echo 'Hãy thêm sản phẩm vào giỏ hàng';
								?>
							</td>
						</tr>
						@endif
					</tbody>
			</form>
			</table>
			<div class="col-sn-6">
							<div class="total_area">
								<ul>
									<li>Tổng <span>{{number_format($total,0,',','.')}}đ</span> </li>
									<li>Thuế <span>$2</span> </li>
									<li>Phí vận chuyển<span>Free</span> </li>
									<li>Thành tiền <span>{{number_format($total,0,',','.')}}</span> </li>
								</ul>
								<a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
							</div>
						</div>
		</div>

	</div>
</section>

@endsection
