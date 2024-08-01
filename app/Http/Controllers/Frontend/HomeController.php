<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::take(8)->get();
        $categories = Category::all();
        return view('frontend.index' , compact('categories','products'));
    }

    public function about_us(){
        return view('frontend.about-us');
    }
    public function contact_us(){

        return view('frontend.contact-us');
    }
    public function product(Request $request)
    {
        $category_id = $request->query('category_id', Category::first()->id); // Default to the first category if none is selected
        $products = Product::where('category_id', $category_id)->get();
        $categories = Category::all();

        return view('frontend.products', compact('products', 'categories', 'category_id'));
    }
    public function product_details($id){
        $product = Product::find($id);
        return view('frontend.product-details',compact('product'));
    }
    public function cart($id){
        return view('frontend.cart');
    }
    public function searchProducts(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%{$query}%")->get();
        
        return view('frontend.partials.products', compact('products'))->render();
    }

}
