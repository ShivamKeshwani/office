<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phone';
    protected $primaryKey = 'phone_id';
    protected $fillable = ['name', 'phone_number'];

    public function subscriber(){
        return $this->hasOne(SubscriberModel::class,'phone_id');
    }
}
