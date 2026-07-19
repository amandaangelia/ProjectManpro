<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id',
        'title',
        'image',
        'date',
        'startTime',
        'endTime',
        'days',
        'speaker',
        'detail'
        ];
    
        protected $table= 'events';
        protected $guarded =['id'];

    use HasFactory;
}
