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
        Schema::create('traning_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->foreignId('tranings_id')->constrained('tranings')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('users_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('pay_balance');
            $table->string('payment_method');
            $table->string('sended_number');
            $table->string('transaction_id');
            $table->longText('message')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traning_orders');
    }
};
