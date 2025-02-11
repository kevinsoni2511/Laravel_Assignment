@extends('CreateEntryForm')

@section('content')

<h1 class="text-center mb-4"></h1>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
