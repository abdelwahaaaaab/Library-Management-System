<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class contact extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','subject', 'message'];
    public function Register()
    {
        return $this->belongsTo('app\Models\Register', 'user_id');
    }
}