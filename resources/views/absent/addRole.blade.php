@extends('layouts.app')

@section('header')
<h5>
    Add Role
</h5>
@endsection
@section('content')
<form method="post" action="{{route('create_absent',$id)}}">
    @csrf
    <div class="form-group">
        <div class="mb-3">
            <label class="name">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="name">Jam Masuk</label>
            <input type="time" name="masuk" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="name">Jam Keluar</label>
                <input type="time" name="keluar" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="form-label">Keterangan</label>
                <input type="name" class="form-control" name="status_absen">
            </div>
            <div class="form-group">
                <td>
                    <span class=" ">
                        <button type="submit" class="btn-primary">Save</button>
                    </span>
                </td>
            </div>
        </div>
    </div>
</form>

@endsection