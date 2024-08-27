<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CatagoryController;
use App\Models\Catagory;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home()
    {
//        dd('lasjf');
        $catagory = Catagory::all();
        $slider = Slider::all();
//        dd($slider->all());

        return view('index', compact('catagory','slider'));
//        return view('admin.slider.edit', compact('edit'));

    }

    function blog_detail()
    {
        return view('blog-details');
    }

    function blog()
    {
        return view('blog');
    }

    function checkout()
    {
        return view('checkout');
    }

    function shop_detail()
    {
        $catagory = Catagory::all();
        return view('shop-details', compact('catagory'));
    }

    function contact()
    {
        return view('contact');
    }

    function shop_grid()
    {
        return view('shop-grid');
    }

    function shoping()
    {
        return view('shoping-cart');
    }
}


?>
