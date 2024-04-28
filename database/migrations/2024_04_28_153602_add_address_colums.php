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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('zipcode')->comment('郵便番号')->nullable()->default(null)->after('telephone');
            $table->string('prefecture')->comment('都道府県')->nullable()->default(null)->after('zipcode');
            $table->string('city')->comment('市区町村')->nullable()->default(null)->after('prefecture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
