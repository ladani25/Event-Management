<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'user';
    public $primaryKey = 'id';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
    ];

    public function ticketorder()
    {
        return $this->hasMany(TicketOrder::class, 'u_id', 'id');
    }
}
