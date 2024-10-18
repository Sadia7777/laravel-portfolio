<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Servicessection;
use App\Models\status;
use Illuminate\Http\Request;

class ServicessectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Servicessection::all();
        $service = Servicessection::latest()->first();
        return view("services.index", compact("services","service"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = status::all();
        return view("services.create" , compact("status"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {
        if ($request->has("MenuName")) {
            Menu::create([
                "name"=> $request->MenuName,
                "link"=> $request->MenuName,
            ]);
            $this_manu = Menu::latest()->first();
    
            $this_manu->servicesSections()->create([
                "title"=> $request->title,
                "sub_title"=> $request->sub_title,
                "sectionId"=> $request->MenuName,
                "status"=> $request->status,
            ]);
    
           } else {
            Servicessection::create([
                "title"=> $request->title,
                "sub_title"=> $request->sub_title,
                "status"=> $request->status,
            ]);
           }     
        return redirect()->route("services.index")->with("success","Services Section has been created successfully");
      } catch (\Throwable $th) {
        return redirect()->route("services.index")->with("error", $th->getMessage());

      }
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicessection $servicessection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicessection $servicessection , $id)
    {
        $status = status::all();
        $services = Servicessection::findOrFail($id);
       return view('services.edit' , compact('services','status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicessection $servicessection, $id)
    {
       try {
        $service = Servicessection::findOrFail($id);
        $menu = Menu::where('id', $service->menu_id)->first();

       if ($request->has('MenuName')) {
            Menu::where('id', $menu->id)->update([
                "name"=> $request->MenuName,
                "link"=> $request->MenuName,
            ]);

            $menu->servicesSections()->where('id' , $service->id)->update([
                "title"=> $request->title,
                "sub_title"=> $request->sub_title,
                "sectionId"=> $request->MenuName,
                "status"=> $request->status,
            ]);
       } else {
        Servicessection::where("id", $service->id)->update([
            "title"=> $request->title,
            "sub_title"=> $request->sub_title,
            "status"=> $request->status,
        ]) ;
        return redirect()->route("services.index")->with("success","Services Section has been Update Successfully");
       }
       

       } catch (\Throwable $th) {
        return redirect()->route("services.index")->with("error", $th->getMessage());
       }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicessection  $servicessection , $id)
    {
        try {
            $services = Servicessection::findOrFail($id);
            $menu = Menu::where("id", $services->menu_id)->first();
            $menu->delete();
            return redirect()->route("services.index")->with("success","Services section has been deleted successfully");
        } catch (\Throwable $th) {
            return redirect()->route("services.index")->with("error", $th->getMessage());
        }
    }
}
