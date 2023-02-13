<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberModel extends Model
{
    use HasFactory;
    protected $table = 'subscriber';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'city', 'phone_id'];

    public function phone(){
        return $this->belongsToMany(Phone::class);
    }
}
