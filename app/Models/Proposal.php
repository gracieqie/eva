<?php

namespace EVA\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function meeting() {
        return $this->belongsTo('EVA\Models\Meeting');
    }

    public function user() {
        return $this->belongsTo('EVA\Models\User');
    }

    public function votes() {
        return $this->belongsToMany('EVA\Models\Vote');
    }

    protected $table = 'proposals';

    protected $fillable = ['meeting_id', 'user_id'];
}
