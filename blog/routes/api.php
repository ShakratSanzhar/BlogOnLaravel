<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'categories' => CategoryController::class,
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'tags' => TagController::class,
    //'posts.comments' => PostController::class,
    // 'categories/{id}' => CategoryController::class,
    // 'posts/{id}' => PostController::class,
    // 'comments/{id}' => CommentController::class,
    // 'tags/{id}' => TagController::class,
   // 'categories/{id}/posts'=>CategoryController::class,'vidok'],
]);


//Route::apiResources('categories/{cat}/posts',CategoryController::class)->only(['vidok']);
    


//Route::get('categories/{category}/posts',[CategoryController::class,'getPostByCategory']);

//Route::get('posts/{post}/comments',[PostController::class,'getCommentsByPost']);

//Route::get('posts/{post}/tags',[PostController::class,'getTagsByPost']);

//Route::get('tags/{tag}/posts',[TagController::class,'getPostsByTag']);

//Route::get('comments/{comment}/post',[CommentController::class,'getPostByComment']);

//Route::get('posts/{post}/category',[PostController::class,'getCategoryByPost']);