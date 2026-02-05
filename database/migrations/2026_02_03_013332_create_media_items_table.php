<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['anime', 'manga', 'novel', 'other'])->default('other');
            $table->enum('status', ['watching', 'completed', 'on_hold', 'dropped', 'plan_to_watch'])->default('plan_to_watch');
            $table->integer('progress_current')->default(0);
            $table->integer('progress_total')->nullable();
            $table->text('notes')->nullable();
            $table->string('source')->nullable()->default('unknown');
            $table->string('source_url')->nullable();
            $table->string('image_url')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_items');
    }
};
