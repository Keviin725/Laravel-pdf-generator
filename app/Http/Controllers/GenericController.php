<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class GenericController extends Controller
{
    public function viewPDF(){
        //generate pdf from html code
        //$pdf = PDF::loadHTML('<h1>Hello there</h1>');

        //generate pdf from view
        $pdf = PDF::loadView('welcome')->setPaper('a4', 'portrait')->setWarnings(false);


        return $pdf->stream();
    }

    public function downloadPDF(){

        $pdf = PDF::loadView('welcome')->setPaper('a4', 'portrait')->setWarnings(false);


        return $pdf->download('recibo.pdf');
    }
}
