<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $name = ['帽子','衣服', '褲子', '鞋子'];
            for ($j = 0; $j < 4 ; $j++) {
                for ($i= 1; $i <= 10 ; $i++) { 
                DB::table('products')->insert([
                    'img_url' => 'img/' . $name[$j] .'/'.$name[$j] . '_' . $i . '.jpg',
                    'title' => $name[$j] . '_' . $i,
                    'content' => $name[$j] . '_' . $i,
                    'option' => $j,
                    ]);
                }
            }
    }
}
