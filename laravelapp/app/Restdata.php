<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'restdata';
    protected $tguarded = array('id');

    public static $rules = array(
        'message' => 'required',
        'url' => 'required'
    );

    public function getData()
    {
        return $this -> id .':'.$this->message . '('.$this-> url.')';
    }
}
