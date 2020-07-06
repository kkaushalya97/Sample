<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/j7Y6p0k3m0mLlA7DaF0ftlFEMzIO8VweEm9T37Z2.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
}
