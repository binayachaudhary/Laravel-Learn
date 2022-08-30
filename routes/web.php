<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;



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

    $files = File::files(resource_path("posts"));
    $posts = array_map(function ($file){
        $document = YamlFrontMatter::parseFile($file);
        return new Post(
            $document -> title,
            $document->date,
            $document->slug,
            $document->body()
        );
    },$files);


    return view('posts.post',[
        'posts' => $posts
    ]);
});
Route::get('/post/{post}', function($slug){
   
   return view('posts.single',[
    'post' => Post::find($slug)
   ]);
})->where('post','[A-z_\-]+');
