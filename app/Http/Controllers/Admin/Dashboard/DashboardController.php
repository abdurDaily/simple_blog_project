<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //**FOR DASHBOARD INDEX  */
    public function index(){
        $activeCategory = Category::where('category_status',1)->count();
        $activeBlog = Blog::where('active_status',1)->count();
        $activeVideo = video::count();  
        return view('dashboard', compact('activeCategory','activeBlog','activeVideo'));
    }



}
