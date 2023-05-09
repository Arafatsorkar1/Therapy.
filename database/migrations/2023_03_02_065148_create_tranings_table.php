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
        Schema::create('tranings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('traning_categories_id')->constrained('traning_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('image')->nullable()->default('images/default.jpg');
            $table->string('price')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();$table->integer('serial')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 mines this status success');
            $table->boolean('is_status')->default(false)->nullable();
            $table->boolean('is_active')->default(false)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->boolean('is_popular')->default(false)->nullable();
            $table->integer('view_count')->default(0);
            $table->string('others_one')->nullable();
            $table->string('others_two')->nullable();
            $table->string('others_three')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranings');
    }
};
