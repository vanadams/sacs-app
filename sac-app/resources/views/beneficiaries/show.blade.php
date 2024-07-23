@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View SAC</h1>
            <table class="table table-bordered">
                <tr>
                    <th>Pangalan</th>
                    <td>{{ $beneficiary->pangalan }}</td>
                </tr>
                <tr>
                    <th>Kasarian</th>
                    <td>{{ $beneficiary->kasarian }}</td>
                </tr>
                <tr>
                    <th>Tirahan</th>
                    <td>{{ $beneficiary->tirahan }}</td>
                </tr>
                <!-- Add more fields as necessary -->
            </table>
        </div>
    </div>
</div>
@endsection
