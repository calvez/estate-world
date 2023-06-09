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
        Schema::create(
            'flats',
            function (Blueprint $table) {
                $table->id();
                $table->string('name', 100)->nullable()->default('text');
                $table->text('description')->nullable();
                $table->bigInteger('user_id')->unsigned();
                $table->string('img1', 100)->nullable()->default('1');
                $table->string('img2', 100)->nullable()->default('2');
                $table->string('img3', 100)->nullable()->default('3');
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
    }
};
