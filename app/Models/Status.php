<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['id_inputs','status','feedback','bukti_feedback','created_at','updated_at'];
    protected $table    = 'statuses';
    public function input() {
        return $this->belongsTo(Input::class,'id_inputs');
    }
}
