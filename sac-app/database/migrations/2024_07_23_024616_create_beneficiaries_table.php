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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('extension_name')->nullable();
            $table->string('kasarian');
            $table->string('tirahan');
            $table->string('kalye')->nullable();
            $table->string('uri_ng_id')->nullable();
            $table->string('barangay');
            $table->string('lungsod_bayan');
            $table->string('numero_ng_id')->nullable();
            $table->string('probinsya');
            $table->string('rehiyon');
            $table->date('petsa_ng_kapanganakan')->nullable();
            $table->string('trabaho')->nullable();
            $table->decimal('buwang_kita', 12, 2)->nullable();
            $table->string('cellphone_no')->nullable();
            $table->string('lugar_ng_trabaho')->nullable();
            $table->string('sektor')->nullable();
            $table->string('kondisyon_ng_kalusugan')->nullable();
            $table->boolean('bene_ng_uct')->default(false);
            $table->boolean('bene_ng_4ps')->default(false);
            $table->boolean('katutubo')->default(false);
            $table->string('uri_ng_katutubo')->nullable();
            $table->boolean('others')->default(false);
            $table->string('uri_ng_others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
