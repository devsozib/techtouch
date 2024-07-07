<?php

namespace App\Http\Controllers;

use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

class FrontendController extends Controller
{
    public function index()
    {
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
        return view('frontend.pages.shop');
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
}
