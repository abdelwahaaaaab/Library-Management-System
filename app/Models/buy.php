<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','buy_book'];
    public function Register()
    {
        return $this->belongsTo('app\Models\Register', 'user_id');
    }
    public function AddBook()
    {
        return $this->belongsTo('app\Models\AddBook', 'buy_book');
    }
}
