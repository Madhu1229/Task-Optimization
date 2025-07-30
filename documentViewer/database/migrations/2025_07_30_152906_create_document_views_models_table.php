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
    Schema::create('document_views', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->text('sender_id')->nullable();
        $table->text('accepter_id')->nullable();
        $table->unsignedBigInteger('document_id');
        $table->text('status')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->text('star')->nullable();
        $table->string('doc_hash');
        $table->timestamp('deleted_at')->nullable();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('document_id')->references('id')->on('docs');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_views_models');
    }
};
