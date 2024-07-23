@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>I-edit ang Benepisyaryo</h1>
            <form action="{{ route('beneficiaries.update', $beneficiary->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('beneficiaries.form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
