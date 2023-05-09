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
        Schema::create('free_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('client')->nullable();
            $table->string('c_unique_id')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('contract_no')->nullable();
            $table->text('profesion')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contract')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contract')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_contract')->nullable();
            $table->text('address_cont_no')->nullable();
            $table->text('b_diagnosis')->nullable();
            $table->text('c_type_of_disability')->nullable();
            $table->text('d_major_complain')->nullable();
            $table->text('e_major_complain')->nullable();
            $table->text('general_history')->nullable();
            $table->string('family_history')->nullable();
            $table->string('home_environment')->nullable();
            $table->string('1st_cousin_marriage')->nullable();
            $table->string('educational_qualification_of_parents')->nullable();
            $table->string('no_children')->nullable();
            $table->string('mother_health_condition')->nullable();
            $table->string('immunization_mother')->nullable();
            $table->string('immunization_up_to_date_child')->nullable();
            $table->string('previous_treatment_history')->nullable();
            $table->string('image')->default('images/default.jpg')->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('free_services');
    }
};
