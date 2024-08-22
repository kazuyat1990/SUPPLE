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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
        $table->string('title')->comment('記事タイトル');  // タイトルカラム
        $table->text('content')->comment('記事コンテンツ');  // コンテンツカラム
        $table->string('image')->nullable()->comment('画像');  // 画像カラム
        $table->timestamps();  // created_at と updated_at を追加
        $table->softDeletes();  // soft delete 用の deleted_at カラムを追加
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
