<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'barcode'=>'required',
        'number' => 'required|integer|min:0|max:100',
        'price' => 'required|integer',

    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ':' . $this->number . ':'.$this->lending;
    }

  
}
