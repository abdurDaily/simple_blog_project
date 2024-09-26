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
        $blog->user_id = 1;
        $blog->blog_title = "Test blog title...";
        $blog->blog_details = "Test blog details...";
        $blog->blog_image = env('APP_URL'). '/assets/images/default/code.svg';
        $blog->save();
    }
}
