<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];
    use HasFactory;


    public function DefaultImage()
    {
        // functioned is called whenever the profile imaged is called 
        $imagePath = ($this->image) ? $this->image : 'profile/ziS2157wrQf4brY1X9mUIYGRKAS6IMbxg4BcOcA7.png';
        return '/storage/'. $imagePath;
    }

    /**
     * The followers that belong to the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    /**
     * Get the user that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
