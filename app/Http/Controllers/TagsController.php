<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tags\CreateTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;
use App\Tag;

class TagsController extends Controller
{
    public function index()
    {
        
        return view('tags.index')->with('tags', Tag::all());
    }
    

    
    public function create()
    {
        return view('tags.create');
    }

    
    public function store(CreateTagRequest $request)
    {
       
        Tag::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Tag Criada com sucesso!');

         return redirect(route('tags.index'));
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Tag $tag)
    {
        return view('tags.create')->with('tag', $tag);
    }

   
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->name = $request->name;
        $tag->update([
            'name' => $request->name
        ]);
        session()->flash('success', 'Tag Alterada com sucesso!');
        return redirect(route('tags.index'));
    }

   
    public function destroy(Tag $tag)
    {
        if($tag->posts->count() >0){
            session()->flash('error', 'Tag não pode excluída pois está associada a Posts!');
            return redirect()->back();
        }
        
        $tag->delete();

        session()->flash('success', 'Tag excluída com sucesso!');

        return redirect(route('tags.index'));
    }
}
