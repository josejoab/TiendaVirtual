<?php
/**
    *Author: Kevin Herrera
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Category;
use App\Design;
use App\User;
use App\Http\Controllers\Auth;

class DesignController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create($language)
    {   
        $id = Auth()->user()->role_id;
        if($id==1)
        {
            
            $data = []; //to be sent to the view
            $categories = Category::all();


            $data["title"] = "Create Design";
            $data["categories"] = $categories;
            

            return view('design.create')->with("data",$data);
        }
        else
        {
            return redirect()->route('index', ['language'=> $language]);
        }
    }


    public function save(Request $request)
    {
        Design::validate($request);
        $image = self::saveImage($request);
        Design::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "image" => $image,
            "width" => $request->width, 
            "length" =>$request->length, 
            "category_id" =>$request->category_id, 
            ]); 
        
        return back();
    }


    public function saveImage(Request $request)
    {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destiny = public_path('img/designs');
        $request->image->move($destiny, $name);
        $request->image = $name;
        
        return $name;
    }


    public function show($language, $cat)  
    {
        $data = [];
        $category = [];
        $categories = Category::all();
        $user = Auth()->user()->id;

        if($cat == 'all')
        {
            $designs =  Design::all();
        }
        else
        {
            $designs = Design::select('designs.id','designs.name','designs.price','designs.description','designs.image','designs.width','designs.length','designs.category_id')
            ->join('categories', 'categories.id', '=', 'designs.category_id')
            ->where('categories.name' , $cat)
            ->get();
        }

        foreach ($categories as $cat ){
            $category[$cat->getId()] = $cat->getName();
        }

        $data["title"] = "Designs";
        $data["categories"] = $categories;
        $data["designs"] = $designs;
        $data["user"] = $user;
        $data["category"]  = $category;

        return view('design.show')->with("data",$data);
    }


    public function showDesign($language, $id, Request $request)
    {
        try
        {
            $data = [];
            $category = [];
            $categories = Category::all();
            $designs =  Design::all();
            $design = Design::findOrFail($id);
            $user = Auth()->user()->id;

            foreach ($categories as $cat ){
                $category[$cat->getId()] = $cat->getName();
            }

            $data["title"] = "Design ".$design->getName();
            $data["categories"] = $categories;
            $data["category"]  = $category;
            $data["designs"] = $designs;
            $data["design"] = $design;
            $data["user"] = $user;
            return view('design.showDesign', ['language' => $language])->with("data",$data);
        }
        catch(ModelNotFoundException $e)
        {
            return redirect()->route('design.show');
        }
    }


    public function edit($id)
    {
        $id = Auth()->user()->role_id;
        if($id==1){
            $data = []; //to be sent to the view
            $design = Design::findOrFail($id);
            $data["title"] = "Edit Design";
            $data["design"] = $design;
            dd($id);
            return view('design.edit')->with("data",$data);
        }
        else{
            return redirect()->route('index', ['language'=> $language]);
        }    
    }


    public function update(Request $request, $id)
    {
        $id = Auth()->user()->role_id;
        if($id==1){
            try
            {
                Design::validate($request);
                $design = Design::findOrFail($id);
                $image = self::saveImage($request);
                $design->name = $request->name;
                $design->price = $request->price;
                $design->description = $request->description;
                $design->image = $image;
                $design->width = $request->width;
                $design->length = $request->length;
                $design->category_id = $request->category_id;
                $design->save();

                return redirect()->route('design.showDesign', $id);
            }
            catch(ModelNotFoundException $e)
            {
                return redirect()->route('design.show');
            }
        }
        else{
            return redirect()->route('index', ['language'=> $language]);
        }  
    }


    public function destroy(Design $design)
    {
        $design->delete();

        return redirect()->route('design.show');
    }


}
