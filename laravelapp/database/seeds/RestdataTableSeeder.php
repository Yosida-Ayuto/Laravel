<?php

use Illuminate\Database\Seeder;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google japan',
            'url' => 'https://www.google.co.jp',
        ];

        $restdata = new Restdata;
        $restdata->file($param)->save();
        $param = [
            'message' => 'MSN Japan',
            'url' => 'http://www.yahoo.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->file($param)->save();
    }
}
