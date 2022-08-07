<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBook extends Model
{
    use HasFactory;
    protected $fillable = ['book_name', 'book_writer', 'book_type','book_lang', 'book_price'];
    public function Borrow()
    {
        return $this->hasOne('app\Models\borrow');
    }
    public function Buy()
    {
        return $this->hasOne('app\Models\buy');
    }
}
