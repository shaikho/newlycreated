<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representitive extends Model
{
    public function Administrative() {
        return $this ->belongsTo('App/Administrative');
    }

    public function Coordinator() {
        return $this ->belongsTo('App/Coordinator');
    }


    public function Recruit() {
        return $this ->hasMany('App/Recruit');
    }

    public function Hajja() {
        return $this ->hasMany('App/Hajja');
    }

    public function Move() {
        return $this ->hasMany('App/Move');
    }

    
}
