<?php

namespace App\Http\Controllers;
use App\Products;
use App\Category;
use App\News;
use App\Order;
use App\Product_detail;
use App\Users;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $product = Products::where('status', 1) -> paginate(4);
        $category = Category::all();
    	return view('page.home',compact('category','product'));
    }
    public function getBlog(){
        $product = Products::where('status' ,'=', 1) -> paginate(2);
        $category = Category::all();
    	return view('page.blog', compact('product','category'));
    }
    public function getCart(){
        $category = Category::all();
    	return view('page.cart', compact('category'));
    }
    public function getContact(){
        $category = Category::all();
    	return view('page.contact',compact('category'));
    }
    public function getLogin(){
        $category = Category::all();
    	return view('page.login',compact('category'));
    }
    public function getProducts(){
        $products = Products::where('status' , 1) -> paginate(8);
        $category = Category::all();
    	return view('page.products', compact('products','category'));
    }
    public function getProduct_detail(Request $req){
        $products = Products::where('status' , 1) -> paginate(8);
        $category = Category::all();
        return view('page.product_detail', compact('products','category'));
    }


}
