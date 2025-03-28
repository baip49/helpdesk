<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'message',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_ticket');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function assignedUsers()
    {
        return $this->belongsToMany(User::class, 'ticket_user');
    }
}
