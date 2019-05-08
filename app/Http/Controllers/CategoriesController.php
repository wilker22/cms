<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoriesRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        
        return view('categories.index')->with('categories', Category::all());
    }
    

    
    public function create()
    {
        return view('categories.create');
    }

    
    public function store(CreateCategoryRequest $request)
    {
       
        Category::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Categoria Criada com sucesso!');

         return redirect(route('categories.index'));
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Category $category)
    {
        return view('categories.create')->with('category', $category);
    }

   
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->update([
            'name' => $request->name
        ]);
        session()->flash('success', 'Categoria Alterada com sucesso!');
        return redirect(route('categories.index'));
    }

   
    public function destroy(Category $category)
    {
        if($category->posts->count() >0){
            session()->flash('error', 'Categoria não pode excluída pois está associada a Posts!');
            return redirect()->back();
        }
        
        $category->delete();

        session()->flash('success', 'Categoria excluída com sucesso!');

        return redirect(route('categories.index'));
    }
}
