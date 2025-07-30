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
    Schema::create('signs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('sender_id');
        $table->string('name')->nullable();
        $table->text('documents')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->string('status')->nullable();
        $table->text('star')->nullable();
        $table->boolean('is_contract')->default(0);
        $table->date('contract_expiry')->nullable();
        $table->string('uuid');
        $table->boolean('force_expired')->default(0);
        $table->string('hash');

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signs');
    }
};
