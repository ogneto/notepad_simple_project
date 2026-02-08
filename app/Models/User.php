<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Note;

class User extends Model
{
    use SoftDeletes;

    public function notes()
    {
        return $this->hasMany(Note::class, 'user_id', 'id');
    }
}
