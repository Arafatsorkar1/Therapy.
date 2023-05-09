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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->bigInteger('orders_id')->nullable();
            $table->string('r_unique_id')->nullable();
            $table->date('report_created_date')->nullable();
            $table->string('background')->nullable();
            $table->string('assessment_method')->nullable();
            $table->string('areas_strength')->nullable();
            $table->string('areas_difficulty')->nullable();
            $table->string('challenging_issue')->nullable();
            $table->string('learning_tend')->nullable();
            $table->string('cognitive_biased')->nullable();
            $table->string('goals_focus_on')->nullable();
            $table->string('findings_diagnosis')->nullable();
            $table->string('estimate_severity')->nullable();
            $table->string('estimate_prognosis')->nullable();
            $table->string('recommendations')->nullable();
            $table->string('direct_treatment')->nullable();
            $table->string('home_based_treatment')->nullable();
            $table->string('referred_to')->nullable();
            $table->string('others_comment')->nullable();
            $table->integer('serial')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
