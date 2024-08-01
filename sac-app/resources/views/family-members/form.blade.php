<div class="form-group row">
    <div class="col-md-3">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $familyMember->last_name ?? '') }}" required>
    </div>
    <div class="col-md-3">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $familyMember->first_name ?? '') }}" required>
    </div>
    <div class="col-md-3">
        <label for="middle_name">Middle Name</label>
        <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name', $familyMember->middle_name ?? '') }}">
    </div>
    <div class="col-md-3">
        <label for="extension_name">Extension Name</label>
        <input type="text" class="form-control" name="extension_name" value="{{ old('extension_name', $familyMember->extension_name ?? '') }}" placeholder="Jr/Sr">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="relasyon_sa_benepisyaryo">Relasyon sa Benepisyaryo</label>
        <input type="text" class="form-control" name="relasyon_sa_benepisyaryo" value="{{ old('relasyon_sa_benepisyaryo', $familyMember->relasyon_sa_benepisyaryo ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="petsa_ng_kapanganakan">Petsa ng Kapanganakan</label>
        <input type="date" class="form-control" name="petsa_ng_kapanganakan" value="{{ old('petsa_ng_kapanganakan', $familyMember->petsa_ng_kapanganakan ?? '') }}" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="kasarian">Kasarian</label>
        <select class="form-control" name="kasarian" required>
            <option value="lalaki" {{ (old('kasarian', $familyMember->kasarian ?? '') == 'lalaki') ? 'selected' : '' }}>Lalaki</option>
            <option value="babae" {{ (old('kasarian', $familyMember->kasarian ?? '') == 'babae') ? 'selected' : '' }}>Babae</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="trabaho">Trabaho</label>
        <input type="text" class="form-control" name="trabaho" value="{{ old('trabaho', $familyMember->trabaho ?? '') }}">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="sektor">Sektor</label>
        <select class="form-control" name="sektor">
            <option value="">---Wala---</option>
            <option value="Nakakatanda" {{ old('sektor', $familyMember->sektor ?? '') == 'Nakakatanda' ? 'selected' : '' }}>A - Nakakatanda</option>
            <option value="Buntis" {{ old('sektor', $familyMember->sektor ?? '') == 'Buntis' ? 'selected' : '' }}>B - Buntis</option>
            <option value="Nagpapasusong ina" {{ old('sektor', $familyMember->sektor ?? '') == 'Nagpapasusong ina' ? 'selected' : '' }}>C - Nagpapasusong ina</option>
            <option value="PWD" {{ old('sektor', $familyMember->sektor ?? '') == 'PWD' ? 'selected' : '' }}>D - PWD</option>
            <option value="Solo Parent" {{ old('sektor', $familyMember->sektor ?? '') == 'Solo Parent' ? 'selected' : '' }}>E - Solo Parent</option>
            <option value="Walang Tirahan" {{ old('sektor', $familyMember->sektor ?? '') == 'Walang Tirahan' ? 'selected' : '' }}>F - Walang Tirahan</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="kondisyon_ng_kalusugan">Kalusugan</label>
        <select class="form-control" name="kondisyon_ng_kalusugan">
            <option value="">---Wala---</option>
            <option value="Sakit sa Puso" {{ old('kondisyon_ng_kalusugan', $familyMember->kondisyon_ng_kalusugan ?? '') == 'Sakit sa Puso' ? 'selected' : '' }}>1 - Sakit sa Puso</option>
            <option value="Altapresyon" {{ old('kondisyon_ng_kalusugan', $familyMember->kondisyon_ng_kalusugan ?? '') == 'Altapresyon' ? 'selected' : '' }}>2 - Altapresyon</option>
            <option value="Sakit sa Baga" {{ old('kondisyon_ng_kalusugan', $familyMember->kondisyon_ng_kalusugan ?? '') == 'Sakit sa Baga' ? 'selected' : '' }}>3 - Sakit sa Baga</option>
            <option value="Diyabetis" {{ old('kondisyon_ng_kalusugan', $familyMember->kondisyon_ng_kalusugan ?? '') == 'Diyabetis' ? 'selected' : '' }}>4 - Diyabetis</option>
            <option value="Kanser   " {{ old('kondisyon_ng_kalusugan', $familyMember->kondisyon_ng_kalusugan ?? '') == 'Kanser  ' ? 'selected' : '' }}>5 - Kanser</option>
        </select>
    </div>
</div>
