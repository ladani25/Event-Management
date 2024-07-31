<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    use HasFactory;
    public $table = 'ticketorder';
    public $primarykey = 'id';

    public function user(){
        return $this->belongsTo('belongsTo', 'u_id', 'id');  
    }
}
