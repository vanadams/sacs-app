@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($beneficiary->beneficiaryFamilyMembers && count($beneficiary->beneficiaryFamilyMembers) > 0)
            <div class="col-md-6">
        @else
            <div class="col-md-12">
        @endif
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">Puno ng Pamilya</h1>
                <div>
                    <a href="{{ route('beneficiaries.edit', $beneficiary->id) }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Edit
                    </a>

                    <a href="{{ route('family_members.create', $beneficiary->id) }}" class="btn btn-primary" @if($beneficiary->beneficiaryFamilyMembers && count($beneficiary->beneficiaryFamilyMembers) > 0) hidden @endif>
                        <i class="fas fa-plus"></i> Miyembro ng Pamilya
                    </a>
                </div>
            </div>


            <table class="table table-bordered">
                <tr>
                    <th>Pangalan</th>
                    <td>{{ $beneficiary->last_name . ", " . $beneficiary->first_name . " " . $beneficiary->middle_name . " " . $beneficiary->extension_name }}</td>
                </tr>
                <tr>
                    <th>Kasarian</th>
                    <td>{{ ucfirst($beneficiary->kasarian) }}</td>
                </tr>
                <tr>
                    <th>Uri ng ID</th>
                    <td>{{ $beneficiary->uri_ng_id }}</td>
                </tr>
                <tr>
                    <th>Numero ng ID</th>
                    <td>{{ $beneficiary->numero_ng_id }}</td>
                </tr>
                <tr>
                    <th>Tirahan</th>
                    <td>{{ $beneficiary->tirahan }}</td>
                </tr>
                <tr>
                    <th>Kalye</th>
                    <td>{{ $beneficiary->kalye }}</td>
                </tr>
                <tr>
                    <th>Barangay</th>
                    <td>{{ $beneficiary->barangay }}</td>
                </tr>
                <tr>
                    <th>Lungsod/Bayan</th>
                    <td>{{ $beneficiary->lungsod_bayan }}</td>
                </tr>
                <tr>
                    <th>Probinsya</th>
                    <td>{{ $beneficiary->probinsya }}</td>
                </tr>
                <tr>
                    <th>Rehiyon</th>
                    <td>{{ $beneficiary->rehiyon }}</td>
                </tr>
                <tr>
                    <th>Petsa ng Kapanganakan</th>
                    <td>{{ \Carbon\Carbon::parse($beneficiary->petsa_ng_kapanganakan)->format('F j, Y') }}</td>
                </tr>
                <tr>
                    <th>Trabaho</th>
                    <td>{{ $beneficiary->trabaho }}</td>
                </tr>
                <tr>
                    <th>Buwanang Kita</th>
                    <td>{{ $beneficiary->buwang_kita }}</td>
                </tr>
                <tr>
                    <th>Cellphone No.</th>
                    <td>{{ $beneficiary->cellphone_no }}</td>
                </tr>
                <tr>
                    <th>Pinagtatrabahuhan na Lugar</th>
                    <td>{{ $beneficiary->lugar_ng_trabaho }}</td>
                </tr>
                <tr>
                    <th>Sektor</th>
                    <td>{{ $beneficiary->sektor }}</td>
                </tr>
                <tr>
                    <th>Kondisyon ng Kalusugan</th>
                    <td>{{ $beneficiary->kondisyon_ng_kalusugan }}</td>
                </tr>
                <tr>
                    <th>Benepisyaryo ng UCT</th>
                    @if ($beneficiary->bene_ng_uct == 1)
                        <td>Oo</td>
                    @else
                        <td>Hindi</td>
                    @endif
                </tr>
                <tr>
                    <th>Benepisyaryo ng 4Ps</th>
                    @if ($beneficiary->bene_ng_4ps == 1)
                        <td>Oo</td>
                    @else
                        <td>Hindi</td>
                    @endif
                </tr>
                <tr>
                    <th>Katutubo</th>
                    @if ($beneficiary->katutubo == 1)
                        <td>{{ $beneficiary->uri_ng_katutubo }}</td>
                    @else
                        <td>Hindi</td>
                    @endif
                </tr>
                <tr>
                    <th>Others</th>
                    @if ($beneficiary->others == 1)
                        <td>{{ $beneficiary->uri_ng_others }}</td>
                    @else
                        <td>Hindi</td>
                    @endif
                </tr>
            </table>
        </div>
        @if ($beneficiary->beneficiaryFamilyMembers && count($beneficiary->beneficiaryFamilyMembers) > 0)
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="mb-0">Miyembro ng Pamilya</h2>
                    @if ($beneficiary->beneficiaryFamilyMembers && count($beneficiary->beneficiaryFamilyMembers) > 0)
                        <a href="{{ route('family_members.create', $beneficiary->id) }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Miyembro ng Pamilya
                        </a>
                    @endif
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Pangalan</th>
                            <th>Relasyon sa Benepisyaryo</th>
                            <th>Petsa ng Kapanganakan</th>
                            <th>Kasarian</th>
                            <th>Trabaho</th>
                            <th>Sektor</th>
                            <th>Kondisyon ng Kalusugan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beneficiary->beneficiaryFamilyMembers as $family_member)
                            <tr>
                                <td>{{ $family_member->last_name . ", " . $family_member->first_name . " " . $family_member->middle_name . " " . $family_member->extension_name }}</td>
                                <td>{{ $family_member->relasyon_sa_benepisyaryo }}</td>
                                <td>{{ \Carbon\Carbon::parse($family_member->petsa_ng_kapanganakan)->format('F j, Y') }}</td>
                                <td>{{ ucfirst($family_member->kasarian) }}</td>
                                <td>{{ ucfirst($family_member->trabaho) }}</td>
                                <td>{{ $family_member->sektor }}</td>
                                <td>{{ $family_member->kondisyon_ng_kalusugan }}</td>
                                <td>
                                    <a href="{{ route('family_members.edit', [$beneficiary->id, $family_member->id]) }}" class="btn btn-warning mb-2">Edit</a>
                                    <form action="{{ route('family_members.destroy', [$beneficiary->id, $family_member->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
