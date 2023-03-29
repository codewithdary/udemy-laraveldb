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
        Schema::table('posts', function (Blueprint $table) {
            $table->dropSoftDeletes();

            // Drop one Column
            // $table->dropColumn('deleted_at');

            // Drop multiple Columns
            // $table->dropColumn(['deleted_at', 'updated_at']);

            // Drop soft delete
            // $table->dropSoftDeletes();

            // Drop timestamps
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
