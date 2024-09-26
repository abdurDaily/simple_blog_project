<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * CATEGORY INDEX
     */
    public function categoryIndex($id = null){
        $editedCategory = null;
        if($id){
            $editedCategory = Category::find($id);
        }
        $categorys = Category::latest()->simplePaginate(10);
        return view('Backend.Layout.Category.Category', compact('categorys','editedCategory'));
    }

    


    /**
     * ADD CATEGORY 
     */
    public function addCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'category_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        
        if($request->hasFile('category_img')){
            $category_image = $request->category_img->extension();
            $category_image_name  = 'category-' . time().'.'.$category_image;
            $store_image = $request->category_img->storeAs("categoty", $category_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $category->category_img = $path_image;
          $category->save();
        }

        return back();
    }


    /**
     * ACTIVE CATEGORY 
     */
    public function activeCategory($id){
       $category = Category::find($id);
       if($category->category_status == 0){
         $category->category_status = 1;
         $category->save();
        }else{
            $category->category_status = 0;
            $category->save();
       }
       return back();
    }

    /**
     * DELETE CATEGORY
     */
    public function deleteCategory($id){
        Category::find($id)->delete();
        toast('deleted category!', 'error');
        return back();
    }


    /**
     * UPDATE CATEGORY 
     */
    public function updateCategory(Request $request, $id){
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,'.$id,
            'category_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();

        
        if($request->hasFile('category_img')){
            $category_image = $request->category_img->extension();
            $category_image_name  = 'category-' . time().'.'.$category_image;
            $store_image = $request->category_img->storeAs("categoty", $category_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $category->category_img = $path_image;
            $category->save();
        }
        return back();
    }
}
