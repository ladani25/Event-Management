<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    public $table = "events";
    public $primarykey = "id";
    public $timestamps = true;
    // public $fillable = [
    //     'name',
    //     'description',
    //     'date',
    //     'time',
    //     'location',
    //     'image'
    // ];
    public function category()
    {
        return $this->belongsTo(categeroy::class);
    }
}
