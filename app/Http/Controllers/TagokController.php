<?php

namespace App\Http\Controllers;

use App\Tagok;
use Illuminate\Http\Request;

use App\Http\Requests\TagokRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Redirect;


class TagokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tagoks =Tagok::all();
        return view('tagoks.index', compact('tagoks'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tagoks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagokRequest $request)
    {
        Tagok::create($request->all());



        return redirect()->route('tagok.index')->with('message', 'Sikeres rögzítés!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tagok $tagok)
    {
        return view('tagoks/edit', compact('tagok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagokRequest $request, Tagok $tagok)
    {
        $tagok->update($request->all());
        return redirect()->route('tagok.index')->with('message', 'Sikeres szerkesztés!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagok $tagok)
    {
      $tagok->delete();
      return redirect()->route('tagok.index')->with('message', 'Sikeres törlés!');
    }
}
