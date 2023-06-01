@extends('welcome')
@section('content')
<style>
.dn:hover{
    color: white;
}
</style>
<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Đăng Nhập</h2>
                    <form action="{{ route('checklogin') }}" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="password" placeholder="Mật Khẩu" />
                        <span>
                            <input type="checkbox" class="checkbox">
                            Ghi Nhớ Đăng Nhập
                        </span>
                        <button type="submit" style="background-color: yellowgreen;" class="btn btn-default dn">Đăng Nhập</button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or" style="background-color: black;">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>Đăng Kí</h2>
                    <form action="{{URL::to('/add-customer')}}" method="post">
                        {{ csrf_field()}}
                        <input type="text" name="customer_name" placeholder="Họ Và Tên" />
                        <input type="email" name="customer_email" placeholder="Địa Chỉ Email" />
                        <input type="password" name="customer_password" placeholder="Password" />
                        <input type="text" name="customer_phone" placeholder="Số Điện Thoại" />
                        <button type="submit" style="background-color: yellowgreen;" class="btn btn-default dn">Đăng Kí Tài Khoản</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

@endsection