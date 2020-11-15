<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    public function Nationalnumber() {
        return $this ->belongsTo('App/Nationalnumber');
    }

    public function Representitive() {
        return $this ->belongsTo('App/Representitive');
    }

    public function Move() {
        return $this ->belongsTo('App/Move');
    }

    public function Certification() {
        return $this ->belongsTo('App/Certification');
    }
}
