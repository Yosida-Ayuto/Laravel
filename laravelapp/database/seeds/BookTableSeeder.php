<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $param = [
            'name' => 'damy3',
            'barcode'=> 11111111113,
            'number' => '10',
            'price' => '1400',
        ];
        DB::table('books')->insert($param);
        $param = [
            'name' => 'damy4',
            'barcode'=> 11111111114,
            'number' => '10',
            'price' => '1400',
        ];
        DB::table('books')->insert($param);

        $param = [
            'name' => 'damy3',
            'barcode'=> 11111111113,
            'number' => '10',
            'price' => '654',
        ];
        DB::table('books')->insert($param);
        
        $param = [
            'name' => 'damy4',
            'barcode'=> 11111111114,
            'number' => '10',
            'price' => '1300',
        ];
        DB::table('books')->insert($param);
        
        $param = [
            'name' => 'damy3',
            'barcode'=> 11111111113,
            'number' => '10',
            'price' => '1300',
        ];
        DB::table('books')->insert($param);

        $param = [
            'name' => 'damy4',
            'barcode'=> 11111111114,
            'number' => '10',
            'price' => '1300',
        ];
        DB::table('books')->insert($param);
    }
}
