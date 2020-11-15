<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalnumber extends Model
{
    public function Recruit() {
        return $this ->belongsTo('App/Recruit');
    }
}
