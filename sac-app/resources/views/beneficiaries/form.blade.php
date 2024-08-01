<div class="form-group row">
    <div class="col-md-3">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $beneficiary->last_name ?? '') }}" required>
    </div>
    <div class="col-md-3">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $beneficiary->first_name ?? '') }}" required>
    </div>
    <div class="col-md-3">
        <label for="middle_name">Middle Name</label>
        <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name', $beneficiary->middle_name ?? '') }}">
    </div>
    <div class="col-md-3">
        <label for="extension_name">Extension Name</label>
        <input type="text" class="form-control" name="extension_name" value="{{ old('extension_name', $beneficiary->extension_name ?? '') }}" placeholder="Jr/Sr">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <label for="kasarian">Kasarian</label>
        <select class="form-control" name="kasarian" required>
            <option value="lalaki" {{ (old('kasarian', $beneficiary->kasarian ?? '') == 'lalaki') ? 'selected' : '' }}>Lalaki</option>
            <option value="babae" {{ (old('kasarian', $beneficiary->kasarian ?? '') == 'babae') ? 'selected' : '' }}>Babae</option>
        </select>
    </div>

    <div class="col-md-4">
        <label for="uri_ng_id">Uri ng ID</label>
        <input type="text" class="form-control" name="uri_ng_id" value="{{ old('uri_ng_id', $beneficiary->uri_ng_id ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="numero_ng_id">Numero ng ID</label>
        <input type="text" class="form-control" name="numero_ng_id" value="{{ old('numero_ng_id', $beneficiary->numero_ng_id ?? '') }}">
    </div>
</div>

<div class="form-group">
    <label for="tirahan">Tirahan</label>
    <input type="text" class="form-control" name="tirahan" value="{{ old('tirahan', $beneficiary->tirahan ?? '') }}" required>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <label for="kalye">Kalye</label>
        <input type="text" class="form-control" name="kalye" value="{{ old('kalye', $beneficiary->kalye ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="barangay">Barangay</label>
        <input type="text" class="form-control" name="barangay" value="{{ old('barangay', $beneficiary->barangay ?? '') }}" required>
    </div>

    <div class="col-md-4">
        <label for="lungsod_bayan">Lungsod/Bayan</label>
        <input type="text" class="form-control" name="lungsod_bayan" value="{{ old('lungsod_bayan', $beneficiary->lungsod_bayan ?? '') }}" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="probinsya">Probinsya</label>
        <input type="text" class="form-control" name="probinsya" value="{{ old('probinsya', $beneficiary->probinsya ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="rehiyon">Rehiyon</label>
        <input type="text" class="form-control" name="rehiyon" value="{{ old('rehiyon', $beneficiary->rehiyon ?? '') }}" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="petsa_ng_kapanganakan">Petsa ng Kapanganakan</label>
        <input type="date" class="form-control" name="petsa_ng_kapanganakan" value="{{ old('petsa_ng_kapanganakan', $beneficiary->petsa_ng_kapanganakan ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="cellphone_no">Cellphone No.</label>
        <input type="text" class="form-control" name="cellphone_no" id="cellphone_no"
            value="{{ old('cellphone_no', $beneficiary->cellphone_no ?? '') }}"
            pattern="\d{11}" title="Please enter exactly 11 digits" placeholder="Enter 11-digit number">
        {{-- <small class="form-text text-muted">Please enter exactly 11 digits.</small> --}}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <label for="trabaho">Trabaho</label>
        <input type="text" class="form-control" name="trabaho" value="{{ old('trabaho', $beneficiary->trabaho ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="buwang_kita">Buwanang Kita</label>
        <input type="text" class="form-control" name="buwang_kita" value="{{ old('buwang_kita', $beneficiary->buwang_kita ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="lugar_ng_trabaho">Pinagtatrabahuhan na Lugar</label>
        <input type="text" class="form-control" name="lugar_ng_trabaho" value="{{ old('lugar_ng_trabaho', $beneficiary->lugar_ng_trabaho ?? '') }}">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        <label for="sektor">Sektor</label>
        <select class="form-control" name="sektor">
            <option value="">---Wala---</option>
            <option value="Nakakatanda" {{ old('sektor', $beneficiary->sektor ?? '') == 'Nakakatanda' ? 'selected' : '' }}>A - Nakakatanda</option>
            <option value="Buntis" {{ old('sektor', $beneficiary->sektor ?? '') == 'Buntis' ? 'selected' : '' }}>B - Buntis</option>
            <option value="Nagpapasusong ina" {{ old('sektor', $beneficiary->sektor ?? '') == 'Nagpapasusong ina' ? 'selected' : '' }}>C - Nagpapasusong ina</option>
            <option value="PWD" {{ old('sektor', $beneficiary->sektor ?? '') == 'PWD' ? 'selected' : '' }}>D - PWD</option>
            <option value="Solo Parent" {{ old('sektor', $beneficiary->sektor ?? '') == 'Solo Parent' ? 'selected' : '' }}>E - Solo Parent</option>
            <option value="Walang Tirahan" {{ old('sektor', $beneficiary->sektor ?? '') == 'Walang Tirahan' ? 'selected' : '' }}>F - Walang Tirahan</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="kondisyon_ng_kalusugan">Kalusugan</label>
        <select class="form-control" name="kondisyon_ng_kalusugan">
            <option value="">---Wala---</option>
            <option value="Sakit sa Puso" {{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') == 'Sakit sa Puso' ? 'selected' : '' }}>1 - Sakit sa Puso</option>
            <option value="Altapresyon" {{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') == 'Altapresyon' ? 'selected' : '' }}>2 - Altapresyon</option>
            <option value="Sakit sa Baga" {{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') == 'Sakit sa Baga' ? 'selected' : '' }}>3 - Sakit sa Baga</option>
            <option value="Diyabetis" {{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') == 'Diyabetis' ? 'selected' : '' }}>4 - Diyabetis</option>
            <option value="Kanser   " {{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') == 'Kanser  ' ? 'selected' : '' }}>5 - Kanser</option>
        </select>
    </div>
</div>

<div class="form-group d-flex align-items-center">
    <div class="mr-5">
        <input type="hidden" name="bene_ng_uct" value="0">
        <input type="checkbox" class="form-check-input" name="bene_ng_uct" id="bene_ng_uct" style="transform: scale(1.5);" value="1"
        {{ old('bene_ng_uct', $beneficiary->bene_ng_uct ?? 0) ? 'checked' : '' }}>
        <label for="bene_ng_uct" class="ml-1">Benepisyaryo ng UCT</label>
    </div>
    <div>
        <input type="hidden" name="bene_ng_4ps" value="0">
        <input type="checkbox" class="form-check-input" name="bene_ng_4ps" id="bene_ng_4ps" style="transform: scale(1.5);" value="1"
        {{ old('bene_ng_4ps', $beneficiary->bene_ng_4ps ?? 0) ? 'checked' : '' }}>
        <label for="bene_ng_4ps" class="ml-1">Benepisyaryo ng 4Ps</label>
    </div>
</div>

<div class="form-group d-flex align-items-center">
    <div class="mr-3">
        <input type="hidden" name="katutubo" value="0">
        <input type="checkbox" class="form-check-input" name="katutubo" id="katutubo" style="transform: scale(1.5);" value="1"
        {{ old('katutubo', $beneficiary->katutubo ?? 0) ? 'checked' : '' }} onchange="toggleRequired('katutubo', 'uri_ng_katutubo')">
        <label for="katutubo" class="ml-1">Katutubo (Grupo)</label>
    </div>
    <input type="text" class="form-control mr-3" name="uri_ng_katutubo" id="uri_ng_katutubo"
        value="{{ old('uri_ng_katutubo', $beneficiary->uri_ng_katutubo ?? '') }}">

    <div class="ml-3">
        <input type="hidden" name="others" value="0">
        <input type="checkbox" class="form-check-input" name="others" id="others" style="transform: scale(1.5);" value="1"
        {{ old('others', $beneficiary->others ?? 0) ? 'checked' : '' }} onchange="toggleRequired('others', 'uri_ng_others')">
        <label for="others" class="ml-1">Others</label>
    </div>
    <input type="text" class="form-control" name="uri_ng_others" id="uri_ng_others"
        value="{{ old('uri_ng_others', $beneficiary->uri_ng_others ?? '') }}" placeholder="Specify other">
</div>

<script>
function toggleRequired(checkboxId, inputId) {
    const checkbox = document.getElementById(checkboxId);
    const input = document.getElementById(inputId);
    if (checkbox.checked) {
        input.setAttribute('required', 'required');
    } else {
        input.removeAttribute('required');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    toggleRequired('katutubo', 'uri_ng_katutubo');
    toggleRequired('others', 'uri_ng_others');
});
</script>
