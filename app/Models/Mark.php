<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Mark extends Model
{
use HasFactory;


protected $fillable = ['student_id','subject','marks_obtained','max_marks'];


public function student(){ return $this->belongsTo(Student::class); }
}