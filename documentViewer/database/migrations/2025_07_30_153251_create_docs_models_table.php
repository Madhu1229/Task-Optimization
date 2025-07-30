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
    Schema::create('docs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->text('passport')->nullable();
        $table->text('driving')->nullable();
        $table->text('text')->nullable();
        $table->text('documents')->nullable();
        $table->text('police_confirmation')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->text('documents_image')->nullable();
        $table->text('police_confirmation_image')->nullable();
        $table->text('type')->nullable();
        $table->text('code')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->timestamp('archived_at')->nullable();
        $table->boolean('is_private')->default(0);
        $table->string('doc_token')->nullable();
        $table->boolean('manipulated_id_hc')->default(0);
        $table->boolean('manipulated_id_eac')->default(0);
        $table->boolean('verified')->default(0);
        $table->unsignedBigInteger('sent_by')->nullable();
        $table->unsignedBigInteger('survey_id')->nullable();
        $table->text('source')->nullable()->comment('keep source of the document for verification purpose, value must match DocumentSourceEnum');
        $table->timestamp('ocr_expires_at')->nullable()->comment('OCR expiration timestamp');

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('sent_by')->references('id')->on('users');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs_models');
    }
};
