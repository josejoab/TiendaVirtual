<?php
/**
    *Autor: Kevin Herrera
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Category;
use App\Http\Controllers\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
                $this->middleware('auth');
    }

    public function create()
    {
        $id = Auth()->user()->role_id;
        if($id==1){
            $data = []; //to be sent to the view
            $data["title"] = "Agregar categoria";

            return view('category.create')->with("data",$data);
        }
        else{
            return redirect()->route('index', ['language'=> $language]);
        } 
    }


    public function save(Request $request)
    {
        Category::validate($request);
        Category::create($request->only(["name","description"]));  
        
        return back();
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
        $id = Auth()->user()->role_id;
        if($id==1){
            try
            {
                $category = Category::findOrFail($id);
                $category->save();

                return redirect()->route('');
            }
            catch(ModelNotFoundException $e)
            {
                return redirect()->route('');
            }
        }
        else{
            return redirect()->route('index', ['language'=> $language]);
        }     
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('');
    }


}
