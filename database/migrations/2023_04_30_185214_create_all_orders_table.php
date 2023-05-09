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
        Schema::create('all_orders', function (Blueprint $table) {
            $table->id();
            $table->enum('order_type',['traning','assessment','test','therapy','service','free_service','donate'])->nullable();
            $table->bigInteger('order_type_id')->nullable();
            $table->string('order_id');
            $table->foreignId('users_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('total_mark')->default(0);
            $table->integer('pay_balance');
            $table->string('payment_method');
            $table->string('sended_number');
            $table->string('transaction_id');
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
        Schema::dropIfExists('all_orders');
    }
};
