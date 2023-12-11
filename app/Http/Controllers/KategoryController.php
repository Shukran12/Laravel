<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoryModel;
use Illuminate\Support\Facades\DB;

class KategoryController extends Controller
{
    public function index($kategory_ad){
     $kategori = new KategoryModel();

     $kategoriya = $kategori::where('kategory_ad', $kategory_ad)->firstOrFail();
     $alt_kategori = $kategori::where('ust_id', $kategoriya->id)->get();

     $mehsullar = DB::table('kategory_mehsul')
     ->join('mehsul_table', 'kategory_mehsul.mehsul_id', 'mehsul_table.id')
     ->where('kategory_id', $kategoriya->id)
     ->paginate(1);

    


     return view('kategoriya', compact('kategoriya', 'alt_kategori', 'mehsullar'));
    }
}
