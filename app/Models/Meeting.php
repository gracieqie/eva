<?php

namespace EVA\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function owner() {
        return $this->belongsTo('EVA\Models\User', 'user_id');
    }

    public function participants() {
        return $this->belongsToMany('EVA\Models\User');
    }

    public function proposals() {
        return $this->hasMany('EVA\Models\Proposal');
    }

    protected $table = 'meetings';
    protected $fillable = ['user_id'];
}
