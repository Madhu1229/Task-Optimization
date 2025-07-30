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
    Schema::create('questionsets', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('INACTIVE');
        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->useCurrent();
        $table->integer('businessId')->default(0);
        $table->boolean('user_list')->default(0);
        $table->text('description')->nullable();
        $table->boolean('highlight')->default(0);
        $table->enum('type', ['default','invest','loan','insurance','api','application','requisition','jobpost','e-tendering','health'])->nullable();
        $table->boolean('is_archived')->default(0);
        $table->timestamp('expired_at')->nullable();
        $table->boolean('is_public')->default(0);
        $table->text('thank_you_message')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionsets');
    }
};
