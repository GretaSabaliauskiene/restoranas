<?php

namespace App\Http\Controllers;

use App\Restourant;
use Illuminate\Http\Request;

class RestourantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (isset($request->menu_id) && $request->menu_id !== 0)
            $restourants = \App\Restourant::where('menu_id', $request->menu_id)->orderBy('title')->get();
        else
            $restourants = \App\Restourant::orderBy('title')->get();
        $menus = \App\Menu::orderBy('title')->get();
        return view('restourants.index', ['restourants' => $restourants, 'menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = \App\Menu::orderBy('title')->get();
        return view('restourants.create', ['menus' => $menus]); //!! kad butu dropdownas
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restourant = new Restourant();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $restourant->fill($request->all());
        $restourant->save();
        return redirect()->route('restourant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restourant  $restourant
     * @return \Illuminate\Http\Response
     */
    public function show(Restourant $restourant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restourant  $restourant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restourant $restourant)
    {
        $menus = \App\Menu::orderBy('title')->get();

        return view('restourants.edit', ['restourant' => $restourant, 'menus' => $menus]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restourant  $restourant
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Restourant $restourant)
    {
        $restourant->fill($request->all());
        $restourant->save();
        return redirect()->route('restourant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restourant  $restourant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restourant $restourant)
    {
        $restourant->delete();
        return redirect()->route('restourant.index');
    }
}
