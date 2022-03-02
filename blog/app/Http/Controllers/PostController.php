<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    

    public function index()
    {
        //return Post::with('category','comments','tags')->get();
        return PostResource::collection(Post::with('category','comments','tags')->get());
    }

    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = Post::create($request->all());
        return new PostResource($post);
    }

    
    public function show($id)
    {
       // return Post::with('category','comments','tags')->find($id);
      return new PostResource(Post::with('category','comments','tags')->find($id));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = Post::find($id);
        $post->update($request->all());

        //return $post;
        return new PostResource($post);
    }

    
     public function destroy($id)
     {
        $post = Post::find($id);
        $post->delete();
         return $post;
     }

    //public function getCommentsByPost(Post $post)
    //{
    //    return $post->comments;
    //}

    //public function getTagsByPost(Post $post)
    // {
    //    return $post->tags;
    //}

    //public function getCategoryByPost(Post $post)
    //{
    //    return $post->category;
    //}
}
