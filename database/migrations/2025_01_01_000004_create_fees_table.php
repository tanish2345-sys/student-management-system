<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
public function up(){
Schema::create('fees', function(Blueprint $table){
$table->id();
$table->foreignId('student_id')->constrained()->onDelete('cascade');
$table->decimal('amount',10,2);
$table->date('paid_on')->nullable();
$table->enum('status',['pending','paid'])->default('pending');
$table->text('description')->nullable();
$table->timestamps();
});
}
public function down(){ Schema::dropIfExists('fees'); }
};