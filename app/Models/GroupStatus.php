<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class GroupStatus extends Model
{
    public function group() {
        return $this->hasMany(Group::class);
    }
}
