@extends('layout')

@section('content')

<h1 class="text-center mb-4">-:Student Details:-</h1>
<table border="2">
    <thead>
        <tr>
            <th>
                Field
            </th>
            <th>
                Value
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data as $key => $value )
            <tr>
                <td>{{ ucfirst(str_replace('_',' ', $key))}}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection