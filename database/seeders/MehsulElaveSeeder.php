<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MehsulElaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $mehsul = DB::table('mehsul_table');

       $mehsul->insert([
       	'mehsul_ad' => 'BMW1',
       	'qiymet' => 3.4
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'BMW2',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'BMW3',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'BMW4',
       	'qiymet' => 3.2
       ]);
      //ikinci

       $mehsul->insert([
       	'mehsul_ad' => 'Yemek1',
       	'qiymet' => 3.6
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Yemek2',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Yemek3',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Yemek4',
       	'qiymet' => 3.2
       ]);

       //ucuncu

       $mehsul->insert([
       	'mehsul_ad' => 'Kitab1',
       	'qiymet' => 3.6
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Kitab2',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Kitab3',
       	'qiymet' => 3.2
       ]);

       $mehsul->insert([
       	'mehsul_ad' => 'Kitab4',
       	'qiymet' => 3.2
       ]);
    }
}
