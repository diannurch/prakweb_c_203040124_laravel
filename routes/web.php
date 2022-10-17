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
        "name" => "Dian Nurcahya Ningrum",
        "email" => "diannurcahya52@gmail.com",
        "image" => "dian.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dian Nurcahya Ningrum",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est rem eaque cumque dolore dolores nobis accusamus beatae! Et, nulla, nemo quia delectus, inventore id placeat ratione culpa accusamus natus sit labore necessitatibus sunt laudantium animi sint optio tenetur odit quisquam? Cupiditate, quia, animi iure corporis soluta recusandae vitae impedit autem facilis quaerat voluptatibus architecto dolorem! Aperiam ipsa facilis expedita, quae quod numquam sed voluptas consequuntur ipsum? Quod commodi magnam at facere velit, laudantium saepe fugiat quibusdam deleniti impedit ipsum aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kim Seokjin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa dolorem pariatur iure repellat eligendi odit ducimus ea quis corporis, vero autem id, dolorum nesciunt voluptate tenetur cum atque, similique neque? Quaerat praesentium similique molestiae dolorum iste tenetur repellat quos provident deleniti. Molestias cupiditate doloribus quas exercitationem! Temporibus nobis quidem incidunt animi aliquid explicabo placeat vel minus officiis facere assumenda quasi molestias sunt sint dolorem sed labore ea, tempora vitae suscipit ullam amet. Quo, laboriosam iusto, nulla neque possimus omnis molestiae non nemo perspiciatis est sed nihil quasi ratione, ea cumque impedit ipsam nobis ullam? Ullam alias sequi sint veniam."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dian Nurcahya Ningrum",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est rem eaque cumque dolore dolores nobis accusamus beatae! Et, nulla, nemo quia delectus, inventore id placeat ratione culpa accusamus natus sit labore necessitatibus sunt laudantium animi sint optio tenetur odit quisquam? Cupiditate, quia, animi iure corporis soluta recusandae vitae impedit autem facilis quaerat voluptatibus architecto dolorem! Aperiam ipsa facilis expedita, quae quod numquam sed voluptas consequuntur ipsum? Quod commodi magnam at facere velit, laudantium saepe fugiat quibusdam deleniti impedit ipsum aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kim Seokjin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa dolorem pariatur iure repellat eligendi odit ducimus ea quis corporis, vero autem id, dolorum nesciunt voluptate tenetur cum atque, similique neque? Quaerat praesentium similique molestiae dolorum iste tenetur repellat quos provident deleniti. Molestias cupiditate doloribus quas exercitationem! Temporibus nobis quidem incidunt animi aliquid explicabo placeat vel minus officiis facere assumenda quasi molestias sunt sint dolorem sed labore ea, tempora vitae suscipit ullam amet. Quo, laboriosam iusto, nulla neque possimus omnis molestiae non nemo perspiciatis est sed nihil quasi ratione, ea cumque impedit ipsam nobis ullam? Ullam alias sequi sint veniam."
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
