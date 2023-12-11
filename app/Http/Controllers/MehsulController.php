<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MehsulModel;

class MehsulController extends Controller
{
   public function index($mehsul_ad){
   	$mehsul = MehsulModel::where('mehsul_ad', $mehsul_ad)->firstOrFail();
   	return view('mehsul', compact('mehsul'));
   }

   public function axtar(){

   	  $axtar = request()->input('axtar');
		
   	   $mehsullar = MehsulModel::where('mehsul_ad', 'like', "%$axtar%")->paginate(2);
        request()->session()->flush();
   	   return view('axtaris', compact('mehsullar'));

   }
}
