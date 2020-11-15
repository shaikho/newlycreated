<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    public function Coordinator() {
        return $this ->belongsTo('App/Coordinator');
    }

    public function Recruit() {
        return $this ->belongsTo('App/Recruit');
    }

    public function Move() {
        return $this ->belongsTo('App/Move');
    }
}
