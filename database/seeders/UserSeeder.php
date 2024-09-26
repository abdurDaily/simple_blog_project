<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'abdur',
                'email' => 'abdur@gmail.com',
                'author_active_status' => 1,
                'password' => 'password',
                'about_author' => '<p>I’m a&nbsp;<strong>design technologist</strong>&nbsp;in Atlanta. I like working on the front-end of the web. This is my site,&nbsp;<strong>Zento</strong>&nbsp;where I blog, share and write tutorials…</p>',
                'image' => env('APP_URL') . '/images/profile-image.webp',
                'status' => 1,
            ],
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => 'password',
                'status' => 0,
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => 'password',
                'status' => 0,
            ],
        ];

        foreach ($userData as $data) {
            $user = new User();
            $user->name = $data['name'];
            $user->about_author = isset($data['about_author']) ? $data['about_author'] : '' ;
            $user->author_active_status = isset($data['author_active_status']) ? $data['author_active_status'] : 0;
            $user->email = $data['email'];
            $user->image = isset($data['image']) ? $data['image'] : null;
            $user->password = Hash::make($data['password']);
            $user->status = $data['status'];
            $user->save();
        }
    }
}
