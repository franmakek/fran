<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ChatMessage extends Model
{
    public $fillable = ['user_id', 'message'];
}
