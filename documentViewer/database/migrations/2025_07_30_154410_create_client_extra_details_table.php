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
    Schema::create('client_extra_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->longText('additional_fields');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();

        $table->foreign('user_id')->references('id')->on('users');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_extra_details');
    }
};
