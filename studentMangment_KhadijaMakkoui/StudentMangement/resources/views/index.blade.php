@extends('layout')
@section('content')
<div class="table-wrapper">
    <table class="fl-table">
        <thead style="height: 5px;">
            <tr>
                <th> ID </th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Show </th>
                <th>Update </th>
                <th>Delete</th>
            </tr>
            <tr>
                <td colspan="7"></td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td style="color:brown; font-weight: bold;">{{$student->section}}</td>
                <td><img src="/image/{{ $student->image }}" width="64" height="64"></td>
                <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                        <a ; class="btn btn-info" href="{{ route('students.show' , $student-
>id) }}">Show</a>
                    </form>
                </td>
                <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                        <a class="btn btn-primary" href="{{ route('students.edit' , $student-
>id) }}">Edit</a>
                    </form>
                </td>
                <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                        <a class="btn btn-danger" href="{{ url('students.destroy' ,$student-
>id) }}">Delete</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div style="width:650px;">
        {!! $students->links() !!}
    </div>
</div>
@endsection