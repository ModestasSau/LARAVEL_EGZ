<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Pdf;

class PDFController extends Controller
{
    public function index()
    {
        $prekes = Cart::krepselioPrekes();
        $pdf = Pdf::loadView('PDF.pdfCart', compact('prekes'));
        return $pdf->stream(); //download('test.pdf');
    }
}
