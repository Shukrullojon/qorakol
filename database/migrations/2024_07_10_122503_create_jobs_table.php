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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("title_uz");
            $table->string("title_ru");
            $table->text("description_uz")->nullable();
            $table->text("description_ru")->nullable();
            $table->string("address_uz");
            $table->string("address_ru");
            $table->integer("width")->default(111);
            $table->integer("height")->default(85);
            $table->tinyInteger("status")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
