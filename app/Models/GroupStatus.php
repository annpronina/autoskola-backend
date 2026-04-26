<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupStatus extends Model
{
    use HasFactory;

    public function groups() {
        return $this->hasMany(Group::class);
    }
}
