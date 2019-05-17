<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    public function user(){
        return $this->belongsTo('App\User', 'user_id' , 'id');
    }

    protected $fillable = [
        'avatar','about','facebook','youtube','user_id'
    ];


}
