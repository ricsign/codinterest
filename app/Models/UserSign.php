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
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = ['username','password','email','usertoken','is_activated','created_time'];

    public function user_info(){
        return $this->hasOne(UserInfo::class,'uid','uid');
    }
}
