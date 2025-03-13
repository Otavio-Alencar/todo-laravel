<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
class Task extends Model
{
    protected $fillable  = [
        'title',
        'description',
        'due_date',
        'category_id',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
