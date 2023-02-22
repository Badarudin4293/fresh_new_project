@extends('layouts.app')

@section('header')
<h5>
    Management Employee
</h5>
@endsection
@section('content')
 <span class="badge btn-success">
    <a href="/Employee/create" style="color: black">Create</a>
</span>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Karyawan</th>
            <th>Hp Karyawan</th>
            <th>Jadwal Kerja</th>
            <th>Menu</th>
        </tr>
    </thead>
    <tbody>
    @php
        $no = 1;
    @endphp
        
            @foreach ($employees as $employee)
                <tr>
                    <td>{{$no }}</td>
                    <td>{{$employee -> name_employee }}</td>
                    <td>{{$employee -> hp_employee }}</td>
                    <td>{{$employee -> work_schedule }}</td>
                    <td>
                        <span class="badge badge-warning">
                            <a href="/edit/{{$employee->id}}" style ="text-decoration: none; color:black">Edit</a>
                        </span>
            
                        <span class="badge badge-danger">
                            <form method="POST" action="/delete/{{$employee->id}}">
                                @csrf
                            <button type="submite">delete</button>
                            </form>
                        </span>
                                <span class="badge btn-flat btn-primary">
                                    <a href="/Absent/employee/{{$employee->id}}" style="color: aliceblue">Absent!</a>
                                </span>
                            </div>
                    </td>
                </tr>
                @php
                $no++;
                @endphp
            @endforeach
           
    </tbody>
</table>
@endsection