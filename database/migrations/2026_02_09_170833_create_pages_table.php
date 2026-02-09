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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $table->foreignId('topic_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('subtopic_id')->nullable()->constrained()->nullOnDelete();

            $table->string('page_title');
            $table->string('page_subtitle')->nullable();
            $table->string('slug');
            $table->enum('status', ['draft', 'published'])->default('draft');

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();

            $table->unique(['subject_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
