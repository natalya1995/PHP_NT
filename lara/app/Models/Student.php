<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
protected $fillable=['name','adress','school_ID'];

public function school()
{
return $this->belongsTo(School::class,'school_ID','id');
}
}
