@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" id="beneficiary-form-container">
            <h1>Miyembro ng Pamilya</h1>
            <form action="{{ route('family_members.store', $beneficiary->id) }}" method="POST" id="beneficiary-form">
                @csrf
                @include('family-members.form')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
