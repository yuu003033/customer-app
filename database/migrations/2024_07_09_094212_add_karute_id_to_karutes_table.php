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
        Schema::table('karutes', function (Blueprint $table) {
            //カルテ追加
            $table->integer('karute_id')->comment('カルテID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('karutes', function (Blueprint $table) {
            
            $table->dropColumn('karute_id');
        });
    }
};
