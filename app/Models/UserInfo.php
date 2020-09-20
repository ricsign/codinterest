<?php

//Model for user_info Table

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';
    protected $primaryKey = 'uid';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $guarded = [];

    public function submission(){
        return $this->hasMany(Submission::class,'uid','uid');
    }
}
