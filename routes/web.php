<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" =>  "Putri Nurmeida Mayasari",
        "email" => "pnurmeida@gmail.com",
        "image" => "BFBM3634.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Putri Nurmeida",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam nisi doloribus eos assumenda quo dolor accusamus at dignissimos odio unde voluptates id, aperiam magni tenetur, dolores molestiae suscipit officiis atque. Laboriosam, doloribus ut id nam aperiam repudiandae? Sed in incidunt possimus expedita, magni aliquam quo eveniet, cumque reiciendis quos corrupti, maxime ab? Error magnam cupiditate animi laboriosam vitae sint eveniet commodi earum quisquam, aliquam dolore fuga officia similique voluptatibus laudantium non eligendi quaerat veniam corrupti tempore, ratione sed reiciendis iste tempora. Voluptatem vero modi placeat eveniet perspiciatis aliquam omnis perferendis ut blanditiis ipsam maxime dolorum sed veritatis, error fuga?"
        ], [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Olive Belgia",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam nisi doloribus eos assumenda quo dolor accusamus at dignissimos odio unde voluptates id, aperiam magni tenetur, dolores molestiae suscipit officiis atque. Laboriosam, doloribus ut id nam aperiam repudiandae? Sed in incidunt possimus expedita, magni aliquam quo eveniet, cumque reiciendis quos corrupti, maxime ab? Error magnam cupiditate animi laboriosam vitae sint eveniet commodi earum quisquam, aliquam dolore fuga officia similique voluptatibus laudantium non eligendi quaerat veniam corrupti tempore, ratione sed reiciendis iste tempora. Voluptatem vero modi placeat eveniet perspiciatis aliquam omnis perferendis ut blanditiis ipsam maxime dolorum sed veritatis, error fuga?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts =
        [


            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Putri Nurmeida",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam nisi doloribus eos assumenda quo dolor accusamus at dignissimos odio unde voluptates id, aperiam magni tenetur, dolores molestiae suscipit officiis atque. Laboriosam, doloribus ut id nam aperiam repudiandae? Sed in incidunt possimus expedita, magni aliquam quo eveniet, cumque reiciendis quos corrupti, maxime ab? Error magnam cupiditate animi laboriosam vitae sint eveniet commodi earum quisquam, aliquam dolore fuga officia similique voluptatibus laudantium non eligendi quaerat veniam corrupti tempore, ratione sed reiciendis iste tempora. Voluptatem vero modi placeat eveniet perspiciatis aliquam omnis perferendis ut blanditiis ipsam maxime dolorum sed veritatis, error fuga?"
            ], [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Olive Belgia",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam nisi doloribus eos assumenda quo dolor accusamus at dignissimos odio unde voluptates id, aperiam magni tenetur, dolores molestiae suscipit officiis atque. Laboriosam, doloribus ut id nam aperiam repudiandae? Sed in incidunt possimus expedita, magni aliquam quo eveniet, cumque reiciendis quos corrupti, maxime ab? Error magnam cupiditate animi laboriosam vitae sint eveniet commodi earum quisquam, aliquam dolore fuga officia similique voluptatibus laudantium non eligendi quaerat veniam corrupti tempore, ratione sed reiciendis iste tempora. Voluptatem vero modi placeat eveniet perspiciatis aliquam omnis perferendis ut blanditiis ipsam maxime dolorum sed veritatis, error fuga?"
            ],
        ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
