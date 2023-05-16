<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jamaah_kutubusitahs', function (Blueprint $table) {
            $table->uuid('jamaah_id');
            $table->uuid('kutubusitah_id');

            $table->foreign('jamaah_id')->references('id')->on('jamaahs')->onDelete('cascade');
            $table->foreign('kutubusitah_id')->references('id')->on('kutubusitahs')->onDelete('cascade');

            $table->primary(['jamaah_id', 'kutubusitah_id']);
            $table->string('status')->default('khatam');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamaah_kutubusitahs');
    }
};
