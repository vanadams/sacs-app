<?php

namespace App\Http\Controllers;

use App\Models\BeneficiaryFamilyMember;
use Illuminate\Http\Request;
use App\Models\Beneficiary;

class BeneficiaryFamilyMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Beneficiary $beneficiary)
    {
        return view('family-members.create', compact('beneficiary'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Beneficiary $beneficiary)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'extension_name' => 'nullable|string|max:10',
            'relasyon_sa_benepisyaryo' => 'required|string|max:255',
            'petsa_ng_kapanganakan' => 'required|date',
            'kasarian' => 'required|string|in:lalaki,babae',
            'trabaho' => 'nullable|string|max:255',
            'sektor' => 'nullable|string',
            'kondisyon_ng_kalusugan' => 'nullable|string'
        ]);

        $familyMember = new BeneficiaryFamilyMember($validated);
        $familyMember->beneficiary_id = $beneficiary->id;
        $familyMember->save();

        return redirect()->route('beneficiaries.show', $beneficiary);
    }

    /**
     * Display the specified resource.
     */
    public function show(BeneficiaryFamilyMember $beneficiaryFamilyMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficiary $beneficiary, BeneficiaryFamilyMember $familyMember)
    {
        return view('family-members.edit', compact('beneficiary', 'familyMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beneficiary $beneficiary, BeneficiaryFamilyMember $familyMember)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'extension_name' => 'nullable|string|max:10',
            'relasyon_sa_benepisyaryo' => 'required|string|max:255',
            'petsa_ng_kapanganakan' => 'required|date',
            'kasarian' => 'required|string|in:lalaki,babae',
            'trabaho' => 'nullable|string|max:255',
            'sektor' => 'nullable|string',
            'kondisyon_ng_kalusugan' => 'nullable|string'
        ]);

        $familyMember->update($validated);

        return redirect()->route('beneficiaries.show', $beneficiary->id)->with('success', 'Family member successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficiary $beneficiary, BeneficiaryFamilyMember $familyMember)
    {
        $familyMember->delete();
        return redirect()->route('beneficiaries.show', $beneficiary->id)->with('success', 'Family member successfully deleted');
    }
}
