<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::get();
        // echo "<pre>";
        // print_r( $subCategories->toArray());return;
        return view("admin.pages.product.sub_category", compact('subCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|numeric',
            'sub_category' => 'required|string|max:255',
            'status' => 'required',
        ]);
        $category = new SubCategory;
        $category->category_id = $request->category;
        $category->name = $request->sub_category;
        $category->status = $request->status;       
        $category->description = $request->description;  
        $category->created_by = auth()->user()->id;
        $category->save();
        session()->flash('sweet_alert', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Sub category Added success',
        ]);
        return redirect()->route('sub-categories.index');
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $rules = [
            'category' => 'required|numeric',
            'sub_category' => 'required|string|max:255',
            'status' => 'required',
        ];
        $validation = Validator::make($attributes, $rules);
        $messages = [
            'category.required' => 'The category field is required.',
            'order_by.required' => 'The order by field is required.',
            'status.required' => 'The status field is required.',
            'uimage.image' => 'The uploaded file must be an image.',
            'uimage.mimes' => 'The image must be a file of type: jpg, png, jpeg, gif.',
            'uimage.max' => 'The image size should not exceed 2MB.',
            'uimage.dimensions' => 'The image dimensions should be 370x260 pixels.',
        ];
        $validation->setCustomMessages($messages);
        if ($validation->fails()) {
            return back()->with(['error_code' => $id])->withErrors($validation)->withInput();
        } else {
            $category = SubCategory::where('slug',$id)->firstOrFail();
            if ($category) {
            // Handling the image upload                        
                $category->category_id = $request->category;
                $category->name = $request->sub_category;
                $category->status = $request->status;
                $category->description = $request->description;
                $category->updated_by = auth()->user()->id;
                $category->save();
            }
            session()->flash('sweet_alert', [
                'type' => 'success',
                'title' => 'Success!',
                'text' => 'Category update success',
            ]);            
            return redirect()->route('sub-categories.index')->with('success', 'Sub category updated successfully');
        }        
    }

    public function destroy($id)
    {
        $category = SubCategory::where('slug',$id)->firstOrFail();
        $category->delete();
        session()->flash('sweet_alert', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Sub category delete success',
        ]);
        return redirect()->route('sub-categories.index');
    }
    //For get data with axios

    public function getSubCategories()
    {
        return $categories = SubCategory::where('status', '1')->get();
    }
}
