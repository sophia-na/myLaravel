<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{ 
    protected $guarded = [];

    public function profileImage(){

        $imagePath = ($this->image) ? $this->image : 'profile/MK8JEUXT0ejmDaZY3RIaod6DazBANcfsVKMeWIyv.jpeg';

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
