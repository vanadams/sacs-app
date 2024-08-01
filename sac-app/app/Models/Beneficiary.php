<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beneficiary extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'kasarian',
        'tirahan',
        'kalye',
        'uri_ng_id',
        'barangay',
        'lungsod_bayan',
        'numero_ng_id',
        'probinsya',
        'rehiyon',
        'petsa_ng_kapanganakan',
        'trabaho',
        'buwang_kita',
        'cellphone_no',
        'lugar_ng_trabaho',
        'sektor',
        'kondisyon_ng_kalusugan',
        'bene_ng_uct',
        'bene_ng_4ps',
        'katutubo',
        'uri_ng_katutubo',
        'others',
        'uri_ng_others'
    ];

   /**
     * Get all of the family members for the Beneficiary
     *
     */
    public function beneficiaryFamilyMembers(): HasMany
    {
        return $this->hasMany(BeneficiaryFamilyMember::class);
    }
}
