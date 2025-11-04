<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
use HasFactory;


protected $fillable = ['name','email','roll_no','class','phone','address'];


public function attendances(){ return $this->hasMany(Attendance::class); }
public function marks(){ return $this->hasMany(Mark::class); }
public function fees(){ return $this->hasMany(Fee::class); }
}