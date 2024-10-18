<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Menu;
use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heros = Hero::all();
        $hero = Hero::latest()->first();
        return view("hero.index", compact("heros", "hero"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = status::all();
        return view("hero.create", compact("status"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $fileExtension = $file->getClientOriginalExtension();
        $location = 'uploads/hero/';
        $fileName = time() . '.' . $fileExtension;

        $file->move(public_path($location), $fileName);

        if ($request->has('link1')) {
            Menu::create([
                'name' => $request->link1,
                'link' => $request->link1,
            ]);

            $menu = Menu::latest()->first();

            $menu->section()->create([
                "title" => $request->title,
                "description" => $request->description,
                "image" => $location . $fileName,
                "sectionId" => $request->link1,
                "status" => $request->status,
            ]);

            // return response()->json('Hero section create successfully');
            return redirect()->route("hero.index")->with("success", "Hero section create successfully");

        } else {
            Hero::create([
                "title" => $request->title,
                "description" => $request->description,
                "image" => $location . $fileName,
                "sectionId" => $request->link1,
                "status" => $request->status,
            ]);

            // return response()->json('Hero section create successfully');
            return redirect()->route("hero.index")->with("success", "Hero section create successfully");
        }

    }



    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero, $id)
    {
        $hero = Hero::findOrFail($id);
        $status = status::all();
        return view("hero.edit", compact( "hero", "status"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero, $id)
    {
        try {
            $hero = Hero::findOrfail($id);

            $menu = Menu::where('id', $hero->menu_id)->first();

            if ($request->has('link1')) {
                Menu::where('id', $menu->id)->update([
                    'name' => $request->link1,
                    'link' => $request->link1,
                ]);


                if ($request->hasFile('image')) {

                    $file = $request->file('image');
                    $fileExtension = $file->getClientOriginalExtension();
                    $location = 'uploads/hero/';
                    $fileName = time() . '.' . $fileExtension;

                    $file->move(public_path($location), $fileName);

                    // Delete Old File
                    $oldFile = public_path($hero->image);
                    File::delete($oldFile);

                    $menu->section()->where('id', $hero->id)->update([
                        "title" => $request->title,
                        "description" => $request->description,
                        "image" => $location . $fileName,
                        "sectionId" => $request->link1,
                        "status" => $request->status,
                    ]);
                    return response()->json('relationship with image');
                } else {
                    $menu->section()->where('id', $hero->id)->update([
                        "title" => $request->title,
                        "description" => $request->description,
                        "sectionId" => $request->link1,
                        "status" => $request->status,
                    ]);
                    return response()->json('relationship with No image');
                }

                // return redirect()->route("hero.index")->with("success","Hero section Updated successfully");

            } else {
                if ($request->hasFile('image')) {

                    $file = $request->file('image');
                    $fileExtension = $file->getClientOriginalExtension();
                    $location = 'uploads/hero/';
                    $fileName = time() . '.' . $fileExtension;

                    $file->move(public_path($location), $fileName);

                    // Delete Old File
                    $oldFile = public_path($request->oldFile);
                    File::delete($oldFile);

                    Hero::where('id', operator: $hero->id)->update([
                        "title" => $request->title,
                        "description" => $request->description,
                        "image" => $location . $fileName,
                        "status" => $request->status,
                    ]);
                    return response()->json("with image no link");
                } else {
                    Hero::where('id', $hero->id)->update([
                        "title" => $request->title,
                        "description" => $request->description,
                        "status" => $request->status,
                    ]);
                }

                // return response()->json('Hero section create successfully');
                return redirect()->route("hero.index")->with("success", "Hero section create successfully");
            }
        } catch (\Throwable $th) {
            return redirect()->route("hero.index")->with("error", $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero, $id, Request $request)
    {

        try {
            $hero = Hero::findOrfail($id);
            $menu = Menu::where('id', $hero->menu_id)->first();

            $filePath = public_path($request->filePath);
            File::delete($filePath);
            $menu->delete();

            return redirect()->route("hero.index")->with("success", "Hero section deleted successfully");
        } catch (\Throwable $th) {
            return redirect()->route("hero.index")->with("error", $th->getMessage());
        }
    }
}
