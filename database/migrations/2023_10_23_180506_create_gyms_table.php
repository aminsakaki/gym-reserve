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
        Schema::create('gyms', function (Blueprint $table) {
            //صاحب سالن باید این جدول را پرکند
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->json('image');
            $table->json('sport_fields');
            $table->enum('status',['wait','accept'])->default('wait');
            $table->timestamps();
        });

        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('از چه تاریخی');
            $table->string('phone');
            $table->json('image');
            $table->json('sport_fields');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
