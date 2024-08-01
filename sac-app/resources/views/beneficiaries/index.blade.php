@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">SAC Beneficiary List</h1>
                <a href="{{ route('beneficiaries.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Bagong Benepisyaryo
                </a>
            </div>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pangalan</th>
                        <th>Kasarian</th>
                        <th>Barangay</th>
                        <th>Lungsod/Bayan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beneficiaries as $beneficiary)
                    <tr>
                        <td>{{ $beneficiary->last_name . ", " . $beneficiary->first_name . " " . $beneficiary->middle_name . " " . $beneficiary->extension_name }}</td>
                        <td>{{ ucfirst($beneficiary->kasarian) }}</td>
                        <td>{{ $beneficiary->barangay }}</td>
                        <td>{{ $beneficiary->lungsod_bayan }}</td>
                        <td>
                            <a href="{{ route('beneficiaries.show', $beneficiary->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('beneficiaries.edit', $beneficiary->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('beneficiaries.destroy', $beneficiary->id) }}" method="POST" style="display:inline;">
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
    </div>
</div>
@endsection
