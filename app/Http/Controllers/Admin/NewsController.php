<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status','1')->get();
        $news = News::join('categories','categories.id','=','news.category_id')->select('news.*','categories.name')->where('news.status','1')->get();
        return view('backend.pages.news.index',compact('categories','news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'activity_date' => 'required|date',        
            // 'thumbnail_image' => 'image|mimes:jpeg,png,jpg,gif,web', // Assuming maximum image size is 2MB
            'status' => 'required|in:0,1',
        ]);
        
        $imageName = "";
        if ($request->hasFile('thumbnail_image')) {
            $image = $request->file('thumbnail_image');
            $destinationPath = 'frontend/images/news/';
            $imageName = now()->format('YmdHis') . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
        }
        $news = new News();
        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->activity_date = $request->activity_date;
        $news->short_description = $request->short_description;
        $news->long_description = $request->long_description;
        $news->thumbnail_image =  $imageName;
        $news->status = $request->status;
        $news->save();

        return redirect()->route('news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
        ]);
        $category = Category::find($id);
        if ($category) {
            $category->name = $request->name;
            $category->status = $request->status;
            // $category->created_by = auth()->user()->id;
            $category->update();
        }
        session()->flash('sweet_alert', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Category update success',
        ]);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        session()->flash('sweet_alert', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Category Delete success',
        ]);
        return redirect()->route('category.index');
    }
}
