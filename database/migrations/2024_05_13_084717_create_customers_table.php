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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名前');
            $table->string('telephone')->comment('電話番号');
            $table->string('zipcode')->comment('郵便番号')->nullable()->default(null);
            $table->string('prefecture')->comment('都道府県')->nullable()->default(null);
            $table->string('city')->comment('市区町村')->nullable()->default(null);
            $table->integer('status')->default(0)->comment('ステータス');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
