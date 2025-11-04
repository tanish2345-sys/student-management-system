<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
public function up(){
Schema::create('marks', function(Blueprint $table){
$table->id();
$table->foreignId('student_id')->constrained()->onDelete('cascade');
$table->string('subject');
$table->integer('marks_obtained');
$table->integer('max_marks')->default(100);
$table->timestamps();
});
}
public function down(){ Schema::dropIfExists('marks'); }
};