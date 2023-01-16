<?php

namespace App\Http\Controllers;

use App\Models\Kategorijos;
use App\Models\Prekes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PrekesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prekes = Prekes::with('kategorija')->paginate(5);
        
        return view('adm.prekes.index', compact('prekes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorijos = Kategorijos::all();
        return view('adm.prekes.create', compact('kategorijos'));
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
            'kategorijos_id' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'nullable',
            'kaina' => 'required',
            'kiekis' => 'required',
            'paveikslelis' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        $fileName = time().$request->file('paveikslelis')->getClientOriginalName();
        $path = $request->file('paveikslelis')->storeAs('images', $fileName, 'public');
        $input['paveikslelis'] = '/storage/'.$path;


        Prekes::create($input);
        $pav = $input['pavadinimas'];
        return redirect()->route('prekes-index')
            ->with('success', 'Prekė: '.$pav.' sėkmingai pridėta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prekes $preke)
    {
        return view('adm.prekes.show', compact('preke'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($preke)
    {
        $kategorijos = Kategorijos::all();
        $preke = Prekes::find($preke);
        return view('adm.prekes.edit', compact('preke', 'kategorijos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prekes $preke)
    {
        $request->validate([
            'kategorijos_id' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'nullable',
            'kaina' => 'required',
            'kiekis' => 'required',
            'paveikslelis' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('paveikslelis')) {
            $fileName = time().$request->file('paveikslelis')->getClientOriginalName();
            $path = $request->file('paveikslelis')->storeAs('images', $fileName, 'public');
            $input['paveikslelis'] = '/storage/'.$path;
        } else {
            unset($input['paveikslelis']);
        }

        $preke->update($input);
        $pav = $input['pavadinimas'];
        return redirect()->route('prekes-index')
            ->with('success', 'Prekė: '.$pav.' sėkmingai atnaujinta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prekes $preke)
    {
        $failopath = substr($preke->paveikslelis, 1);
        File::delete($failopath);
        
        $preke->delete();
        $pav = $preke->pavadinimas;
        return redirect()->route('prekes-index')
            ->with('success', 'Prekė: '.$pav.' sėkmingai ištrinta.');
    }
}
