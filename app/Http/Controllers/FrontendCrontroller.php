<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Hero;
use App\Models\Servicessection;
use App\Models\status;
use App\Models\Subservices;
use Illuminate\Http\Request;

class FrontendCrontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $hero = Hero::latest()->first();
        $subservices = Subservices::all();
        $services = Servicessection::latest()->first(); 
        $status = status::where("name", 'Active')->get();
        return view("welcome" , compact('menus','hero','services','subservices','status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
