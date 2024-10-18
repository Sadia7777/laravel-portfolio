<?php

namespace App\Http\Controllers;

use App\Models\Subservices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subservices = Subservices::all();
        return view("subservices.index", compact("subservices"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Subservices::all();
        return view("subservices.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
            $file = $request->file("image");
            $fileExtention =  $file->getClientOriginalExtension();
            $location = 'uploads/services/';
            $fileName = time() .'.'. $fileExtention;

            $file->move(public_path( $location), $fileName);

            Subservices::create([
                "title"=> $request->title,
                "image"=> $location. $fileName,
                "description"=> $request->description,
                "list_item"=> $request->list_item,
            ]);
            return redirect()->route("subservices.index")->with("success","Sub Services has been created successfully");
       } catch (\Throwable $th) {
            return redirect()->route("subservices.index")->with("error", $th->getMessage());
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subservices $subservices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subservices $subservices ,$id)
    {
       $subservice =Subservices::findOrFail($id);
       return view("subservices.edit", compact("subservice"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subservices $subservices, $id)
    {
    try {
        $subservices = Subservices::findOrFail( $id );

        if ($request->hasFile("image")) {
    
            $file = $request->file("image");
            $fileExtention = $file->getClientOriginalExtension();
            $location = 'uploads/services/';
            $fileName = time() .'.'. $fileExtention;
            $file->move(public_path( $location), $fileName);
    
            // delete Old File
            $oldFile = public_path($subservices->image);
            File::delete($oldFile);
    
            Subservices::where("id", $subservices->id)->update([
                "title"=> $request->title,
                "image"=> $location.$fileName,
                "description"=> $request->description,
                "list_item"=> $request->list_item,
            ]);
            } else {
                    Subservices::where("id", $subservices->id)->update([
                "title"=> $request->title,
                "description"=> $request->description,
                "list_item"=> $request->list_item,
            ]);
            }
        return redirect()->route("subservices.index")->with("success","Sub Services Section has been Updated Successfully");
        } catch (\Throwable $th) {
        return redirect()->route("subservices.index")->with("error", $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subservices $subservices ,$id, Request $request )
    {
        try {
            $subservices = Subservices::findOrFail($id);
  
            $filePath = public_path($request->filePath);
            File::delete($filePath);
            $subservices->delete();

            return redirect()->route("subservices.index")->with("success", "Hero section deleted successfully");
        } catch (\Throwable $th) {
            return redirect()->route("subservices.index")->with("error", $th->getMessage());
        }

    }
}
