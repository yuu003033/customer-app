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
            $table->string('extention')->default(false)->comment('施術項目＜エクステ＞');
            $table->string('lashlift')->default(false)->comment('施術項目＜パーマ＞');
            $table->string('eyebrows')->default(false)->comment('施術項目＜まゆ毛＞');
            $table->string('upAndDown')->default(false)->comment('施術項目＜上下＞');
            $table->string('lowerEyelashes')->default(false)->comment('エクステ＜下まつ毛＞');
            $table->string('off')->default(false)->comment('エクステ＜オフ有り＞');
            $table->string('rightUp')->default(false)->comment('右目＜上＞');
            $table->string('leftUp')->default(false)->comment('左目＜上＞');
            $table->string('rightDown')->default(false)->comment('右目＜下＞');
            $table->string('leftDown')->default(false)->comment('左目＜下＞');
            $table->string('eyebrowsRight')->default(false)->comment('右まゆ毛');
            $table->string('eyebrowsLeft')->default(false)->comment('左まゆ毛');
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
