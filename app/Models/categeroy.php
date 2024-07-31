<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categeroy extends Model
{
    use HasFactory;

    public $table = 'categeroy';
    public $timestamps = false;
    public $primaryKey = 'id';

    public function events()
    {
        return $this->hasMany(events::class);
    }
}
