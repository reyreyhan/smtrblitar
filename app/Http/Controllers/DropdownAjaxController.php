<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subzona;
use App\Zona;
use App\Bersyarat;
use App\Dilarang;
use App\Perijinan;
use App\Terbatas;

class DropdownAjaxController extends Controller
{
    public function index() {
        $data = Zona::get();
        return view('tes',compact('data'));
    }
    public function subzona($ID_ZONA) {
        $subzona = Subzona::where('ID_ZONA', $ID_ZONA)->get();
        return json_encode($subzona);
    }

    public function hasil(Request $r) {
        $data = [
            'ID_ZONA' => $r->zona,
            'ID_SUBZONA' => $r->subzona,
        ];
        
        $zona = Zona::where('ID', $data['ID_ZONA'])->first();
        $subzona = Subzona::where('ID', $data['ID_SUBZONA'])->first();
        $bersyarat = Bersyarat::where('ID_SUBZONA', $r->subzona)->get();
        $dilarang = Dilarang::where('ID_SUBZONA', $r->subzona)->get();
        $perijinan = Perijinan::where('ID_SUBZONA', $r->subzona)->get();
        $terbatas = Terbatas::where('ID_SUBZONA', $r->subzona)->get();
        return view('tes2', compact('zona','subzona','bersyarat','dilarang','perijinan','terbatas'));
    }
}
