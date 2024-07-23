<div class="form-group">
    <label for="pangalan">Pangalan</label>
    <input type="text" class="form-control" name="pangalan" value="{{ old('pangalan', $beneficiary->pangalan ?? '') }}" required>
</div>

<div class="form-group">
    <label for="kasarian">Kasarian</label>
    <select class="form-control" name="kasarian" required>
        <option value="lalaki" {{ (old('kasarian', $beneficiary->kasarian ?? '') == 'lalaki') ? 'selected' : '' }}>Lalaki</option>
        <option value="babae" {{ (old('kasarian', $beneficiary->kasarian ?? '') == 'babae') ? 'selected' : '' }}>Babae</option>
    </select>
</div>

<div class="form-group">
    <label for="tirahan">Tirahan</label>
    <input type="text" class="form-control" name="tirahan" value="{{ old('tirahan', $beneficiary->tirahan ?? '') }}" required>
</div>

<div class="form-group">
    <label for="kalye">Kalye</label>
    <input type="text" class="form-control" name="kalye" value="{{ old('kalye', $beneficiary->kalye ?? '') }}">
</div>

<div class="form-group">
    <label for="uri_ng_id">Uri ng ID</label>
    <input type="text" class="form-control" name="uri_ng_id" value="{{ old('uri_ng_id', $beneficiary->uri_ng_id ?? '') }}">
</div>

<div class="form-group">
    <label for="barangay">Barangay</label>
    <input type="text" class="form-control" name="barangay" value="{{ old('barangay', $beneficiary->barangay ?? '') }}" required>
</div>

<div class="form-group">
    <label for="lungsod_bayan">Lungsod/Bayan</label>
    <input type="text" class="form-control" name="lungsod_bayan" value="{{ old('lungsod_bayan', $beneficiary->lungsod_bayan ?? '') }}" required>
</div>

<div class="form-group">
    <label for="numero_ng_id">Numero ng ID</label>
    <input type="text" class="form-control" name="numero_ng_id" value="{{ old('numero_ng_id', $beneficiary->numero_ng_id ?? '') }}">
</div>

<div class="form-group">
    <label for="probinsya">Probinsya</label>
    <input type="text" class="form-control" name="probinsya" value="{{ old('probinsya', $beneficiary->probinsya ?? '') }}" required>
</div>

<div class="form-group">
    <label for="rehiyon">Rehiyon</label>
    <input type="text" class="form-control" name="rehiyon" value="{{ old('rehiyon', $beneficiary->rehiyon ?? '') }}" required>
</div>

<div class="form-group">
    <label for="petsa_ng_kapanganakan">Petsa ng Kapanganakan</label>
    <input type="date" class="form-control" name="petsa_ng_kapanganakan" value="{{ old('petsa_ng_kapanganakan', $beneficiary->petsa_ng_kapanganakan ?? '') }}" required>
</div>

<div class="form-group">
    <label for="trabaho">Trabaho</label>
    <input type="text" class="form-control" name="trabaho" value="{{ old('trabaho', $beneficiary->trabaho ?? '') }}">
</div>

<div class="form-group">
    <label for="buwang_kita">Buwanang Kita</label>
    <input type="text" class="form-control" name="buwang_kita" value="{{ old('buwang_kita', $beneficiary->buwang_kita ?? '') }}">
</div>

{{-- <div class="form-group">
    <label for="cellphone_no">Cellphone No.</label>
    <input type="text" class="form-control" name="cellphone_no" value="{{ old('cellphone_no', $beneficiary->cellphone_no ?? '') }}">
</div> --}}

<div class="form-group">
    <label for="cellphone_no">Cellphone No.</label>
    <input type="text" class="form-control" name="cellphone_no" id="cellphone_no"
        value="{{ old('cellphone_no', $beneficiary->cellphone_no ?? '') }}"
        pattern="\d{11}" title="Please enter exactly 11 digits" placeholder="Enter 11-digit number">
    {{-- <small class="form-text text-muted">Please enter exactly 11 digits.</small> --}}
</div>


<div class="form-group">
    <label for="lugar_ng_trabaho">Pinagtatrabahuhan at Lugar</label>
    <input type="text" class="form-control" name="lugar_ng_trabaho" value="{{ old('lugar_ng_trabaho', $beneficiary->lugar_ng_trabaho ?? '') }}">
</div>

<div class="form-group">
    <label for="sektor">Sektor</label>
    <input type="text" class="form-control" name="sektor" value="{{ old('sektor', $beneficiary->sektor ?? '') }}">
</div>

<div class="form-group">
    <label for="kondisyon_ng_kalusugan">Kondisyon ng Kalusugan</label>
    <input type="text" class="form-control" name="kondisyon_ng_kalusugan" value="{{ old('kondisyon_ng_kalusugan', $beneficiary->kondisyon_ng_kalusugan ?? '') }}">
</div>

{{-- <div class="form-group d-flex align-items-center">
    <div class="mr-5">
        <input type="hidden" name="bene_ng_uct" value="false">
        <input type="checkbox" class="form-check-input" name="bene_ng_uct" id="bene_ng_uct" style="transform: scale(1.5);" value="true"
        {{ old('bene_ng_uct', $beneficiary->bene_ng_uct ?? false) ? 'checked' : '' }}>
        <label for="bene_ng_uct" class="ml-1">Benepisyaryo ng UCT</label>
    </div>
    <div>
        <input type="hidden" name="bene_ng_4ps" value="false">
        <input type="checkbox" class="form-check-input" name="bene_ng_4ps" id="bene_ng_4ps" style="transform: scale(1.5);" value="true"
        {{ old('bene_ng_4ps', $beneficiary->bene_ng_4ps ?? false) ? 'checked' : '' }}>
        <label for="bene_ng_4ps" class="ml-1">Benepisyaryo ng 4Ps</label>
    </div>
</div>

<div class="form-group d-flex align-items-center">
    <div class="mr-3">
        <input type="hidden" name="katutubo" value="false">
        <input type="checkbox" class="form-check-input" name="katutubo" id="katutubo" style="transform: scale(1.5);" value="true"
        {{ old('katutubo', $beneficiary->katutubo ?? false) ? 'checked' : '' }} onchange="toggleRequired('katutubo', 'uri_ng_katutubo')">
        <label for="katutubo" class="ml-1">Katutubo (Grupo)</label>
    </div>
    <input type="text" class="form-control mr-3" name="uri_ng_katutubo" id="uri_ng_katutubo"
        value="{{ old('uri_ng_katutubo', $beneficiary->uri_ng_katutubo ?? '') }}">

    <div class="ml-3">
        <input type="hidden" name="others" value="false">
        <input type="checkbox" class="form-check-input" name="others" id="others" style="transform: scale(1.5);" value="true"
        {{ old('others', $beneficiary->others ?? false) ? 'checked' : '' }} onchange="toggleRequired('others', 'uri_ng_others')">
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
</script> --}}



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

// Initialize required attributes based on the current checkbox state
document.addEventListener('DOMContentLoaded', function() {
    toggleRequired('katutubo', 'uri_ng_katutubo');
    toggleRequired('others', 'uri_ng_others');
});
</script>
