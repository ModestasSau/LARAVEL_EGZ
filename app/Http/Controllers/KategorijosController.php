<?php

namespace App\Http\Controllers;

use App\Models\Kategorijos;
use Illuminate\Http\Request;

class KategorijosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorijos = Kategorijos::orderBy('created_at', 'asc')->paginate(10);
        return view('adm.kategorijos.index',compact('kategorijos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.kategorijos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pavadinimas' => 'required',
        ]);
   
        $input = $request->all();
        Kategorijos::create($input);
        $pav = $input['pavadinimas'];
        return redirect()->route('kategorijos-index')
                        ->with('success','Kategorija: '.$pav.' sėkmingai sukurta.');
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
    public function edit(Kategorijos $kategorija)
    {
        return view('adm.kategorijos.edit', compact('kategorija'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorijos $kategorija)
    {
        $request->validate([
            'pavadinimas' => 'required',
        ]);
        
        $kategorija->fill($request->post())->save();
        $pav = $kategorija->pavadinimas;
        return redirect()->route('kategorijos-index')->with('success','Kategorija: '.$pav.' sėkmingai atnaujinta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorijos $kategorija)
    {
        $kategorija->delete();
        $pav = $kategorija->pavadinimas;
        return redirect()->route('kategorijos-index')->with('success','Kategorija: '.$pav.' sėkmingai ištrinta.');
    }
}
