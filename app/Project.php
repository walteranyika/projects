<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['program','title','body','images','lecturer','can_present','presented','presented_at','img_1','img_2','img_3','img_4','tel'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
