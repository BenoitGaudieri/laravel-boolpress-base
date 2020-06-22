<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    // Fillable mass assign
    protected $fillable = [
        "user_id",
        "phone",
        "address",
        "avatar"
    ];

    // Disable timestamp
    public $timestamps = false;

    /**
     * RELATIONSHIPS
     */

    //  User (one to one)
    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
