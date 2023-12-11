<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoryElaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	 $tab = DB::table('kategory_table');
    	$id = $tab->insertGetId([
    	 'kategory_ad' => 'Refail'
    	]);

    	$tab->insert([
    	'kategory_ad'=>'BMW',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Mercedes',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Kia',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Hundai',
    	'ust_id'=> $id
    	]);

    	//ikinci


    	$id = $tab->insertGetId([
    	 'kategory_ad' => 'Mebel'
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Kreslo',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Divan',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Yataq',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Metbex',
    	'ust_id'=> $id
    	]);

    	//ucuncu

    	$id = $tab->insertGetId([
    	 'kategory_ad' => 'Yemek'
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Milli',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Qizartma',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Bozartma',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Xarici',
    	'ust_id'=> $id
    	]);

    	// dorduncu

    	$id = $tab->insertGetId([
    	 'kategory_ad' => 'Kitab'
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Dedektif',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Sevgi',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Inkisaf',
    	'ust_id'=> $id
    	]);

    	$tab->insert([
    	'kategory_ad'=>'Roman',
    	'ust_id'=> $id
    	]);
    }
}
