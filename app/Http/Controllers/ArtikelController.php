<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function Addartikel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'date' => 'required|string',
            'username' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Gagal upload!!');
        }
    }
}
