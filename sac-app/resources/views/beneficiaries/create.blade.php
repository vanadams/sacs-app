@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Puno ng Pamilya</h1>
            <form action="{{ route('beneficiaries.store') }}" method="POST">
                @csrf
                @include('beneficiaries.form')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
