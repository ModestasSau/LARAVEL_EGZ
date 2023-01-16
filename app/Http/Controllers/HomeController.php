<?php

namespace App\Http\Controllers;

use App\Models\Kategorijos;
use Illuminate\Http\Request;
use App\Models\Prekes;

class HomeController extends Controller
{

    public function index()
    {
        $prekes = Prekes::orderBy('created_at', 'asc')->paginate(15);
        return view('prekes',compact('prekes'));
    }

    public function gauti_latest() 
    {
        $prekes = Prekes::with('kategorija')->latest()->take(5)->get();
        return view('index', compact('prekes'));
    }

    public function prekes_pagal_kategorija($id) 
    {
        
        $kategorija = Kategorijos::where('id', $id)->first();
        $prekes = $kategorija->prekes();
        if($kategorija){
            $prekes = Prekes::with('kategorija')->where('kategorijos_id', $id)->paginate(10);
            return view('prekes', compact('prekes', 'kategorija'));
        } else {
            return redirect()->back();
        }
    }

    public function ieskoti(Request $request)
    {
        if($request->search) {
            $prekes = Prekes::where('pavadinimas', 'LIKE', '%'.$request->search.'%')->latest()->paginate(10);
            return view('paieska', compact('prekes'));
        } else {
            return redirect()->back()->with('message', 'null');
        }
    }

    public function rodyti_prekes_info($preke)
    {
        //dd($preke);
        $preke = Prekes::where('id', $preke)->first();
        return view('showPreke', compact('preke'));
    }
}
