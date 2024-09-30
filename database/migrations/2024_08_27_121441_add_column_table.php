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
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('video_alt_uz')->nullable();
            $table->string('video_alt_ru')->nullable();
            $table->string('img_alt_uz')->nullable();
            $table->string('img_alt_ru')->nullable();
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->string('img_alt_uz')->nullable();
            $table->string('img_alt_ru')->nullable();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->string('img_alt_uz')->nullable();
            $table->string('img_alt_ru')->nullable();
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->string('video_alt_uz')->nullable();
            $table->string('video_alt_ru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn(['video_alt_uz', 'video_alt_ru', 'img_alt_uz', 'img_alt_ru']);
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn(['img_alt_uz', 'img_alt_ru']);
        });

        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['img_alt_uz', 'img_alt_ru']);
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['video_alt_uz', 'video_alt_ru']);
        });
    }
};
