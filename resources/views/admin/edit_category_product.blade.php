@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            <?php

            use Illuminate\Support\Facades\Session;

            $message = Session::get('message');
            if ($message) {
                echo '<span class ="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                @foreach($edit_category_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none;" rows="5" ; type="password" class="form-control" name="category_product_desc" id="exampleInputPassword1">{{$edit_value->category_desc}}</textarea>
                        </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    @endsection