<?php

namespace App\Http\Controllers\Frontend\Home;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * HOME INDEX 
    */
    public function index(){
     $blogs = Blog::with('category','user')
       ->where('active_status', 1)
       ->latest()->paginate(5);
    $categorys = Category::where('category_status',1)->with('blogs')->get();
    $userProfile = User::where('author_active_status',1)->first();
    return view('index',compact('blogs','userProfile','categorys'));
    }
    /** 
     * BLOG DETAILS
     */
    public function blogDetails($id){
        $blog = Blog::with('user')->find($id);
        $categorys = Category::where('category_status',1)->get();
        return view('Frontend.Blog.Blog', compact('blog', 'categorys'));
    }
    /**
     * ALL BLOG LIST 
     */
    public function allBlogs($id){
      $filterBlogList = Blog::where('category_id',$id)->where('active_status',1)->latest()->get();
      return view('Frontend.Blog.AllBlog',compact('filterBlogList'));
    } 
    /**
     * SEARCH BLOG 
     */
    public function searchBlog(Request $request){
      $blogs = Blog::where('blog_title', 'like' , '%' . $request->blog_search . '%')
                     ->orWhere('blog_details', 'like', '%' . $request->blog_search .'%')
                       ->get(); 
      return view('Frontend.Blog.SearchBlog', compact('blogs'));
    } 
    /**
     * ALL BLOG LIST 
     */
    public function allBlogsList(){
      $allBlogList = Blog::where('active_status',1)->latest()->simplepaginate(9);
      return view('Frontend.Blog.AllBlogList',compact('allBlogList'));
    }
    /**
     * CATEGORY WISE BLOG LIST 
     */
    // public function categoryForAside(){
      
    //   dd($categorys);
    // }
}
