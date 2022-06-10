<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TeamModel extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $primaryKey = 'id';
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
