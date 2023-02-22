@extends('layouts.app')

@section('header')
<h5>
    Add Role
</h5>
@endsection
@section('content')
<form method="post" action=<?php @$edit? printf('/update_employee'.'/'.$edit->id) :printf('/Employee/create')?> >
    @csrf
    <div class="form-group">
        <label for="name">Nama Karyawan</label>
        <input type="name" name="nama" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <div class="form-group">
            <label for="name">Hp Karyawan</label>
            <input type="name" name="nomor" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label">Jadwal Kerja</label>
                <input type="date" class="form-control" name="jadwal_kerja">
            </div>
            <div class="form-group">
                <td>
                    <span class=" ">
                        <button type="submit" class="btn-primary">Save</button>
                    </span>
                </td>
            </div>
        <div>
</form>

@endsection