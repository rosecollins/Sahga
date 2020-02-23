<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sahga;

class sahgaController extends Controller
{
    // YO
    public function listSahga()
    {
        $sahgas = new Sahga();
        // Fetch from database
        $shagas = Sahga::orderBy('created_at', 'desc')->get();
        $count = $sahgas->count();

        return view("sahgat",[
            'sahgas' => $shagas,
            'count' => $count
        ]);
    }
    public function addSahga(){
        //YOOO
        request()->validate([
            'sahga' => 'required',
            'name' => 'required',
            'nosahga' => 'required'
            ],
            [
                'sahga.required' => 'اكتب السحكه حمبي ..',
                'nosahga.required' => 'اكتب الكلمه الصحيحه حمبي..',
                'name.required' => 'اكتب اسم المفضوح حمبي..'
            ]);
        $sahga = new Sahga();
        $sahga->sahga = request('sahga');
        $sahga->nosahga = request('nosahga');
        $sahga->name = request('name');
        $sahga->save();
        return redirect()->route('sahgat');
    }

}
