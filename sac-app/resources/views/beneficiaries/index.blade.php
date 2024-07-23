@extends('layouts.app')
{{-- @extends('layout') --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>SAC Beneficiary List</h1>
            <a href="{{ route('beneficiaries.create') }}" class="btn btn-primary mb-3">Bagong Benepisyaryo</a>
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
                        <td>{{ $beneficiary->pangalan }}</td>
                        <td>{{ $beneficiary->kasarian }}</td>
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
