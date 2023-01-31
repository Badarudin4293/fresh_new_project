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
            <th>attendance date</th>
            <th>clock in</th>
            <th>clock out</th>
            <th>absent status</th>
            <th>Edit</th>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="tag tag-success">Approved</span></td>
            <td></td>
            <td>
                <span class="badge badge-warning">
                    <a href="" style="color: aliceblue">Edit Role</a>
                </span>
    
                <span class="badge badge-danger">
                    <a href="" style="color:aliceblue">Delete Role</a>
                </span>
                <div class="card-footer">
                    <div style="right: 0%">
                        <span class="badge btn-success" style="float: right">
                            <a href="create" style="color: aliceblue">Create</a>
                        </span>
                    </div>
            </td>
        </tr>
        
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>
</table>
@endsection