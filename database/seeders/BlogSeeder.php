<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog = new Blog();
        $blog->category_id = 1;
        $blog->blog_title = "Navigating Missing Data Challenges with XGBoost";
        $blog->user_id = 1;
        $blog->about_blog = "testing...";
        $blog->editor_content = "testing...";
        $blog->save();
    }
}
