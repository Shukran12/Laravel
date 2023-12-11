<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IstifadeciController extends Controller
{
    public function qeydiyyat(){
    	return view('qeydiyyat');
    }

    public function qeyd(){
    	$this->validate(request(), [
    	  'adsoyad' => 'required | min:5 | max:20',
    	  'email'   => 'required | email',
    	  'sifre'   => 'required | confirmed'
    	]);

    	$istifadeci = User::create([
    	 'adsoyad'     =>request('adsoyad'),
    	 'email'       => request('email'),
    	 'sifre'       => Hash::make(request('sifre')),
    	 'aktiv_kodu'  => Str::random(60),
    	]);

    	auth()->login($istifadeci);

    	return redirect()->to('/')->with('mesaj', 'Qeydiyyat Kodu Emaile Gonderildi');	
    }

    public function cixis(){
    	auth()->logout();

    	return redirect()->to('/');
    }
}
