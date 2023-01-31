@extends('layouts.app')

@section('header')
<h5>
    ROLE Management
</h5>
@endsection
@section('content')
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>name employee</th>
            <th>hp employee</th>
            <th>work schedule</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="tag tag-success">Approved</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
    </tbody>
</table>
@endsection