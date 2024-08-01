<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Validator;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beneficiaries = Beneficiary::latest()->paginate(15);

        return view('beneficiaries.index', compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beneficiaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $beneficiaryData = $request->all();
        $familyMembersData = json_decode($request->input('family_members'), true);

        if (!is_array($familyMembersData)) {
            return redirect()->back()->withErrors(['family_members' => 'Invalid family members data.'])->withInput();
        }

        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'extension_name' => 'nullable|string|max:255',
            'kasarian' => 'required|string|in:lalaki,babae',
            'tirahan' => 'required|string|max:255',
            'kalye' => 'nullable|string|max:255',
            'uri_ng_id' => 'nullable|string|max:255',
            'barangay' => 'required|string|max:255',
            'lungsod_bayan' => 'required|string|max:255',
            'numero_ng_id' => 'nullable|string|max:255',
            'probinsya' => 'required|string|max:255',
            'rehiyon' => 'required|string|max:255',
            'petsa_ng_kapanganakan' => 'required|date|before:today',
            'trabaho' => 'nullable|string|max:255',
            'buwang_kita' => 'nullable|numeric|between:0,999999.99',
            'cellphone_no' => 'nullable',
            'lugar_ng_trabaho' => 'nullable|string|max:255',
            'sektor' => 'nullable|string|max:255',
            'kondisyon_ng_kalusugan' => 'nullable|string|max:255',
            'bene_ng_uct' => 'nullable|boolean',
            'bene_ng_4ps' => 'nullable|boolean',
            'katutubo' => 'nullable|boolean',
            'uri_ng_katutubo' => 'nullable|string|max:255',
            'others' => 'nullable|boolean',
            'uri_ng_others' => 'nullable|string|max:255'
        ]);

        $familyMemberRules = [
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
        ];


        foreach ($familyMembersData as $familyMember) {
            $validator = Validator::make($familyMember, $familyMemberRules);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        $beneficiary = Beneficiary::create($validated);
        $beneficiary->beneficiaryFamilyMembers()->createMany($familyMembersData);

        return redirect()->route('beneficiaries.index')->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beneficiary $beneficiary)
    {
        // dd($beneficiary);

        return view('beneficiaries.show', compact('beneficiary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficiary $beneficiary)
    {
        // $sac = $beneficiary;
        return view('beneficiaries.edit', compact('beneficiary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beneficiary $beneficiary)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'extension_name' => 'nullable|string|max:255',
            'kasarian' => 'required|string|in:lalaki,babae',
            'tirahan' => 'required|string|max:255',
            'kalye' => 'nullable|string|max:255',
            'uri_ng_id' => 'nullable|string|max:255',
            'barangay' => 'required|string|max:255',
            'lungsod_bayan' => 'required|string|max:255',
            'numero_ng_id' => 'nullable|string|max:255',
            'probinsya' => 'required|string|max:255',
            'rehiyon' => 'required|string|max:255',
            'petsa_ng_kapanganakan' => 'required|date|before:today',
            'trabaho' => 'nullable|string|max:255',
            'buwang_kita' => 'nullable|numeric|between:0,999999.99',
            'cellphone_no' => 'nullable',
            'lugar_ng_trabaho' => 'nullable|string|max:255',
            'sektor' => 'nullable|string|max:255',
            'kondisyon_ng_kalusugan' => 'nullable|string|max:255',
            'bene_ng_uct' => 'nullable|boolean',
            'bene_ng_4ps' => 'nullable|boolean',
            'katutubo' => 'nullable|boolean',
            'uri_ng_katutubo' => 'nullable|string|max:255',
            'others' => 'nullable|boolean',
            'uri_ng_others' => 'nullable|string|max:255'
        ]);

        $beneficiary->update($validated);

        return redirect()->route('beneficiaries.show', $beneficiary->id)->with('success', 'Beneficiary successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->beneficiaryFamilyMembers()->delete();
        $beneficiary->delete();
        return redirect()->route('beneficiaries.index')->with('success', 'Successfully deleted');;
    }
}
