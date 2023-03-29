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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('title')
                ->unique();;
            $table->string('slug')
                ->unique();;
            $table->longText('description');
            $table->text('excerpt')
                ->comment('Summary of Post');;
            $table->boolean('is_published')
                ->default(false);
            $table->integer('min_to_read')
                ->nullable();
            $table->timestamps();

            // $table->unique('title');
            // $table->unique(['title', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
