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
    Schema::create('content_blocks', function (Blueprint $table) {
        $table->id();

        // relation with pages table
        $table->foreignId('page_id')
              ->constrained()
              ->cascadeOnDelete();

        // type of block
        $table->string('block_type', 50); 
        // example: heading, text, image, video, code, list

        // actual content
        $table->mediumText('block_data'); 
        // flexible → HTML / JSON / text

        // ordering of blocks inside page
        $table->unsignedInteger('order_index')->default(0);

        // optional metadata (very powerful)
        $table->json('meta')->nullable();
        // example: alignment, styling, caption, etc.

        $table->timestamps();

        // performance index
        $table->index(['page_id', 'order_index']);
    });
}

// INSERT INTO content_blocks 
// (page_id, block_type, block_data, order_index, created_at, updated_at)
// VALUES 
// (1, 'heading', 'What is Syntax', 1, NOW(), NOW());

// INSERT INTO content_blocks 
// (page_id, block_type, block_data, order_index, created_at, updated_at)
// VALUES 
// (1, 'text', '<p>Syntax is a set of rules...</p>', 2, NOW(), NOW());

// INSERT INTO content_blocks 
// (page_id, block_type, block_data, order_index, created_at, updated_at)
// VALUES 
// (1, 'image', 'syntax.png', 3, NOW(), NOW());
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_blocks');
    }
};
