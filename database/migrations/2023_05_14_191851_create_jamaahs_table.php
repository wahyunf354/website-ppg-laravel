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
        Schema::create('jamaahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('gender')->enum(['Laki-laki', 'Prempuan']);
            $table->date('birth');
            $table->string('last_education');
            $table->string('current_education');
            $table->string('parent_name');
            $table->string('no_hp')->nullable();
            $table->boolean('is_ppg')->default(false);
            $table->boolean('is_mubaleg_setempat')->default(false);
            $table->string('dapukan')->nullable();
            $table->string('status_pernikahan');
            $table->string('keterampilan_kemandirian')->nullable();
            $table->string('hobby')->nullable();
            $table->integer('count_hadist_himpunan_khatam')->default(0);
            $table->string('blood_group')->nullable();
            $table->string('url_profile')->nullable();

            $table->uuid('desa_id');
            $table->foreign('desa_id')->references('id')->on('desas');
            $table->uuid('kelompok_id');
            $table->foreign('kelompok_id')->references('id')->on('kelompoks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamaahs');
    }
};
