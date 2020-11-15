<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    public function Coordinator() {
        return $this ->belongsTo('App/Coordinator');
    }

    public function Representitive() {
        return $this ->hasMany('App/Representitive');
    }

    public function Recruit() {
        return $this ->belongsTo('App/Recruit');
    }

    public function Hajja() {
        return $this ->hasMany('App/Hajja');
    }

    public function Certification() {
        return $this ->belongsTo('App/Certification');
    }
}
