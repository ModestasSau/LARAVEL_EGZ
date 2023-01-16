<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Prekes;
use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $prekes = Cart::krepselioPrekes();
        return view('cart', compact('prekes'));
    }

    public function prideti_i_krepseli(Request $request)
    {
        if ($request->isMethod('POST')) {
            $userID = auth()->user()->id;
            $session_id = Session::getId();
            $data = $request->all();
            $reikia = $data['kiekis'];
            $kiekis = Prekes::select('kiekis')->where('id', $data['prekes_id'])->first();
            $kiekisDB = Cart::select('kiekis')->where(['user_id' => $userID, 'prekes_id' => $data['prekes_id']])->first();
            $jauYraDB = Cart::where(['user_id' => $userID, 'prekes_id' => $data['prekes_id']])->count('kiekis');

            //echo $jauYraDB.'<br>'.$reikia.'<br>'.$kiekisDB->kiekis;
            if ($kiekisDB == null) {
                $item = new Cart();
                $item->session_id = $session_id;
                $item->user_id = $userID;
                $item->prekes_id = $data['prekes_id'];
                $item->kiekis = $reikia;
                $item->save();
                return redirect()->back()->with('success_message', 'Prekė sėkmingai pridėta į krepšelį.');
            }
            if ($kiekis['kiekis'] < $reikia) {
                return redirect()->back()->with('error_message', 'Viršytas turimas kiekis.');
            } else {
                $kiekisDB = Cart::where(['user_id' => $userID, 'prekes_id' => $data['prekes_id']])->update(['kiekis' => $reikia + $kiekisDB->kiekis]);
                return redirect()->back()->with('success_message', 'Prekė sėkmingai pridėta į krepšelį.');
            }
        }
    }

    public function ismestiPreke($id)
    {
        $data = Cart::where('id', $id)->delete();
        //dd($data);
        return redirect()->back()->with('message_success', 'Prekė ištrinta.');
    }

    public function keistiKieki($id, $k)
    {
        $prekeslikutis = Prekes::select('kiekis')->where('id', $id)->first();
        //dd($prekeslikutis['kiekis']);
        if ($prekeslikutis != null && $k > 0 && is_numeric($k)) {
            if ($prekeslikutis['kiekis'] < $k) {
                return redirect()->back()->with('message_error', 'Viršytas turimas kiekis');
            } else {
                $data = Cart::where('prekes_id', $id)->update(['kiekis' => $k]);
                return redirect()->back()->with('message_success', 'Atnaujintas kiekis');
            }
        }

        return redirect()->back()->with('message_error', 'Neleistinas kiekis.');
    }

    
}
