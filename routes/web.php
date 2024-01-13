<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts =  Sheets::collection('posts')->all();
    return view('post.index', [
        'posts' => $posts
    ]);
});


Route::get('/posts/{slug}', function ($slug){
    $post = Sheets::collection('posts')->all()->where('slug', $slug)->first();

    abort_if(is_null($post), 404);

    return  view('post.show', [
        'post' => $post
    ]);
});


Route::get('/authors/{author}', function($author){

    $posts =  Sheets::collection('posts')
    ->all()
    ->filter(fn (Post $post) => $post->author == $author);

    // dd($posts);

    return view('authors.show', [
        'posts' => $posts,
        'authorName' => $posts->first()->author_name
    ]
);

});


Route::get('/tags/{tag}', function($tag){

    $posts =  Sheets::collection('posts')
    ->all()
    ->filter(fn (Post $post) => in_array($tag, $post->tags));

    // dd($posts);

    return view('tags.show', [
        'posts' => $posts,
        'tag' => $tag
    ]);
});
