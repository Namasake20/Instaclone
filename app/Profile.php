<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/g0emQ1wLLLj3ZoKf398epnSOPfCVW9fUcHR08zy9.jpg';
        return '/storage/' . $imagePath;

    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
