<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anhsx extends Model
{
    protected $table="anhsx";
    public function loaianh()
    {
    	return $this->belongsTo('App\theloai','id_loaianh');
    }
}
