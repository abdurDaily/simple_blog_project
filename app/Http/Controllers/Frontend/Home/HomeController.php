<?php

namespace App\Http\Controllers\Frontend\Home;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * HOME INDEX 
    */
   public function index(){
    $categorys = Category::with('blogs')->where('category_status', 1)
       ->withCount('blogs')->latest()->get();

    $userProfile = User::where('author_active_status', 1)->first();

    return view('index', compact( 'userProfile', 'categorys'));
}
    /** 
     * BLOG DETAILS
     */
    public function blogDetails($id){
      $blog = Blog::with(['user', 'category'])
      ->where('active_status',1)->findOrFail($id);

      $socialLink = Setting::select('id','social_name','social_link')->get();
      $categoryId = $blog->category_id; 
      $releventBlogs = Blog::where('category_id', $categoryId) 
          ->where('id', '!=', $id) 
          ->latest('updated_at')->get();
          $userProfile = User::where('author_active_status', 1)->first(); 
          // dd($releventBlogs);
      $latestPost = Blog::latest('updated_at')->paginate(4);
      $categorys = Category::where('category_status', 1)->withCount('blogs')->get();
      // dd($categorys);
      return view('Frontend.Blog.Blog', compact('blog', 'categorys', 'releventBlogs','latestPost','socialLink','userProfile'));
  }
    /**
     * ALL BLOG LIST 
     */
    public function allBlogs($id){
      $blogs = Blog::with('category', 'user')
        ->where('active_status', 1)
        ->latest()
        ->get();
        $userProfile = User::where('author_active_status', 1)->first(); 
      $categorys = Category::where('category_status',1)->with('blogs')->withCount('blogs')->get();
      $socialLink = Setting::select('id','social_name','social_link')->get();
      $allBlogList = Blog::where('category_id',$id)->where('active_status',1)->latest('updated_at')->paginate(10);
      return view('Frontend.Blog.AllBlog',compact('blogs','allBlogList','socialLink','categorys','userProfile'));
    } 
    /**
     * SEARCH BLOG 
     */
    public function searchBlog(Request $request){
      $userProfile = User::where('author_active_status', 1)->first();
      $allBlogList = Blog::where('active_status',1)->latest('updated_at')->paginate(3);
      $categorys = Category::where('category_status',1)->with('blogs')->withCount('blogs')->get();
      $socialLink = Setting::select('id','social_name','social_link')->get();
      $allBlogList = Blog::where('active_status',1)->where('blog_title', 'like' , '%' . $request->search_blog . '%')
                     ->orWhere('about_blog', 'like', '%' . $request->search_blog .'%')
                       ->paginate(10);
                        //  dd($allBlogList);
      return view('Frontend.Blog.SearchBlog', compact('allBlogList','allBlogList','socialLink','categorys','userProfile'));
    } 
    /**
     * ALL BLOG LIST 
     */
    public function allBlogsList(){
      $userProfile = User::where('author_active_status', 1)->first(); 
      $categorys = Category::where('category_status',1)->with('blogs')->withCount('blogs')->get();
      $socialLink = Setting::select('id','social_name','social_link')->get();
      $allBlogList = Blog::where('active_status',1)->latest('updated_at')->paginate(10);
      return view('Frontend.Blog.AllBlogList',compact('allBlogList','socialLink','categorys','userProfile'));
    }

    /**EXPLORE CATEGORY */
    public function categorysIndex(){
      $categorys = Category::where('category_status',1)->with('blogs')->withCount('blogs')->get();
      return view('Frontend.Category.Category', compact('categorys'));
      dd($categorys);
    }
}
