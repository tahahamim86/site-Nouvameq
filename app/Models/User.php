<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{   protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['Nom','Prénom','date_naissance','numero_télèphone', 'email','password'];
}
