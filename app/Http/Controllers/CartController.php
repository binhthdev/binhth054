<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;

session_start();
class CartController extends Controller
{
     public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
       
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();
        $slider = Slider::orderBy('slider_id','DESC')->take(4)->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        
      
        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product)->with('slider',$slider);
    }
    public function addCartAjax(Request $request){
        $data = $request->all();
        
        $session_id =substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;

                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                    'session_id'=> $session_id,
                    'product_name'=> $data['cart_product_name'],
                    'product_id'=> $data['cart_product_id'],
                    'product_image'=> $data['cart_product_image'],
                    'product_qty'=> $data['cart_product_qty'],
                    'product_price'=> $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id'=> $session_id,
                'product_name'=> $data['cart_product_name'],
                'product_id'=> $data['cart_product_id'],
                'product_image'=> $data['cart_product_image'],
                'product_qty'=> $data['cart_product_qty'],
                'product_price'=> $data['cart_product_price'],
            );
        }
        session::put('cart',$cart);
        Session::save();
    }
    public function gio_hang(Request $request){
        $meta_desc = "Giỏ Hàng Của Bạn";
        $meta_keywords = "Giỏ Hàng Ajax";
        $meta_title = "Giỏ Hàng Ajax";
        $url_canonical = $request->url();

        $slider = Slider::orderBy('slider_id','DESC')->take(4)->get();
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product',lag 'tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderBy('tbl_product.product_id','desc')->get();
        // $manager_product = view('admin.all_product')->with('all_product', $all_product);
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        return view('pages.cart.cart_ajax')
        ->with('category',$cate_product)
        ->with('brand',$brand_product)
        ->with('all_product',$all_product)
        ->with('slider',$slider)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
    }
    public function delete_product($session_id){
         $cart = Session::get('cart');
         if($cart ==true){
            foreach($cart as $key =>$val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]); 
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xóa sản phẩm thành công!');
         }else{
            return redirect()->back()->with('message','Xóa sản phẩm thất bại!');
         }
    }
    public function delete_all_product(){
        $cart = Session::get('cart');
        if($cart == true){
            // Session::destroy();
            Session::forget('cart');
            return redirect()->back()->with('message','Xóa tất giỏ hàng thành công');
        }
    }
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            foreach($data['cart_qty']as $key =>$qty){
                foreach($cart as $session => $val){
                    if($val ['session_id']==$key){
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Cập nhật số lượng thành công!');
        }else{
            return redirect()->back()->with('message','Cập nhật số lượng thất bại!');
        }

    }
}
