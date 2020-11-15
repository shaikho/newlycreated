<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrative extends Model
{
    public function Coordinator()
    {
        return $this->belongsTo('App/Coordinator');
    }

    public function Representitive()
    {
        return $this->hasMany('App/Representitive');
    }

    protected $fillable = [
        'admin_name'
    ];
}
