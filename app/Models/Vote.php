<?php

namespace EVA\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function user() {
        return $this->belongsToMany('EVA\Models\User');
    }

    public function proposal() {
        return $this->belongsTo('EVA\Models\Proposal');
    }
}
