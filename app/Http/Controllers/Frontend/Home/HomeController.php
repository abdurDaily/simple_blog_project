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
      $blog = Blog::with(['user', 'category'])
      ->where('active_status',1)->findOrFail($id);

      $categoryId = $blog->category_id; 
      $releventBlogs = Blog::where('category_id', $categoryId) 
          ->where('id', '!=', $id) 
          ->latest('updated_at')->paginate(5);
      $latestPost = Blog::latest('updated_at')->paginate(4);
      $categorys = Category::where('category_status', 1)->get();
      return view('Frontend.Blog.Blog', compact('blog', 'categorys', 'releventBlogs','latestPost'));
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
      $blogs = Blog::where('about_blog', 'like' , '%' . $request->search_blog . '%')
                     ->orWhere('blog_title', 'like', '%' . $request->search_blog .'%')
                       ->get();
      return view('Frontend.Blog.SearchBlog', compact('blogs'));
    } 
    /**
     * ALL BLOG LIST 
     */
    public function allBlogsList(){
      $allBlogList = Blog::where('active_status',1)->latest('updated_at')->paginate(8);
      return view('Frontend.Blog.AllBlogList',compact('allBlogList'));
    }
}
