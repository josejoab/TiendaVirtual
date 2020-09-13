<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Design;

class DesignController extends Controller
{
    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Agregar Diseño";

        return view('')->with("data",$data);
    }


    public function save(Request $request)
    {
        Design::validate($request);
        $request = saveImage();
        Design::create($request->only(["name","price","description","image","width","length","category_id"]));  
        
        return back()->with('success','Item created successfully!');
    }


    public function saveImage(Request $request)
    {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destiny = public_path('img/designs');
        $request->image->move($destiny, $name);
        $red = Image::make($destiny.'/'.$name);
        $red->resize(200, null, function($constraint){
            $constraint->aspectRatio();
        });
        $red->save($destiny.'/thumbs/'.$name);
        $request->image = name;
        
        return $request;
    }


    public function show()
    {
        $data = [];
        $data["title"] = "Diseños";
        $designs =  Design::all();
        $data["designs"] = $designs;

        return view('')->with("data",$data);
    }


    public function showDesign($id)
    {
        try
        {
            $data = [];
            $design = Design::findOrFail($id);
            $data["title"] = "Diseño ".$design->name;
            $data["design"] = $design;

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
            $design = Design::findOrFail($id);
            $design->update($request->all());

            return redirect()->route('');
        }
        catch(ModelNotFoundException $e)
        {
            return redirect()->route('');
        }
    }


    public function destroy(Design $design)
    {
        $design->delete();

        return redirect()->route('');
    }

    
}
