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
            $table->text('memo')->nullable()->default(null)->comment('施術内容');
            $table->boolean('extention')->default(false)->comment('施術項目＜エクステ＞');
            $table->boolean('lashlift')->default(false)->comment('施術項目＜パーマ＞');
            $table->boolean('eyebrows')->default(false)->comment('施術項目＜まゆ毛＞');
            $table->boolean('upAndDown')->default(false)->comment('施術項目＜上下＞');
            $table->boolean('lowerEyelashes')->default(false)->comment('エクステ＜下まつ毛＞');
            $table->boolean('off')->default(false)->comment('エクステ＜オフ有り＞');
            $table->boolean('rightUp')->default(false)->comment('右目＜上＞');
            $table->boolean('leftUp')->default(false)->comment('左目＜上＞');
            $table->boolean('rightDown')->default(false)->comment('右目＜下＞');
            $table->boolean('leftDown')->default(false)->comment('左目＜下＞');
            $table->boolean('eyebrowsRight')->default(false)->comment('右まゆ毛');
            $table->boolean('eyebrowsLeft')->default(false)->comment('左まゆ毛');
            $table->date('date')->comment('来店日');
            $table->string('imgPath')->default('')->comment('画像パス');
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
