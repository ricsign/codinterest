<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// model of user_sign table, which is the table recording
// user's basic sign up and sign in information
class UserSign extends Model
{
    use HasFactory;
    protected $table = 'user_sign';
    protected $primaryKey = 'uid';
}
