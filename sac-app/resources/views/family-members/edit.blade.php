@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>I-edit ang Miyembro ng Pamilya</h1>
            <form action="{{ route('family_members.update', [$beneficiary->id, $familyMember->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('family-members.form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
