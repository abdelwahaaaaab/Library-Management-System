<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'Username', 'Password', 'Password_confirmation'];
    public function borrow()
    {
        return $this->hasOne('app\Models\borrow');
    }
    public function buy()
    {
        return $this->hasOne('app\Models\buy');
    }
    public function contact()
    {
        return $this->hasOne('app\Models\contact');
    }
}
