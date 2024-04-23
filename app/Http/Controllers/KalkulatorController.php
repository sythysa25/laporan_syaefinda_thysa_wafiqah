<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //
    public function index()
    {
        return view('kalkulator.index');
    }

    public function calculate (Request $request)
    {
        $a1 = $request->input('a1');
        $a2 = $request->input('a2');
        $op = $request->input('op');

        switch ($op) {
            case 'tambah':
                $result = $a1+$a2;
                break;
            case 'kurang':
                $result = $a1-$a2;
                break;
            case 'kali':
                $result = $a1*$a2;
                break;
            case 'bagi':
                $result = ($a2 !=0) ? $a1/$a2: "tidak dapat dibagi nol";
                break;
            
            default:
                $result = ("operator tidak valid");
                break;
        }

        return view('kalkulator.index', ['result' => $result]);
    }
}
