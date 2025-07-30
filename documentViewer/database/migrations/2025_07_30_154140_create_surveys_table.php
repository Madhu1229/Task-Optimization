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
    Schema::create('surveys', function (Blueprint $table) {
        $table->id();
        $table->integer('userId');
        $table->integer('formId');
        $table->string('status')->nullable();
        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->useCurrent();
        $table->enum('application_status', ['not-viewed','viewed','in-review','accepted','rejected'])->nullable();
        $table->unsignedBigInteger('requisition_status')->nullable();
        $table->unsignedBigInteger('filled_by')->nullable();

        //$table->foreign('requisition_status')->references('id')->on('form_stages');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
