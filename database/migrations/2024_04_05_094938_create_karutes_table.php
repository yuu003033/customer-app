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
        Schema::create('karutes', function (Blueprint $table) {
            $table->id();
            $table->date('visited_date')->comment('来店日');
            $table->string('image_path');
            $table->integer('category_id')->comment('メニュー項目');
            $table->text('text')->comment('コメント');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karutes');
    }
};
