<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('user_verification_docs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('id_path')->nullable();
        $table->string('selfie_path')->nullable();
        $table->string('id_front_image_path')->nullable();
        $table->string('combination_path')->nullable();
        $table->date('verification_date');
        $table->unsignedBigInteger('completion_id')->nullable();
        $table->boolean('is_verified')->default(1);
        $table->text('error_message')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_verification_docs');
    }
};
