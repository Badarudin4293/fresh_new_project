@extends('layouts.app')

@section('header')
<h2>
    Absent
</h2>
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
        @php
        $no = 1;
        @endphp
        @foreach ($absents as $absent)
        <tr>
            <td>{{ $no }}</td>
            <td>{{$absent -> date }}</td>
            <td>{{$absent -> time_in }}</td>
            <td>{{$absent -> time_out }}</td>
            <td>{{$absent -> note }}</td>
        </tr>
        @php
         $no++;
         @endphp
        @endforeach
    </tbody>

</table>
@endsection