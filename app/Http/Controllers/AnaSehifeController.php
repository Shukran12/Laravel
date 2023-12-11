<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoryModel;
use App\Models\MehsulModel;

class AnaSehifeController extends Controller
{
   public function index(){
    
    $kategori = new KategoryModel();

    $kategoriyalar = $kategori::whereRaw('ust_id is null')->get();

    $slider = MehsulModel::where('slider', 1)->get();

 


   	return view('anasehife', compact('kategoriyalar', 'slider'));
   }
}
