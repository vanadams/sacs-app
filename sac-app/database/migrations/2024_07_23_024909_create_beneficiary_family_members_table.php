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
        Schema::create('beneficiary_family_members', function (Blueprint $table) {
            $table->id();$table->unsignedBigInteger('beneficiary_id');
            $table->string('pangalan');
            $table->string('relasyon_sa_benepisyaryo');
            $table->date('petsa_ng_kapanganakan')->nullable();
            $table->string('kasarian');
            $table->string('trabaho')->nullable();
            $table->string('sektor')->nullable();
            $table->string('kondisyon_ng_kalusugan')->nullable();
            $table->timestamps();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiary_family_members');
    }
};
