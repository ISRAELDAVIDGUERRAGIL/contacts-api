<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'id_contacts';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'user_id',
        'phone_number',  
    ];
    
}