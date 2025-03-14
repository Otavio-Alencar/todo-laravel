<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, Notifiable;
    protected $fillable  = [
        'title',
        'color'.
        'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tasks(){
        return $this->belongsTo(Task::class);
    }



}
