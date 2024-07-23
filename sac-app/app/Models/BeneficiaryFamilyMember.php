<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeneficiaryFamilyMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'beneficiary_id',
        'pangalan',
        'relasyon_sa_benepisyaryo',
        'petsa_ng_kapanganakan',
        'kasarian',
        'trabaho',
        'sektor',
        'kondisyon_ng_kalusugan'
    ];

    /**
     * Get the head of the family
     *
     */
    public function beneficiary(): BelongsTo
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
