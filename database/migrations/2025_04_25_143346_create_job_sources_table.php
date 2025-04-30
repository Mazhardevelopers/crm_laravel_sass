<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the source (e.g., "LinkedIn", "Company Website")
            $table->string('slug')->unique(); // URL-friendly identifier
            $table->text('description')->nullable(); // Optional description
            $table->string('website')->nullable(); // URL of the source
            $table->boolean('is_active')->default(true); // To enable/disable the source
            $table->unsignedBigInteger('added_by')->nullable(); // User who added this source
            $table->softDeletes(); // For archiving instead of permanent deletion
            
            // Timestamps with default values and automatic update on change
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            
            // Foreign key if you have a users table
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_sources');
    }
};
