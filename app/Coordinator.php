<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    public function Administrative() {
        return $this ->belongsTo('App/Administrative');
    }

    public function Representitive() {
        return $this ->hasMany('App/Representitive');
    }

    public function Hajja() {
        return $this ->hasMany('App/Hajja');
    }
    
    public function Move() {
        return $this ->hasMany('App/Move');
    }

    public function Certification() {
        return $this ->hasMany('App/Certification');
    }
}
