<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BeneficiaryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_it_can_save_a_beneficiary()
    {
        $data = [
            'last_name' => 'Espera',
            'first_name' => 'Jocian Keith',
            'middle_name' => 'Mijares',
            'extension_name' => 'Jr',
            'kasarian' => 'lalaki',
            'uri_ng_id' => null,
            'numero_ng_id' => null,
            'tirahan' => 'Santa Monica, PPC',
            'kalye' => 'Employee\'s Village',
            'barangay' => 'Santa Monica',
            'lungsod_bayan' => 'Puerto Princesa City',
            'probinsya' => 'Palawan',
            'rehiyon' => 'Mimaropa',
            'petsa_ng_kapanganakan' => '1995-07-02',
            'cellphone_no' => null,
            'trabaho' => null,
            'buwang_kita' => null,
            'lugar_ng_trabaho' => null,
            'sektor' => 'Solo Parent',
            'kondisyon_ng_kalusugan' => null,
            'bene_ng_uct' => 0,
            'bene_ng_4ps' => 0,
            'katutubo' => 0,
            'uri_ng_katutubo' => null,
            'others' => 0,
            'uri_ng_others' => null,
        ];

        $response = $this->post(route('beneficiaries.store'), $data);

        $this->assertDatabaseHas('beneficiaries', $data);

        $response->assertRedirectToRoute('beneficiaries.index');
    }
}
