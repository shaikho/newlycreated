<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hajja extends Model
{
    protected $fillable = [
        'recruit_id',
        'represent_id',
        'move_id',
        'date',
        'state',
    ];
    public function Representitive() {
        return $this ->hasMany('App/Representitive');
    }

    public function Coordinator() {
        return $this ->belongsTo('App/Coordinator');
    }

    public function Move() {
        return $this ->hasMany('App/Move');
    }
}
