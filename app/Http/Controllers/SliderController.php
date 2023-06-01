<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
session_start();
class SliderController extends Controller
{
    public function manage_slider()
    {
        $all_slide = Slider::orderBy('slider_id', 'DESC')->get();
        return view('admin.slider.list_slider')->with(compact('all_slide'));
    }
    public function add_slider()
    {
        return view('admin.slider.add_slider');
    }
    public function insert_slider(REQUEST $request)
    {
        $data = $request->all();
        $get_image = $request->file('slider_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider', $new_image);
            
            $slider = new Slider();
            $slider->slider_name=$data['slider_name'];
            $slider->slider_image=$new_image;
            $slider->slider_status=$data['slider_status'];
            $slider->slider_desc=$data['slider_desc'];
            $slider->save();
            Session::put('message', 'Thêm slider thành công');
            return Redirect::to('add-slider');
        }else{
            Session::put('message', 'Thiếu hình ảnh?');
            return Redirect::to('add-slider');
        }
        
    }
    public function delete_slider($product_id){
        DB::table('tbl_slider')->where('slider_id',$product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('manage-slider');
    }
}
