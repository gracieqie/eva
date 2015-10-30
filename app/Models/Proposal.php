<?php

namespace EVA\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function meeting() {
        return $this->belongsTo('EVA\Models\Meeting');
    }

    public function owner() {
        return $this->belongsTo('EVA\Models\User');
    }



    protected $table = 'proposals';

    protected $fillable = ['meeting_id', 'user_id'];
}
