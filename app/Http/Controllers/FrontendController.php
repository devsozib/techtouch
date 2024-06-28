<?php

namespace App\Http\Controllers;

use App\Models\Admin\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $news = [];
        return view('frontend.pages.index', compact('news'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function ourHistory()
    {
        return view('frontend.pages.ourHistory');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function shubhoShongo()
    {
        $news = News::join('categories', 'categories.id', '=', 'news.category_id')->select('news.*', 'categories.name')->where('news.status', '1')->orderBy('news.id', 'desc')->paginate(6);
        return view('frontend.pages.shubho_shongo', compact('news'));
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
