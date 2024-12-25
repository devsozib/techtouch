<?php

namespace App\Http\Controllers;

use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;

class FrontendController extends Controller
{
    public function index()
    {

        return redirect()->away('https://www.720yun.com/t/32vk6hiqppb?scene_id=107899358');

        $services = Category::get();
        return view('frontend.pages.index', compact('services'));
    }

    public function about()
    {
        $services = Category::get();
        return view('frontend.pages.about',compact('services'));
    }

    public function ourServices()
    {
        $services = Category::get();
        return view('frontend.pages.service',compact('services'));
    }

    public function projects()
    {
        return view('frontend.pages.projects');
    }

    public function shop()
    {
        // $news = News::join('categories', 'categories.id', '=', 'news.category_id')->select('news.*', 'categories.name')->where('news.status', '1')->orderBy('news.id', 'desc')->paginate(6);
        $products = Product::where('status','1')->paginate(5);
        return view('frontend.pages.shop', compact('products'));
    }

    
    public function productDetails($id)
    {
        // $news = News::join('categories', 'categories.id', '=', 'news.category_id')->select('news.*', 'categories.name')->where('news.status', '1')->orderBy('news.id', 'desc')->paginate(6);
        return view('frontend.pages.single-product');
    }

    public function checkout() {
        return view('frontend.pages.checkout');
    }

    public function cart() {
        return view('frontend.pages.cart');
    }

    public function whatWeDo()
    {
        return view('frontend.pages.pages_what_we_do');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }



    public function singleHistory()
    {
        return view('frontend.pages.history_signle');
    }

    public function newsSingle($id)
    {
        $singleNews = News::join('categories', 'categories.id', '=', 'news.category_id')->select('news.*', 'categories.name')->where('news.id', $id)->first();
        return view('frontend.pages.news_single', compact('singleNews'));
    }


    public function serviceWiseProduct($id){
       $products = Product::where('category_id', $id)->where('status','1')->get();
       $showFor = 'serviceWiseProduct';
       return view('frontend.pages.shop', compact('products','showFor'));
    }

    public function product3DView($id)
    {
        // Define the path to the HTML file in the public directory
        $filePath = public_path("frontend/f0vk6hiqpp9.html");

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404); // Return a 404 if the file is not found
        }

        // Redirect to the HTML file with the query parameter
        return redirect(url("frontend/f0vk6hiqpp9.html?scene_id=107899299"));
    }

    public function categoryWiseProduct($slug){
        $subCat = SubCategory::where('slug', $slug)->first();
        $products = Product::where('sub_category_id', $subCat->id)->where('status','1')->get();
        $showFor = 'serviceWiseProduct';
        return view('frontend.pages.shop', compact('products','showFor'));
    }
}
