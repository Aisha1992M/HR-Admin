<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    protected $fillable = ['day', 'start_time', 'finish_time', 'id', 'peried', 'periodOut','user_id'];
}
