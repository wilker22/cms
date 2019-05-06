<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
   
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

   
    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

   
    public function store(CreatePostsRequest $request)
    {
         
            //upload the image
            
            $image = $request->image->store('posts');
           //  
            //create the post
            Post::create([
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
                'published_at' => $request->published_at,
                'image' => $image,
                'category_id' => $request->category
            ]);
         
            //flash message
            session()->flash('success', 'Post criado com sucesso!');

            //redirect user
            return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post )->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only(['title', 'description', 'published_at', 'content', 'category']);
        
        //check if new image
        if($request->hasFile('image')){
            //upload it
              $image =  $request->image->store('posts');
            //delete old one
                $post->deleteImage();
            
            $data['image'] = $image;
 
        }
       
        //update atributes
             $post->update($data);

        //flash message
        session()->flash('success', 'Post alterado com sucesso!');

        //redirect user
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        if($post->trashed()){
            $post->deleteImage(); //Storage::delete($post->image);
            $post->forceDelete();
            session()->flash('success', 'Post enviado para Excluído com sucesso com sucesso!');
        }else{
            $post->delete();
            session()->flash('success', 'Post  Enviado para lixeira com sucesso com sucesso!');
        }
        
        return redirect(route('posts.index'));
    }

    /**
     * display a list of all trashed posts
     *
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();

        return view('posts.index')->withPosts($trashed);
    }


    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        $post->restore();

        session()->flash('success', 'Post  Restaurado com sucesso com sucesso!');

        return redirect()->back();
    }

     
}
