@extends('layouts.app')

@section('header')
<h5>
    Management Absent
</h5>
@endsection
@section('content')

<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($absents as $absent)
        <tr>
            <td>{{$absent -> id }}</td>
            <td>{{$absent -> date }}</td>
            <td>{{$absent -> time_in }}</td>
            <td>{{$absent -> time_out }}</td>
            <td>{{$absent -> note }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection