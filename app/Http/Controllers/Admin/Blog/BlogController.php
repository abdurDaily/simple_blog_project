<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * INDEX
     */
    public function blogIndex(){
       $categorys = Category::select('id','category_name')->get();
       return view('Backend.Layout.Blogs.AddBlog',compact('categorys'));
    }


    /**
     * ADD BLOG
     */
    public function addBlog(Request $request){
        $request->validate([
        "blog_title" => 'required',
        "blog_details" => 'required',
        "category_id" => 'required'
        ]);
        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->blog_title = $request->blog_title;
        $blog->code = $request->code;
        $blog->blog_details = $request->blog_details;
        $blog->category_id = $request->category_id;
        $blog->save();
        
        if($request->hasFile('blog_image')){
            $blog_image = $request->blog_image->extension();
            $blog_image_name  = 'blog-' . time().'.'.$blog_image;
            $store_image = $request->blog_image->storeAs("blog", $blog_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $blog->blog_image = $path_image;
            $blog->save();
        }
        toast('Post Uploaded!', 'success');
        return back();
    }

    /**
     * BLOG LIST
     */
    public function blogList(){
        $blogs = Blog::latest()->simplePaginate(10);
        return view('Backend.Layout.Blogs.AllBlog', compact('blogs'));
    }


    /**
     * EDIT BLOG
     */
     public function editBlog($id){
       $editBlog =  Blog::with('user')->find($id);
       $categorys = Category::select('id','category_name')->get();
       return view('Backend.Layout.Blogs.EditBlog', compact('editBlog','categorys'));
     }


     /**
      * UPDATE BLOG
      */
    public function updateBlog(Request $request, $id){

        $updateBlog = Blog::find($id);
        $updateBlog->user_id = Auth::user()->id;
        $updateBlog->blog_title = $request->blog_title;
        $updateBlog->blog_details = $request->blog_details;
        $updateBlog->category_id = $request->category_id;
        $updateBlog->save();
        
        if($request->hasFile('blog_image')){
            $blog_image = $request->blog_image->extension();
            $blog_image_name  = 'blog-' . time().'.'.$blog_image;
            $store_image = $request->blog_image->storeAs("blog", $blog_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $updateBlog->blog_image = $path_image;
            $updateBlog->save();
        }
        
        return redirect()->route('blog.list');
    }

    /**
     * DELETE
     */
    public function deleteBlog($id){
        Blog::find($id)->delete();
        toast('deleted category!', 'error');
        return redirect()->route('blog.list');
    }


    /**
     * ACTIVE BLOG'S
     */
    public function activeBlog($id){
        $activeBlog = Blog::find($id);
        if($activeBlog->active_status == 0){
            $activeBlog->active_status = 1;
            $activeBlog->save();
            return redirect()->route('blog.list');
        }else{
            $activeBlog->active_status = 0;
            $activeBlog->save();
            return redirect()->route('blog.list');
            // return back();
        }
    }

    /**
     * BLOG SEARCHING 
     */
    public function blogSearch(Request $request){
        $blogs = Blog::latest()->with('user')->simplePaginate(10);
        $search = Blog::where('blog_title', 'like', '%'.$request->search_blog.'%')
             ->orWhere('blog_details', 'like', '%'.$request->search_blog.'%')
             ->get();

            //  dd($search);
        return view('Backend.Layout.Blogs.SearchBlog', compact('search','blogs'));
    }
}
