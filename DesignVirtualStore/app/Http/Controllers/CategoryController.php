<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Category;

class CategoryController extends Controller
{

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Agregar categoria";

        return view('')->with("data",$data);
    }


    public function save(Request $request)
    {
        Category::validate($request);
        Category::create($request->only(["name","description"]));  
        
        return back()->with('success','Item created successfully!');
    }


    public function show()
    {
        $data = [];
        $data["title"] = "Categorias";
        $categories =  Category::all();
        $data["categories"] = $categories;

        return view('')->with("data",$data);
    }


    public function showCategory($id)
    {
        try
        {
            $data = [];
            $category = Category::findOrFail($id);
            $data["title"] = "Categoria ".$category->name;
            $data["category"] = $category;

            return view('')->with("data",$data);
        }
        catch(ModelNotFoundException $e)
        {
            return view('')->with("data",$data);
        }
    }


    public function update(Request $request, $id)
    {
        try
        {
            $category = Category::findOrFail($id);
            $category->update($request->all());

            return redirect()->route('');
        }
        catch(ModelNotFoundException $e)
        {
            return redirect()->route('');
        }
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('');
    }


}
