@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang Chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh</td>
							<td class="description">Tên Sản Phẩm<main></main></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@ 
						<tr>
							<td class="cart_product">
								<a href=""><img src="" style="width: 100px; height: 100px;" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
@endsection