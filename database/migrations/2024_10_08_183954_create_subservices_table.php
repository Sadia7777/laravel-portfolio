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
        Schema::create('subservices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicessection_id')->nullable();
            $table->foreign('servicessection_id')->references('id')->on('servicessections')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->string('list_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subservices');
    }
};
