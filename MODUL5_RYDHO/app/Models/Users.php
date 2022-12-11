<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'Users';
    protected $fillable = [
        'id', 'name', 'no_hp', 'email', 'password', 'created_at', 'updated_at'
    ];

    public function Showrooms ()
    {
        return $this->hasMany( related: 'app\Models\Showrooms');
    }
}
